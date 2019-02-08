<?php
	if (isset($_POST["submit_form"])) {
		
		if(!checkdate($_POST["month"], $_POST["date"], $_POST["year"]-543)){
		header('location: form.php');
		}elseif ($_POST["pass"]!= $_POST["repass"]){
		header('location: form.php');
		}elseif (!isset($_POST["agree"])){
		header('location: form.php');
		}else{
		echo "<center><span style=\"color:red;background-color:#FFFFFF;\">ทำการสมัครเรียบร้อย</span></center>";
		}
	}
?>


