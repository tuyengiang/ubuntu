
/*$("#btn").click(function(){
	//$("#h2").slideUp("slow");
	//$("#h2").css("background","green").css("color","white");
	$("#h2").slideUp("slow");

});
$("#btn2").click(function(){
	$("h2").slideDown("slow");
});*/

/*$("#btn").click(function(){
	$("#h2").css("background","yellow").css("color","blue");
});*/

// an hien *//
/*$("#btn").click(function(){
	$("#h2").hide();
});

$("#btn2").click(function(){
	$("#h2").toggle();
})*/

// lam mo phan tu//

/*$("#btn").click(function(){
	$("#h2").fadeToggle("slow");
})*/
/*$("#btn2").click(function(){
	$("#h2").fadeOut("slow");
})*/

/*$("#btn").click(function(){
	$("#h2").fadeTo("slow", '0.5');
})*/

/** phuong phap hoat hinh**/

/*$("#btn").click(function(){
	$("#h2").animate({left: "255px"})
});*/


/* callblack */
/*$("#btn").click(function(){
	$("#h2").hide(10000);
	alert("FOnt đã được ẩn");
});
$("#btn2").click(function(){
	$("#h2").hide(2000, function(){
		alert("FOnt đã được ẩn");
	});
});*/


/** chaning **/

/*$("#h2").css("background","red").slideUp(2000). slideDown(2000);
*/

/** cac lenh huy bo trong **/

/*$("#h2").empty();
$("#h2").remove();*/

/** then **/

/*$("#btn2").click(function(){
	$("#h2").append("Tin9a5"); // thêm vào dòng end của h2
})

$("#btn").click(function(){
	$("#h2").prepend("Tin9a5"); // thêm vào dòng dau của h2
})*/


/*$("#btn2").click(function(){
    $("#h2").append( $("#inputName").val() ); // thêm vào dòng end của h2
    console.log("gender val: " + $("input[name=gender]:checked").val() );

    $("#h4").text( "Bạn vừa chọn: " +  $("input[name=gender]:checked").val()  );

    $("#h3").text( "Xin Chào " +  $("input[name=text]").val());

    // the .val() lay gia tri cho thẻ input de them textarea
    // .0 là yes. = xet giá trị
})

$("#btn").click(function(){
    $("#h2").prepend( $("#inputName").val() ); // thêm vào dòng dau của h2
})*/




/*$(document).ready(function(){
	$("tr:even").ddclass("alt");
	$("td:contians(Tuyen giang)").addclass('red');
});

$(document).ready(function(){
	$('#nav > li').addclass('hightlight');
});*/


// show text

$("#btn3").click(function(){
	alert("Text" + $("#test").text());
});
$("#btn4").click(function(){
	alert("Html" + $("#test").html());
});
$("#btn5").click(function(){
	alert($(".href").attr("href"));
});

$("#btn6").click(function(){
	$("#test1").text("Xin chào nguyễn tuyển Giảng");
});
$("#btn7").click(function(){
	$("#test2").html("<b color='red'>Anh giảng đẹp trai</b>");
});
$("#btn8").click(function(){
	$("#test3").val("Giảng đẹp trai");
});

//them truoc sau

$("#prev").click(function(){
	$("#them").append($("#input").val());
});
$("#next").click(function(){
	$("#them").prepend($("#input").val());
});

$("#next").click(function(){
	$("#them").after("Anh Giảng");
});
$("#prev").click(function(){
	$("#them").before("Đẹp Trai");
});

// rong

$("#remove").click(function(){
	$("#div1").remove();
});
$("#empty").click(function(){
	$("#div1").empty();
});

//lop class

$("#add").click(function(){
	$("b,h2").addClass("blue");
});
$("#removeadd").click(function(){
	$("b,h2").removeClass("blue");
});
$("#Toogle").click(function(){
	$("b,h2").toggleClass("blue");
});

//ajaxx

$(document).ready(function(){
	$("#load").click(function(){
		console.log("clicked");
		$("#load1").load("demo_test.txt");
	});
});
/**scroll**/
x=0;
$(document).ready(function(){
	$("div").scroll(function(){
		$("span").text(x+=1);
	});
});
//**table**/
/*$(document).ready(function(){
	$('td:eq('12')').next().addClass("selected");

});*/







