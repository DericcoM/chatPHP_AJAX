<?php

try {
	$pdo = new PDO('mysql:dbname=chat; host=localhost', 'root', 'root');
} catch (PDOException $e) {
	die($e->getMessage());
}
