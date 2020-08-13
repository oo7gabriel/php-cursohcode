<?php

require_once("config.php");

$_SESSION["nome"] = "Hcode";

echo $_SESSION["nome"];

echo session_id();

?>