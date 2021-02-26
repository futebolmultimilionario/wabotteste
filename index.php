<?php
        $APIurl = 'https://eu27.chat-api.com/instance194066/';
        $token = 'nijbp88m5fkl2w0r';
	$APIurl2 = 'https://eu27.chat-api.com/instance194066/';
        $token2 = 'nijbp88m5fkl2w0r';

        $update = file_get_contents("php://input");
	$options = array(
  	'http' => array(
    	'method'  => 'POST',
    	'content' => $update,
    	'header'=>  "Content-Type: application/json\r\n" .
                	"Accept: application/json\r\n"
    	)
	);
	$url = "https://3732b03abe3f.ngrok.io/tete/index.php";
	$context  = stream_context_create( $options );
	

        $updateArray = json_decode($update, TRUE);
	$chatIdMario = "-407422984";
	$chatIdTT = "183429885";
	$chatIdMarioJP = "558399711150-1598578355@g.us";
	$chatIdTTJP = "558399711150-1598997654@g.us";
        $chatIdPreJP = "558399711150-1605907495@g.us";
        $chatIdLiveJP = "558399711150-1606661975@g.us";
	$chatIdLiveNovo = "558393389126-1611500858@g.us";
        $chatIdPreCG = "558388774464-1566997018@g.us";
	$chatIdPreNovo = "558393389126-1611500813@g.us";
        $chatIdLiveCG = "558396070442-1597839108@g.us";
        $chatIdGalgosUKJP = "558399711150-1606511992@g.us";
        $chatIdGalgosUSAJP = "558399711150-1583854681@g.us";
        $chatIdCariocaJP = "558399711150-1606568529@g.us";
        $chatIdCariocaNovo = "558393389126-1611500945@g.us";
	$chatIdDiretoria = "558399711150@c.us";
        $chatIdPreRegys = "5522997157745-1566406220@g.us";
        $chatIdLiveRegys = "553195121104-1601482705@g.us";
        $chatIdGalgosUK = "13132868060-1537971803@g.us";
	$chatIdGalgosUSA = "558581122630-1578659806@g.us";
	$chatIdGalgosAviso = "558296209878-1591802443@g.us";
	$chatIdWRHockey = "558182315715-1594862914@g.us";
	$chatIdWRHockeyJP = "558393389126-1611500920@g.us";
	$chatIdBurityps = "556291769402-1567774335@g.us";
	$chatIdBuritypsJP = "558399711150-1606777587@g.us";
        $chatIdCarioca = "5521976937491-1563408342@g.us";
	$chatIdEncerrar = "557199039262-1591003488@g.us";
	$chatIdEncerrar2 = "558399711150-1606778100@g.us";

	$dados = "";
	
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
	if(isset($updateArray["messages"][0]["body"])){
		$chatIdAtual = $updateArray["messages"][0]["chatId"];
        	$typeAtual = $updateArray["messages"][0]["type"];
		$idmsg = $updateArray["messages"][0]["quotedMsgId"];
        	$idmsg2 = $updateArray["messages"][0]["id"];
		$texten = $updateArray["messages"][0]["body"];
        	$text = urlencode($texten);
		$autor = $updateArray["messages"][0]["author"];
		if($chatIdAtual == $chatIdPreRegys || $chatIdAtual == $chatIdLiveRegys || $chatIdAtual == $chatIdWRHockey || $chatIdAtual == "558393389126@c.us"){
			$result = file_get_contents( $url, false, $context );
		}
		if ($typeAtual == "image") {
		$caption = urlencode($updateArray["messages"][0]["caption"]);
	}
        if ($chatIdAtual == $chatIdPreRegys) {
          if($typeAtual == "chat") {
        	   $dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdPreJP."&body=".$text);
$dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdPreCG."&body=".$text);
		  $dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdPreNovo."&body=".$text);
		  	    }
          elseif ($typeAtual == "image") {
        	   $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
$dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreCG."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
		  $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreNovo."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
        	}
          elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreJP."&body=".$text."&filename=1554d15f125d.ogg");
$dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreCG."&body=".$text."&filename=1554d15f125d.ogg");
		  $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdPreNovo."&body=".$text."&filename=1554d15f125d.ogg");
        	}
        }
        elseif ($chatIdAtual == $chatIdLiveRegys) {
          if($typeAtual == "chat") {
        	   $dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text);
$dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text);
		  $dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdLiveNovo."&body=".$text);
                     	}
          elseif ($typeAtual == "image") {
		  $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
$dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
		  $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveNovo."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
             	  	}
          elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveJP."&body=".$text."&filename=1554d15f125d.ogg");
$dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveCG."&body=".$text."&filename=1554d15f125d.ogg");
		  $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdLiveNovo."&body=".$text."&filename=1554d15f125d.ogg");
        	}
        }
        elseif ($chatIdAtual == $chatIdGalgosUK || $chatIdAtual == $chatIdGalgosAviso) {
          if($typeAtual == "chat") {
        	   $dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
             }
          elseif ($typeAtual == "image") {
        		$dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          }
	  elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text."&filename=1554d15f125d.ogg");
        	}
        }
	elseif ($chatIdAtual == $chatIdGalgosUSA) {
	  if($typeAtual == "chat") {
        	   	$dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text);
             	}
          	elseif ($typeAtual == "image") {
        		$dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          	}
		elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdGalgosUSAJP."&body=".$text."&filename=1554d15f125d.ogg");
        	}
        }
	elseif ($chatIdAtual == $chatIdWRHockey) {
	if($idmsg == null){
	  if($typeAtual == "chat") {
        	   	$dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdWRHockeyJP."&body=".$text);
             	}
          	elseif ($typeAtual == "image") {
        		$dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdWRHockeyJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          	}
		elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdWRHockeyJP."&body=".$text."&filename=1554d15f125d.ogg");
        	}
	} else {
		$dados = file_get_contents_curl($APIurl2."sendMessage?token=".$token2."&chatId=".$chatIdEncerrar."&body=".$text);
		$dados = file_get_contents_curl($APIurl2."forwardMessage?token=".$token2."&chatId=".$chatIdEncerrar."&messageId=".$idmsg);
	}
        }
	elseif ($chatIdAtual == $chatIdBurityps) {
	if($idmsg == null){
	  if($typeAtual == "chat") {
        	   	$dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdBuritypsJP."&body=".$text);
             	}
          	elseif ($typeAtual == "image") {
        		$dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdBuritypsJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          	}
		elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdBuritypsJP."&body=".$text."&filename=1554d15f125d.ogg");
        	}
	} else {
		$dados = file_get_contents_curl($APIurl2."sendMessage?token=".$token2."&chatId=".$chatIdEncerrar2."&body=".$text);
		$dados = file_get_contents_curl($APIurl2."forwardMessage?token=".$token2."&chatId=".$chatIdEncerrar2."&messageId=".$idmsg);
	}
        }
        elseif ($chatIdAtual == "557199039262@c.us"){
                $dados = file_get_contents_curl($APIurl."forwardMessage?token=".$token."&chatId=".$chatIdBuritypsJP."&messageId=".$idmsg2);
        }
	elseif ($chatIdAtual == $chatIdCarioca) {
	  if($typeAtual == "chat") {
        	   	$dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdCariocaJP."&body=".$text);
        	   	$dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdCariocaNovo."&body=".$text);
             	}
          	elseif ($typeAtual == "image") {
        		$dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdCariocaJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          	$dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdCariocaNovo."&body=".$text."&filename=1554d15f125d.jpg&caption=".$caption);
          	}
		elseif ($typeAtual == "document" || $typeAtual == "audio") {
        	   $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdCariocaJP."&body=".$text."&filename=1554d15f125d.ogg");
        	   $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdCariocaNovo."&body=".$text."&filename=1554d15f125d.ogg");
        	}
        }
	elseif ($chatIdAtual == $chatIdEncerrar) {
          if($typeAtual == "image") {
		  $menssagens = $dados = file_get_contents_curl($APIurl2."messages?token=".$token2."&chatId=".$chatIdEncerrar."&last");
		  $menssagensArray = json_decode($menssagens, TRUE);
		  $lmn = count($menssagensArray["messages"]);
		  $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdWRHockeyJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".urlencode($menssagensArray["messages"][$lmn-2]["body"]));
	  }
	}
	elseif ($chatIdAtual == $chatIdEncerrar2) {
          if($typeAtual == "image") {
		  $menssagens = $dados = file_get_contents_curl($APIurl2."messages?token=".$token2."&chatId=".$chatIdEncerrar2."&last");
		  $menssagensArray = json_decode($menssagens, TRUE);
		  $lmn = count($menssagensArray["messages"]);
		  $dados = file_get_contents_curl($APIurl."sendFile?token=".$token."&chatId=".$chatIdBuritypsJP."&body=".$text."&filename=1554d15f125d.jpg&caption=".urlencode($menssagensArray["messages"][$lmn-2]["body"]));
	  }
	}
		  
	elseif ($chatIdAtual == $chatIdDiretoria) {
		$dados = file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdGalgosUKJP."&body=".$text);
        }	
			ob_start();
                        var_dump($updateArray);
                        $input = ob_get_contents();
                        ob_end_clean();
                        file_put_contents('input_requests.log',$input.PHP_EOL,FILE_APPEND);
	if(!empty($dados)){
	ob_start();
                        var_dump($dados);
                        $output = ob_get_contents();
                        ob_end_clean();
                        file_put_contents('output_requests.log',$output.PHP_EOL,FILE_APPEND);
	}
	}

	else if(isset($updateArray["message"]["text"])){
		$texten2 = $updateArray["message"]["text"];
		$text2 = urlencode($texten2);
		$chatIdAtual2 = $updateArray["message"]["chat"]["id"];
		if($chatIdAtual2 == $chatIdTT){
		file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdTTJP."&body=".$text2);
		}
		if($chatIdAtual2 == $chatIdMario && strpos(strtolower($text2), urlencode("new messages")) == false){
			$numerodamensagem = strstr($text2, urlencode("MarioBetsPRO ("));
			$numerodamensagem = str_replace(urlencode("MarioBetsPRO ("), "", $numerodamensagem);
			$numerodamensagem = substr($numerodamensagem, 0, strpos($numerodamensagem, urlencode("):\nMarioBetsPRO:")));
			if($numerodamensagem > file_get_contents('count.txt')){
				$text2 = strstr($text2, urlencode("MarioBetsPRO:"));
				$text2 = str_replace(urlencode("MarioBetsPRO:"), "", $text2);
				file_get_contents_curl($APIurl."sendMessage?token=".$token."&chatId=".$chatIdMarioJP."&body=".$text2);
				file_put_contents('count.txt', $numerodamensagem);
			}
		}
	}
	else {
		echo "NoCommand";
	}
?>
