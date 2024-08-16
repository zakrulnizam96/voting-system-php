<?php
require 'poll_data.php';

$poll = getPoll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Poll Voting System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1><?php echo htmlspecialchars($poll['question']); ?></h1>
        <form action="vote.php" method="POST">
            <input type="hidden" name="poll_id" value="<?php echo $poll['id']; ?>">
            <label>
                <input type="radio" name="vote" value="1">
                <?php echo htmlspecialchars($poll['option1']); ?>
            </label><br>
            <label>
                <input type="radio" name="vote" value="2">
                <?php echo htmlspecialchars($poll['option2']); ?>
            </label><br>
            <label>
                <input type="radio" name="vote" value="3">
                <?php echo htmlspecialchars($poll['option3']); ?>
            </label><br>
            <label>
                <input type="radio" name="vote" value="4">
                <?php echo htmlspecialchars($poll['option4']); ?>
            </label><br>
            <button type="submit">Vote</button>
        </form>
    </div>
</body>
</html>
