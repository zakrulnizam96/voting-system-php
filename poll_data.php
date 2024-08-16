<?php
require 'db.php';

function getPoll() {
    global $pdo;
    $stmt = $pdo->query('SELECT * FROM polls LIMIT 1');
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
