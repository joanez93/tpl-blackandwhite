function appearMenu () {
	$('#get-menu').click(function () {
		$('#menu').css({
			"left" : "0"
		})
		$('#get-menu').hide();
	});
};

function desapearMenu() {
	$('#close-menu').click( function () {
		$('#menu').css({
			"left" : "-20%"
		})
		$('#get-menu').show();
	});
}

// Funções para o menu fixo na página do post
function appearDescMenuFixed() {
	$('#gotohome, #gotovideo, #gotohistory, #gotocomments, #gotomail').mouseover( function() {
		$(this).find('span').css({
			"display" : "block"
		})
	})
}
function desappearDescMenuFixed(){
	$('#gotohome, #gotovideo, #gotohistory, #gotocomments, #gotomail').mouseout( function() {
		$(this).find('span').css({
			"display" : "none"
		})
	})
}

appearMenu();
desapearMenu();

appearDescMenuFixed();
desappearDescMenuFixed();