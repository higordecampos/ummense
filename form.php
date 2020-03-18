<?php

    $nome = addslashes($_POST(['name-form']));
    $email = addslashes($_POST(['email-form']));
    $phone = addslashes($_POST(['phone-form']));
    $comment = addslashes($_POST(['comment-form']));

$assunto    = "Teste da Ummense";
$corpo      = " 
Assunto: "   .$assunto."
    Nome: "  .$nome."
    Email: " .$email."
    Telefone: " .$phone."
    Mensagem: "  .$comment."
    ";

mail('higormdecampos@gmail.com', $assunto,$corpo,'From: higordecampos@live.com');
echo 'Obrigado pelo contato! Em breve retornaremos a sua solicitação.';

?>