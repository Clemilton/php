<?php

require_once("config.php");

echo session_save_path();

var_dump(session_status());


echo "<br>";
switch (session_status()) {
	case PHP_SESSION_DISABLED:
		# code...
		echo "as sessões estão desabilitadas.";
		break;
	
	case PHP_SESSION_NONE:
		# code...
		echo "Nao há sessoes";
		break;
	case PHP_SESSION_ACTIVE: 
		echo "Sessao habilitada";
		break;
}	

?>