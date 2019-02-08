<?php
	if (!isset($_POST["submit_form"])) {
		
		if(!checkdate($_POST["month"], $_POST["date"], $_POST["year"]-543)){
		header('location: form.php');
		echo "<center><span style=\"color:red;background-color:#000000;\">วันเกิดไม่ถูกต้อง</span></center>";
		}elseif ($_POST["pass"]!= $_POST["repass"]){
		header('location: form.php');
		echo "<center><span style=\"color:red;background-color:#000000;\">รหัสผ่านไม่ตรงกัน</span></center>";
		}elseif (!isset($_POST["agree"])){
		header('location: form.php');
		echo "<center><span style=\"color:red;background-color:#000000;\">ไม่ได้ยอมรับข้อตกลง</span></center>";
		}else{
		echo "<center><span style=\"color:red;background-color:#FFFFFF;\">ทำการสมัครเรียบร้อย</span></center>";
		}
	}
?>

