<?php
$headers = "MIME-Version: 1.1\r\n";
$headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
$headers .= "From: ".$_POST["c_email"]."\r\n"; // remetente
$headers .= "Return-Path: ".$_POST["c_email"]."\r\n"; // return-path
$envio = mail("ksbroetto@gmail.com", "Remetente: ".$_POST["c_name"], $_POST["c_message"], $headers);
if($envio)
{
    $res['sendstatus'] = 1;
	$res['message'] = 'Mensagem enviada com sucesso.';	
}	
else
{
	$res['sendstatus'] = 0;
	$res['message'] = 'Ocorreu um erro no envio da mensagem.';
}
echo json_encode($res);
?>