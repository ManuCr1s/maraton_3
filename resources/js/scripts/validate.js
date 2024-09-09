import {valueInput,numberInput,inputNull} from './functions';
export function validateForm(objeto){
    if(valueInput(objeto.level)&& objeto.level.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Seleccione Categoria'}}
    if(valueInput(objeto.gender)&& objeto.gender.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Seleccione Genero'}}
    if(valueInput(objeto.country)&& objeto.country.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Seleccione Pais'}}
    if(valueInput(objeto.type)&& objeto.type.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Seleccione Tipo de Documento'}}
    if(numberInput(objeto.number)&& objeto.number.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Ingrese numero de Documento'}}
    if(inputNull(objeto.name)&& objeto.name.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Ingrese Nombre de Persona'}}
    if(inputNull(objeto.lastname)&& objeto.lastname.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Ingrese Apellido de Persona'}}
    if(inputNull(objeto.date)&& objeto.date.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Ingrese Fecha de Nacimiento'}}
    return {status:false}
}
export function sendForm(objeto){
    if(objeto.country.val() ==='1'){
        if(valueInput(objeto.region)&& objeto.region.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Seleccione Region'}}
        if(valueInput(objeto.province)&& objeto.province.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Seleccione Provincia'}}
        if(valueInput(objeto.district)&& objeto.district.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Seleccione Distrito'}}
    }
    if(inputNull(objeto.phone)&& objeto.phone.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Ingrese Numero de Celular'}}
    if(inputNull(objeto.addresd)&& objeto.addresd.closest('fieldset').css('display') === 'block'){return {status:true,message:'Por favor Ingrese Direccion'}}
    return {status:false}
}
