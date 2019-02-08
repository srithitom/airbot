<?
	if (isset($_POST["submit_form"])) {

		if(!checkdate($_POST["month"], $_POST["date"], $_POST["year"]-543)){
   			echo "วันเกิดไม่ถูกต้อง";
		}elseif ($_POST["pass"]!= $_POST["repass"]){
     		echo "รหัสผ่านไม่ตรงกัน";
 		}elseif (!isset($_POST["agree"])){
    		echo "ไม่ได้ยอมรับข้อตกลง";
		}elseif (!isset($_POST["agree"])){
    		echo "ไม่ได้ยอมรับข้อตกลง";
		}
	}
?>
