$(document).ready(function(e) {
    var mozillaPresente = false,
        mozilla = (function detectarNavegador(navegador) {
        if(navegador.indexOf("Firefox") != -1 ) {
            mozillaPresente = true;
        }   
    })(navigator.userAgent);
    function darEfecto(efecto) {
        el = $('.cajainterna');
        el.addClass(efecto);
        el.one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
        function (e) {
            el.removeClass(efecto);
        });
    }
    function mostrar(e) {
        $(".cajaexterna").show();
        darEfecto("bounceIn");      
    }
    function ocultar() {
        $(".cajaexterna").fadeOut("fast", function() {
            if(mozillaPresente) {
            setTimeout(function() {
                $(".cajainterna").removeClass("bounceIn");
            }, 5);
        }
        });         
    }
    $("a.mostrarmodal").click(mostrar);
    $("a.cerrarmodal").click(ocultar);
}); 
  

//script del modal Politica de Privacidad

$(document).ready(function(e) {
    var mozillaPresente = false,
        mozilla = (function detectarNavegador(navegador) {
        if(navegador.indexOf("Firefox") != -1 ) {
            mozillaPresente = true;
        }   
    })(navigator.userAgent);
    function darEfecto(efecto) {
        el = $('.cajainterna2');
        el.addClass(efecto);
        el.one('webkitAnimationEnd oanimationend msAnimationEnd animationend',
        function (e) {
            el.removeClass(efecto);
        });
    }
    function mostrar(e) {
        $(".cajaexterna2").show();
        darEfecto("bounceIn");      
    }
    function ocultar() {
        $(".cajaexterna2").fadeOut("fast", function() {
            if(mozillaPresente) {
            setTimeout(function() {
                $(".cajainterna2").removeClass("bounceIn");
            }, 5);
        }
        });         
    }
    $("a.mostrarmodal2").click(mostrar);
    $("a.cerrarmodal2").click(ocultar);
}); 

$(function(){
	var photos = [
		'imagenes/1.jpg',
		'imagenes/2.jpg',
		'imagenes/3.jpg',
		'imagenes/4.jpg',
		'imagenes/5.jpg',
		'imagenes/6.jpg',
		'imagenes/7.jpg'
	];
	
	var slideshow = $('#slideShow').bubbleSlideshow(photos);

	$(window).load(function(){	
		slideshow.autoAdvance(5000);
	});
	
});

function traerDatos(){
	$.ajax({
		url: location.href,
		method: "GET",
		data: {"accion":"registro"},
		dataType: "json"
	}).done(function(datos, estado, jqXHR){
		if(estado=="success"){
			$('#nombre-madre').html(datos.n_madre);
			$('#dedicado-por').html(datos.name);
			$('#foto').attr('src', datos.ruta);
		} else {
			console.log('Error')
		}
	})
}


traerDatos();
setInterval(function(){
	traerDatos();
},5000);
