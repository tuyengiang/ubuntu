$(document).ready(function(){
	$("#click").on("click",function(){
		var ten=$("input[name=user]").val();
		var matkhau=$("input[name=pass]").val();
		var data={
			user:ten,
			pass:matkhau
		};
		$.ajax({
			url:"login.php",
			method:"POST",
			data:data,
			success:function(anser){
				$("#content").html(anser);
			},
			error:function(anser){
				console.log(anser);
			}
		})
	});
});
