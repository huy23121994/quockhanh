
	// SLIDE
	$('.click_slide li').click(function(){
		$('.slide_tab h4').hide();
		var tab=$(this).data('tab');
		$('.'+tab).appendTo('.slide_tab ul');
		$('.bh_slide').show();
		$('.slide_tab').show();
		$('.'+tab).find('h4').show();
	})

	$('.bh_slide').click(function(){
		$(this).hide();
		$('.slide_tab').hide();
	})

	$('.pre').click(function(){
		var last_img=$('.slide_tab li:last-child');
		$(last_img).animate({'left':'-=521px'},300);
		setTimeout(function(){
				$(last_img).prev().find('h4').show();
				$(last_img).prependTo('.slide_tab ul').animate({'left':'+=521px'},0).find('h4').hide();
			},300);
	})
	$('.next').click(function(){
		var first_img=$('.slide_tab li:first-child');
		$('.slide_tab li:last-child h4').hide();
		$(first_img).animate({'left':'-=521px'},0).find('h4').show();
		$(first_img).appendTo('.slide_tab ul');
		$(first_img).animate({'left':'+=521px'},300);
	})