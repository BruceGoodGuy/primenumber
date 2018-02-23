$(document).ready(function(){
	$("button").click(function(){
		var number = $("input").val()
		if($.isNumeric(number))
			{
				$(".result").fadeIn();
				$.ajax({
					url: "process/process.php",
					dataType: "html",
					type: "POST",
					data: {
						number : number
					}
					,success: function(data){
						$(".result").html(data);
					}
					})
			}
		else
			{
				$(".getWrong").fadeIn("slow")
			}
	})
	$(".getWrong").click(function(){
		$(this).fadeOut()
	})
})