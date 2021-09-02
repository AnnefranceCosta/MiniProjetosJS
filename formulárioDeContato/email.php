<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addslashes($_POST['name']);
$email = addslashes($_POST['email']);


$to = "annefrance.costa@gmail.com";
$subject = "Contato - Testando formulário";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n";

$header = "From: annefrance_costa@outlook.com"."\r\n".
        "Reply-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
    echo("Email enviado com sucesso!");
}else{
    echo("O email não pôde ser enviado!");
}

}




?>