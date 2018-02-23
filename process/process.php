<?php
	$number = (int)$_POST['number'];
	$check = true;
	$array = [1];
	$result = "This is not prime number";
	if($number==1)
	{
		$result = "This is prime number";
	}
	else
	{
		for($i=3;$i<=$number;$i++)
		{
			for($j=2;$j<$i;$j++)
			{
				if($i%$j==0)
					$check= false;
			}
			if($check)
			{
				if($i==$number)
					$result = "This is prime number";
				array_push($array, $i);
			}
			else
				$check= true;
		}
	}
	foreach($array as $key => $value)
	{
		echo "<div class='box'>".$value."</div>";
	}

?>
	<div class="show"><?=$result?></div>
	<div class="bg">
		<img src="design/image/Spinner-1s-200px.gif" alt="">
	</div>
<script>
	$(document).ready(function(){
		setTimeout(function(){$(".bg").fadeOut()},1000)
		$(".box").click(function(){
		var num = $(this).html();
		$("input").val(num)	
			$.ajax({
			url: "process/process.php",
			dataType: "html",
			type: "POST",
			data: {
				number : num
			}
			,success: function(data){
				$(".result").html(data);
			}
			})
		})
	})
</script>