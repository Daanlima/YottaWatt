<?php
// Get data from form 
$name = $_POST['nome'];
$email= $_POST['email'];
$tel= $_POST['telefone'];
 
$to = "yottawatt@gmail.com";
$subject = "This is the subject line";
 
$txt ="Nome: ". $name . "\r\n  Email: "
    . $email . "\r\n Telefone =" . $tel . "\r\n Contato enviado de um visitante do site";
 
$headers = "From: noreply@yottawatt.com";
if($email != NULL) {
    mail($to, $subject, $txt, $headers);
}
 
// Redirect to
header("Location: obrigado.html");
?>