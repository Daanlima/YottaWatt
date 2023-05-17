<?php
  // Recupera os valores enviados pelo formulário
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $telefone = $_POST['telefone'];

  // Define as informações do e-mail
  $para = "contato@yottawatt.com.br";
  $assunto = "Contato do site - Simulador";
  $mensagem = "Nome: $nome\n";
  $mensagem .= "E-mail: $email\n";
  $mensagem .= "Telefone: $telefone\n";

  // Envia o e-mail
  mail($para, $assunto, $mensagem);

  // Redireciona para a página de agradecimento
  header("Location: obrigado.html");
?>
