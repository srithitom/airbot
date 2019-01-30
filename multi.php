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
    <div><?php
        echo "<b><u>LAB5.2 เกรด</b></u><br>";
        $score = 49;
        if($score >= 80 and $score <=100){
            echo "<span class=\"bggreen\">$score คะแนน : ได้รับระดับเกรด A</span>";
        }elseif($score >= 75){
            echo "<span class=\"bggreen\">$score คะแนน : ได้รับระดับเกรด B+</span>";
        }elseif($score >= 70){
            echo "<span class=\"bggreen\">$score คะแนน : ได้รับระดับเกรด B</span>";
        }elseif($score >= 65){
            echo "<span class=\"bgyellow\">$score คะแนน : ได้รับระดับเกรด C+</span>";
        }elseif($score >= 60){
            echo "<span class=\"bgyellow\">$score คะแนน : ได้รับระดับเกรด C</span>";
        }elseif($score >= 55){
            echo "<span class=\"bgyellow\">$score คะแนน : ได้รับระดับเกรด D+</span>";
        }elseif($score >= 50){
            echo "<span class=\"bgyellow\">$score คะแนน : ได้รับระดับเกรด D</span>";
        }elseif($score <= 50 and $score >=0){
            echo "<span class=\"bgred\">$score คะแนน : ได้รับระดับเกรด F</span>";
        }else{
            echo "คุณกรอกคะแนนผิด กรุณากรอกอีกครั้ง"
        }
    ?></div><br><br>
    <table>
    <tr><th>ระดับคะแนน (เกรด)</th><th>คะแนน</th>
    </tr>
    <tr bgcolor="#00FF00"><th>A</th><td>80 คะแนนขึ้นไป</td>
    </tr>
    <tr bgcolor="#00FF00"><th>B+</th><td>75 – 79 คะแนน</td>
    </tr>
    <tr bgcolor="#00FF00"><th>B</th><td>70 – 74 คะแนน</td>
    </tr>
    <tr bgcolor="#FFFF00"><th>C+</th><td>65 – 69 คะแนน</td>
    </tr>
    <tr bgcolor="#FFFF00"><th>C</th><td>60 – 64 คะแนน</td>
    </tr>
    <tr bgcolor="#FFFF00"><th>D</th><td>55 – 59 คะแนน</td>
    </tr>
    <tr bgcolor="#FFFF00"><th>C+</th><td>50 – 54 คะแนน</td>
    </tr>
    <tr bgcolor="#FF0000"><th>C+</th><td>0 – 49 คะแนน</td>
    </tr>
    </table>
    </center>
</body>
</html>
