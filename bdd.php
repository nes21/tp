<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=botrallu;charset=utf8', 'root', 'test');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
