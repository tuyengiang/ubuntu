
(function($){

	$(document).ready(function(){
		console.log("Dom js");

		$("#tinh").on("click",function(){
			console.log("Asd");

			var a1=$("input[name=a]").val();
			var b1=$("input[name=b]").val();
			var pheptinh=$("select[name=tinh]").val();

			var data = {
					a : $("input[name=a]").val(),
					b : $("input[name=b]").val() ,
					tinh : pheptinh
				};

			console.log(data);

			$.ajax({
				url: "xuly.php",
				method: "POST",
				data : data,
				success: function(anser){
					console.log(anser);
					$("#anser").text(anser)
						.fadeOut	(100)
						.fadeIn(2000);
				},
				error: function(anser){
					console.log(anser);
				}
			});
		});


	});

})(jQuery);


(function($){
	$(document).ready(function(){
		$("#click").on("click",function(){
			$.ajax({
				url: "abc.html",
				method: "GET",
				success: function(content){
					$("#pre").html(content);
					alert("Mở file thành công");
				},
				error:function(content){
					console.log(content);
					alert("Mở file thất bại");

				}
			});
		});
	});


})(jQuery);


(function($){
	$(document).ready(function(){
		$("#text-click").on("click",function(){
			$.ajax({
				url: "text.php",
				method: "GET",
				datatype:"text",
				success:function(e){
					$("#tust1").html(e);
				},
				error:function(e){
					console.log(e);
				}
			});
		});
	});
})(jQuery);


$(document).ready(function(){
	$('form').submit(function(){
		alert("Bạn đã đăng ký");
		return false;
	})
});

$(document).ready(function(){
	$('form').submit(function(){
		$("#dangky").html(' ');
		var username=$("input[name=username]").val();
		var email=$("input[name=email]").val();
		var data={
			user:username,
			email:email
		};
		//kieam tra email va user
		if($.trim(username)==' '){
			alert("Bạn chưa nhập tên đăng nhập");
			return false;	
		}
		if($.trim(email)==' '){
			alert("Bạn chưa nhập email");
			return false;	
		}

		$.ajax({
			url:"do_valible.php",
			method:"POST",
			datatype:"json",
			data:data,
			success: function(e){
				// Kiểm tra xem thông tin gửi lên có bị lỗi hay không
           				 // Đây là kết quả trả về từ file do_validate.php
				if (!e.hasOwnProperty('error') || e['error'] != 'success')
			            {
				                alert('Có vẻ như bạn đang hack website của tôi');
				                return false;
			            }
			            var html='';
			            //lay thong tin user loi

			            if($.trim(e.user)!=''){
			            		html+=e.user + "<br>";
			            }
			            //lay thong tin mail loi

			            if($.trim(e.user)!=''){
			            		html+=e.email + "<br>";
			            }
			                        // Cuối cùng kiểm tra xem có lỗi không
			            // Nếu có thì xuất hiện lỗi
			            if (html != ''){
			                $('#dangky').append(html);
			            }
			            else {
			                // Thành công
			                $('#dangky').append('Thêm thành công');
			            }
			}
		});
	});
});


