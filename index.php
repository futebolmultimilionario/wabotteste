<?php
        $APIurl = 'https://eu12.chat-api.com/instance110325/';
        $token = 'vvz2wwy7qvqefrr8';

        $update = file_get_contents("php://input");
	// $update = file_get_contents($APIurl."messages?token=".$token."&last");

        $updateArray = json_decode($update, TRUE);
        $texten = $updateArray["messages"][0]["body"];
        $text = urlencode($texten);
        $chatIdPreJP = "558399711150-1583892427@g.us";
        $chatIdLiveJP = "558399711150-1583892510@g.us";
        $chatIdPreCG = "558398858522-1568030251@g.us";
        $chatIdLiveCG = "558399711150-1583678381@g.us";
        $chatIdGalgosUKJP = "558399711150-1583892552@g.us";
        $chatIdGalgosUSAJP = "558399711150-1583854681@g.us";
	$chatIdDiretoria = "558399711150-1583810992@g.us";
        $chatIdPreRegys = "5511948010386-1552934954@g.us";
        $chatIdLiveRegys = "5511948010386-1555463806@g.us";
        $chatIdGalgosUK = "13132868060-1537971803@g.us";
	$chatIdGalgosUSA = "558581122630-1578659806@g.us";
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
        if ($chatIdAtual == $chatIdGalgosUK) {
          if($typeAtual == "chat") {
        	   file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
             }
          if ($typeAtual == "image") {
        		file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text."&filename=1554d15f125d.jpg");
          }
        }
	if ($chatIdAtual == $chatIdGalgosUSA) {
          if($typeAtual == "chat") {
        	   file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
             }
          if ($typeAtual == "image") {
        		file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text."&filename=1554d15f125d.jpg");
          }
        }
	if ($chatIdAtual == $chatIdDiretoria) {
          if($texten == "UK ✅✅✅") {
		   $text = urlencode("✅✅✅");
        	   file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
             }
          if ($texten == "UK ✖") {
		   $text = urlencode("✖");
        	   file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
	  }
	  if($texten == "USA ✅✅✅") {
		   $text = urlencode("✅✅✅");
        	   file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
             }
          if ($texten == "USA ✖") {
		   $text = urlencode("✖");
        	   file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
	  }
        }
	else {
		echo "NoCommand";
	}
			
?>

