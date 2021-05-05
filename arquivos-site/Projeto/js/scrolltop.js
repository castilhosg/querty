$(document).ready(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 20) {
			$('#scrolltopo').fadeIn();
		} else {
			$('#scrolltopo').fadeOut();
		}
	});

	$('#scrolltopo').click(function() {
		$("html, body").animate({
			scrollTop: 0
		}, 1000);
			return false;
	});
});