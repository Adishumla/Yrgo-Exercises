<?php

declare(strict_types=1);

// TODO: Implement the database logic here.

$character_id = $_GET['id'];
$db = new PDO('sqlite:../startrek.db');
$delete = $db->query("DELETE FROM characters WHERE id = $character_id");

header('Location: index.php');
