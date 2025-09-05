function levelMax() {
    $("#preloader").show(); 
    $.ajax({
        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        type:'POST',
        url:'/level',
        success:function(data){
            let response = data.data;       
            for (const key in response) {
                    const opcion = $('#'+response[key].cod);
                    opcion.text(response[key].count);
            }
            $("#preloader").hide(); 
        },
    });
}
levelMax();