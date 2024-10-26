<!DOCTYPE html>
<html>
<head>
    <title>The Use of Variables</title>
    <style>
        @keyframes float {
            0% { transform: translateY(0); }
            50% { transform: translateY(-20px); }
            100% { transform: translateY(0); }
        }

        body {
            background: linear-gradient(45deg, #85FFBD, #FFFB7D); /* Fitting gradient background */
            font-family: Arial, sans-serif;
            overflow: hidden; /* Hide overflowing content */
            position: relative;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: rgba(255, 255, 255, 0.9); /* Semi-transparent background */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        h1 {
            color: #2c3e50; /* A deep, contrasting color */
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        p {
            color: #34495e; /* A cool navy for readability */
            font-size: 1.2em;
        }

        .home-button {
            background-color: #009688; /* Red for the button */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: block;
            font-size: 1.2em;
            margin: 20px auto;
            width: 200px;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .home-button:hover {
            background-color: #00796b; /* Lighter red on hover */
        }

        /* Floating animation */
        .float {
            position: absolute;
            width: 100px;
            height: 100px;
            background: rgba(0, 123, 255, 0.2);
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
        <h1>The Use of Variables</h1>
        <?php
        // Declare variables
        $whole_numbers = [10, 20, 30, 40, 50];
        $floating_numbers = [1.1, 2.2, 3.3, 4.4, 5.5];
        $strings = ["Apple", "Banana", "Cherry", "Date", "Elderberry"];
        $characters = ['A', 'B', 'C', 'D', 'E'];

        // Display variables with corresponding messages
        echo "<p><strong>Whole Numbers:</strong></p>";
        foreach ($whole_numbers as $number) {
            echo "<p>Whole number: $number</p>";
        }

        echo "<p><strong>Floating Point Numbers:</strong></p>";
        foreach ($floating_numbers as $number) {
            echo "<p>Floating point number: $number</p>";
        }

        echo "<p><strong>Strings:</strong></p>";
        foreach ($strings as $string) {
            echo "<p>String: $string</p>";
        }

        echo "<p><strong>Characters:</strong></p>";
        foreach ($characters as $char) {
            echo "<p>Character: $char</p>";
        }
        ?>
        <a href="mainpage.php" class="home-button">Back to Home</a>
    </div>
</body>
</html>
