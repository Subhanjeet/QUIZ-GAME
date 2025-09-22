<?php
//80 question are there in tech field
$questions = [
    ["What does CPU stand for?", ["Central Processing Unit" => "Central Processing Unit", "Central Programming Unit" => "Central Programming Unit", "Computer Personal Unit" => "Computer Personal Unit"], "Central Processing Unit"],
    ["What is the main function of RAM?", ["Store permanent data" => "Store permanent data", "Store temporary data" => "Store temporary data", "Control the computer" => "Control the computer"], "Store temporary data"],
    ["Which company created the iPhone?", ["Samsung" => "Samsung", "Apple" => "Apple", "Google" => "Google"], "Apple"],
    ["What does HTML stand for?", ["Hyperlinks and Text Markup Language" => "Hyperlinks and Text Markup Language", "Hyper Text Markup Language" => "Hyper Text Markup Language", "Home Tool Markup Language" => "Home Tool Markup Language"], "Hyper Text Markup Language"],
    ["Which programming language is known as the backbone of the web?", ["Python" => "Python", "JavaScript" => "JavaScript", "C++" => "C++"], "JavaScript"],
    ["What does GPU stand for?", ["Graphics Processing Unit" => "Graphics Processing Unit", "Gaming Performance Unit" => "Gaming Performance Unit", "General Processing Unit" => "General Processing Unit"], "Graphics Processing Unit"],
    ["Which OS is developed by Microsoft?", ["Windows" => "Windows", "Linux" => "Linux", "macOS" => "macOS"], "Windows"],
    ["What is the latest USB standard as of 2025?", ["USB 3.0" => "USB 3.0", "USB-C" => "USB-C", "USB4" => "USB4"], "USB4"],
    ["Which language is primarily used for iOS app development?", ["Swift" => "Swift", "Java" => "Java", "Kotlin" => "Kotlin"], "Swift"],
    ["What does HTTP stand for?", ["HyperText Transfer Protocol" => "HyperText Transfer Protocol", "Hyper Technical Transfer Protocol" => "Hyper Technical Transfer Protocol", "Hyper Transfer Text Protocol" => "Hyper Transfer Text Protocol"], "HyperText Transfer Protocol"],
    ["What is an SSD?", ["Solid State Drive" => "Solid State Drive", "Secure Software Drive" => "Secure Software Drive", "System Software Disk" => "System Software Disk"], "Solid State Drive"],
    ["Which company owns Android?", ["Microsoft" => "Microsoft", "Apple" => "Apple", "Google" => "Google"], "Google"],
    ["What does AI stand for?", ["Artificial Intelligence" => "Artificial Intelligence", "Automated Interface" => "Automated Interface", "Advanced Integration" => "Advanced Integration"], "Artificial Intelligence"],
    ["Which tech company makes the Pixel phone?", ["Samsung" => "Samsung", "Google" => "Google", "OnePlus" => "OnePlus"], "Google"],
    ["What is the full form of URL?", ["Uniform Resource Locator" => "Uniform Resource Locator", "Universal Resource Link" => "Universal Resource Link", "Unified Resource Locator" => "Unified Resource Locator"], "Uniform Resource Locator"],
    ["Which programming language runs in the browser?", ["Java" => "Java", "C#" => "C#", "JavaScript" => "JavaScript"], "JavaScript"],
    ["What does IoT stand for?", ["Internet of Things" => "Internet of Things", "Internet of Technology" => "Internet of Technology", "Information of Things" => "Information of Things"], "Internet of Things"],
    ["Which company is known for Azure cloud services?", ["Amazon" => "Amazon", "Google" => "Google", "Microsoft" => "Microsoft"], "Microsoft"],
    ["Which database is open-source?", ["Oracle" => "Oracle", "MySQL" => "MySQL", "SQL" => "SQL Server"], "MySQL"],
    ["What does BIOS stand for?", ["Basic Input Output System" => "Basic Input Output System", "Binary Integrated Operating System" => "Binary Integrated Operating System", "Basic Internal Operating Service" => "Basic Internal Operating Service"], "Basic Input Output System"],
    ["Which port is used for HTTP?", ["80" => "80", "443" => "443", "21" => "21"], "80"],
    ["Which tool is used for version control?", ["Docker" => "Docker", "Git" => "Git", "Jenkins" => "Jenkins"], "Git"],
    ["What does VPN stand for?", ["Virtual Private Network" => "Virtual Private Network", "Verified Protected Network" => "Verified Protected Network", "Virtual Protected Node" => "Virtual Protected Node"], "Virtual Private Network"],
    ["Which company created the Surface line of devices?", ["Apple" => "Apple", "Microsoft" => "Microsoft", "Dell" => "Dell"], "Microsoft"],
    ["What is the main purpose of an operating system?", ["Run games" => "Run games", "Manage hardware and software" => "Manage hardware and software", "Provide internet access" => "Provide internet access"], "Manage hardware and software"],
    ["What is cloud computing?", ["Computing using the sky" => "Computing using the sky", "Using remote servers for data storage and computing" => "Using remote servers for data storage and computing", "Building data centers" => "Building data centers"], "Using remote servers for data storage and computing"],
    ["Which is a front-end framework?", ["Laravel" => "Laravel", "React" => "React", "Django" => "Django"], "React"],
    ["Which device converts digital signals to analog?", ["Router" => "Router", "Modem" => "Modem", "Switch" => "Switch"], "Modem"],
    ["What is phishing?", ["Fishing online" => "Fishing online", "Cyberattack tricking users for data" => "Cyberattack tricking users for data", "Programming error" => "Programming error"], "Cyberattack tricking users for data"],
    ["Which component stores the BIOS?", ["RAM" => "RAM", "Hard Drive" => "Hard Drive", "Motherboard" => "Motherboard"], "Motherboard"],
    ["What does SQL stand for?", ["Structured Query Language" => "Structured Query Language", "Sequential Query Language" => "Sequential Query Language", "Standard Question Language" => "Standard Question Language"], "Structured Query Language"],
    ["Which protocol is used for secure communication over the web?", ["HTTP" => "HTTP", "HTTPS" => "HTTPS", "FTP" => "FTP"], "HTTPS"],
    ["Which company developed the Java programming language?", ["Microsoft" => "Microsoft", "Sun Microsystems" => "Sun Microsystems", "IBM" => "IBM"], "Sun Microsystems"],
    ["What does CSS stand for?", ["Cascading Style Sheets" => "Cascading Style Sheets", "Creative Style System" => "Creative Style System", "Computer Styling Sheet" => "Computer Styling Sheet"], "Cascading Style Sheets"],
    ["Which programming language is known for its snake logo?", ["Python" => "Python", "Java" => "Java", "Ruby" => "Ruby"], "Python"],
    ["Which database is developed by Oracle?", ["PostgreSQL" => "PostgreSQL", "MySQL" => "MySQL", "Oracle Database" => "Oracle Database"], "Oracle Database"],
    ["What does IP stand for in networking?", ["Internet Protocol" => "Internet Protocol", "Internal Program" => "Internal Program", "Input Process" => "Input Process"], "Internet Protocol"],
    ["Which device forwards data packets between networks?", ["Hub" => "Hub", "Router" => "Router", "Switch" => "Switch"], "Router"],
    ["What is the full form of API?", ["Application Programming Interface" => "Application Programming Interface", "Applied Program Instruction" => "Applied Program Instruction", "Advanced Protocol Interface" => "Advanced Protocol Interface"], "Application Programming Interface"],
    ["Which programming language is used for Android app development?", ["Swift" => "Swift", "Kotlin" => "Kotlin", "PHP" => "PHP"], "Kotlin"],
    ["What is the default port number of HTTPS?", ["21" => "21", "80" => "80", "443" => "443"], "443"],
    ["Which company developed the C programming language?", ["Bell Labs" => "Bell Labs", "Microsoft" => "Microsoft", "IBM" => "IBM"], "Bell Labs"],
    ["What does DNS stand for?", ["Domain Name System" => "Domain Name System", "Data Network Service" => "Data Network Service", "Digital Node Setup" => "Digital Node Setup"], "Domain Name System"],
    ["Which company makes the macOS operating system?", ["Microsoft" => "Microsoft", "Apple" => "Apple", "Google" => "Google"], "Apple"],
    ["What does LAN stand for?", ["Local Area Network" => "Local Area Network", "Large Access Network" => "Large Access Network", "Linked Area Node" => "Linked Area Node"], "Local Area Network"],
    ["Which programming paradigm is Java primarily based on?", ["Object-Oriented" => "Object-Oriented", "Functional" => "Functional", "Procedural" => "Procedural"], "Object-Oriented"],
    ["What does PDF stand for?", ["Portable Document Format" => "Portable Document Format", "Program Data File" => "Program Data File", "Page Description Format" => "Page Description Format"], "Portable Document Format"],
    ["Which part of the computer is called the 'brain'?", ["CPU" => "CPU", "RAM" => "RAM", "GPU" => "GPU"], "CPU"],
    ["What does SaaS stand for in cloud computing?", ["Software as a Service" => "Software as a Service", "Storage as a Service" => "Storage as a Service", "System as a Solution" => "System as a Solution"], "Software as a Service"],
    ["Which data structure uses FIFO principle?", ["Stack" => "Stack", "Queue" => "Queue", "Tree" => "Tree"], "Queue"],
    ["What does IP address uniquely identify?", ["A device on a network" => "A device on a network", "A programming language" => "A programming language", "A website design" => "A website design"], "A device on a network"],
    ["Which company provides AWS cloud services?", ["Google" => "Google", "Amazon" => "Amazon", "Microsoft" => "Microsoft"], "Amazon"],
    ["What does GUI stand for?", ["Graphical User Interface" => "Graphical User Interface", "General Utility Interface" => "General Utility Interface", "Global User Interaction" => "Global User Interaction"], "Graphical User Interface"],
    ["Which protocol is used to send emails?", ["SMTP" => "SMTP", "FTP" => "FTP", "IMAP" => "IMAP"], "SMTP"],
    ["Which part of the computer is responsible for graphics rendering?", ["CPU" => "CPU", "GPU" => "GPU", "RAM" => "RAM"], "GPU"],
    ["What does MAC address stand for?", ["Media Access Control" => "Media Access Control", "Machine Account Code" => "Machine Account Code", "Main Access Connection" => "Main Access Connection"], "Media Access Control"],
    ["Which device is used to connect multiple devices in a network?", ["Router" => "Router", "Switch" => "Switch", "Monitor" => "Monitor"], "Switch"],
    ["What is the extension of a Java source code file?", [".jav" => ".jav", ".java" => ".java", ".jv" => ".jv"], ".java"],
    ["Which protocol is used to transfer files over the internet?", ["FTP" => "FTP", "SMTP" => "SMTP", "HTTP" => "HTTP"], "FTP"],
    ["What does XML stand for?", ["eXtensible Markup Language" => "eXtensible Markup Language", "Extra Markup Language" => "Extra Markup Language", "Executable Markup Language" => "Executable Markup Language"], "eXtensible Markup Language"],
    ["Which company developed Linux?", ["Linus Torvalds" => "Linus Torvalds", "Microsoft" => "Microsoft", "Apple" => "Apple"], "Linus Torvalds"],
    ["What does ASCII stand for?", ["American Standard Code for Information Interchange" => "American Standard Code for Information Interchange", "Advanced Standard Computer Information Interface" => "Advanced Standard Computer Information Interface", "Applied System Coding Information" => "Applied System Coding Information"], "American Standard Code for Information Interchange"],
    ["Which memory is non-volatile?", ["RAM" => "RAM", "ROM" => "ROM", "Cache" => "Cache"], "ROM"],
    ["What does API testing mainly check?", ["Database queries" => "Database queries", "Application Interfaces" => "Application Interfaces", "Memory usage" => "Memory usage"], "Application Interfaces"],
    ["Which company created GitHub?", ["Microsoft" => "Microsoft", "Git" => "Git", "GitHub Inc." => "GitHub Inc."], "GitHub Inc."],
    ["What does DHCP stand for?", ["Dynamic Host Configuration Protocol" => "Dynamic Host Configuration Protocol", "Data Host Control Program" => "Data Host Control Program", "Device Hardware Configuration Process" => "Device Hardware Configuration Process"], "Dynamic Host Configuration Protocol"],
    ["Which type of software controls computer hardware?", ["Application Software" => "Application Software", "System Software" => "System Software", "Utility Software" => "Utility Software"], "System Software"],
    ["What is the default port of MySQL?", ["3306" => "3306", "1433" => "1433", "1521" => "1521"], "3306"],
    ["What does XML primarily store?", ["Graphics" => "Graphics", "Structured Data" => "Structured Data", "Audio" => "Audio"], "Structured Data"],
    ["Which data structure uses LIFO principle?", ["Queue" => "Queue", "Tree" => "Tree", "Stack" => "Stack"], "Stack"],
    ["What is the main function of a compiler?", ["Translate code to machine language" => "Translate code to machine language", "Execute programs directly" => "Execute programs directly", "Manage memory" => "Manage memory"], "Translate code to machine language"],
    ["What does HTML tag `<a>` represent?", ["Paragraph" => "Paragraph", "Anchor (link)" => "Anchor (link)", "Heading" => "Heading"], "Anchor (link)"],
    ["Which number system does a computer use?", ["Decimal" => "Decimal", "Binary" => "Binary", "Octal" => "Octal"], "Binary"],
    ["What is the primary function of cache memory?", ["Store frequently used data" => "Store frequently used data", "Backup files" => "Backup files", "Manage graphics" => "Manage graphics"], "Store frequently used data"],
    ["Which company developed the Windows OS?", ["Microsoft" => "Microsoft", "Apple" => "Apple", "IBM" => "IBM"], "Microsoft"],
    ["What does HTTPS provide in addition to HTTP?", ["Faster loading" => "Faster loading", "Encryption" => "Encryption", "File storage" => "File storage"], "Encryption"],
    ["Which language is mainly used for statistical computing?", ["R" => "R", "Python" => "Python", "C" => "C"], "R"],
    ["What is the smallest unit of data in computing?", ["Byte" => "Byte", "Bit" => "Bit", "Nibble" => "Nibble"], "Bit"],
    ["Which OS is open-source?", ["Windows" => "Windows", "Linux" => "Linux", "macOS" => "macOS"], "Linux"],
    ["What does SEO stand for?", ["Search Engine Optimization" => "Search Engine Optimization", "System Engine Operation" => "System Engine Operation", "Software Execution Order" => "Software Execution Order"], "Search Engine Optimization"],
    ["Which organization manages IP addresses globally?", ["IETF" => "IETF", "ICANN" => "ICANN", "W3C" => "W3C"], "ICANN"]
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
        let timeLeft = 120;
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
    <form id="quizForm" action="result.php" method="post">
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