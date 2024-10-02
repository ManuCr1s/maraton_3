export  function sendData(date,url){
    let form = date;
    form.on('submit',function(e){
        e.preventDefault();
        let dates = $(this).serialize();
        $.ajax({
            headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            type:'POST',
            data:dates,
            url:url,
            success:function(valor){
                let myData = Object.values(valor)[0][0];
                if(!myData.status){
                    swal({
                        title: "¡Uups, hubo un error!",
                        text: myData.message,
                        type: "error"
                    })
                }else{
                    window.location.replace(myData.route);
                }
            }
        });
    });

}
export function countLevel(url){
    let totalCount = 0;
    $('#datatables').DataTable({
        "ajax":url,
        "dom": 'Bftip',
       "buttons": [
            {
                extend: 'excel',
                text: 'Descargar Excel',
                className:'btn btn-success'
            },
            {
                extend: 'pdf',
                text: 'Descargar PDF',
                className:'btn btn-danger'
            }
        ],
        "paging":false,
        "info":false,
        "columns":[
            {
                "orderable": false,
                "data": null,
                "defaultContent": '<i class="fa fa-line-chart"></i>'
            },
            {data:"name"}, 
            {data:"cod"},
            {data:"count"}
        ],
        "drawCallback": function(){
            var api = this.api();
            $(api.columns(3).footer()).html(
                'TOTAL: '+api.column(3,{page:'current'}).data().sum()
            ) 
        }

    });
}
export function chartRegister(element){
    let valor;
    fetch('/level')
        .then(response => {
            if (!response.ok) {
                throw new Error('Error en la solicitud: ' + response.statusText);
            }
            return response.json();
        })
        .then(data => {
           let datos = data.data,label=[],count=[];
           for (const key in datos) {
                label[key] = datos[key].cod;
                count[key] = datos[key].count;
           }
           var data = {
            labels: label,
            series: [
                count,
            ]
          };
        
          var options = {
              seriesBarDistance: 10,
              axisX: {
                  showGrid: false
              },
              height: "350px"
          };
        
          var responsiveOptions = [
            ['screen and (max-width: 640px)', {
              seriesBarDistance: 5,
              axisX: {
                labelInterpolationFnc: function (value) {
                  return value[0];
                }
              }
            }]
          ];
        
          Chartist.Bar(element, data, options, responsiveOptions);
        })
        
  
}
export function data(nameTable,table,url){
    $(nameTable).on("click","button.editar",function(){
        let data = table.row($(this).parents('tr')).data();
        let user = $('#user').attr('value');
        let input = $('#'+data.number_doc),datos;
        swal({
            title: "¿Esta seguro de registrar numero de corredor?",
            text: "Esta asignando el numero "+input.val()+" al dni "+data.number_doc,
            icon: "warning",
            buttons: true,
            dangerMode: true,
          }).then((willDelete) => {
            if (willDelete) {
                datos = {
                    'numero':input.val(),
                    'dni':data.number_doc,
                    'user':user
                };
                $.ajax({
                    headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
                    type:'POST',
                    url:url,
                    data:datos,
                    success:function(data){
                        let myData = $.parseJSON(data);
                        if(myData.status){
                            swal({
                                title: "Felicitaciones",
                                text: myData.message,
                                icon: "success",
                              }).then(()=>{
                                window.location.reload(); 
                            })
                        }else{
                            swal({
                                title: "Upps hubo un problema",
                                text: myData.message,
                                icon: "error",
                              })
                        }
                    }
                });
            } 
          });
        data.number_doc;
    });
} 
export function numberRegister(url){

    let edad,table = $('#inscritos').DataTable({ 
        "ajax":url,
        "dom": 'Bftip',
       "buttons": [
            {
                extend: 'excel',
                text: 'Descargar Excel',
                className:'btn btn-success'
            },
            {
                extend: 'pdf',
                text: 'Descargar PDF',
                className:'btn btn-danger'
            }
        ],
        "paging":false,
        "info":false,
        "columns":[
            {data:"number_doc"}, 
            {data:"name"}, 
            {data:"lastname"},
            {data:"name_level"},
            {data:"number_ins"},
            {data:"phone"},
            {
                render: function(data, type, row) {
                        switch (row.id_level) {
                            case 11:
                                    edad = edades(row.born);
                                    return (edad.year<50)?'<div class="row bg-danger">Tiene '+edad.edad+' '+row.born+'</div>':row.born;
                            case 3:
                                    edad = edades(row.born);
                                    return (edad.year<40 || edad.year>49)?'<div class="row bg-danger">Tiene '+edad.edad+' '+row.born+'</div>':row.born;
                            case 4:
                                    edad = edades(row.born);
                                    return (edad.year<14 || edad.year>17)?'<div class="row bg-danger">Tiene '+edad.edad+' '+row.born+'</div>':row.born;
                            case 5:
                                    edad = edades(row.born);
                                    return (edad.year<11 || edad.year>14)?'<div class="row bg-danger">Tiene '+edad.edad+' '+row.born+'</div>':row.born;
                            case 6:
                                    edad = edades(row.born);
                                    return (edad.year<10 || edad.year>11)?'<div class="row bg-danger">Tiene '+edad.edad+' '+row.born+'</div>':row.born;
                            case 7:
                                    edad = edades(row.born);
                                    return (edad.year<6 || edad.year>9)?'<div class="row bg-danger">Tiene '+edad.edad+' '+row.born+'</div>':row.born;
                            default:
                                return row.born;
                        }
                },
                orderable: false,                
            },
            {
                render: function(data, type, row) {
                    return '<div class="row"><input type="text" id="'+row.number_doc+'" class="form-control"/><button class="editar btn btn-primary p-5"><i class="fa fa-pencil-square"></i></button>';
                },
                orderable: false,
            }
        ]
    });
    data('#inscritos tbody',table,'/numbered');
}
export function edades(nac){
    let anios =new Date(nac),
    now = new Date(),
    year,
    month,
    days,
    edad;
    year = now.getUTCFullYear() - anios.getUTCFullYear();
    month = now.getUTCMonth() - anios.getUTCMonth();
    days= now.getUTCDate() - anios.getUTCDate();
    if(days < 0){
        month--;
        days = 30 + days;
    }
    if(month < 0){
        year--;
        month = 12 + month;     
    }
    edad = year+' años/'+ month+' meses/'+days+' dias';
    return {'edad':edad,'year':year,'month':month,'days':days};
}
export function numberFinal(url){
    let edad,table = $('#registrados').DataTable({ 
        "ajax":url,
        "dom": 'Bftip',
       "buttons": [
            {
                extend: 'excel',
                text: 'Descargar Excel',
                className:'btn btn-success'
            },
            {
                extend: 'pdf',
                text: 'Descargar PDF',
                className:'btn btn-danger'
            }
        ],
        "paging":false,
        "info":false,
        "columns":[
            {data:"number_doc"}, 
            {data:"name"}, 
            {data:"lastname"},
            {data:"name_level"},
            {data:"number"},
            {data:"region"},
            {data:"provincia"},
            {data:"distrito"},
        ]
    });
}