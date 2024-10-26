<!DOCTYPE html>
<html>
<head>
    <title>Single-dimensional Array</title>
    <style>
        @keyframes backgroundAnimation {
            0% { background-color: #ff7979; }
            50% { background-color: #badc58; }
            100% { background-color: #ff7979; }
        }

        @keyframes float {
            0% { transform: translateY(0); opacity: 0.9; }
            50% { transform: translateY(-20px); opacity: 1; }
            100% { transform: translateY(0); opacity: 0.9; }
        }

        body {
            background: linear-gradient(45deg, #ff7979, #badc58);
            animation: backgroundAnimation 10s infinite;
            font-family: 'Arial', sans-serif;
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
            animation: slideIn 1s ease-out;
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
            background-color: #ff7979; /* Matching button color */
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
            background-color: #badc58; /* Complementary hover color */
        }

        .float {
            position: absolute;
            width: 150px;
            height: 150px;
            background: rgba(255, 255, 255, 0.1);
            border-radius: 50%;
            animation: float 6s ease-in-out infinite;
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
        <h1>Single-dimensional Array</h1>
        <p><strong>Problem:</strong> Create a parallel array with ten people's information, including their name, age, sex, and nationality. Sort them in ascending order using the name as the key. Display both unsorted and sorted lists. Use a user-defined function in performing the sort and display.</p>
        
        <?php
        $people = [
            ["name" => "Alice", "age" => 25, "sex" => "Female", "nationality" => "American"],
            ["name" => "Bob", "age" => 30, "sex" => "Male", "nationality" => "British"],
            ["name" => "Charlie", "age" => 35, "sex" => "Male", "nationality" => "Canadian"],
            ["name" => "David", "age" => 28, "sex" => "Male", "nationality" => "Danish"],
            ["name" => "Eve", "age" => 22, "sex" => "Female", "nationality" => "Egyptian"],
            ["name" => "Faythe", "age" => 27, "sex" => "Female", "nationality" => "French"],
            ["name" => "Grace", "age" => 32, "sex" => "Female", "nationality" => "German"],
            ["name" => "Heidi", "age" => 24, "sex" => "Female", "nationality" => "Hungarian"],
            ["name" => "Ivan", "age" => 29, "sex" => "Male", "nationality" => "Icelandic"],
            ["name" => "Judy", "age" => 26, "sex" => "Female", "nationality" => "Japanese"],
        ];

        function sortByName($a, $b) {
            return strcmp($a['name'], $b['name']);
        }

        echo "<h2>Unsorted List:</h2>";
        echo "<ul>";
        foreach ($people as $person) {
            echo "<li>Name: {$person['name']}, Age: {$person['age']}, Sex: {$person['sex']}, Nationality: {$person['nationality']}</li>";
        }
        echo "</ul>";

        usort($people, 'sortByName');

        echo "<h2>Sorted List:</h2>";
        echo "<ul>";
        foreach ($people as $person) {
            echo "<li>Name: {$person['name']}, Age: {$person['age']}, Sex: {$person['sex']}, Nationality: {$person['nationality']}</li>";
        }
        echo "</ul>";

        // Functions explained
        echo "<h2>Functions Explained:</h2>";
        echo "<ul>";
        echo "<li><strong>sortByName(\$a, \$b)</strong> - User-defined function to compare two names in ascending order using the strcmp function.</li>";
        echo "</ul>";
        ?>
        <br>
        <a href="mainpage.php" class="home-button">Back to Home</a>
    </div>
</body>
</html>
