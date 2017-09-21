<?php

// Aqui ficam os dados do seu e-mail e da autoresposta!!!

$assunto = "Contato Site"; //Assunto do e-mail q vai chegar na sua caixa de mensagem
$mail = "topglassvitrine@gmail.com"; //E-mail que você gostaria de receber os resultados dos formmail's
$assunto_auto = "$nome, Sua Mensagem Foi Recebida Com Sucesso!";//Assunto da Auto Resposta
$website =  "http://www.topglassvitrine.com/";//Url do Website
$nome_webmaster = "Top Glass Vitrine";//Nome do Webmaster do site
$mensagem_auto = "Obrigado por entrar em contato conosco $nome!\nO mais breve possivel estaremos respondendo sua mensagem!!!\n\n  - $nome_webmaster";
$assunto_auto = "Recebemos sua mensagem";

// Aqui ficam os dados do formulário que serão enviados!!!

$ip = getenv("REMOTE_ADDR");
$navegador = $_SERVER['HTTP_USER_AGENT']; 
$nome = $_POST["nome"];//Campo Nome do Formulário
$email = $_POST["email"];//Campo E-mail do Formulário
$telefone = $_POST["telefone"];//Campo Contato do Formulário
$cidade = $_POST["cidade"];//Campo Cidade do Formulário
$comentario = $_POST["comentario"];//Campo Mensagem do Formulário

$mensagem = "Formulário enviado por $nome no Website $website:\n\n";//Inicio da Mensagem enviada! 
$mensagem .= "Nome: $nome\n";//Nome do Contato
$mensagem .= "E-mail: $email\n";//Nome do Contato
$mensagem .= "Telefone: $telefone\n";//Telefone do Contato
$mensagem .= "Cidade: $cidade\n";//Cidade do Contato
$mensagem .= "Comentario: $comentario\n";//Comentario do Contato
$mensagem .= "IP do visitante: $ip\n";



//não modifique esta linha, pois é ela que envia a mensagem!!!
@mail($mail, $assunto, $mensagem, "From: $email");

//não modifique esta linha, pois é ela que envia a auto_resposta!!!
@mail($email, $assunto_auto, $mensagem_auto, "From: $mail");

header("Location:ok.php");

?>