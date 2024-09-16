import jsPDF from 'jspdf';
/* import html2canvas from 'html2canvas';
$(document).ready(function(){
    $('#icon-test').on('click',function(){
        const imgData = 'data:image/jpeg;base64,/9j/4AAQSkZJRgABAQ...';
        var doc = new jsPDF();
        html2canvas(content).then(function(canvas) {
            const imgData = canvas.toDataURL('image/png');
            const imgWidth = 210; // Ancho en mm para el PDF (A4)
            const imgHeight = (canvas.height * imgWidth) / canvas.width;
            // Agregar la imagen al PDF
        pdf.addImage(imgData, 'PNG', 0, 0, imgWidth, imgHeight);
            // Guardar el PDF
        pdf.save('documento_desde_html.pdf');
    })
});
 */