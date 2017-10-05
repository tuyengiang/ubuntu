$(document).ready(function(){
	function next(){
		setInterval(function(){
			$("#top-slider ul").animate({"margin-left":"-=100%"},2000,function(){
				$("#top-slider ul li:first").appendTo("#top-slider ul");
				$("#top-slider ul").css("margin-left","0");
			});
		},5000);
	}
	function pauseSlider(){
		
	}

	$("#top-slider ul").on("mouseenter",pauseSlider).on("mouseleave",next);
});



$(document).ready(function(){
	var topmenu =$(".menu-scroll");
	
	$(window).scroll(function(){
		if($(this).scrollTop()>100){
			topmenu.show();
			
		}else{
			topmenu.hide();
			

		}
	});
});