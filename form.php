<? 
$dayth=array("","วันอาทิตย์","วันจันทร์","วันอังคาร","วันพุธ","วันพฤหัส","วันศุกร์","วันเสาร์"); 
$month=array("","มกราคม","กุมภาพันธ์","มีนาคม","เมษายน","พฤษภาคม","มิถุนายน","กรกฎาคม","สิงหาคม","กันยายน","ตุลาคม","พฤศจิกายน","ธันวาคม"); 
?> 

<html>
	<head>
		<title>แบบฟอร์มสมัครสมาชิกชมรมวิทยาศาสตร์</title>
		<meta charset="UTF-8">

		<link href="https://fonts.googleapis.com/css?family=Mali" rel="stylesheet">
		<link href="form.css" rel="stylesheet">
    	<style>
      		body {
        	font-family: 'Mali', cursive;
        	font-size: 36px;
      		}
			fieldset {
			 margin-bottom: 1em;
			}    
		</style>
	</head>

	<body background="bg1.jpg">
			<center>
				<img src="rocket.gif"><br><font color="brown" size="36"><b>แบบฟอร์มสมัครสมาชิก</b><br><small>ชมรมวิทยาศาสตร์</small></font><br><br>
			</center>
				<div class="form-style-3">
					<form method="post" name="regis_form" style="font-size: 13px;color: 9b593c;" action="index2.php">
					<fieldset>
					<legend><b>ขั้นตอนที่หนึ่ง : กรอกประวัติส่วนตัว</b></legend>
						<label for="name"><span>ชื่อ : </span><input type="text" name="name"></label>
						<label for="lastname"><span>นามสกุล : </span><input type="text" name="lastname"></label>
						<label for="gender"><span>เพศ : </span><input type="radio" name="gender" value="M"> ชาย
						<input type="radio" name="gender" value="F"> หญิง</label>
						<label for="bday"><span>วันเกิด : </span>
							<select name="learn">
								<?foreach($dayth as $val){
									echo "<option value="01">$val</option>";
									}?>
							</select>
						</label>
					</fieldset>
					<fieldset>
					<legend><b>ขั้นตอนที่สอง : ตั้งค่า user เพื่อ login</b></legend>
						<label for="user"><span>Username : </span><input type="text" name="user"></label>
						<label for="pass"><span>Password : </span><input type="password" name="pass"></label>
						<label for="repass"><span>Confirm Password : </span><input type="password" name="repass"></label>
						<label for="emailadd"><span>E-mail : </span><input type="email" name="emailadd"></label>
					</fieldset>
					<center><input type="submit" name="submit_form" value="บันทึก">
					<input type="reset" name="reset_form" value="รีเซ็ต">
					<input type="button" name="cancel_form" value="ยกเลิก"></center>
				</form>
			</div>
	</body>
</html>
