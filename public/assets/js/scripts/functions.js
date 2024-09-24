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
