<?php
// Connecting, selecting database
$host = 'ec2-54-243-212-227.compute-1.amazonaws.com'; 
				$dbname = 'derp1q2mqmgk73'; 
				$user = 'qhfmxvhvaduhkw';
				$pass = '90b8104676e32efd9c1d98b72f3aba4c314ce0b9d6e82234f6c9fb56e6c60bd2';
				$connection = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass);

				
					$sql = sprintf("SELECT * FROM category");
					$result = $connection->query($sql);

// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
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
