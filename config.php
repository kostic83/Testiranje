<?php
define("DBHOST","localhost");
define("DBUSER","root");
define("DBPASS","");
define("DBNAME","korisnici");

spl_autoload_register(function($klasa){
	require_once $klasa.".php";
});