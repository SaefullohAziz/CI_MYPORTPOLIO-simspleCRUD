$('.page-scroll').on('click', function(e){
	var tujuan = $(this).attr('href');
	var elementTujuan = $(tujuan);

	$('.page-scroll').removeClass('active');
	$(this).addClass('active');

	$("html,body").animate({
		scrollTop: elementTujuan.offset().top - 75
	}, 1250, 'easeInOutExpo');

	e.preventDefault()
});


$(window).scroll(function(){
	let a = $(window).scrollTop();
	let nav = $('.navbar');


	if (a > 75) {
		$('.navbar').addClass("bg-dark");
		$('.navbar').removeClass("py-4");
	} else {
		$('.navbar').removeClass("bg-dark");
		$('.navbar').addClass("py-4");
	}

	$('.jumbotron img').css({
		'transform' : 'translate(0px, ' + a/4 + '%)'
	});

	$('.jumbotron h1').css({
		'transform' : 'translate(0px, ' + a/2 + '%)'
	});

	$('.jumbotron p').css({
		'transform' : 'translate(0px, ' + a/1.1 + '%)'
	});

	if (a > 200) {
		$('.pKiri').addClass('Muncul');
		$('.pKanan').addClass('Muncul');
		$('.about').addClass('Muncul');
	}

	if (a > 835) {
		$('.contact').addClass('Muncul');
		$('.card').addClass('Muncul');
		if (a> 900) {
			$('.card-title').addClass('Muncul');
			$('.card-text').addClass('Muncul');
			$('.list-group-item').addClass('Muncul');
			$('.form-group').addClass('Muncul');
		}
	}

});



