<?php
        $APIurl = 'https://eu68.chat-api.com/instance108044/';
        $token = 'j0hq6w8henjmxk9x';

        $update = file_get_contents("php://input");
	// $update = file_get_contents($APIurl."messages?token=".$token."&last");

        $updateArray = json_decode($update, TRUE);
        $texten = $updateArray["messages"][0]["body"];
        $text = urlencode($texten);
        $chatIdPreJP = "558399711150-1583892427@g.us";
        $chatIdLiveJP = "558399711150-1583892510@g.us";
        $chatIdPreCG = "558398858522-1568030251@g.us";
        $chatIdLiveCG = "558399711150-1583678381@g.us";
        $chatIdCCJP = "558399711150-1583892552@g.us";
        $chatIdCCCG = "558399711150-1583854681@g.us";
        $chatIdPreRegys = "5511948010386-1552934954@g.us";
        $chatIdLiveRegys = "5511948010386-1555463806@g.us";
        $chatIdCarioca = "13132868060-1537971803@g.us";
	$chatIdCarioca2 = "558581122630-1578659806@g.us";
        $chatIdAtual = $updateArray["messages"][0]["chatId"];
        $typeAtual = $updateArray["messages"][0]["type"];


        if ($chatIdAtual == $chatIdPreRegys) {
          if($typeAtual == "chat") {
        	   file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdPreJP."&body=".$text);
		  	     if(strlen($texten)<401 && preg_match('(tip|⚽|🔇|🔈|🔉|🔊)', strtolower($texten))){
        		     file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdPreCG."&body=".$text);
			       }
        	}
          if ($typeAtual == "image") {
        	   file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreCG."&body=".$text."&filename=1554d15f125d.jpg");
        	   file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
          if ($typeAtual == "document" || $typeAtual == "audio") {
        	   file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
        if ($chatIdAtual == $chatIdLiveRegys) {
          if($typeAtual == "chat") {
        	   file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text);
             if(strlen($texten)<401 && strpos(strtolower($texten), 'planilha') == false){
               file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text);
        		 }
        	}
          if ($typeAtual == "image") {
        		file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text."&filename=1554d15f125d.jpg");
      			file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text."&filename=1554d15f125d.jpg");
          }
          if ($typeAtual == "document" || $typeAtual == "audio") {
        	   file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
        if ($chatIdAtual == $chatIdCarioca || $chatIdAtual == $chatIdCarioca2) {
          if($typeAtual == "chat") {
        	   file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdCCJP."&body=".$text);
             if(strlen($texten)<401){
               file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdCCCG."&body=".$text);
        		 }
        	}
          if ($typeAtual == "image") {
        		file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdCCCG."&body=".$text."&filename=1554d15f125d.jpg");
      			file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdCCJP."&body=".$text."&filename=1554d15f125d.jpg");
          }
        }
	else {
		echo "NoCommand";
	}
			
?>

