<?php
        $APIurl = 'https://eu2.chat-api.com/instance104918/';
        $token = 'oo80b8hpghlw5y58';

        $update = file_get_contents("php://input");

        $updateArray = json_decode($update, TRUE);

        $texten = $updateArray["messages"][0]["body"];

        $text = str_replace(' ', '%20', $texten);

        file_get_contents($APIurl."sendMessage?token=".$token."&chatId=558398858522-1568030251@g.us&body=".$text)

?>