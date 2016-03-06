$(document).ready(function(){
	$('#sb_toggle').click(function(){
		$('.sidebar').sidebar('toggle','push','overlay');
		$(this).toggleClass('closed');
		if($('#sb_toggle').hasClass('closed')){
			$('#itoggle').addClass('xoay');
		}
		else{
			$('#itoggle').removeClass('xoay');
		}
	});
	$('#sb_toggle').hover( function(e) {
		e.stopPropagation();
		$(this).css('width','100px');
		$(this).find('.text').css('opacity','1');
	}, function(e){
		e.stopPropagation();
		$(this).css('width','35px');
		$(this).find('.text').css('opacity','0');
	});
});