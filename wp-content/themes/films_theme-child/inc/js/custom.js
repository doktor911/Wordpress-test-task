$(document).ready(function(){

  $('.burger_btn').on('click', function(){
  	if ($(this).hasClass('change')) {
  		$('.mob_menu').slideUp();
    	$('.burger_btn').removeClass('change');
  	} else {
  		$(".mob_menu").slideDown();
    	$(".burger_btn").addClass("change");
  	}
  });

});
