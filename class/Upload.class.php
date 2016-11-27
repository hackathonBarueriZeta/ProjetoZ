<?php
class Upload{
	/*
	elemento = Nome do elemento type="file" do html
	tipo = Extenção esperada
	limite = limite de tamanho do arquivo em megabytes
	pasta = pasta que o arquivo vai ficar

	upar($elemento, $tipo, $limite, $pasta);

	Exemplo1:
		require_once 'Upload.class.php';
		$arquivo = new Upload;
		$teste = $arquivo->upar("fileToUpload","pdf",4,"uploads");

	Exemplo2:
		require_once 'Upload.class.php';
		$arquivo = new Upload;
		$formatos = array("xml", "doc", "pdf", "html");
		$teste = $arquivo->upar("fileToUpload",$formatos,2,"uploads");
	*/
	
	public function upar($elemento, $tipo, $limite, $pasta){
		//header ('Content-type: text/html; charset=UTF-8');
		$nome=md5(date("YmdHis"));
		$limite=$limite*1000000;// Obs: transforma o valor enviado bytes, ao limitar, levar em conta a diferenca no tamanho do arquivo entre os sistemas de arquivos
		$target_dir = $pasta."/";
		$target_file = mb_convert_case($target_dir . basename($_FILES[$elemento]["name"]), MB_CASE_LOWER, "UTF-8");
		$uploadOk = 1;
		$tipoArquivo = pathinfo($target_file,PATHINFO_EXTENSION);
		$nomeArquivo = $target_dir.$nome.".".$tipoArquivo;
		// Verifica se o arquivo exite
		if (file_exists($nomeArquivo)) {
			//echo("<script> alert('Erro - arquivo já existe.'); location.href='index.html';</script>");
			$uploadOk = 0;
		}
		// Verifica o tamanho do arquivo
		if ($_FILES[$elemento]["size"] > $limite) {
			//echo("<script> alert('Erro - o arquivo deve ter até ".$limite.".megabyte(s)'); location.href='index.html';</script>");
			$uploadOk = 0;
		}
		// Verifica o tipo do arquivo
		// se for um array
		if(is_array($tipo)){
			// verifica se extensao do arquivo enviado está dentro dos tipos esperados
			if (!in_array($tipoArquivo, $tipo)) { 
				//echo("<script> alert('Erro - formato do arquivo não é suportado.'); location.href='index.html';</script>");
				$uploadOk = 0;
			}
		}else{
			if($tipoArquivo != $tipo) {
				//echo("<script> alert('Erro - formato do arquivo não é suportado.'); location.href='index.html';</script>");
				$uploadOk = 0;
			}
		}
		// Verifica se pode fazer o upload
		if ($uploadOk == 0) {
			//echo("<script> alert('Erro - o upload não foi realizado.'); location.href='index.html';</script>");
			return false;
		} else {
			if (move_uploaded_file($_FILES[$elemento]["tmp_name"], $nomeArquivo)) {
				return $nome.".".$tipoArquivo;
			} else {
				//echo("<script> alert('Erro, o upload não foi realizado".$nomeArquivo."'); location.href='index.html';</script>");
				return false;
			}
		}
	}
}
?>