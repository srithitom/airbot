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
		<center>
			
			<?
			if (isset($_POST["submit_form"])) {
		
				if(!checkdate($_POST["month"], $_POST["date"], $_POST["year"]-543)){
		   			echo "<span style=\"color:red;background-color:#000000;\">วันเกิดไม่ถูกต้อง</span>";
				}elseif ($_POST["pass"]!= $_POST["repass"]){
		     		echo "<span style=\"color:red;background-color:#000000;\">รหัสผ่านไม่ตรงกัน</span>";
		 		}elseif (!isset($_POST["agree"])){
		    		echo "<span style=\"color:red;background-color:#000000;\">ไม่ได้ยอมรับข้อตกลง</span>";
				}else{
		    		echo "<span style=\"color:red;background-color:#FFFFFF;\">ทำการสมัครเรียบร้อย</span>";
				}
			}
			?>
		</center>
	</body>
</html>
