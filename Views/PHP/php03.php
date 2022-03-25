<!DOCTYPE html>
<html>

<head>
	<title>PHP03</title>
</head>

<body>
	<?php
	$array = array("red", "green", "yellow", "blue", "pink", "black", "white");
	$reverse = array_reverse($array);
	foreach ($array as $value) {
		echo " ";
		echo "$value";
	}
	echo '<br>';
	echo '<br>';
	foreach ($reverse as $value) {
		echo " ";
		echo "$value";
	}


	?>
</body>

</html>