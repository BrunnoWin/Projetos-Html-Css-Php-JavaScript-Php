<?php
$pdo = new PDO('mysql:host=localhost;dbname=estmat', 'root', Null);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>