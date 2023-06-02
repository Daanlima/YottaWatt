<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );


$from = "no-reply@yottawatt.com.br";
$to = "contato@yottawatt.com.br";


$quebra_linha = "\n";
$name = $_POST['nome'];
$email= $_POST['email'];
$tel= $_POST['telefone'];
$subject= $_POST['assunto'];
$msg= $_POST['mensagem'];
$subject = "Contato do site - " . $subject;
 
$txt ="Nome: ". $name . "\r\n  Email: "
    . $email . "\r\n Telefone =" . $tel . "\r\n  Mensagem =" . $msg;
 
$headers = "From:" . $from;

mail($to, $subject, $txt, $headers);
 
// Redirect to
header("Location: obrigado.html");
?>