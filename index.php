<?php
        $APIurl = 'https://eu2.chat-api.com/instance104918/';
        $token = 'oo80b8hpghlw5y58';

        $update = file_get_contents("php://input");
	      
        $updateArray = json_decode($update, TRUE);


	if ($updateArray["messages"][0]["chatId"] == "5511948010386-1552934954@g.us") {
          if($updateArray["messages"][0]["type"] == "chat") {
            $texten = $updateArray["messages"][0]["body"];
            $text = urlencode($texten);
            file_get_contents($APIurl."sendMessage?token=".$token."&chatId=558398858522-1568030251@g.us&body=".$text);
        } if ($updateArray["messages"][0]["type"] == "image") {
            $texten = $updateArray["messages"][0]["body"];
            $text = urlencode($texten);
            file_get_contents($APIurl."sendFile?token=".$token."&chatId=558398858522-1568030251@g.us&body=".$text."&filename=1554d15f125d.jpg");
        }
        } else {
	    echo "NoCommand";
	}

?>
