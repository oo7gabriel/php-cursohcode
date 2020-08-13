<?php

require_once("config.php");

echo session_save_path();

echo "<br>";

var_dump(session_status());

echo "<br>";

switch(session_status()) {

    case PHP_SESSION_DISABLED:
        echo "as sessões estão desabilitadas";
    break;

    case PHP_SESSION_NONE:
        echo "Não existi nenhuma sessão habilitada atualmente";
    break;

    case PHP_SESSION_ACTIVE:
        echo "A sessão está ativa";
    break;
}

?>