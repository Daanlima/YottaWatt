<?php
  // Recupera os valores enviados pelo formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];
  $msg = $_POST['mensagem'];

  // Define as informações do e-mail
  $headers = "From: noreply@yottawatt.com";
  $para = "yottawattsolucoes@gmail.com";
  $assunto = "Contato do site - Formulario";
  $mensagem = "Nome: $nome\n";
  $mensagem .= "E-mail: $email\n";
  $mensagem .= "Telefone: $telefone\n";
  $mensagem .= "Mensagem: $msg\n";

  // Envia o e-mail
  mail($para, $assunto, $mensagem, $headers);

  // Redireciona para a página de agradecimento
  header("Location: obrigado.html");
?>
