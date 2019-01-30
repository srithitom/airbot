<html>
<head>
    <title>แม่สูตรคูณ</title>
    <meta charset="UTF-8">
</head>
<body>
    <table>
    <?php
        $i = 1;
        $num = 41;
        echo "55543206041-9 สูตรคูณแม่ 41 <br>";
        do {
            $mul=$num*$i;
            echo "<tr>
                    <td>41 x $i</td>
                    <td> = $mul</td>
                   </tr>";
            $i += 1;
        } while ($i <= 12);
    ?>
    </table>
</body>
</html>
