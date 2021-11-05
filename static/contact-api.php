<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET,POST,PUT,DELETE,OPTIONS");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
$captcha;


if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') != 0){
    throw new Exception('Request method must be POST!');
}
//Receive the RAW post data.
$content = trim(file_get_contents("php://input"));

//Attempt to decode the incoming RAW post data from JSON.
$decoded = json_decode($content, true);
$captcha = $decoded['gr'];
//If json_decode failed, the JSON is invalid.
if(!is_array($decoded)){
    throw new Exception('Received content contained invalid JSON!');
}

// if the url field is empty, but the message field isn't
if( $decoded['message'] != ''){
	// put your email address here
	$youremail = 'test@brainstormsw.com';
	$ip = $_SERVER['REMOTE_ADDR'];
	// prepare a "pretty" version of the message
	// Important: if you added any form fields to the HTML, you will need to add them here also
	$body = "This is the form that was just submitted:
	Name:  $decoded[name]
	E-Mail: $decoded[email]
	Message: $decoded[message]
	Remote IP: $ip";
	// Use the submitters email if they supplied one
	// (and it isn't trying to hack your form).
	// Otherwise send from your email address.
	if( $decoded['email'] && !preg_match( "/[\r\n]/", $decoded['email']) ) {
	  $headers = "From: $decoded[email]";
	} else {
	  $headers = "From: $youremail";
	}
	$secretKey = "6Lc9boQcAAAAADymUucrA8vZZwcomTSpmOspVSZN";
	// post request to server
	$url =  'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
	$response = file_get_contents($url);
	$responseKeys = json_decode($response,true);
	// finally, send the message
		if($responseKeys["success"]) {
		$results=mail($youremail, 'Svelte', $body, $headers );
		echo("good");
	}
	else{
		echo("bad");
	}
}

?>
									