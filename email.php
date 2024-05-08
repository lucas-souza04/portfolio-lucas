<?php

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$telefone = addslashes($_POST['telefone']);
$mensagem = addslashes($_POST['mensagem']);

$destino = "newcontato.portfolio@gmail.com";
$assunto = "Coleta de dados - Portfolio";

$corpo = "Nome: " . $nome . "\n" . "Email: " . $email . "\n" . "Telefone: " . $telefone . "\n" . $mensagem;

$cabecalho = "From newcontato.portfolio@gmail.com" . "\n" . "Reply-to: " . $email . "\n" . "X=Mailer:PHP/" . phpversion();

if (mail($destino, $assunto, $corpo, $cabecalho)) {
  echo ("E-mail enviado com sucesso!");
} else {
  echo ("Houve um erro ao tentar enviar o e-mail!");
}
