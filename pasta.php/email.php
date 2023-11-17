<?php
if(issset($_POST['email']) && !empty($_POST['email']))

$nome = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['message']);

$to = "mariokta01@gmail.com";
$subject = "Contato - Loja de cupcakes";
$body = "Nome: " .$nome. "\n".
        "E-mail: " .$email. "\n".   
        "Mensagem: " .$mensagem;
$header = "from: mariokta01@gmail.com"."\r\n"
            ."Replay-to:".$email."\e\n"
            ."X=mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso");
}

else{
    echo("O Email não pode ser enviado");
}


?>