$(document).ready(function(){
	$("button").click(function(){
		var number = $("input").val()
		if($.isNumeric(number))
			{
				$.ajax({
					url: "process/process.php",
					dataType: "html",
					type: "POST",
					data: {
						number : number
					}
					,success: function(data){
					console.log(data);
					}
					})
			}
		else
			{
				$(".getWrong").fadeIn()
			}
	})
	$(".getWrong").click(function(){
		$(this).fadeOut()
	})
})