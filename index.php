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
		if ($event['type'] == 'message') {
			switch($event['message']['type']) {
				case 'text':
					// Get replyToken
					$replyToken = $event['replyToken']; 

					// Reply message 
					$respMessage = 'Hello, your message is '. $event['message']['text'];

					$httpClient = new CurlHTTPClient($channel_token);
					$bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret));
					$textMessageBuilder = new TextMessageBuilder($respMessage);
					$response = $bot->replyMessage($replyToken, $textMessageBuilder);
				break; 
			} 
		} 
	} 
}

echo "OK";