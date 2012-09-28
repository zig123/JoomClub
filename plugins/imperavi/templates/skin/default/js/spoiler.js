$(document).ready(function() {
	$('.sp-body').hide();

	$('.sp-head').click(function() {
		$(this).toggleClass("folded").toggleClass("unfolded").next().slideToggle("normal");
	});
});