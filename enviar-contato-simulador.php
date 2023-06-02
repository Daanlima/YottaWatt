<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );


$from = "no-reply@yottawatt.com.br";
$to = "contato@yottawatt.com.br";


$quebra_linha = "\n";

$name = $_POST['nome'];
$email= $_POST['email'];
$tel= $_POST['telefone'];
$localidade = $_POST['localidade'];
$gasto = $_POST['gasto'];
$msg = $_POST['mensagem'];

$subject = "Contato do site - Visitante";
 
$mensagem = "Nome: $name\n";
$mensagem .= "E-mail: $email\n";
$mensagem .= "Telefone: $tel\n";
$mensagem .= "Localidade: $localidade\n";
$mensagem .= "Gasto Mensal: $gasto\n";
$mensagem .= "Mensagem: $msg\n";
 
$headers = "From:" . $from;

mail($to, $subject, $mensagem, $headers);
 
// Redirect to
header("Location: obrigado.html");
?>