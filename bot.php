<?php
	// 12&18
	
	require_once('twitteroauth/twitteroauth.php');
	require_once('config.php');
	
	$conn = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, ACCESS_TOKEN, ACCESS_TOKEN_SECRET);
	$params = array(
		'status' => "Qu'est-ce que c'est? : それ［これ/あれ］はなんですか？ - C'est un cahier. ：これはノートブックです。"

	);
		$result = $conn -> post('statuses/update', $params);
		
		var_dump($result);
		
		?>
	
	//get('account/verify_credentials');
