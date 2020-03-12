<?php
        $APIurl = 'https://eu25.chat-api.com/instance106399/';
        $token = '8r1470wgf5q53qp2';

        $update = file_get_contents("php://input");
	// $update = file_get_contents($APIurl."messages?token=".$token."&last");

        $updateArray = json_decode($update, TRUE);
        $texten = $updateArray["messages"][0]["body"];
        $text = urlencode($texten);
        $chatIdPreJP = "558399711150-1583892427@g.us";
        $chatIdLiveJP = "558399711150-1583892510@g.us";
        $chatIdPreCG = "558398858522-1568030251@g.us";
        $chatIdLiveCG = "558399711150-1583678381@g.us";
        $chatIdPreRegys = "558399711150@c.us";
        $chatIdLiveRegys = "5511948010386-1547252688@g.us";
	
        if ($updateArray["messages"][0]["chatId"] == $chatIdPreRegys) {
        	//file_get_contents($APIurl."forwardMessage?token=".$token."&chatId=".$chatIdPreJP."&messageId=".$updateArray["messages"][0]["id"]);
        	file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdPreJP."&body=".$updateArray["messages"][0]["id"]);
		if($updateArray["messages"][0]["type"] == "chat") {
        		if(strlen($texten)<601){
        			file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdPreCG."&body=".$text);
        		}
        	}
		if ($updateArray["messages"][0]["type"] == "image") {
        		file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreCG."&body=".$text."&filename=1554d15f125d.jpg");
        	}
	}
	if ($updateArray["messages"][0]["chatId"] == $chatIdLiveRegys) {
        	//file_get_contents($APIurl."forwardMessage?token=".$token."&chatId=".$chatIdLiveJP."&messageId=".$updateArray["messages"][0]["id"]);
        	file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text);
		if($updateArray["messages"][0]["type"] == "chat") {
        		if(strlen($texten)<601){
				file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text);
        		}
        	}
		if ($updateArray["messages"][0]["type"] == "image") {
        		file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text."&filename=1554d15f125d.jpg");
      		}
	}
	else {
		echo "NoCommand";
	}
			
?>

