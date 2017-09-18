$(".rslides").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 500,          // Integer: Time between slide transitions, in milliseconds
});

$(".rslides_portfolio").responsiveSlides({
  auto: true,             // Boolean: Animate automatically, true or false
  speed: 500,            // Integer: Speed of the transition, in milliseconds
  timeout: 4000,          // Integer: Time between slide transitions, in milliseconds
  pager: true,           // Boolean: Show pager, true or false
});

Visibility.onVisible(function(){
	setTimeout(function () {
		$(".introducao h1").addClass("animated fadeInDown");
	}, 400);	
	setTimeout(function () {
		$(".introducao .btn").addClass("animated fadeInDown");
	}, 800);
	setTimeout(function () {
		$(".introducao .span .h2").addClass("animated fadeInDown");
	}, 1200);

	setTimeout(function () {
		$(".introducao .h3").addClass("animated fadeInDown");
	}, 1400);
	
	setTimeout(function () {
		$(".introducao .h3").addClass("animated fadeInDown");
	}, 1500);
});

// scroll 



$('.collapse a[href^="#"]').on('click', function(e) {
	e.preventDefault();
	var id = $(this).attr('href'),
			targetOffset = $(id).offset().top;
			
	$('html, body').animate({ 
		scrollTop: targetOffset - 60
	}, 500);
});

// carousel owl



// 




