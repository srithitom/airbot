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
        echo "55543206041-9 number is 41 <br>";
        do {
            echo "<tr>
                    <th>41 x $i</th>
                    <td> = ($num*$i)</td>
                   </tr>";
            $i += 1;
        } while ($i <= 12);
    ?>
    </table>
</body>
</html>
