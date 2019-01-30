<html>
<head>
    <title>เกรด</title>
    <meta charset="UTF-8">
    <style>
        .bggreen { background-color:#00FF00; }
        .bgred { background-color:#FF0000; }
        .bgyellow { background-color:#FFFF00; }
    </style>
</head>
<body>
    <center>
    <?php
        echo "<b><u>LAB5.2 เกรด</b></u><br>";
        $score = 70;
        if($score >= 80){
            echo "<p class"bggreen">$score คะแนน : ได้รับระดับเกรด A</p>";
        }elseif($score >= 75){
            echo "<p class"bggreen">$score คะแนน : ได้รับระดับเกรด B+</p>";
        }elseif($score >= 70){
            echo "<p class"bggreen">$score คะแนน : ได้รับระดับเกรด B</p>";
        }elseif($score >= 65){
            echo "<p class"bgyellow">$score คะแนน : ได้รับระดับเกรด C+</p>";
        }elseif($score >= 60){
            echo "<p class"bgyellow">$score คะแนน : ได้รับระดับเกรด C</p>";
        }elseif($score >= 55){
            echo "<p class"bgyellow">$score คะแนน : ได้รับระดับเกรด D+</p>";
        }elseif($score >= 50){
            echo "<p class"bgyellow">$score คะแนน : ได้รับระดับเกรด D</p>";
        }else{
            echo "<p class"bgred">$score คะแนน : ได้รับระดับเกรด F</p>";
        }
    ?>
    </center>
</body>
</html>
