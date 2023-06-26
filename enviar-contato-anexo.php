<?php
ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

$from = "no-reply@yottawatt.com.br";
$to = "contato@yottawatt.com.br";

$quebra_linha = "\n";
$eol = "\r\n";

$name = $_POST['nome'];
$email= $_POST['email'];
$tel= $_POST['telefone'];
$localidade = $_POST['localidade'];
$gasto = $_POST['gasto'];
$msg = $_POST['mensagem'];

$subject = "Contato do site - Formulario Detalhado";

$filenameee_conta =  $_FILES['conta']['name'];
$filenameee_doc =  $_FILES['doc']['name'];
$fileName_conta = $_FILES['conta']['tmp_name'];
$fileName_doc = $_FILES['doc']['tmp_name'];
 
$mensagem = "Nome: $name\n";
$mensagem .= "E-mail: $email\n";
$mensagem .= "Telefone: $tel\n";
$mensagem .= "Localidade: $localidade\n";
$mensagem .= "Gasto Mensal: $gasto\n";
$mensagem .= "Mensagem: $msg\n";


$content_conta = file_get_contents($content_conta);
$content_doc = file_get_contents($content_doc);
$content_conta = chunk_split(base64_encode($content_conta));
$content_doc = chunk_split(base64_encode($content_doc));

$separator = md5(time());

// header information
$headers = "From:" . $from;
$headers .= "MIME-Version: 1.0" . $eol;
$headers .= "Content-Type: multipart/mixed; boundary=\"" . $separator . "\"" . $eol;
$headers .= "Content-Transfer-Encoding: 7bit" . $eol;
$headers .= "This is a MIME encoded message." . $eol;

// message
    $body .= "Content-Type: text/plain; charset=\"iso-8859-1\"" . $eol;
    $body .= "Content-Transfer-Encoding: 8bit" . $eol;
    $body .= $mensagem . $eol;
    // attachment
    $body .= "--" . $separator . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee_doc . "\"" . $eol;
    $body .= "Content-Type: application/octet-stream; name=\"" . $filenameee_conta . "\"" . $eol;
    $body .= "Content-Transfer-Encoding: base64" . $eol;
    $body .= "Content-Disposition: attachment" . $eol;
    $body .= $conta . $eol;
    $body .= $doc . $eol;
    $body .= "--" . $separator . "--";

mail($to, $subject, $body, $headers);
 
// Redirect to
header("Location: obrigado.html");
?>