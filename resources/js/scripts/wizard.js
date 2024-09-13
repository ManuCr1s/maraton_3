import {validateForm,sendForm,searchDni} from './validate';
import APP_INPUT from './form';
import route from './route';
import { data } from 'jquery';
import Swal from 'sweetalert2';
import jsPDF from 'jspdf';
//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches
$(".next").click(function(){

	let validate = validateForm(APP_INPUT);
	if(validate.status){
		Swal.fire({
			icon: "error",
			title: 'Upps tenemos un problema',
			text: validate.message,
		  })
	}else{
		if(animating) return false;
		animating = true;
		
		current_fs = $(this).parent();
		next_fs = $(this).parent().next();

		//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({
				'transform': 'scale('+scale+')',
				'position': 'absolute'
			});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
	}
	
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$('#seachdni').click(function(e){
	e.preventDefault();
	let validation = searchDni(APP_INPUT.country,APP_INPUT.type,APP_INPUT.number)
	if(!validation.status){
		Swal.fire({
			icon: "error",
			title: 'Upps tenemos un problema',
			text: validation.message,
		  })
	}else{
		$.ajax({
			url:route.api,
			type:'POST',
			data:{
				number:APP_INPUT.number.val()
			},
			success:function(valor){
				if(valor.status){
					$('#seachdni').hide();
					$('#names').removeClass('d-none');
					APP_INPUT.name.val(valor.nombres);
					APP_INPUT.lastname.val(valor.apellidoPaterno+' '+valor.apellidoMaterno);
					$('#step-2').removeClass('d-none');
				}else{
					Swal.fire({
						icon: "error",
						title: 'Upps tenemos un problema',
						text: valor.message,
					})
				}
			}
		})
	}
});

$(".submit").click(function(e){
	e.preventDefault();
	let validate = sendForm(APP_INPUT);
	if(validate.status){
		Swal.fire({
			icon: "error",
			title: 'Upps tenemos un problema',
			text: validate.message,
		  })
	}else{
		let dates = {
			level:APP_INPUT.level.val(),
			gender:APP_INPUT.gender.val(),
			country:APP_INPUT.country.val(),
			type:APP_INPUT.type.val(),
			number:APP_INPUT.number.val(),
			name:APP_INPUT.name.val(),
			lastname:APP_INPUT.lastname.val(),
			born:APP_INPUT.date.val(),
			region:APP_INPUT.region.val(),
			province:APP_INPUT.province.val(),
			district:APP_INPUT.district.val(),
			phone:APP_INPUT.phone.val(),
			addresd:APP_INPUT.addresd.val()
		};
		$.ajax({
			headers:{'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')},
			url:route.register,
			type:'POST',
			data:dates,
			success:function(valor){
			 	let myData = $.parseJSON(valor)
				let data = Object.values(myData)[0][0];
				if(!(data.status)){
					Swal.fire({
						icon: "error",
						title: 'Upps tenemos un problema',
						text: data.message,
					  })
				}else{
					Swal.fire({
						icon: "success",
						title: 'Muchas Felicidades',
						text: data.message,
						confirmButtonText: "DESCARGAR CODIGO",
					}).then((result) => {
						var doc = new jsPDF()
						doc.text(data.ins, 10, 10)
						doc.save('a4.pdf')
						if (result.isConfirmed) {
							Swal.fire({
								icon: "success",
								title: 'Muchas Felicidades',
								text: data.message,
								confirmButtonText: "DESCARGAR BASES",
							}).then((result) => {
								window.open(route.pdf, '_blank');
								if (result.isConfirmed) {
									Swal.fire({
										icon: "success",
										title: "Enhorabuena",
										text: "No olvide llevar los formatos un dia antes de la maraton",
										confirmButtonText: "VOLVER A LA INSCRIPCION",
									}).then((result) => {
											  location.reload();
									}) 
								} 
							  });
						}  
					  });
				}
			}
		});
	}
	return false;
})