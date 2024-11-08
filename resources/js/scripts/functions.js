import { data } from "jquery";
import { countLevel } from "../../../public/assets/js/scripts/functions";

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
export function levelMax() {
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
export function countMax(level){
    let elements = document.querySelectorAll('.badge-level');
    let valuesObject = {};
    elements.forEach((element) => {
        valuesObject[element.id] = element.textContent.trim();
    });
    switch (level.val()) {
        case '11':
            return valuesObject['SM']>100; 
        case '1':
            return valuesObject['EV']>109; 
        case '2':
            return valuesObject['EM']>50;  
        case '3':
            return valuesObject['MM']>179; 
        case '4':
            return valuesObject['JU']>119; 
        case '5':
            return valuesObject['MEN']>179; 
        case '6':
            return valuesObject['JUN']>119; 
        case '7':
            return valuesObject['IN']>169; 
        case '8':
            return valuesObject['HESM']>50; 
        case '9':
            return valuesObject['HECG']>50; 
    }
}
/* export function levelMax(level){
    $("#preloader").show();
    let response = $.ajax({
        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        type:'POST',
        url:'/level'
    }).then((data)=>{
        switch (level.val()) {
            case '11':
                return data.data[9].count>30; 
            case '1':
                return false;
            case '2':
                return data.data[0].count>10;  
            case '3':
                return false;
            case '4':
                return false;
            case '5':
                return false;
            case '6':
                return false;
            case '7':
                return false;
            case '8':
                return false;
            case '9':
                return false;
        }
    });
    $("#preloader").hide();
    return response;
} */
export function countTotal(){
    $("#preloader").show(); 
    let count = $('#total_maraton');
    $.ajax({
        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        type:'POST',
        url:'/total',
        success:function(data){  
            console.log(data);  
            count.text(data);
            $("#preloader").hide(); 
        },
    });
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
export function inputDate(input,level) {
    let edad = edades(input.val());
    switch (level.val()) {
        case '11':
                return (edad.year<50);
        case '3':
                return (edad.year<40 || edad.year>49);
        case '4':
                return (edad.year<=14 || edad.year>17);
        case '5':
                return (edad.year<=11 || edad.year>14);
        case '6':
                return (edad.year<10 || edad.year>11);
        case '7':
                return (edad.year<=6 || edad.year>9);
    }
}
export function chainSelected(a,b) {
     a.on('change',function(){
            if(a.val()==='1'){
                b.attr('disabled','');
                b.val('M');
            }else if(a.val() === '2'){
                b.attr('disabled','');
                b.val('F');
            }else{
                b.removeAttr('disabled');
            }
     });
}
export function chainCountryLocation(a,b,c,d,e,f){
    a.on('change',function(){
        if(a.val()!=='1'){
            b.addClass('d-none');
            c.addClass('d-none');
            d.removeClass('d-none');
            e.removeClass('d-none');
            f.attr('disabled','');
            f.val('C')
        }else{
            b.removeClass('d-none');
            c.removeClass('d-none');
            d.addClass('d-none');
            e.addClass('d-none');
            f.removeAttr('disabled');
            f.val('0');
        }
    });
}
export function chainLocation(param1,param2,url){
    param1.on('change',function(){
        $("#preloader").show();
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
                $("#preloader").hide();
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
    $("#preloader").show();
    $.ajax({
        headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
        type:'POST',
        url:url,
        success: function(date){
            let myData = JSON.parse(date);
            let options = createOptions(myData);
            selec.html(options);
            $("#preloader").hide();
        }
    });
}
export function onlyNumbers(code){
    let variable = code.key;
    return variable >= '0' && variable <= '9';
}