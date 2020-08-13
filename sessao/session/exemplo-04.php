<?php

session_id('4clmfvr6jm4p06mdt90qakhe1u');

require_once("config.php");

session_regenerate_id();

echo session_id() . "<br>" ;

var_dump($_SESSION);

?>