<?php
        $APIurl = 'https://eu106.chat-api.com/instance121093/';
        $token = '5q508ssieirg2gmj';

        $update = file_get_contents("php://input");
	// $update = file_get_contents($APIurl."messages?token=".$token."&last");

        $updateArray = json_decode($update, TRUE);
        $texten = $updateArray["messages"][0]["body"];
        $text = urlencode($texten);
	$autor = $updateArray["messages"][0]["author"];
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
	$chatIdGalgosChat = "13132868060-1537973869@g.us";
        $chatIdAtual = $updateArray["messages"][0]["chatId"];
        $typeAtual = $updateArray["messages"][0]["type"];
	$dados = "";
	if ($typeAtual == "image") {
		$caption = urlencode($updateArray["messages"][0]["caption"]);
	}

	
        if ($chatIdAtual == $chatIdPreRegys) {
          if($typeAtual == "chat") {
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdPreJP."&body=".$text);
		  	     if(strlen($texten)<401 && preg_match('(tip|⚽|🔇|🔈|🔉|🔊)', strtolower($texten))){
        		     file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdPreCG."&body=".$text);
			       }
        	}
          if ($typeAtual == "image") {
        	   $dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
        	file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreCG."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
        	   }
          if ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
        if ($chatIdAtual == $chatIdLiveRegys) {
          if($typeAtual == "chat") {
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text);
             if(strlen($texten)<401 && strpos(strtolower($texten), 'planilha') == false){
               file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text);
        		 }
        	}
          if ($typeAtual == "image") {
		  $dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
             	  file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
      			}
          if ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
        if ($chatIdAtual == $chatIdGalgosUK) {
          if($typeAtual == "chat") {
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
             }
          if ($typeAtual == "image") {
        		$dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          }
        }
	if ($chatIdAtual == $chatIdGalgosUSA) {
	  if ($chatIdAtual == $chatIdGalgosUSA || $autor == "5521992772410@c.us" || $autor == "554891241411@c.us"){
          	if($typeAtual == "chat") {
        	   	$dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
             	}
          	if ($typeAtual == "image") {
        		$dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          	}
	  }
        }
	if ($chatIdAtual == $chatIdDiretoria) {
          if($texten == "UK ✅✅✅") {
		   $text = urlencode("✅✅✅");
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
             }
          if ($texten == "UK ✖") {
		   $text = urlencode("✖");
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
	  }
	  if($texten == "USA ✅✅✅") {
		   $text = urlencode("✅✅✅");
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
             }
          if ($texten == "USA ✖") {
		   $text = urlencode("✖");
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
	  }
        }
	else {
		echo "NoCommand";
	}
	file_put_contents('input_requests.log',$update.PHP_EOL,FILE_APPEND);
			
?>

