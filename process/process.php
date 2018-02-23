<?php
	$number = (int)$_POST['number'];
	$check = true;
	$array = [1];
	$result = "This is not prime number";
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
	foreach($array as $key => $value)
	{
		echo "<div class='box'>".$value."</div>";
	}
?>
	<div class="show"><?=$result?></div>