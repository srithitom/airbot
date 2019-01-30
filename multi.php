<html>
<head>
    <title>เกรด</title>
    <meta charset="UTF-8">
</head>
<body>
    <center>
    <?php
        echo "<b><u>LAB5.2 เกรด</b></u><br>";
        $score = 70;
        if($score >= 80){
            echo "<p style=\"background-color: green;\">$score คะแนน : ได้รับระดับเกรด A</p>";
        }elseif($score >= 75){
            echo "<p style=\"background-color: green;\">$score คะแนน : ได้รับระดับเกรด B+</p>";
        }elseif($score >= 70){
            echo "<p style=\"background-color: green;\">$score คะแนน : ได้รับระดับเกรด B</p>";
        }elseif($score >= 65){
            echo "<p style=\"background-color: yellow;\">$score คะแนน : ได้รับระดับเกรด C+</p>";
        }elseif($score >= 60){
            echo "<p style=\"background-color: yellow;\">$score คะแนน : ได้รับระดับเกรด C</p>";
        }elseif($score >= 55){
            echo "<p style=\"background-color: yellow;\">$score คะแนน : ได้รับระดับเกรด D+</p>";
        }elseif($score >= 50){
            echo "<p style=\"background-color: yellow;\">$score คะแนน : ได้รับระดับเกรด D</p>";
        }else{
            echo "<p style=\"background-color: red;\">$score คะแนน : ได้รับระดับเกรด F</p>";
        }
    ?>
    </center>
</body>
</html>
