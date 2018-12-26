<?php
$conn_string = "host=ec2-54-243-212-227.compute-1.amazonaws.com port=5432 dbname=derp1q2mqmgk73 user=qhfmxvhvaduhkw pass=90b8104676e32efd9c1d98b72f3aba4c314ce0b9d6e82234f6c9fb56e6c60bd2";
$dbconn = pg_connect($conn_string);

$result=pg_query("SELECT * FROM appointments");

$row1=pg_fetch_array($result);
echo $row1;

pg_close($dbconn)
