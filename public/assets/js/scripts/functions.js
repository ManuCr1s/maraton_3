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
    $('#datatables').DataTable({
        "ajax":url,
        "columns":[
            {
                "orderable": false,
                "data": null,
                "defaultContent": '<i class="fa fa-line-chart"></i>'
            }, 
            {data:"name"},
            {data:"count"}
        ]
    });
}