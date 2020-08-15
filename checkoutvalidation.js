$(document).ready(function(){
		$("#contactForm").on("submit",function(event){
		event.preventDefault();
		$(".overlay").show();
		$.ajax({
			url : "mail.php",
			method : "POST",
			data : $("#contactForm").serialize(),
			success : function(data){
				$(".overlay").hide();
				if (data == "register_success") {
					window.location.href = "orderplaced.php";
				}else{
					$("#signup_msg").html(data);
				}
				
			}
		})
	})
})