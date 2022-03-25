<!DOCTYPE html>
<html>

<head>
	<title>PHP02</title>
</head>

<body>
	<?php
	$input = 'Software Engineering';
	echo 'String :';
	echo " ";
	echo "$input";
	echo '<br>';
	echo 'Expected Value :';
	echo ' ';
	echo strtr("Software Engineering", "AEIOUaeiou", "xxxxxxxxxx");
	?>
</body>

</html>