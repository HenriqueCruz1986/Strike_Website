<?php

if(isset($_POST['tMail']) && !empty($_POST['tMail']) {

$nome = addcslashes($_POST['tNome']);
$email = addcslashes($_POST['tMail']);
$sexo = addcslashes($_POST['sexo']);
$nasc = addcslashes($_POST['tNasc']);
$urg = addcslashes($_POST['tUrg']);
$mensagem = addcslashes($_POST['tMsg']);

$to = "contato@strikewebsites.com.br";
$subject = "Contato - Strike WebSites";
$body = "Nome: ".$nome. "\r\n".
		"Email: ".$email. "\r\n".
		"Sexo: ".$sexo. "\r\n".
		"Data Nasc: ".$nasc. "\r\n".
		"Grau Urg: ".$urg. "\r\n".
		"Mensagem: ".$mensagem;

$header = "From:contato@strikewebsites.com.br"."\r\n".
			"Replay-To:".$email."\r\n".
			"X=Mailer:PHP/".phpversion();

if(mail($to, $subject, $body, $header)){

	echo("Mensagem enviada com sucesso!");
}

else{

	echo("Erro no envio, tente novamente.");
}

}

?>