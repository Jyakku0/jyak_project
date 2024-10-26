<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Two-dimensional Array</title>


    <style>
        @keyframes backgroundAnimation {
            0% { background-color: #4c4cff; }
            50% { background-color: #00ccff; }
            100% { background-color: #4c4cff; }
        }

        @keyframes floatingSquares {
            0% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0); }
        }

        body {
            background: linear-gradient(45deg, #4c4cff, #00ccff);
            animation: backgroundAnimation 10s infinite;
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
        }

        h1, h2, h3 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        p {
            font-size: 1.2em;
            margin: 10px 0;
        }

        .home-button {
            background-color: #4c4cff;
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
            background-color: #00ccff;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #fff;
            padding: 10px;
            text-align: center;
        }

        th {
            background-color: #4c4cff;
        }

        .square {
            position: absolute;
            width: 100px;
            height: 100px;
            background: rgba(255, 255, 255, 0.1);
            animation: floatingSquares 6s ease-in-out infinite;
        }

        .square:nth-child(1) {
            top: 10%;
            left: 20%;
            animation-delay: 0s;
        }

        .square:nth-child(2) {
            top: 30%;
            left: 50%;
            animation-delay: 1s;
        }

        .square:nth-child(3) {
            top: 60%;
            left: 80%;
            animation-delay: 2s;
        }

        .square:nth-child(4) {
            top: 80%;
            left: 30%;
            animation-delay: 3s;
        }

        .square:nth-child(5) {
            top: 50%;
            left: 70%;
            animation-delay: 4s;
        }
    </style>
</head>
<body>
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
    <div class="square"></div>
    <div class="container">
</head>
<body>
    <h1>Two-dimensional Array Operations</h1>

    <?php
    // Define the size of the array
    $N = 4;

    // Create an NxN array and populate it with random integers
    $array = [];
    for ($i = 0; $i < $N; $i++) {
        for ($j = 0; $j < $N; $j++) {
            $array[$i][$j] = rand(1, 100); // Random integers between 1 and 100
        }
    }

    // Display the array
    echo "<h2>Generated Array:</h2>";
    echo "<table border='1'>";
    for ($i = 0; $i < $N; $i++) {
        echo "<tr>";
        for ($j = 0; $j < $N; $j++) {
            echo "<td>" . $array[$i][$j] . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";

    // Initialize sums and min/max values
    $rowSums = [];
    $colSums = array_fill(0, $N, 0);
    $diagonal1Sum = 0;
    $diagonal2Sum = 0;

    $overallSum = 0;
    $overallMin = PHP_INT_MAX;
    $overallMax = PHP_INT_MIN;

    // Calculate sums, averages, min, and max
    for ($i = 0; $i < $N; $i++) {
        $rowSum = 0;
        $rowMin = PHP_INT_MAX;
        $rowMax = PHP_INT_MIN;

        for ($j = 0; $j < $N; $j++) {
            $value = $array[$i][$j];

            // Sum and average for rows
            $rowSum += $value;
            $rowMin = min($rowMin, $value);
            $rowMax = max($rowMax, $value);

            // Sum for columns
            $colSums[$j] += $value;

            // Diagonal sums
            if ($i == $j) {
                $diagonal1Sum += $value; // Primary diagonal
            }
            if ($i + $j == $N - 1) {
                $diagonal2Sum += $value; // Secondary diagonal
            }

            // Overall calculations
            $overallSum += $value;
            $overallMin = min($overallMin, $value);
            $overallMax = max($overallMax, $value);
        }
        
        // Store row sums
        $rowSums[] = $rowSum;
    }

    // Display results
    echo "<h2>Results:</h2>";

    // Row sums and averages
    echo "<h3>Row Sums and Averages:</h3>";
    for ($i = 0; $i < $N; $i++) {
        echo "Row " . ($i + 1) . ": Sum = " . $rowSums[$i] . ", Average = " . ($rowSums[$i] / $N) . "<br>";
    }

    // Column sums and averages
    echo "<h3>Column Sums and Averages:</h3>";
    for ($j = 0; $j < $N; $j++) {
        echo "Column " . ($j + 1) . ": Sum = " . $colSums[$j] . ", Average = " . ($colSums[$j] / $N) . "<br>";
    }

    // Diagonal sums and averages
    echo "<h3>Diagonal Sums:</h3>";
    echo "Primary Diagonal Sum = $diagonal1Sum, Average = " . ($diagonal1Sum / $N) . "<br>";
    echo "Secondary Diagonal Sum = $diagonal2Sum, Average = " . ($diagonal2Sum / $N) . "<br>";

    // Overall sum and average
    echo "<h3>Overall Sum and Average:</h3>";
    echo "Overall Sum = $overallSum, Average = " . ($overallSum / ($N * $N)) . "<br>";
    echo "Overall Min = $overallMin, Overall Max = $overallMax<br>";
    ?>
    <br><br>
    <a href="mainpage.php" class="home-button">Back to Home</a>
</body>
</html>
