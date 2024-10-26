<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Using Math Functions</title>
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Subtle gradient background */
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #fff;
            overflow: hidden; /* Hide overflowing content */
            position: relative;
            text-align: center;
            padding: 50px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background-color: rgba(0, 0, 0, 0.7); /* Semi-transparent background */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
        }
        h1, h2, h3 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        p {
            font-size: 1.2em;
            margin: 10px 0;
        }
        .math-function {
            text-align: left;
            margin: 20px auto;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
        }
        .home-button {
            background-color: #ff6b6b; /* Red for the button */
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
            background-color: #ff4757; /* Darker red on hover */
        }
        /* Exploding animation */
        .explosion {
            position: absolute;
            width: 50px;
            height: 50px;
            background: rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            animation: explode 2s infinite;
        }
        @keyframes explode {
            0%, 100% {
                transform: scale(0);
                opacity: 0;
            }
            50% {
                transform: scale(3);
                opacity: 1;
            }
        }
        .explosion:nth-child(1) { top: 10%; left: 20%; animation-delay: 0s; }
        .explosion:nth-child(2) { top: 30%; left: 50%; animation-delay: 0.5s; }
        .explosion:nth-child(3) { top: 60%; left: 80%; animation-delay: 1s; }
        .explosion:nth-child(4) { top: 80%; left: 30%; animation-delay: 1.5s; }
        .explosion:nth-child(5) { top: 50%; left: 70%; animation-delay: 2s; }
    </style>
</head>
<body>
    <div class="explosion"></div>
    <div class="explosion"></div>
    <div class="explosion"></div>
    <div class="explosion"></div>
    <div class="explosion"></div>
    <div class="container">
        <h1>Using Math Functions</h1>
        <?php
        // Declare five floating point numbers and five whole numbers
        $float_numbers = [3.14, 1.618, 2.718, 4.669, 0.577];
        $whole_numbers = [5, 10, 15, 20, 25];

        // Function to calculate factorial
        function factorial($n) {
            if ($n < 0) {
                return "undefined"; // Factorial is not defined for negative numbers
            }
            return ($n == 0) ? 1 : $n * factorial($n - 1);
        }

        // Calculate and display results using various math functions
        echo "<h2>Floating Point Numbers:</h2>";
        echo "<p>Numbers: " . implode(", ", $float_numbers) . "</p>";
        // Using various math functions on floating point numbers
        echo "<h3>Math Functions Results:</h3>";
        echo "<div class='math-function'><p><strong>Max</strong>: " . max($float_numbers) . "</p></div>";
        echo "<div class='math-function'><p><strong>Min</strong>: " . min($float_numbers) . "</p></div>";
        echo "<div class='math-function'><p><strong>Average</strong>: " . array_sum($float_numbers) / count($float_numbers) . "</p></div>";
        echo "<div class='math-function'><p><strong>Square Root of first number</strong>: " . sqrt($float_numbers[0]) . "</p></div>";
        echo "<div class='math-function'><p><strong>Ceiling of second number</strong>: " . ceil($float_numbers[1]) . "</p></div>";
        echo "<div class='math-function'><p><strong>Floor of third number</strong>: " . floor($float_numbers[2]) . "</p></div>";
        echo "<div class='math-function'><p><strong>Round fourth number</strong>: " . round($float_numbers[3]) . "</p></div>";
        echo "<div class='math-function'><p><strong>Exponentiation of fifth number (e^x)</strong>: " . exp($float_numbers[4]) . "</p></div>";
        echo "<div class='math-function'><p><strong>Natural Logarithm of first number</strong>: " . log($float_numbers[0]) . "</p></div>";
        echo "<div class='math-function'><p><strong>Base-10 Logarithm of first number</strong>: " . log10($float_numbers[0]) . "</p></div>";
        echo "<div class='math-function'><p><strong>Sine of first number (in radians)</strong>: " . sin($float_numbers[0]) . "</p></div>";
        echo "<div class='math-function'><p><strong>Cosine of first number (in radians)</strong>: " . cos($float_numbers[0]) . "</p></div>";
        echo "<div class='math-function'><p><strong>Tangent of first number (in radians)</strong>: " . tan($float_numbers[0]) . "</p></div>";

        echo "<h2>Whole Numbers:</h2>";
        echo "<p>Numbers: " . implode(", ", $whole_numbers) . "</p>";
        // Using various math functions on whole numbers
        echo "<h3>Math Functions Results:</h3>";
        echo "<div class='math-function'><p><strong>Max</strong>: " . max($whole_numbers) . "</p></div>";
        echo "<div class='math-function'><p><strong>Min</strong>: " . min($whole_numbers) . "</p></div>";
        echo "<div class='math-function'><p><strong>Sum</strong>: " . array_sum($whole_numbers) . "</p></div>";
        echo "<div class='math-function'><p><strong>Product</strong>: " . array_product($whole_numbers) . "</p></div>";
        echo "<div class='math-function'><p><strong>Square of first number</strong>: " . pow($whole_numbers[0], 2) . "</p></div>";
        echo "<div class='math-function'><p><strong>Factorial of second number</strong>: " . factorial($whole_numbers[1]) . "</p></div>";
        echo "<div class='math-function'><p><strong>Random number between first and second number</strong>: " . rand($whole_numbers[0], $whole_numbers[1]) . "</p></div>";
        ?>
        <br>
        <a href="mainpage.php" class="home-button">Back to Home</a>
    </div>
</body>
</html>
