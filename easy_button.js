/*$(document).ready(function() {
	$('.easy').click(function(){
		if ($('.easy').attr('src', 'img/easy.png')){
			$('.easy').attr('src', 'img/easy_pressed.png');
		}

		else if ($('.easy').attr('src', 'img/easy_pressed.png')){
			$('.easy').attr('src', 'img/easy.png');
		}
		else{
			$('.easy').attr('src', 'img/easy_pressed.png');
		}
		});
	});

*/

var x = document.getElementById("oh_yeah");


$(document).ready(function() {
		$(".easy_wrapper").click(function() {
    		$(this).find('img').toggle();
    		$('#oh_yeah').get(0).play();
	})
});