<?php
$root = realpath(__DIR__.'/..');
$database = $root . '/data/services.sqlite';
$dsn = 'sqlite:' . $database;

try{
	$pdo = new PDO($dsn);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				
	} catch(PDOException $e){
		print "Error in open ".$e->getMessage();
}
?>