<?php
        $APIurl = 'https://eu38.chat-api.com/instance105506/';
        $token = '7g9d5nerw2v0b6ss';

        $update = file_get_contents("php://input");
	// $update = file_get_contents($APIurl."messages?token=".$token."&last");

        $updateArray = json_decode($update, TRUE);
        $texten = $updateArray["messages"][0]["body"];
        $text = urlencode($texten);

        if ($updateArray["messages"][0]["chatId"] == "5511948010386-1552934954@g.us") {
          if($updateArray["messages"][0]["type"] == "chat") {
            if(strlen($updateArray["messages"][0]["body"])<601){
        	    file_get_contents($APIurl."sendMessage?token=".$token."&chatId=558398858522-1568030251@g.us&body=".$text);
            }
          } if ($updateArray["messages"][0]["type"] == "image") {
            file_get_contents($APIurl."sendFile?token=".$token."&chatId=558398858522-1568030251@g.us&body=".$text."&filename=1554d15f125d.jpg");
        } } if ($updateArray["messages"][0]["chatId"] == "5511948010386-1547252688@g.us") {
          if($updateArray["messages"][0]["type"] == "chat") {
              if(strlen($updateArray["messages"][0]["body"])<601){
        	      file_get_contents($APIurl."sendMessage?token=".$token."&chatId=558399711150-1583678381@g.us&body=".$text);
          }
          } if ($updateArray["messages"][0]["type"] == "image") {
            file_get_contents($APIurl."sendFile?token=".$token."&chatId=558399711150-1583678381@g.us&body=".$text."&filename=1554d15f125d.jpg");
        }
        } else {
		      echo "NoCommand";
	      }
			
?>

