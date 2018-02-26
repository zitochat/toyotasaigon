$('.faq_title').on('click', function() {
	let pid= $(this).attr('id');
	let id= pid.replace('pid-', '');
	
	$('.faq_ask ol li a[pid='+ id +']').css('display', 'block');
	
	
	});