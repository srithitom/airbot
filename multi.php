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
            echo "<span class="bggreen">$score คะแนน : ได้รับระดับเกรด A</span>";
        }elseif($score >= 75){
            echo "<span class="bggreen">$score คะแนน : ได้รับระดับเกรด B+</span>";
        }elseif($score >= 70){
            echo "<span class="bggreen">$score คะแนน : ได้รับระดับเกรด B</span>";
        }elseif($score >= 65){
            echo "<span class="bgyellow">$score คะแนน : ได้รับระดับเกรด C+</span>";
        }elseif($score >= 60){
            echo "<span class="bgyellow">$score คะแนน : ได้รับระดับเกรด C</span>";
        }elseif($score >= 55){
            echo "<span class="bgyellow">$score คะแนน : ได้รับระดับเกรด D+</span>";
        }elseif($score >= 50){
            echo "<span class="bgyellow">$score คะแนน : ได้รับระดับเกรด D</span>";
        }else{
            echo "<span class="bgred">$score คะแนน : ได้รับระดับเกรด F</span>";
        }
    ?>
    </center>
</body>
</html>
