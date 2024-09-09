export function valueInput(input){
    return input.val() === "0"
};
export function numberInput(input){
    let long = input.val().length;
    return (long == 8 || long == 20)?false:true;
}
export function inputNull(input) {
    return (input.val().length > 0)?false:true;
}
export function chainSelected(a,b) {
     a.on('change',function(){
            if(a.val()==='EV'){
                b.attr('disabled','');
                b.val('M');
            }else if(a.val() === 'EM'){
                b.attr('disabled','');
                b.val('F');
            }else{
                b.removeAttr('disabled');
            }
     });
}
export function chainCountryLocation(a,b){
    a.on('change',function(){
        if(a.val()!=='1'){
            b.addClass('d-none');
        }else{
            b.removeClass('d-none')
        }
    });
}
export function chainLocation(param1,param2,url){
    param1.on('change',function(){
        let datos = {'valor':param1.val()};
        $.ajax({
            headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
            type:'POST',
            url:url,
            data:datos,
            success: function(date){
                let myData = JSON.parse(date);
                let options = createOptions(myData);
                param2.html(options);
            }
        });
    });
}
function createOptions(myData) {
    // Crear un DocumentFragment para evitar múltiples redibujados del DOM
    let fragment = document.createDocumentFragment(); 
    // Crear y agregar la primera opción "Seleccione País"
    let defaultOption = document.createElement('option');
    defaultOption.value = 0;
    defaultOption.text = 'SELECCIONE';
    fragment.appendChild(defaultOption);
    // Iterar sobre los datos y crear las opciones
    $.each(myData, function(index, param) {
        let option = document.createElement('option');
        option.value = Object.values(param)[0];
        option.text = Object.values(param)[1].toUpperCase();
        fragment.appendChild(option);
    });
    return fragment;
}
export function loadDate(selec,url){
    $.ajax({
        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        type:'POST',
        url:url,
        success: function(date){
            let myData = JSON.parse(date);
            let options = createOptions(myData);
            selec.html(options);
        }
    });
}
export function onlyNumbers(code){
    let variable = code.charCode;
    return variable >= 48 && variable <= 57;
}