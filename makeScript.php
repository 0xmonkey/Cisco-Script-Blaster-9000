<?php

echo "conf t"."<br>";

if((int)$_POST["format"] == 2)//first format option
{
	$i = (int)$_POST["x_min"];
	$j = (int)$_POST["y_min"];
	$xMax = (int)$_POST["x_max"];
	$yMax = (int)$_POST["y_max"];
	
	while($i <= $xMax)
	{
		while($j <= $yMax)
		{
			echo "int gi ".$i."/".$j."<br>"."des HOSTNAME<br>";
			$j++;
		}
		$j = (int)$_POST["y_min"];
		$i++;
	}
	echo "end"."<br>"."wr";
}
else if((int)$_POST["format"] == 3)//second format option
{
	$i = (int)$_POST["x_min"];
	$j = (int)$_POST["y_min"];
	$k = (int)$_POST["z_min"];
	$xMax = (int)$_POST["x_max"];
	$yMax = (int)$_POST["y_max"];
	$zMax = (int)$_POST["z_max"];
	
	while($i <= $xMax)
	{
		while($j <= $yMax)
		{
			while($k <= $zMax)
			{
				echo "int gi ".$i."/".$j."/".$k."<br>"."des HOSTNAME<br>";
				$k++;
			}
			$k = (int)$_POST["z_min"];
			$j++;
		}
		$j = (int)$_POST["y_min"];
		$i++;
	}
	echo "end"."<br>"."wr";
}
else
{
	header("Location:index.html");
}


?>