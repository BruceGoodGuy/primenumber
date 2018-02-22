<?php
	$number = (int)$_POST['number'];
	$check = 0;
	$array = [];
	for($i=1;$i<=$number;$i++)
	{
		for($j=2;$j<$i;$j++)
		{
			if($i%$j==0)
			{
				if($i!=1)
					$check = -1;
				else
					array_push($array,$i);
			}
		}
		if($check==0)
			array_push($array,$i);
	}
	print_r($array);
?>