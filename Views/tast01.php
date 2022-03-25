<!DOCTYPE html>
<html>

<head>
	<title>T Saksit Web T</title>
	<style>
		body{background-color:darkgrey;}
		p.bk{border-style:solid;}
		
		option.Op{color:black ;}
	</style>
</head>

<body>
<h1 align ="center"> แบบสอบถามการเล่นคริปโต </h1>
<hr>
<h3 class="bk">ข้อมูลส่วนตัว</h3>
<from> 
<b>คำนำหน้า</b> 
<select >
<option class = "Op"value="นาย">นาย</option>
<option class = "Op"value="นาง">นาง</option>
<option class = "Op"value="นางสาว">นางสาว</option>
</select>
<b>ชื่อ:<b> <input type ="text"size="10">
<b>สกุล:<b> <input type ="text"size="10">
<br>
<b>รหัสประชาชน<b> 
 <input type="number"maxlength="13">
 <br>
 วันเกิด<input type="date" name="dob">
 <br>
 <br>
 <input type="submit" value="บันทึก">
		<input type="reset" value="ยกเลิก">
</from>

</body>

</html>