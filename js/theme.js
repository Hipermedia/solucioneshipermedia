jQuery(document).ready(function($) {

  // pequeña función para desactivar los eventos en el mapa
  $('.MeteoroContact-mapa').click(function () {
      $('.MeteoroContact-mapa iframe').css("pointer-events", "auto");
  });

  $('.MeteoroContact-mapa').mouseleave(function() { 
    $('.MeteoroContact-mapa iframe').css("pointer-events", "none"); 
  }); //fin


	// Reduce el header al hacer scrolldown; la animación se realiza con CSS
	$(window).on("scroll touchmove", function () {
		$('#header').toggleClass('Header--tiny', $(document).scrollTop() > 0);
    $('#header-logo').toggleClass('tiny', $(document).scrollTop() > 0);
		$('#header-logo img').toggleClass('tiny', $(document).scrollTop() > 0);
		$('#header-social').toggleClass('u-remove', $(document).scrollTop() > 0);
		$('#header #searchform').toggleClass('u-remove', $(document).scrollTop() > 0);
		$('#header-main-nav').toggleClass('tiny', $(document).scrollTop() > 0);	
    $('#Header-contenidoBefore').toggleClass('tiny', $(document).scrollTop() > 0); 
    $('#Header-contenido').toggleClass('tiny', $(document).scrollTop() > 0); 
	});
	
	// Versión responsive del menú; oculta la navegación y en su defecto aparece un botón para mostrar u ocultarl la navegación
	$('.toggle-nav').click(function(e) {
        $(this).toggleClass('activo');
        $('#header-main-nav ul').toggleClass('activo'); 
        e.preventDefault();
    });

	// Pone la clase .active a cualquier link que haya en el documento que corresponda con el url actual
	var url = window.location.href;
	$('a[href="'+url+'"]').addClass('active');
  
	//Agrega una animación al hacer scroll al llegar a un elemento gracias a waypoints

	$('.titulo').waypoint(function(direction) {
	  $('.titulo').addClass( 'fadeInUp animated' );
	},{
	  offset:'20%'
	});

	//Invocamos a los sliders en modo de ataque
	// [Slider full]
  	$('#slider-full').flexslider({
  	  animation: "slide",
      controlNav: false
  	});

  	// [Slider galería]
  	// --Imágenes principales
  	$('#slider-gallery-thumbnav').flexslider({
  	  animation: "slide",
  	  controlNav: false,
  	  animationLoop: false,
  	  slideshow: false,
  	  itemWidth: 137.5,
  	  asNavFor: '#slider-gallery'
  	});

  	// --Imágenes de navegación
  	$('#slider-gallery').flexslider({
  	  animation: "slide",
  	  controlNav: false,
  	  animationLoop: false,
  	  slideshow: false,
  	  sync: "#slider-gallery-thumbnav"
  	});

    // [Slider noticias]
    // --Imágenes principales
    $('#news-slider-thumbnav').flexslider({
      animation: "slide",
      controlNav: false,
      directionNav: false,
      animationLoop: true,
      slideshow: true,
      itemWidth: 147,
      asNavFor: '#news-slider'
    });

    // --Imágenes de navegación
    $('#news-slider').flexslider({
      animation: "slide",
      controlNav: false,
      animationLoop: true,
      directionNav: false,
      slideshow: true,
      prevText: "",
      nextText: "",
      sync: "#news-slider-thumbnav"
    });

    // [Slider videos]
    $('#slider-video').flexslider({
      animation: "slide",
      prevText: "",
      nextText: ""
    });

    // [Slider filmstrip]
    $('#slider-filmstrip').flexslider({
        animation: "slide",
        animationLoop: true,
        slideshow: true,
        itemWidth: 233,
        directionNav: false,
        prevText: "",
        nextText: ""
    });

    // imgrid customization

    $("#imgrid-portfolio").imgrid({
      gridLayout: 'square',
      thumbSize: 300,
      thumbHoverEffect: "ming",
      thumbLightbox: false
    });

    $('#filter-diseno').click(function () {
      $("#imgrid-portfolio").imgrid('filter', 'programacion-de-diseno');
    });

    $('#filter-cobro').click(function () {
      $("#imgrid-portfolio").imgrid('filter', 'cobro-en-linea ');
    });

    $('#filter-efectivo').click(function () {
      $("#imgrid-portfolio").imgrid('filter', 'sitio-efectivo');
    });

    $('#filter-tienda').click(function () {
      $("#imgrid-portfolio").imgrid('filter', 'tienda-en-linea');
    });

    $('#filter-medida').click(function () {
      $("#imgrid-portfolio").imgrid('filter', 'desarrollo-web-a-medida');
    });

    $('#filter-noticias').click(function () {
      $("#imgrid-portfolio").imgrid('filter', 'portal-de-noticias ');
    });

    $('#unfilter-button').click(function () {
      $("#imgrid-portfolio").imgrid('filter', 'all');
    });

    $("#unfilter-button").addClass('active');

    $('#testimonios-slider').flexslider({
      animation: "slide",
      animationLoop: false,
      itemWidth: 330,
      itemMargin: 100,
      directionNav: false,
      slideshow: false
    });

    $(function() {
      var menues = $("#filters li h3"); 
          menues.click(function() {
          menues.removeClass("active");
          $(this).addClass("active");
      });
    });


    // función para desplazamiento lento en enlaces dentro del mismo documento
    $(function(){
      $('a[href*=#sh]').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var $target = $(this.hash);
            $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');
            if ($target.length) {
              var targetOffset = $target.offset().top;
              $('html,body').animate({scrollTop: targetOffset}, 1000);
              return false;
            }
          }
      });
     }); 
     //fin

});