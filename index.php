<?php
        $APIurl = 'https://eu81.chat-api.com/instance132070/';
        $token = '2grjgpnjhj5sspjh';

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
	$chatIdBurityps = "553588495002-1566868456@g.us";
	$chatIdBuritypsJP = "558399711150-1590499962@g.us";
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
          elseif ($typeAtual == "image") {
        	   $dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
        	file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreCG."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
        	   }
          elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
        elseif ($chatIdAtual == $chatIdLiveRegys) {
          if($typeAtual == "chat") {
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text);
             if(strlen($texten)<401 && strpos(strtolower($texten), 'planilha') == false){
               file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text);
        		 }
        	}
          elseif ($typeAtual == "image") {
		  $dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
             	  file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
      			}
          elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
        elseif ($chatIdAtual == $chatIdGalgosUK) {
          if($typeAtual == "chat") {
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
             }
          elseif ($typeAtual == "image") {
        		$dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          }
	  elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
	elseif ($chatIdAtual == $chatIdGalgosUSA) {
	  if($typeAtual == "chat") {
        	   	$dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
             	}
          	elseif ($typeAtual == "image") {
        		$dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          	}
		elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
	elseif ($chatIdAtual == $chatIdBurityps) {
	  if($typeAtual == "chat") {
        	   	$dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdBuritypsJP."&body=".$text);
             	}
          	elseif ($typeAtual == "image") {
        		$dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdBuritypsJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          	}
		elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=".$chatIdBuritypsJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
	elseif ($chatIdAtual == $chatIdDiretoria) {
          if($texten == "UK ✅✅✅") {
		   $text = urlencode("✅✅✅");
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
             }
          elseif ($texten == "UK ✖") {
		   $text = urlencode("✖");
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
	  }
	  elseif($texten == "USA ✅✅✅") {
		   $text = urlencode("✅✅✅");
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
             }
          elseif ($texten == "USA ✖") {
		   $text = urlencode("✖");
        	   $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
	  }
        }
	else {
		echo "NoCommand";
	}
			
?>

