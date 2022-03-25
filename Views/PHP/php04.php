<!DOCTYPE html>
<html>

<head>
	<title>PHP04</title>
</head>

<body>
	<?php
	$input = 'Software Engineering';
	echo "String : ";
	echo " ";
	echo "$input";
	echo "<br>";
	echo "Largest Character :";
	$num = array_count_values(str_split($input));
	arsort($num);
	$sum = array_values($num)[0];
	echo " ";
	echo $sum;
	echo "<br>";

	echo "For the Character :";
	echo " ";
	echo array_keys($num)[0] . "<br>";


	?>
</body>

</html>