<!DOCTYPE html>
<html>
<head>
    <title>Selection Statements</title>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
            100% { transform: translateY(0); }
        }

        body {
            background: linear-gradient(to right, #ff9966, #ff5e62); /* Subtle gradient background */
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
            background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent background */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.5);
            animation: fadeIn 2s ease-in-out;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        p, ul {
            font-size: 1.2em;
            color: #fff;
            margin: 10px 0;
            text-align: left;
        }

        .home-button {
            background-color: #ff4757; /* Red for the button */
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
            background-color: #ff6b81; /* Lighter red on hover */
        }

        /* Floating animation */
        .float {
            position: absolute;
            width: 80px;
            height: 80px;
            background: rgba(255, 255, 255, 0.2);
            border-radius: 50%;
            animation: float 4s ease-in-out infinite;
        }

        .float:nth-child(1) {
            top: 10%;
            left: 20%;
            animation-delay: 0s;
        }

        .float:nth-child(2) {
            top: 30%;
            left: 50%;
            animation-delay: 1s;
        }

        .float:nth-child(3) {
            top: 60%;
            left: 80%;
            animation-delay: 2s;
        }

        .float:nth-child(4) {
            top: 80%;
            left: 30%;
            animation-delay: 3s;
        }

        .float:nth-child(5) {
            top: 50%;
            left: 70%;
            animation-delay: 4s;
        }
    </style>
</head>
<body>
    <div class="float"></div>
    <div class="float"></div>
    <div class="float"></div>
    <div class="float"></div>
    <div class="float"></div>
    <div class="container">
        <h1>Selection Statements</h1>
        <?php
        // Initialize variables
        $strings = ["Mango", "Apple", "Banana", "Cherry", "Date"];
        $integers = [15, 22, 7, 5, 10];

        // Function to sort strings in ascending order
        function sortStringsAscending($array) {
            for ($i = 0; $i < count($array) - 1; $i++) {
                for ($j = $i + 1; $j < count($array); $j++) {
                    if ($array[$i] > $array[$j]) {
                        $temp = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j] = $temp;
                    }
                }
            }
            return $array;
        }

        // Function to sort strings in descending order
        function sortStringsDescending($array) {
            for ($i = 0; $i < count($array) - 1; $i++) {
                for ($j = $i + 1; $j < count($array); $j++) {
                    if ($array[$i] < $array[$j]) {
                        $temp = $array[$i];
                        $array[$i] = $array[$j];
                        $array[$j] = $temp;
                    }
                }
            }
            return $array;
        }

        // Display sorted strings
        $strings_asc = sortStringsAscending($strings);
        $strings_desc = sortStringsDescending($strings);

        echo "<p><strong>Strings in Ascending Order:</strong></p><ul>";
        foreach ($strings_asc as $string) {
            echo "<li>$string</li>";
        }
        echo "</ul>";

        echo "<p><strong>Strings in Descending Order:</strong></p><ul>";
        foreach ($strings_desc as $string) {
            echo "<li>$string</li>";
        }
        echo "</ul>";

        // Check if the first number is divisible by the fifth number
        if ($integers[0] % $integers[4] == 0) {
            $sum = array_sum($integers);
            $product = array_product($integers);
            $average = $sum / count($integers);

            echo "<p><strong>Sum:</strong> $sum</p>";
            echo "<p><strong>Product:</strong> $product</p>";
            echo "<p><strong>Average:</strong> $average</p>";
        } else {
            // Sort integers in ascending order
            for ($i = 0; $i < count($integers) - 1; $i++) {
                for ($j = $i + 1; $j < count($integers); $j++) {
                    if ($integers[$i] > $integers[$j]) {
                        $temp = $integers[$i];
                        $integers[$i] = $integers[$j];
                        $integers[$j] = $temp;
                    }
                }
            }

            echo "<p><strong>Integers in Ascending Order:</strong></p><ul>";
            foreach ($integers as $number) {
                echo "<li>$number</li>";
            }
            echo "</ul>";
        }
        ?>
        <a href="mainpage.php" class="home-button">Back to Home</a>
    </div>
</body>
</html>
