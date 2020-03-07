<?php
        $APIurl = 'https://eu2.chat-api.com/instance104918/';
        $token = 'oo80b8hpghlw5y58';

        $update = file_get_contents("php://input");
	// $update = file_get_contents($APIurl."messages?token=".$token."&last");

        $updateArray = json_decode($update, TRUE);
	
	if ($updateArray["messages"][0]["chatId"] == "5511948010386-1553542475@g.us") {
        	$texten = $updateArray["messages"][0]["body"];
        	$text = urlencode($texten);
        	file_get_contents($APIurl."sendMessage?token=".$token."&chatId=558398858522-1568030251@g.us&body=".$text);
	} else {
		echo "NoCommand";
	}
			
?>
