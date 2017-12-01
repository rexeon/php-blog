$(function() {
	$closeSidebar = $('#close-side-bar');
	$showSidebar = $('#show-side-bar');
	$leftSide = $('#left-side');
	$rightSide = $('#right-side');

	function hideRightSide() {
		$rightSide.addClass('hide');
		$leftSide.addClass('offset-md-1 col-md-10').removeClass('col-md-8');
		$showSidebar.removeClass('hide');
	}

	function showRightSide() {
		$leftSide.addClass('col-md-8').removeClass('col-md-10 offset-md-1');
		$rightSide.removeClass('hide');
		$showSidebar.addClass('hide');
	}

	$closeSidebar.on('click', hideRightSide);
	$showSidebar.on('click', showRightSide);
})