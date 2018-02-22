$(document).ready(function(){
	$("button").click(function(){
		var number = $("input").val()
		if($.isNumeric(number))
			console.log(number)
		else
			console.log("no")
	})
})