<!DOCTYPE html>
<html>

<head>
	<title>แบบประเมินความเสี่ยงโรคติดเชื้อไวรัสโคโรนา</title>


</head>

<body>
	<h1> แบบประเมินความเสี่ยงโรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19) </h1>
	<hr>
	<h3>ส่วนที่ 1 ข้อมูลสทั่วไป</h3>
	<form method="POST" action="<?php echo site_url() . '/mid/covit_show'; ?>" enctype="multipart/form-data">
		คำนำหน้า
		<select name="name_title">
			<option value="นาย">นาย</option>
			<option value="นาง">นาง</option>
			<option value="นางสาว">นางสาว</option>
		</select>
		เพศ <input type="Radio" name="M">ชาย
		<input type="Radio" name="F">หญิง
		<br>
		<br>
		ชื่อ <input type="text" name="Fname">
		สกุล <input type="text" name="Lname">
		<br>
		<br>
		วันเกิด<input type="date" name="dob">
		อายุ<input type="number" maxlength="10" name="age">
		<br>
		<br>
		เบอร์โทรศัพท์ <input type="number" name="Tall">
		อีเมล <input type="email" name="email">
		<br>
		<br>
		จังหวัด <input type="text" name="J">
		อำเภอ <input type="text" name="O">
		<br>
		<br>
		ทีอยู่
		<br>
		<textarea name ="At">          </textarea>
		<br>
		<br>
		รูปภาพ<input type="file" name="image" accept="image/*">
		<br>
		<br>
		<hr>
		<br>
		<h3>ส่วนที่ 2 ข้อมูลการสัมผัสโรค</h3>
		1. ท่านมีประวัติเดินทางไปต่างประเทศ หรือพื้นที่ ที่มีการระบาดของโรคติดเชื้อไวรัสโคโรนา2019 (COVID-19) ในช่วงเวลา 14 วัน ก่อนหน้านี้ ใช่หรือไม่ ?
		<br>
		<input type="Radio" name="Y1"value = "Yes">ใช่
		<input type="Radio" name="Y1"value = "No">ไม่ใช่
		<br>
		<br>
		2. ท่านสัมผัสใกล้ชิดกับประชาชนที่มาจากพื้นที่ที่มีรายงานการระบาดต่อเนื่องของโรคติดเชื้อไวรัสโคโรนา 2019 (COVID-19) ใช่หรือไม่ ?
		<br>
		<input type="Radio" name="Y2"value = "Yes">ใช่
		<input type="Radio" name="Y2" value="No">ไม่ใช่
		<br>
		<br>
		3. ท่านมีประวัติใกล้ชิดหรือสัมผัสกับผู้ป่วยเข้าข่ายหรือยืนยันโรคติดเชื้อไวรัสโคโรนา 2019(COVID-19) ใช่หรือไม่ ?
		<br>
		<input type="Radio" name="Y3"value = "Yes">ใช่
		<input type="Radio" name="Y3"value = "์No">ไม่ใช่
		<br>
		<br>
		4. ท่านหรือบุคคลใกล้ชิดเข้าร่วมกิจกรรมที่มีผู้ชุมนุมเกิน 100 คน ในช่วงเวลา 14 วัน ก่อนหน้านี้ ใช่หรือไม่ ?
		<br>
		<input type="Radio" name="Y4"value = "Yes">ใช่
		<input type="Radio" name="Y4"value = "No">ไม่ใช่
		<hr>
		<h3>ส่วนที่ 3 ข้อมูลอาการที่พบ</h3>
		กรุณาเลือกตอบคำถามที่ตรงกับท่านมากที่สุด
		<br>
		<input type="checkbox" name="a[]" value="S">มีไข้ (37.5 oC ขึ้นไป)
		<br>
		<input type="checkbox" name="a[]" value="i">ไอ
		<br>
		<input type="checkbox" name="a[]" value="de">มีน้ำมูก
		<br>
		<input type="checkbox" name="a[]" value="c">เจ็บคอ
		<br>
		<input type="checkbox" name="a[]" value="ha">หายใจเร็ว หรือ หายใจลำบาก หรือ หายใจไม่สะดวก
		<br>
		<input type="checkbox" name="a[]" value="n">จมูกไม่ได้กลิ่น
		<hr>
		<br>
		<input type="submit" value="บันทึก">
		<input type="reset" value="ยกเลิก">
	</from>

</body>

</html>