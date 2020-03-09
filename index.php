<?php
        $APIurl = 'https://eu38.chat-api.com/instance105506/';
        $token = '7g9d5nerw2v0b6ss';

        $update = file_get_contents("php://input");
	// $update = file_get_contents($APIurl."messages?token=".$token."&last");

        $updateArray = json_decode($update, TRUE);
	
	if ($updateArray["messages"][0]["chatId"] == "558399711150-1558430352@g.us") {
        	$texten = $updateArray["messages"][0]["body"];
        	$text = urlencode($texten);
        	file_get_contents($APIurl."sendMessage?token=".$token."&chatId=558398858522-1568030251@g.us&body=".$text);
	} else {
		echo "NoCommand";
	}
			
?>

