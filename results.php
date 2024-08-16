<?php
require 'poll_data.php';

$poll = getPoll();

$totalVotes = $poll['votes1'] + $poll['votes2'] + $poll['votes3'] + $poll['votes4'];

function percentage($votes, $total) {
    return $total > 0 ? round(($votes / $total) * 100) : 0;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Poll Results</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($poll['question']); ?></h1>
        <ul>
            <li><?php echo htmlspecialchars($poll['option1']); ?>: <?php echo $poll['votes1']; ?> votes (<?php echo percentage($poll['votes1'], $totalVotes); ?>%)</li>
            <li><?php echo htmlspecialchars($poll['option2']); ?>: <?php echo $poll['votes2']; ?> votes (<?php echo percentage($poll['votes2'], $totalVotes); ?>%)</li>
            <li><?php echo htmlspecialchars($poll['option3']); ?>: <?php echo $poll['votes3']; ?> votes (<?php echo percentage($poll['votes3'], $totalVotes); ?>%)</li>
            <li><?php echo htmlspecialchars($poll['option4']); ?>: <?php echo $poll['votes4']; ?> votes (<?php echo percentage($poll['votes4'], $totalVotes); ?>%)</li>
        </ul>
        <a href="index.php">Back to voting</a>
    </div>
</body>
</html>
