<?php
// Connecting, selecting database
$dbconn = pg_connect("host=ec2-54-243-212-227.compute-1.amazonaws.com dbname=derp1q2mqmgk73 user=qhfmxvhvaduhkw password=90b8104676e32efd9c1d98b72f3aba4c314ce0b9d6e82234f6c9fb56e6c60bd2")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = 'SELECT * FROM appointments';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
$views = array();
while($row = pg_fetch_array($result)) {
        $views[] = $row["content"];
}
$res = array($views);
echo json_encode($res,JSON_UNESCAPED_UNICODE);

//should not contain all rows
print_r( $rows );

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);
?>
