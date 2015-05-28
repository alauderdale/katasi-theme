$(document).ready(function(){

	 //fancybox
	$('.fancybox').fancybox({
        padding: 0
    });
	
	$('.fb-video').fancybox({
        padding: 0,
        width: "100%",
        height: 870,
        autoSize: false,
        wrapCSS: "fb-video",
        helpers: {
            media: {}
        }
   });

	$('.tooltip-up').tooltip({html:true});

    


//smooth scroll

	$(function() {
		  $('a[href*=#ss]:not([href=#])').click(function() {
		    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
		      if (target.length) {
		        $('html,body').animate({
		          scrollTop: target.offset().top-57
		        }, 1000);
		        return false;
		      }
		    }
		  });
		});


	////scroll change


	 $(window).scroll(function(){
     var divOffset = $('section :first-of-type').offset();
     if(window.scrollY > divOffset.top ){
        $('.main-nav').addClass('scrolled-nav');
     }
     if(window.scrollY < divOffset.top){
        $('.main-nav').removeClass('scrolled-nav');
     }
    });



   //slider


    $('#logo-slider').lightSlider({
        gallery:true,
        adaptiveHeight:true,
        item:1,
        loop:true,
        mode:'fade',
        slideMargin:30,
        thumbMargin:0,
        thumbItem:7,
        enableDrag: true,
        keyPress:true,
        controls:false,
        currentPagerPosition:'middle',
        onSliderLoad: function(el) {
            el.lightGallery({
                selector: '#imageGallery .lslide'
            });
        }   
    });  







});


$(window).bind("load", function() {
    $('.lSSlideOuter .lSPager.lSGallery li.active').removeClass('active');
    $('.lSSlideOuter .lSPager.lSGallery li:nth-child(4)').addClass('active');

    $('.lslide').removeClass('active');
    $('.lslide:nth-child(4)').addClass('active');
});
