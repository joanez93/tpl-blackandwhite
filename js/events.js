function appearMenu () {
	$('#get-menu').click(function () {
		$('#menu').addClass('main-menu')
	});
};

function desapearMenu() {
	$('#close-menu').click( function () {
		$('#menu').css({
			"left" : "-20%"
		})
	});
}

appearMenu();
desapearMenu();