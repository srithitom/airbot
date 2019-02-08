<?php
	if (isset($_POST["submit_form"])) {
		
		if(!checkdate($_POST["month"], $_POST["date"], $_POST["year"]-543)){
			echo "<center><span style=\"color:red;background-color:#000000;\">วันเกิดไม่ถูกต้อง</span></center>";
		include('location: form.php');
		}elseif ($_POST["pass"]!= $_POST["repass"]){
			echo "<center><span style=\"color:red;background-color:#000000;\">วันเกิดไม่ถูกต้อง</span></center>";
		include('location: form.php');
		}elseif (!isset($_POST["agree"])){
			echo "<center><span style=\"color:red;background-color:#000000;\">วันเกิดไม่ถูกต้อง</span></center>";
		include('location: form.php');
		}else{
		echo "<center><span style=\"color:red;background-color:#FFFFFF;\">ทำการสมัครเรียบร้อย</span></center>";
		}
	}
?>


