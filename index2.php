<html>
	<head>
		<title>ข้อมูลการสมัครสมาชิกชมรมวิทยาศาสตร์</title>
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
			<?php
	if (isset($_POST["submit_form"])) {
		
		if(!checkdate($_POST["month"], $_POST["date"], $_POST["year"]-543)){
			echo "<center><span style=\"color:red;background-color:#000000;\">วันเกิดไม่ถูกต้อง</span></center>";
		include('form.php');
		}elseif ($_POST["pass"]!= $_POST["repass"]){
			echo "<center><span style=\"color:red;background-color:#000000;\">รหัสผ่านไม่ตรงกัน</span></center>";
		include('form.php');
		}elseif (!isset($_POST["agree"])){
			echo "<center><span style=\"color:red;background-color:#000000;\">ไม่ได้ยอมรับข้อตกลง</span></center>";
		include('form.php');
		}else{
		echo "<center><span style=\"color:red;background-color:#FFFFFF;\">ทำการสมัครเรียบร้อย</span></center>";
		}
	}
?>
		<span>ชื่อ-สกุล : </span><?php echo $_POST["name"];?> <?php echo $_POST["lastname"];?><br>
		<span>เพศ : </span><?php echo $_POST["gender"];?><br>
		<span>วันเกิด : </span><?php echo $_POST["dth"];?> <?php echo $_POST["date"];?> <?php echo $_POST["month"];?> พ.ศ.<?php echo $_POST["year"];?><br>
		<span>Username : </span><?php echo $_POST["user"];?><br>
		<span>Password : </span><?php echo $_POST["pass"];?><br>
		<span>E-mail : </span><?php echo $_POST["emailadd"];?><br>
		<span>วันที่ลงทะเบียน : </span><?php echo $_POST["gender"];?><br>
	</body>
</html>
