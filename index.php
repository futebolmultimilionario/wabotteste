<?php
    //Variáveis do acesso
    $APIurl = 'https://eu27.chat-api.com/instance194066/';
    $token = 'nijbp88m5fkl2w0r';
    //Variáveis da requisição
    $requisicaocod = file_get_contents("php://input");
    $requisicao = json_decode($requisicaocod, TRUE);
    //Variáveis relativas mensagem
    $texto = urlencode($requisicao["messages"][0]["body"]);
    $remetente = $requisicao["messages"][0]["chatId"];
    $formato = $requisicao["messages"][0]["type"];
    $legenda = urlencode($requisicao["messages"][0]["caption"]);
    //Variável do Id dos grupos
    $arrayGrupos = array("5522997157745-1566406220@g.us"=>"558393389126-1611500813@g.us",
                         "553195121104-1601482705@g.us"=>"558393389126-1611500858@g.us",
                         "558182315715-1594862914@g.us"=>"558393389126-1611500920@g.us",
                         "5521976937491-1563408342@g.us"=>"558393389126-1611500945@g.us",
			 "558393389126@c.us"=>"558399711150@c.us",
			 "5522999380564@c.us"=>"558399711150@c.us",
			 "5511964529689@c.us"=>"558399711150@c.us",
			 "5521989117219@c.us"=>"558399711150@c.us",
			 "5522998194725@c.us"=>"558399711150@c.us",
			 "558198581691@c.us"=>"558399711150@c.us");
    //Variável do metodo da mensagem
    $arrayMetodo = array("chat"=>"sendMessage",
                         "image"=>"sendFile",
                         "audio"=>"sendFile",
                         "document"=>"sendFile");
    //Variável do formato da mensagem
    $arrayFormato = array("chat"=>"",
                          "image"=>"&filename=imagem.jpg&caption=",
                          "audio"=>"&filename=audio.oga",
                          "document"=>"&filename=documento.pdf");
    //Repassa mensagem
    $dados = file_get_contents($APIurl.$arrayMetodo[$formato]."?token=".$token."&chatId=".$arrayGrupos[$remetente]."&body=".$texto.$arrayFormato[$formato].$legenda);
    
    $texto_cod = $requisicao["messages"][0]["body"];
    preg_match_all('#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#', $texto_cod, $match);

    if(array_key_exists(0, $match[0]) && $remetente == "558393389126@c.us"){

        $curl = curl_init();
        
        curl_setopt_array($curl, array(
          CURLOPT_URL => 'https://securetoken.googleapis.com/v1/token?key=AIzaSyCQZKqdJO5aV64PEiWYrTZChJ3UP33-lB8',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => 'grant_type=refresh_token&refresh_token=AGEhc0DMziHOCi0v7xJd6EaUmFRRV8BFIvJgrv0JNpkE1nODeG8U5c3vnoIZQe7uAX_v3YR8vBPK9bL6kAz2rWptJne1YiBJclONFe_fhBVpX4QIVPVdeui2LTzLnBAobe1B0zPRVwYVPmcxtOpJFb78Fakk7F205023Zp92UP2MHjIGHw0DdUqQ1iX4FgT3lKUvJaRKA6z84MRy4FKVNNXG1tbfzj4t9Q',
          CURLOPT_HTTPHEADER => array(
            'authority: securetoken.googleapis.com',
            'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
            'x-client-version: Chrome/JsCore/8.2.9/FirebaseCore-web',
            'sec-ch-ua-mobile: ?0',
            'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36',
            'content-type: application/x-www-form-urlencoded',
            'accept: */*',
            'origin: https://chatpay.com.br',
            'x-client-data: CJO2yQEIprbJAQjBtskBCKmdygEI+MfKAQixmssBCOScywEIqJ3LAQjpncsB',
            'sec-fetch-site: cross-site',
            'sec-fetch-mode: cors',
            'sec-fetch-dest: empty',
            'referer: https://chatpay.com.br/',
            'accept-language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7'
          ),
        ));
        
        $response = json_decode(curl_exec($curl), TRUE);
        
        curl_close($curl);
        $cp_token = $response['access_token'];
        
    // Print all headers as array
    $tip_link = $match[0][0];
    $tip_id = substr("$tip_link", strripos("$tip_link", "/") + 1, strlen("$tip_link")-strripos("$tip_link", "/"));
    //file_get_contents($APIurl."sendMessage?token=".$token."&chatId=558399711150@c.us&body=".$tip_id);

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://us-central1-chatpay-cd120.cloudfunctions.net/membersAreaGet/pt-BR',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_POSTFIELDS =>'{"data":{"id":"'.$tip_id.'"}}',
  CURLOPT_HTTPHEADER => array(
    'authority: us-central1-chatpay-cd120.cloudfunctions.net',
    'sec-ch-ua: "Google Chrome";v="89", "Chromium";v="89", ";Not A Brand";v="99"',
    'authorization: Bearer '.$cp_token,
    'sec-ch-ua-mobile: ?0',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.114 Safari/537.36',
    'content-type: application/json',
    'accept: */*',
    'origin: https://chatpay.com.br',
    'sec-fetch-site: cross-site',
    'sec-fetch-mode: cors',
    'sec-fetch-dest: empty',
    'referer: https://chatpay.com.br/',
    'accept-language: pt-BR,pt;q=0.9,en-US;q=0.8,en;q=0.7'
  ),
));
  
  $response = json_decode(curl_exec($curl), TRUE);
  print_r($response);
  curl_close($curl);
  if($response['result']['cover'] == ''){
    $dados = file_get_contents($APIurl."sendMessage?token=".$token."&chatId=558399711150@c.us&body=".urlencode(html_entity_decode(strip_tags($response['result']['body']), ENT_QUOTES, 'UTF-8')));
  } else {
    $dados = file_get_contents($APIurl."sendFile?token=".$token."&chatId=558399711150@c.us&body=".urlencode($response['result']['cover']['url'])."&filename=imagem.png&caption=".urlencode(html_entity_decode(strip_tags($response['result']['body']), ENT_QUOTES, 'UTF-8')));
  }}


?>
