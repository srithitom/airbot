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
            echo "$score คะแนน : ได้รับระดับเกรด A";
        }elseif($score >= 75){
            echo "$score คะแนน : ได้รับระดับเกรด B+";
        }elseif($score >= 70){
            echo "$score คะแนน : ได้รับระดับเกรด B";
        }elseif($score >= 65){
            echo "$score คะแนน : ได้รับระดับเกรด C+";
        }elseif($score >= 60){
            echo "$score คะแนน : ได้รับระดับเกรด C";
        }elseif($score >= 55){
            echo "$score คะแนน : ได้รับระดับเกรด D+";
        }elseif($score >= 50){
            echo "$score คะแนน : ได้รับระดับเกรด D";
        }else{
            echo "$score คะแนน : ได้รับระดับเกรด F";
        }
    ?>
    </center>
</body>
</html>
