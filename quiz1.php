<?php
$questions = [
    ["What does CPU stand for?", ["a" => "Central Processing Unit", "b" => "Central Programming Unit", "c" => "Computer Personal Unit"], "a"],
    ["What is the main function of RAM?", ["a" => "Store permanent data", "b" => "Store temporary data", "c" => "Control the computer"], "b"],
    ["Which company created the iPhone?", ["a" => "Samsung", "b" => "Apple", "c" => "Google"], "b"],
    ["What does HTML stand for?", ["a" => "Hyperlinks and Text Markup Language", "b" => "Hyper Text Markup Language", "c" => "Home Tool Markup Language"], "b"],
    ["Which programming language is known as the backbone of the web?", ["a" => "Python", "b" => "JavaScript", "c" => "C++"], "b"],
    ["What does GPU stand for?", ["a" => "Graphics Processing Unit", "b" => "Gaming Performance Unit", "c" => "General Processing Unit"], "a"],
    ["Which OS is developed by Microsoft?", ["a" => "Windows", "b" => "Linux", "c" => "macOS"], "a"],
    ["What is the latest USB standard as of 2025?", ["a" => "USB 3.0", "b" => "USB-C", "c" => "USB4"], "c"],
    ["Which language is primarily used for iOS app development?", ["a" => "Swift", "b" => "Java", "c" => "Kotlin"], "a"],
    ["What does HTTP stand for?", ["a" => "HyperText Transfer Protocol", "b" => "Hyper Technical Transfer Protocol", "c" => "Hyper Transfer Text Protocol"], "a"],
    ["What is an SSD?", ["a" => "Solid State Drive", "b" => "Secure Software Drive", "c" => "System Software Disk"], "a"],
    ["Which company owns Android?", ["a" => "Microsoft", "b" => "Apple", "c" => "Google"], "c"],
    ["What does AI stand for?", ["a" => "Artificial Intelligence", "b" => "Automated Interface", "c" => "Advanced Integration"], "a"],
    ["Which tech company makes the Pixel phone?", ["a" => "Samsung", "b" => "Google", "c" => "OnePlus"], "b"],
    ["What is the full form of URL?", ["a" => "Uniform Resource Locator", "b" => "Universal Resource Link", "c" => "Unified Resource Locator"], "a"],
    ["Which programming language runs in the browser?", ["a" => "Java", "b" => "C#", "c" => "JavaScript"], "c"],
    ["What does IoT stand for?", ["a" => "Internet of Things", "b" => "Internet of Technology", "c" => "Information of Things"], "a"],
    ["Which company is known for Azure cloud services?", ["a" => "Amazon", "b" => "Google", "c" => "Microsoft"], "c"],
    ["Which database is open-source?", ["a" => "Oracle", "b" => "MySQL", "c" => "SQL Server"], "b"],
    ["What does BIOS stand for?", ["a" => "Basic Input Output System", "b" => "Binary Integrated Operating System", "c" => "Basic Internal Operating Service"], "a"],
    ["Which port is used for HTTP?", ["a" => "80", "b" => "443", "c" => "21"], "a"],
    ["Which tool is used for version control?", ["a" => "Docker", "b" => "Git", "c" => "Jenkins"], "b"],
    ["What does VPN stand for?", ["a" => "Virtual Private Network", "b" => "Verified Protected Network", "c" => "Virtual Protected Node"], "a"],
    ["Which company created the Surface line of devices?", ["a" => "Apple", "b" => "Microsoft", "c" => "Dell"], "b"],
    ["What is the main purpose of an operating system?", ["a" => "Run games", "b" => "Manage hardware and software", "c" => "Provide internet access"], "b"],
    ["What is cloud computing?", ["a" => "Computing using the sky", "b" => "Using remote servers for data storage and computing", "c" => "Building data centers"], "b"],
    ["Which is a front-end framework?", ["a" => "Laravel", "b" => "React", "c" => "Django"], "b"],
    ["Which device converts digital signals to analog?", ["a" => "Router", "b" => "Modem", "c" => "Switch"], "b"],
    ["What is phishing?", ["a" => "Fishing online", "b" => "Cyberattack tricking users for data", "c" => "Programming error"], "b"],
    ["Which component stores the BIOS?", ["a" => "RAM", "b" => "Hard Drive", "c" => "Motherboard"], "c"]
];

shuffle($questions);
$quiz = array_slice($questions, 0, 10);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tech Quiz</title>
    <link rel="stylesheet" href="quiz_style.css">
    <script>
        let timeLeft = 60;
        function startTimer() {
            const timerDisplay = document.getElementById("timer");
            const quizForm = document.getElementById("quizForm");
            const countdown = setInterval(() => {
                if (timeLeft <= 0) {
                    clearInterval(countdown);
                    quizForm.submit();
                } else {
                    timerDisplay.textContent = `Time Remaining: ${timeLeft} seconds`;
                    timeLeft--;
                }
            }, 1000);
        }
        window.onload = startTimer;
    </script>
</head>
<body>
    <h1>Tech Quiz</h1>
    <div id="timer" style="font-size: 20px; color: red; margin-bottom: 20px;"></div>
    <form id="quizForm" action="quiz2.php" method="post">
        <?php foreach ($quiz as $index => [$question, $options, $correct]): ?>
            <h3><?php echo ($index + 1) . ". " . $question; ?></h3>
            <input type="hidden" name="question<?php echo $index; ?>" value="<?php echo htmlspecialchars($question); ?>">
            <input type="hidden" name="answer<?php echo $index; ?>" value="<?php echo $correct; ?>">
            <?php foreach ($options as $key => $option): ?>
                <input type="radio" name="q<?php echo $index; ?>" value="<?php echo $key; ?>" required>
                <?php echo $option; ?><br>
                <input type="hidden" name="option<?php echo $index . $key; ?>" value="<?php echo htmlspecialchars($option); ?>">
            <?php endforeach; ?>
            <br>
        <?php endforeach; ?>
        <input type="submit" value="Submit Quiz">
    </form>
</body>
</html>