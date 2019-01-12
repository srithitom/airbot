<?php
// Connecting, selecting database
$dbconn = pg_connect("host=ec2-54-243-212-227.compute-1.amazonaws.com dbname=derp1q2mqmgk73 user=qhfmxvhvaduhkw password=90b8104676e32efd9c1d98b72f3aba4c314ce0b9d6e82234f6c9fb56e6c60bd2")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT * FROM appointments';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo '<pre>'; print_r($line); echo '</pre>';
    var_dump($line);
    echo "$line->time <br>"
    foreach($line as $res) {
    echo $res, '<br />';
}
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>
