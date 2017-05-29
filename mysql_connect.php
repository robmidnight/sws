<?php
try
{
//$pdo = new PDO('mysql:host=localhost;dbname=ijdb', 'ijdb', 'aftonhouse1');

$pdo = new PDO('mysql:host=web541.webfaction.com; dbname=first_database', 'robmidnight', 'aftonhouse1');
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->exec('SET NAMES "utf8"');


}
catch (PDOException $e)
{
	$output = 'Unable to connect to the database server: ' . $e->getMessage();
	include 'output.php';
	exit();
}
$output = 'Database connection established.';
include 'output.php';


?>