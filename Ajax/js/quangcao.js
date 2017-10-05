$(document).ready(function(){
	function move_center(div){
		// can le giua
		width_window=$(window).width();
		div_width=$(div).width();
		$(div).css("left",(width_window / 2)-(div_width / 2));
	}

	move_center("#popcenter");

	$("#close").click(function(){
		$("#popbackground").fadeOut(500);
	});
});