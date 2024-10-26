<!DOCTYPE html>
<html>
<head>
    <title>Manipulating Numbers</title>
    <style>
        @keyframes flow {
            0% { background-position: 0 0; }
            100% { background-position: 1000px 0; }
        }

        body {
            background: linear-gradient(120deg, #84fab0, #8fd3f4); /* Gradient background */
            background-size: 1000px 1000px; /* Size to ensure smooth flow */
            animation: flow 10s linear infinite;
            font-family: 'Verdana', sans-serif;
            overflow: hidden; /* Hide overflowing content */
            position: relative;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent background */
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
        }

        h1 {
            color: #2c3e50; /* A deep, contrasting color */
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        label, input {
            display: block;
            margin: 10px auto;
            font-size: 1.2em;
            color: #2c3e50; /* Matching text color */
        }

        input[type="number"] {
            width: 120px;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
            text-align: center;
        }

        .home-button, .submit-button {
            background-color: #009688; /* Teal for the button */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 1.2em;
            margin: 20px auto;
            width: 220px;
            border-radius: 5px;
            transition: background-color 0.3s;
            cursor: pointer;
        }

        .home-button:hover, .submit-button:hover {
            background-color: #00796b; /* Darker teal on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Manipulating Numbers</h1>
        <form method="post" action="">
            <label for="quizzes">Enter 5 quiz grades (comma separated):</label>
            <input type="text" name="quizzes" id="quizzes" required>

            <label for="projects">Enter 2 project grades (comma separated):</label>
            <input type="text" name="projects" id="projects" required>

            <label for="midterm_exam">Enter midterm exam grade:</label>
            <input type="number" name="midterm_exam" id="midterm_exam" required>

            <label for="final_exam">Enter final exam grade:</label>
            <input type="number" name="final_exam" id="final_exam" required>

            <button type="submit" class="submit-button">Calculate Grades</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $quizzes = explode(",", $_POST['quizzes']);
            $projects = explode(",", $_POST['projects']);
            $midterm_exam = $_POST['midterm_exam'];
            $final_exam = $_POST['final_exam'];

            // Calculate averages
            $average_quizzes = array_sum($quizzes) / count($quizzes);
            $average_projects = array_sum($projects) / count($projects);

            // Calculate grades
            $midterm_grade = ($average_quizzes * 0.3) + ($average_projects * 0.2) + ($midterm_exam * 0.5);
            $tentative_final_grade = ($average_quizzes * 0.3) + ($average_projects * 0.2) + ($final_exam * 0.5);
            $final_final_grade = ($midterm_grade + $tentative_final_grade) / 2;

            // Display grades
            echo "<p><strong>Average Quizzes:</strong> $average_quizzes</p>";
            echo "<p><strong>Average Projects:</strong> $average_projects</p>";
            echo "<p><strong>Midterm Grade:</strong> $midterm_grade</p>";
            echo "<p><strong>Tentative Final Grade:</strong> $tentative_final_grade</p>";
            echo "<p><strong>Final Final Grade:</strong> $final_final_grade</p>";
        }
        ?>
        <a href="mainpage.php" class="home-button">Back to Home</a>
    </div>
</body>
</html>
