<?php

  /*  $nome = addslashes($_POST(['name-news']));
    $email = addslashes($_POST(['email-news']));

$assunto    = "Teste da Ummense";
$corpo      = " 
Assunto: "   .$assunto."
    Nome: "  .$nome."
    Email: " .$email."
    ";*/

mail('higormdecampos@gmail.com', $assunto,$corpo,'From: higordecampos@live.com');
echo 'Recebemos a sua solicitação, você será o primeiro a saber!.';

?>