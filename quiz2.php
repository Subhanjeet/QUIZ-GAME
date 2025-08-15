<?php
$score = 0;
$results = [];

for ($i = 0; $i < 10; $i++) {
    $user_answer = isset($_POST["q$i"]) ? $_POST["q$i"] : null;
    $correct_answer = isset($_POST["answer$i"]) ? $_POST["answer$i"] : null;
    $question_text = isset($_POST["question$i"]) ? $_POST["question$i"] : "Question " . ($i + 1);

    if ($user_answer === $correct_answer) {
        $score++;
    }

    $results[] = [
        'number' => $i + 1,
        'question' => $question_text,
        'your_answer' => $user_answer,
        'correct_answer' => $correct_answer
    ];
}
?>

<!DOCTYPE html>
<html>
    <link rel="stylesheet" href="quiz_2.css">
<head>
    <title>Quiz Result</title>
</head>
<body>
    <h1>Your Score: <?php echo $score; ?> / 10</h1>
    <h2>Review:</h2>
    <ol>
        <?php foreach ($results as $res): ?>
            <li>
                <strong><?php echo htmlspecialchars($res['question']); ?></strong><br>
                Your Answer: 
                <span style="color:<?php echo ($res['your_answer'] === $res['correct_answer']) ? 'green' : 'red'; ?>">
                    <?php echo htmlspecialchars($res['your_answer'] ?? 'No answer'); ?>
                </span><br>
                Correct Answer: <span style="color:green;"><?php echo htmlspecialchars($res['correct_answer']); ?></span>
            </li>
        <?php endforeach; ?>
    </ol>
    <a href="quiz.php">Try Another Random Quiz</a>
</body>
</html>