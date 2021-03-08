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
    //Variáveis do envio ao outro WebHook
    $options = array(
        'http' => array(
          'method'  => 'POST',
          'content' => $requisicao,
          'header'=>  "Content-Type: application/json\r\n" .
                      "Accept: application/json\r\n"
          )
      );
    $url = "https://estruturatexto.herokuapp.com/index.php";
    $context  = stream_context_create($options);
    //Variável do Id dos grupos
	$arrayGrupos = array("5522997157745-1566406220@g.us"=>"558393389126-1611500813@g.us",
                         "553195121104-1601482705@g.us"=>"558393389126-1611500858@g.us",
                         "558182315715-1594862914@g.us"=>"558393389126-1611500920@g.us",
                         "5521976937491-1563408342@g.us"=>"558393389126-1611500945@g.us");
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
    //Verifica se o remetente é um dos inclusos para o repassa e envia ao outro webhook
    if(array_key_exists($remetente, $arrayGrupos)){
        file_get_contents($url, false, $context);
    }
    //Repassa mensagem
    $dados = file_get_contents($APIurl.$arrayMetodo[$formato]."?token=".$token."&chatId=".$arrayGrupos[$remetente]."&body=".$texto.$arrayFormato[$formato].$legenda);

?>
