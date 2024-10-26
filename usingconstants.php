<!DOCTYPE html>
<html>
<head>
    <title>Using Constants</title>
    <style>
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        body {
            background: linear-gradient(to left, #ffecd2, #fcb69f); /* Subtle gradient background */
            font-family: 'Arial', sans-serif;
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
            animation: fadeIn 2s ease-in-out;
        }

        h1 {
            font-size: 2.5em;
            margin-bottom: 20px;
            color: #fff;
        }

        p {
            font-size: 1.2em;
            color: #fff;
            margin: 10px 0;
            animation: slideIn 2s ease-out;
        }

        .home-button {
            background-color: #f76c6c; /* Red for the button */
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
            background-color: #ff4b4b; /* Darker red on hover */
        }

        /* Slide-in animation */
        @keyframes slideIn {
            from {
                transform: translateX(-100%);
                opacity: 0;
            }
            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        .slide-in:nth-child(1) { animation-delay: 0s; }
        .slide-in:nth-child(2) { animation-delay: 0.3s; }
        .slide-in:nth-child(3) { animation-delay: 0.4s; }
        .slide-in:nth-child(4) { animation-delay: 0.5s; }
        .slide-in:nth-child(5) { animation-delay: 0.6s; }
        .slide-in:nth-child(6) { animation-delay: 0.7s; }
        .slide-in:nth-child(7) { animation-delay: 0.8s; }
        .slide-in:nth-child(8) { animation-delay: 0.9s; }
        .slide-in:nth-child(9) { animation-delay: 1.0s; }
        .slide-in:nth-child(10) { animation-delay: 1.1s; }

    </style>
</head>
<body>
    <div class="container">
        <h1>Using Constants</h1>
        <?php
        // Define constants
        define("PI", 3.14159);
        define("E", 2.71828);
        define("GRAVITY", 9.81);
        define("LIGHT_SPEED", 299792458);
        define("PLANCK_CONSTANT", 6.62607015e-34);
        define("AVOGADRO_NUMBER", 6.02214076e23);
        define("GAS_CONSTANT", 8.314);
        define("BOLTZMANN_CONSTANT", 1.380649e-23);
        define("EARTH_RADIUS", 6371);
        define("ELECTRON_MASS", 9.10938356e-31);

        // Display constants with examples
        echo "<p class='slide-in'>PI: " . PI . " - Used in calculating the circumference of a circle: 2 * PI * radius</p>";
        echo "<p class='slide-in'>E: " . E . " - Base of natural logarithms, used in growth calculations</p>";
        echo "<p class='slide-in'>Gravity: " . GRAVITY . " m/s² - Acceleration due to Earth's gravity</p>";
        echo "<p class='slide-in'>Speed of Light: " . LIGHT_SPEED . " m/s - Speed of light in a vacuum</p>";
        echo "<p class='slide-in'>Planck Constant: " . PLANCK_CONSTANT . " Js - Used in quantum mechanics</p>";
        echo "<p class='slide-in'>Avogadro's Number: " . AVOGADRO_NUMBER . " - Number of particles in a mole</p>";
        echo "<p class='slide-in'>Gas Constant: " . GAS_CONSTANT . " J/(mol K) - Used in the ideal gas law: PV = nRT</p>";
        echo "<p class='slide-in'>Boltzmann Constant: " . BOLTZMANN_CONSTANT . " J/K - Relates temperature to energy</p>";
        echo "<p class='slide-in'>Earth Radius: " . EARTH_RADIUS . " km - Average radius of Earth</p>";
        echo "<p class='slide-in'>Electron Mass: " . ELECTRON_MASS . " kg - Mass of an electron</p>";
        ?>
        <br>
        <a href="mainpage.php" class="home-button">Back to Home</a>
    </div>
</body>
</html>
