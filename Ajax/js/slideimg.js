$(document).ready(function(){
	// ham moi 3s thi slider se chuyen sang slider khac
    function next(){
	setInterval(function(){
		$("#slider ul li").animate({"margin-left":"-=1000px"},800,function(){
			$("#slider ul li:first").appendTo("#slider ul li");// chuyen ve silder 1
			$("#slider ul li").css("margin-left",0);
		});
		// keo slider ve ben trai thu 0 den -400, va koa 1s de keo
	},3000);
     }

    /*function pause(){
    	 int=setInterval(function(){
		$("#slider ul").animate({"margin-left":"-=500px"},1000,function(){
			$("#slider ul li:first").appendTo("#slider ul");// chuyen ve silder 1
			$("#slider ul").css("margin-left","0","background","black","opacity","0.5");
		});
		// keo slider ve ben trai thu 0 den -400, va koa 1s de keo
	},3000);

    	clearInterval(int);	
    }

	$("#slider ul").on("mouseenter",pause).on("mouseleave",next);*/

});


