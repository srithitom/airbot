<?php
require_once('./vendor/autoload.php');

// Namespace 
use \LINE\LINEBot\HTTPClient\CurlHTTPClient; 
use \LINE\LINEBot; 
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder; 

$channel_token = 'w+K1LISrRPx/YJz5WyOCqY/Hmm1/V+6bcwiZkjZguyGFHRfjaA02jJ8wxMk/JHW++Ykplb3CsSuWIrG6lrtg8d5DUf8CL5G5H39qOuPI44+yryZ2OXY62xDAFNKwYjz+PFPLSjwJ159TIyg/kF2h0AdB04t89/1O/w1cDnyilFU='; 
$channel_secret = '5386d91fea3606a185e82e9d3b3670c8'; 

// Get message from Line API
$content = file_get_contents('php://input');
$events = json_decode($content, true); 

if (!is_null($events['events'])) { 

	// Loop through each event 
	foreach ($events['events'] as $event) { 

		// Line API send a lot of event type, we interested in message only. 
		if ($event['type'] == 'message' && $event['message']['type'] == 'text') { 

			// Get replyToken 
			$replyToken = $event['replyToken'];
			
			// Check to see user already answer 
				$dbconn = pg_connect("host=ec2-54-243-212-227.compute-1.amazonaws.com dbname=derp1q2mqmgk73 user=qhfmxvhvaduhkw password=90b8104676e32efd9c1d98b72f3aba4c314ce0b9d6e82234f6c9fb56e6c60bd2")
    or die('Could not connect: ' . pg_last_error());

				switch($event['message']['text']) { 

					case '1':
					$query = 'SELECT * FROM appointments';
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

					while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    foreach ($line as $col_value) {
        $mes = 'จำนวนคนตอบว่ำเพื่อน = '.$col_value[1] .$col_value[2] .$col_value[3] ;
    }
}
					$respMessage = 'จำนวนคนตอบว่ำเพื่อน = '.$mes;
					break;
					
					default: 
					$respMessage = " บุคคลที่โทรหำบ่อยที่สุด คือ? \n\r กด 1 เพื่อน \n\r กด 2 แฟน \n\r กด 3 พ่อแม่ \n\r กด 4 บุคคลอื่นๆ \n\r "; 
					break;
				}
			$httpClient = new CurlHTTPClient($channel_token); 
			$bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret)); 

			$textMessageBuilder = new TextMessageBuilder($respMessage); 
			$response = $bot->replyMessage($replyToken, $textMessageBuilder); 

		} 
	} 
} 

echo "OK";
