<?php
require 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $pollId = (int) $_POST['poll_id'];
    $vote = (int) $_POST['vote'];

    // Update the corresponding vote count
    $column = "votes" . $vote;
    $stmt = $pdo->prepare("UPDATE polls SET $column = $column + 1 WHERE id = :poll_id");
    $stmt->execute(['poll_id' => $pollId]);

    // Redirect to the results page
    header('Location: results.php');
    exit;
}
?>
