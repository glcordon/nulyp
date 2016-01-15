
(function($) {
 "use strict";
 
  $('.layout-selector a').click(function() {
    $('.layout-selector a').removeClass('active');
    $(this).addClass('active');
    $('.main-wrapper').removeClass('wrapper-wide').removeClass('wrapper-boxed').addClass('wrapper-' + $(this).data('ref'));
    // Run custom scripts handlers, because content size is changed
    $(window).resize();
    return false;
  });

  $('.pre-colors-list li a').on("click",function() {
    $('.pre-colors-list li a').removeClass('active');
    $(this).addClass('active');
    $.stylesheets.add($(this).attr('href'));
    return false;
  });
	

 $('.bg-pattrens-list li a').on("click",function() {
    $('.bg-pattrens-list a').removeClass('active');
    $(this).addClass('active');
    $.stylesheets.add($(this).attr('href'));
    return false;
  });

  $(function(){

  $('.btn-close').on("click",function(){

    if($('.btn-close').hasClass("show")){

    	$('#style-selector').animate({right: "-=320"},function(){
    		
    		$('.btn-close').toggleClass("show");
    		
    		
    		
    	});						
    }else{
    	$('#style-selector').animate({right: "0"},function(){
    		$('.btn-close').toggleClass("show");
    		
    		
    		
    	});			
    } 
  });

});



$(function(){
	
	$('.demo-close').on("click",function(){

		if($('.demo-close').hasClass("show")){
		
			$('#demo-selector').animate({right: "-=365"},function(){
				
				$('.demo-close').toggleClass("show");
				
				
				
				
			});						
		}else{
			$('#demo-selector').animate({right: "0"},function(){
				$('.demo-close').toggleClass("show");
				
				
			});			
		} 
	});
	
	

});



})(jQuery);

