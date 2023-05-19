<?php
// Get data from form 
$name = $_POST['nome'];
$email= $_POST['email'];
$tel= $_POST['telefone'];
 
$to = "yottawattsolucoes@gmail.com";
$subject = "Contato do site - Visitante";
 
$txt ="Nome: ". $name . "\r\n  Email: "
    . $email . "\r\n Telefone =" . $tel . "\r\n Contato enviado de um visitante do site";
 
$headers = "From: noreply@yottawatt.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location: obrigado.html");
?>