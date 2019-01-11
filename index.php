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

			switch($event['message']['text']) { 

				case 'tel':
					$servername = "www.jbbyair.site";
					$username = "root";
					$password = "123456totar";
					$dbname = "ecom";
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					if ($conn->connect_error) {
					    die("Connection failed: " . $conn->connect_error);
					} 

					$sql = "select * from category";
					$result = $conn->query($sql);

					if ($result->num_rows > 0) {
	    				// output data of each row
	    				while($row = $result->fetch_assoc()) {

	    					// json_decode will give you a stdClass object after parsed
	    					// so you'll access by $user->firstname;
	        				$cate = json_decode($row['data']);

							$respMessage = '$cate->name';
						}
					}else {
	    				$respMessage = "0 results";
					}
					break; 

				case 'address': 
					$respMessage = '99/451 Muang Nonthaburi'; 
					break; 

				case 'boss': 
					$respMessage = '089-2541545'; 
					break; 

				case 'idcard': 
					$respMessage = '5845122451245'; 
					break; 

				default: 
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
