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

			// Split message then keep it in database. 
			$appointments = explode(',', $event['message']['text']); 

			if(count($appointments) == 2) { 

				$host = 'ec2-54-243-212-227.compute-1.amazonaws.com'; 
				$dbname = 'derp1q2mqmgk73'; 
				$user = 'qhfmxvhvaduhkw';
				$pass = '90b8104676e32efd9c1d98b72f3aba4c314ce0b9d6e82234f6c9fb56e6c60bd2'; 
				$connection = new PDO("pgsql:host=$host;dbname=$dbname", $user, $pass); 

				$params = array( 
					'time' => $appointments[0], 
					'content' => $appointments[1],
				); 

				$statement = $connection->prepare("INSERT INTO appointments (time, content) VALUES (:time, :content)"); 

				$result = $statement->execute($params); 

				$respMessage = 'Your appointment has saved.'; 
			}else{ 
				$respMessage = 'You can send appointment like this "12.00,House keeping." '; 
			} 

			$httpClient = new CurlHTTPClient($channel_token); 
			$bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret)); 

			$textMessageBuilder = new TextMessageBuilder($respMessage); 
			$response = $bot->replyMessage($replyToken, $textMessageBuilder); 

		} 
	} 
} 

echo "OK";
