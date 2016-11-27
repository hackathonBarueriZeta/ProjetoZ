<?php   // Inclui o arquivo class.phpmailer.php localizado na pasta phpmailer
function envaiEmail($emaildestinatario,$nomedestinatario,$assunto,$corpo,$anexo){
	require_once("../class/class.phpmailer.php");
	//   Inicia a classe PHPMailer	
	$mail = new PHPMailer();	
	//    Define os dados do servidor e tipo de conexão	
	$mail->IsSMTP(); // Define que a mensagem será SMTP
	$mail->Host = "smtp.gmail.com"; // Endereço do servidor SMTP
	$mail->SMTPAuth = true; // Autenticação
	$mail->SMTPSecure = "tls";
	$mail->Port       = 587;   
	$mail->Username = 'simgetec@gmail.com'; // Usuário do servidor SMTP
	$mail->Password = 'Pandor@87n2'; // Senha da caixa postal utilizada
	//   Define o remetente	
	$mail->From = "simgetec@gmail.com"; 
	$mail->FromName = "SIMGETEC FATEC ";
	
	//   Define os destinatário(s) 	
	$mail->AddAddress($emaildestinatario, $nomedestinatario);
	/*$mail->AddAddress('e-mail@destino2.com.br');
	$mail->AddCC('copia@dominio.com.br', 'Copia'); 
	$mail->AddBCC('CopiaOculta@dominio.com.br', 'Copia Oculta');*/
	//  Define os dados técnicos da Mensagem
	
	$mail->IsHTML(true); // Define que o e-mail será enviado como HTML
	$mail->CharSet = 'utf-8'; // Charset da mensagem (opcional)
	
	
	//   Texto e Assunto	
	$mail->Subject  = $assunto; // Assunto da mensagem
	$mail->Body = $corpo;
	//$mail->AltBody = 'Este é o corpo da mensagem de teste, em Texto Plano! \r\n <IMG src="http://seudominio.com.br/imagem.jpg" alt=5":)"  class="wp-smiley"> ';
	
	
	//  Anexos (opcional)	
	//$mail->AddAttachment($anexo, "qrcode.png");
	if($anexo!=""){
		$mail->AddEmbeddedImage($anexo, $anexo);	
	}
	
	
	//   Envio da Mensagem	
	$enviado = $mail->Send();
	
	
	// Limpa os destinatários e os anexos
	
	$mail->ClearAllRecipients();
	$mail->ClearAttachments();
	
	
	   // Exibe uma mensagem de resultado
	
	if ($enviado) {
	echo "E-mail enviado com sucesso!";
	} else {
	echo "Não foi possível enviar o e-mail.
	 
	";
	echo "Informações do erro: 
	" . $mail->ErrorInfo;
	} 
}
function setCorpoEmail($titulo,$corpo,$rodape){
	return $corpoEmail = "<table width=\"600px\" border=\"0\">
  <tbody>
    <tr>
      <td>
      	<center>
      		{$titulo}
        </center>
      </td>            
    </tr>
    <tr>
      <td>{$corpo}</td>
    </tr>
    <tr>
    	<td>
      		<p>
				{$rodape}	
			</p>
		</td>
    </tr>
  </tbody>";
}
?>