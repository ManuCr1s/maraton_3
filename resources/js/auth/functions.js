import Swal from 'sweetalert2';
import jsPDF from 'jspdf';
import route from '../scripts/route';
export function alertsFunction(a,b,c){
    Swal.fire({
        icon: a,
        title: b,
        text: c,
        allowOutsideClick: false,
    })
}
export function searchInscription(a,b){
    a.on('submit',function(e){
        e.preventDefault();
        let data = {
            dni:b.val()
        }
        if(b.val().length >= 8){
           $.ajax({
                headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},    
                type:'POST',
                url:route.verification,
                data:data,
                success:function(valor){
                    if(!valor.status){
                        alertsFunction('error','Upps tenemos un problema',valor.message);
                    }else{
                        Swal.fire({
                            icon: "success",
                            title: 'Muchas Felicidades',
                            text: 'Usted se encuentra registrado, ¿Desea descargar codigo?',
                            showCancelButton: true,
                            cancelButtonText: "CANCELAR DESCARGA",
                            allowOutsideClick: false,
                            confirmButtonText: "DESCARGAR CODIGO",
                            customClass: {
                                confirmButton: 'btn btn-sm btn-warning',   // clase para botón confirmar
                                cancelButton: 'btn btn-sm btn-danger'      // clase para botón cancelar
                            },
                            buttonsStyling: false
                        }).then(
                                (result) => {
                                if (result.isConfirmed) {
                                    var doc = new jsPDF()
                                    doc.setFontSize(22);
                                    doc.setFontSize(15);
                                    doc.setTextColor(127, 140, 141);
                                    doc.text('MARATON INTERNACIONAL MESETA DEL BOMBON', 45, 20);
                                    doc.setDrawColor(204, 209, 209 );
                                    doc.line(70, 25, 150, 25);
                                    doc.setFontSize(65);
                                    doc.setTextColor(2, 50, 133);
                                    doc.text(valor.number_ins, 80, 55);
                                    doc.setFontSize(10);
                                    doc.setTextColor(2, 50, 133);
                                    doc.text('NUMERO DE INSCRITO', 90,65);
                                    doc.setDrawColor(255,0,0);
                                    doc.rect(45, 75, 130, 30, 'F');   
                                    doc.save('Inscripcion.pdf');
                                    Swal.fire({
                                        icon: "success",
                                        title: 'Muchas Felicidades',
                                        text: '¿Desea descargar los formatos de inscripcion?',
                                        allowOutsideClick: false,
                                        cancelButtonText: "CANCELAR DESCARGA",
                                        showCancelButton: true,
                                        confirmButtonText: "DESCARGAR FORMATOS",
                                        customClass: {
                                                confirmButton: 'btn btn-sm btn-warning',   // clase para botón confirmar
                                                cancelButton: 'btn btn-sm btn-danger'      // clase para botón cancelar
                                            },
                                        buttonsStyling: false
                                    }).then(
                                        (result) => {
                                            if (result.isConfirmed) {
                                                switch (valor.id_level) {
                                                    case 1:
                                                        window.open(route.may, '_blank');
                                                        break;
                                                    case 2:
                                                        window.open(route.may, '_blank');
                                                    break;
                                                    case 3:
                                                        window.open(route.may, '_blank');
                                                    break;
                                                    case 11:
                                                        window.open(route.may, '_blank');
                                                    break;
                                                    default:
                                                        window.open(route.men, '_blank');
                                                        break;
                                                }
                                                Swal.fire({
                                                    icon: "success",
                                                    title: "Enhorabuena",
                                                    text: "No olvide rrellenar y llevar los formatos un dia antes de la maraton",
                                                    confirmButtonText: "VOLVER A LA INSCRIPCION",
                                                    allowOutsideClick: false,
                                                     customClass: {
                                                        confirmButton: 'btn btn-sm btn-warning',   // clase para botón confirmar
                                         
                                                    },
                                                    buttonsStyling: false
                                                }).then(
                                                    (result) => {
                                                        location.reload();
                                                }) 
                                            } else if (result.dismiss === Swal.DismissReason.cancel){
                                                location.reload();
                                            }
                                    });
                                }else if (result.dismiss === Swal.DismissReason.cancel){
                                    location.reload();
                                }  
                          });
                    }
                }
           });
        }else{
            alertsFunction('error','Upps tenemos un problema','Por favor ingrese un DNI Valido');
        }
    });
} 