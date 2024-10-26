<!DOCTYPE html>
<html>
<head>
    <title>Loop Statements</title>
    <style>
        @keyframes backgroundChange {
            0% { background-color: #ff9966; }
            50% { background-color: #ff5e62; }
            100% { background-color: #ff9966; }
        }

        @keyframes bubbleFloat {
            0% { transform: translateY(0); opacity: 1; }
            50% { transform: translateY(-20px); opacity: 0.7; }
            100% { transform: translateY(0); opacity: 1; }
        }

        body {
            background: linear-gradient(45deg, #6a11cb, #2575fc);
            animation: backgroundChange 10s infinite;
            font-family: 'Arial', sans-serif;
            color: #fff;
            overflow: hidden;
            position: relative;
            text-align: center;
            padding: 50px;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: rgba(0, 0, 0, 0.7);
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
            animation: slideIn 1s ease-out;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        p, ul, table {
            font-size: 1.2em;
            color: #fff;
            margin: 10px 0;
            text-align: left;
        }

        .home-button {
            background-color: #34ace0;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 1.2em;
            margin: 20px auto;
            border-radius: 5px;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .home-button:hover {
            background-color: #227093;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #fff;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #34ace0;
        }

        /* Floating bubble animation */
        .bubble {
            position: absolute;
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            animation: bubbleFloat 6s ease-in-out infinite;
        }

        .bubble:nth-child(1) {
            top: 10%;
            left: 20%;
            animation-delay: 0s;
        }

        .bubble:nth-child(2) {
            top: 30%;
            left: 50%;
            animation-delay: 1s;
        }

        .bubble:nth-child(3) {
            top: 60%;
            left: 80%;
            animation-delay: 2s;
        }

        .bubble:nth-child(4) {
            top: 80%;
            left: 30%;
            animation-delay: 3s;
        }

        .bubble:nth-child(5) {
            top: 50%;
            left: 70%;
            animation-delay: 4s;
        }
    </style>
</head>
<body>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="bubble"></div>
    <div class="container">
        <h1>Loop Statements</h1>
        <?php
        $n = 5;
        $m = 7;

        echo "<h2>Multiplication Table for $n x $m:</h2>";
        echo "<table><tr><th>*</th>";
        for ($i = 1; $i <= $m; $i++) {
            echo "<th>$i</th>";
        }
        echo "</tr>";

        for ($i = 1; $i <= $n; $i++) {
            echo "<tr><th>$i</th>";
            for ($j = 1; $j <= $m; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";

        echo "<h2>Fibonacci Series:</h2>";

        // Fibonacci for n
        $fib_n = [0, 1];
        while (count($fib_n) < $n) {
            $fib_n[] = end($fib_n) + prev($fib_n);
        }
        echo "<p>First $n Fibonacci numbers: " . implode(", ", $fib_n) . "</p>";

        // Fibonacci for m
        $fib_m = [0, 1];
        while (count($fib_m) < $m) {
            $fib_m[] = end($fib_m) + prev($fib_m);
        }
        echo "<p>First $m Fibonacci numbers: " . implode(", ", $fib_m) . "</p>";

        echo "<h2>Factorial of $n and Summation of $m:</h2>";

        // Factorial of n using do...while loop
        $factorial = 1;
        $i = $n;
        do {
            $factorial *= $i;
            $i--;
        } while ($i > 0);
        echo "<p>Factorial of $n is $factorial</p>";

        // Summation of m using do...while loop
        $summation = 0;
        $j = 1;
        do {
            $summation += $j;
            $j++;
        } while ($j <= $m);
        echo "<p>Summation of 1 to $m is $summation</p>";
        ?>
        <a href="mainpage.php" class="home-button">Back to Home</a>
    </div>
</body>
</html>
