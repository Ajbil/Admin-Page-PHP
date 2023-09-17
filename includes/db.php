<?php

	$dsn = "mysql:host=localhost;dbname=phppro";

	try {
		$pdo = new PDO($dsn, 'root', '');
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

?>