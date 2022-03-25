<!DOCTYPE html>
<html>

<head>
	<style>
		.td1 {
			text-align: center;
			color: #ff0000;
			text-shadow: 2px 2px 4px red;
		}

		.td2 {
			text-align: right;
			color: #ff0000;
			text-shadow: 2px 2px 4px black;
		}

		#td3 {
			vertical-align: bottom;
			text-align: right;
			color: #ff0000;
			text-shadow: 2px 2px 4px black;
		}

		#td4 {
			vertical-align: top;
			color: #ff0000;
			text-shadow: 2px 2px 4px black;

		}
	</style>
</head>

<body>
	<table border='1' width='300' height='300'>
		<tr>
			<td class="td1"> text ขนาด 24 </td>
			<td class="td2"> text ขนาด 24 </td>
		</tr>
		<tr>
			<td id="td3"> text ขนาด 24 </td>
			<td id="td4"> text ขนาด 24 </td>
		</tr>

	</table>

</body>

</html>