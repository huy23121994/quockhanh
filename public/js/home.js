
$('.ml_frame_logo > img').on('click',function(){
	window.location.replace("/");
});
// Click to bottom
$('.ml_bot > .ml_head_bot > i').on('click',function(){
	var $bot = $('.ml_bot'),
		is_open = $(this).hasClass('active_open'),
		is_active = $(this).hasClass('ml_icon_actived');

 	if( $bot.hasClass('open') && is_active && is_open){
 		$('.ml_bot').removeClass('open').animate({height: "63px"});
 		$('.ml_bot > .ml_head_bot > i').removeClass('ml_icon_actived');
 	}else{
		$('.ml_bot > .ml_head_bot > i').removeClass('ml_icon_actived');
		$(this).addClass('ml_icon_actived');
		
		$('.ml_bot').addClass('open').animate({height: "163px"},500);
		$(this).addClass('active_open');
		var pi=$(this).data('pi');
		$('.ml_bot_info').removeClass('ml_bot_actived');
		$('.'+pi).addClass('ml_bot_actived');
 	}
});

// Click detail
$('.ml_wp_black > ul > li').on('click',function(){
	var str = $(this).data('option');
	$('.ml_wp_black > ul > li').removeClass('ml_li_actived');
	$('.ml_wp_black > ul > li').children().removeClass('ml_arr_actived');

	$(this).addClass('ml_li_actived');
	$(this).children().addClass('ml_arr_actived');

	$('.ml_chung').removeClass('ml_sec_actived');
	$('.'+str).addClass('ml_sec_actived');

	$('body').animate({'scrollTop':'0'},0);
});

// Click detail VIEW
$(document).ready(function(){
	var str = $('.bh_view_content .list').data('tab');
	$('.bh_view_content .menu').find("."+str).addClass("now");
	$('.bh_view_content .menu .post_new').click(function(){
		$('.bh_view_content .menu li').removeClass("now");
		$(this).addClass("now");
	})

	$(window).scroll(function(){
		var x=$(window).scrollTop();
		if(x>170){
			$('#bh_right_content .item1').addClass('fixed_index');

		}else{
			$('#bh_right_content .item1').removeClass('fixed_index');
		}
	})
})