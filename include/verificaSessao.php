<?php
session_start();
/*if(!($_SESSION['checkUsuario']=='d720c904acf1265da6b1b97eb9c87994')){
	header("Location: ../?e=true");
}else{
	
};
session_regenerate_id();
 /*

if (array_key_exists('HTTP_USER_AGENT', $_SESSION)) {
	if ($_SESSION['HTTP_USER_AGENT'] != md5($_SERVER['HTTP_USER_AGENT'])) {
		/* Acesso inválido. O header User-Agent mudou durante a mesma sessão. *
		session_destroy();
		session_write_close();
		header("Location: ../home/");
		exit ;
	}
} else {
	echo "Ok, logou";
}*/
?>