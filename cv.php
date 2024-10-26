<!DOCTYPE html>
<html>
<head>
    <title>Student CV</title>
    <style>
        @keyframes cuteBackground {
            0% { background-color: #ffebcd; }
            50% { background-color: #ffe4e1; }
            100% { background-color: #ffebcd; }
        }

        @keyframes windy {
            0% { transform: translateX(0); }
            50% { transform: translateX(-10px); }
            100% { transform: translateX(0); }
        }

        @keyframes rainFall {
            to {
                transform: translateY(100vh);
                opacity: 0;
            }
        }

        body {
            background: linear-gradient(45deg, #a8e6cf, #dcedc1); /* Subtle gradient background */
            font-family: Arial, sans-serif;
            overflow: hidden; /* Hide overflowing content */
            position: relative;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: #ffebcd; /* Initial color */
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
            animation: cuteBackground 5s infinite, windy 2s infinite; /* Add animations */
        }

        h1 {
            color: #2c3e50; /* A deep, contrasting color */
            font-size: 2.5em;
            margin-bottom: 20px;
        }

        h2 {
            color: #16a085; /* Teal for vibrancy */
            font-size: 1.8em;
            margin-top: 30px;
        }

        p {
            color: #34495e; /* A cool navy for readability */
            font-size: 1.2em;
        }

        ul {
            text-align: left;
            color: #e74c3c; /* A lively red for list items */
        }

        li {
            font-size: 1.2em;
        }

        .home-button {
            background-color: #16a085; /* Teal for the button */
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
            background-color: #1abc9c; /* Lighter teal on hover */
        }

        /* Windy Background Animation */
        .wind {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            z-index: 1; /* Ensure it's behind the content */
            animation: windy 2s infinite;
        }

        /* Rain Animation */
        .rain-drop {
            position: absolute;
            width: 2px;
            height: 100px;
            bottom: 100%;
            background: rgba(0, 0, 1, 0.8); /* Darker rain */
            animation: rainFall linear infinite;
        }
    </style>
</head>
<body>
    <div class="wind">
        <div class="rain-drop" style="left: 10%; animation-duration: 1s;"></div>
        <div class="rain-drop" style="left: 20%; animation-duration: 1.5s;"></div>
        <div class="rain-drop" style="left: 30%; animation-duration: 0.8s;"></div>
        <div class="rain-drop" style="left: 40%; animation-duration: 1.2s;"></div>
        <div class="rain-drop" style="left: 50%; animation-duration: 0.7s;"></div>
        <div class="rain-drop" style="left: 60%; animation-duration: 1.3s;"></div>
        <div class="rain-drop" style="left: 70%; animation-duration: 1.1s;"></div>
        <div class="rain-drop" style="left: 80%; animation-duration: 0.9s;"></div>
        <div class="rain-drop" style="left: 90%; animation-duration: 1.4s;"></div>
    </div>
    <div class="container">
        <h1>Student CV</h1>
        <?php
        // Sample student data
        $student = array(
            'name' => 'Jack Palmares',
            'email' => 'palmaresjack81@gmail.com',
            'phone' => '091-0051-8571',
            'education' => array(
                'degree' => 'Bachelor of Science in Information System',
                'institution' => 'Cebu Technological University',
                'graduation_year' => 2023
            ),
            'experience' => array(
                array(
                    'title' => 'Intern Developer',
                    'company' => 'Tech Company',
                    'duration' => 'June 2021 - August 2021',
                    'description' => 'Worked on various coding projects.'
                ),
                array(
                    'title' => 'Freelance Web Developer',
                    'company' => 'Self-employed',
                    'duration' => 'September 2021 - Present',
                    'description' => 'Developed websites for small businesses.'
                )
            ),
            'skills' => array('PHP', 'JavaScript', 'HTML', 'CSS', 'Python')
        );
        ?>
        <p><strong>Name:</strong> <?php echo $student['name']; ?></p>
        <p><strong>Email:</strong> <?php echo $student['email']; ?></p>
        <p><strong>Phone:</strong> <?php echo $student['phone']; ?></p>

        <h2>Education</h2>
        <p><strong>Degree:</strong> <?php echo $student['education']['degree']; ?></p>
        <p><strong>Institution:</strong> <?php echo $student['education']['institution']; ?></p>
        <p><strong>Graduation Year:</strong> <?php echo $student['education']['graduation_year']; ?></p>

        <h2>Experience</h2>
        <?php foreach($student['experience'] as $job): ?>
            <p><strong>Title:</strong> <?php echo $job['title']; ?></p>
            <p><strong>Company:</strong> <?php echo $job['company']; ?></p>
            <p><strong>Duration:</strong> <?php echo $job['duration']; ?></p>
            <p><strong>Description:</strong> <?php echo $job['description']; ?></p>
        <?php endforeach; ?>

        <h2>Skills</h2>
        <ul>
            <?php foreach($student['skills'] as $skill): ?>
                <li><?php echo $skill; ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="mainpage.php" class="home-button">Back to Home</a>
    </div>
</body>
</html>
