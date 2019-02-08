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

	<?
	if (isset($_POST["submit_form"])) {

		if(!checkdate($_POST["month"], $_POST["date"], $_POST["year"]-543)){
   			echo "<center><font color="red">วันเกิดไม่ถูกต้อง</font></center>";
		}if ($_POST["pass"]!= $_POST["repass"]){
     		echo "รหัสผ่านไม่ตรงกัน";
 		}elseif (!isset($_POST["agree"])){
    		echo "ไม่ได้ยอมรับข้อตกลง";
		}else{
    		echo "ไม่ได้ยอมรับข้อตกลง";
		}
	}
	?>
</html>
