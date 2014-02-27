var app = new function() {

	$(document).ready(function(){
		$('.second').hide();
		$('.third').hide();
		$('.second .description').css('opacity', 0)
	});

	this.signUp = function() {
		$('._email').focus();
		$('.first').fadeOut(500);

		setTimeout(function(){
			$('.second').fadeIn(500);

			setTimeout(function(){
				$('._email').focus();
				$('.second .description').animate({
					opacity: 1,
				}, 500);
			}, 500);
		}, 500);
		
	}

	this.completeSignUp = function() {
		$('.second .description').fadeOut(500);

		setTimeout(function(){
			$('.newsletter').fadeOut(400);
		}, 100);

		setTimeout(function(){
			$('.title ._email').fadeOut(400);
		}, 300);

		setTimeout(function(){
			$('.second').fadeOut(400);
		}, 300);

		setTimeout(function(){
			$('.third').fadeIn(500);
		}, 700)
	}
}