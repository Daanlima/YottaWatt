<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );


$from = "no-reply@yottawatt.com.br";
$to = "contato@yottawatt.com.br";


$quebra_linha = "\n";
$name = $_POST['nome'];
$email= $_POST['email'];
$tel= $_POST['telefone'];
$assunto= $_POST['assunto'];
$subject = "Contato do site - Visitante" . $assunto;
 
$txt ="Nome: ". $name . "\r\n  Email: "
    . $email . "\r\n Telefone =" . $tel . "\r\n  Mensagem =" . $mensagem;
 
$headers = "From:" . $from;

mail($to, $subject, $txt, $headers);
 
// Redirect to
header("Location: obrigado.html");
?>