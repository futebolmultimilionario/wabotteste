<?php
        $APIurl = 'https://eu155.chat-api.com/instance157336/';
        $token = 'd5jzb41lqjwowhep';
	$APIurl2 = 'https://eu155.chat-api.com/instance157334/';
        $token2 = 'vjkty0dhndpd0ix4';

        $update = file_get_contents("php://input");

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
        $chatIdCariocaJP = "558399711150-1592428935@g.us";
	$chatIdDiretoria = "558399711150-1583810992@g.us";
        $chatIdPreRegys = "5511948010386-1552934954@g.us";
        $chatIdLiveRegys = "5511948010386-1555463806@g.us";
        $chatIdGalgosUK = "13132868060-1537971803@g.us";
	$chatIdGalgosUSA = "558581122630-1578659806@g.us";
	$chatIdGalgosAviso = "558296209878-1591802443@g.us";
	$chatIdBurityps = "558399711150@c.us";
	$chatIdBuritypsJP = "558399711150-1583810992@g.us";
        $chatIdCarioca = "5521976937491-1563408342@g.us";
	$chatIdEncerrar = "557199039262-1591003488@g.us";
        $chatIdAtual = $updateArray["messages"][0]["chatId"];
        $typeAtual = $updateArray["messages"][0]["type"];
	$idmsg = $updateArray["messages"][0]["quotedMsgId"];
	$dados = "";
	if ($typeAtual == "image") {
		$caption = urlencode($updateArray["messages"][0]["caption"]);
	}
	
	function file_get_contents_curl($url) {
		$ch = curl_init();
    		curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    		curl_setopt($ch, CURLOPT_HEADER, 0);
    		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    		curl_setopt($ch, CURLOPT_URL, $url);
    		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);       

    		$data = curl_exec($ch);
    		curl_close($ch);

    		return $data;
	}
        if ($chatIdAtual == $chatIdPreRegys) {
          if($typeAtual == "chat") {
        	   file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdPreJP."&body=".$text);
		  	     if(strlen($texten)<401 && preg_match('(tip|⚽|🔇|🔈|🔉|🔊)', strtolower($texten))){
        		     file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdPreCG."&body=".$text);
			       }
        	}
          elseif ($typeAtual == "image") {
        	   file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
        	file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreCG."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
        	   }
          elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
        elseif ($chatIdAtual == $chatIdLiveRegys) {
          if($typeAtual == "chat") {
        	   file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text);
             if(strlen($texten)<401 && strpos(strtolower($texten), 'planilha') == false){
               file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text);
        		 }
        	}
          elseif ($typeAtual == "image") {
		  file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
             	  file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
      			}
          elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
        elseif ($chatIdAtual == $chatIdGalgosUK || $chatIdAtual == $chatIdGalgosAviso) {
          if($typeAtual == "chat") {
        	   file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
             }
          elseif ($typeAtual == "image") {
        		file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          }
	  elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
	elseif ($chatIdAtual == $chatIdGalgosUSA) {
	  if($typeAtual == "chat") {
        	   	file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
             	}
          	elseif ($typeAtual == "image") {
        		file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          	}
		elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
	elseif ($chatIdAtual == $chatIdBurityps) {
	if($idmsg == null){
	  if($typeAtual == "chat") {
        	   	file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdBuritypsJP."&body=".$text);
             	}
          	elseif ($typeAtual == "image") {
        		file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdBuritypsJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          	}
		elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdBuritypsJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
	} else {
		file_get_contents_curl($APIurl2."sendMessage?token=".$token2."&chatId=".$chatIdEncerrar."&body=".$text);
		file_get_contents_curl($APIurl2."forwardMessage?token=".$token2."&chatId=".$chatIdEncerrar."&messageId=".$idmsg);
	}
        }
	elseif ($chatIdAtual == $chatIdCarioca) {
	  if($typeAtual == "chat") {
        	   	file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdCariocaJP."&body=".$text);
             	}
          	elseif ($typeAtual == "image") {
        		file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdCariocaJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          	}
		elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdCariocaJP."&body=".$text."&filename=1554d15f125d.jpg");
        	}
        }
	elseif ($chatIdAtual == $chatIdEncerrar) {
          if($typeAtual == "image") {
		  $menssagens = file_get_contents_curl($APIurl2."messages?token=".$token2."&chatId=".$chatIdEncerrar."&last");
		  $menssagensArray = json_decode($menssagens, TRUE);
		  $lmn = count($menssagensArray["messages"]);
		  file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdBuritypsJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".urlencode($menssagensArray["messages"][$lmn-2]["body"]));
	  }
	}
		  
	elseif ($chatIdAtual == $chatIdDiretoria) {
	  if($texten == "UK ✅✅✅") {
		   $text = urlencode("✅✅✅");
        	   $dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
             }
          elseif ($texten == "UK ✖") {
		   $text = urlencode("✖");
        	   $dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
	  }
	  elseif($texten == "USA ✅✅✅") {
		   $text = urlencode("✅✅✅");
        	   $dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
             }
          elseif ($texten == "USA ✖") {
		   $text = urlencode("✖");
        	   $dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
	  }
        }
	else {
		echo "NoCommand";
	}
			
?>

