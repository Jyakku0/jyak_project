<!DOCTYPE html>
<html>
<head>
    <style>
        @keyframes backgroundAnimation {
            0% { background-color: #0ab2dc; }
            33% { background-color: #16a085; }
            66% { background-color: #1e90ff; }
            100% { background-color: #0ab2dc; }
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            animation: backgroundAnimation 10s infinite; /* Animation for the background */
            overflow: hidden; /* To hide overflowing raindrops */
        }

        .container {
            text-align: center;
            background-color: rgba(10, 220, 182, 0.8); /* Semi-transparent background */
            padding: 80px 80px;
            border: 5px solid #0ab2dc;
            border-radius: 15px;
        }

        h2, h3 {
            color: white;
        }

        .button-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr); /* Two buttons per row */
            gap: 20px; /* Spacing between buttons */
            justify-content: center;
        }

        .button {
            background-color: #0ab2dc;
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            margin: 8px auto;
            transition-duration: 0.5s;
            cursor: pointer;
            width: 100%; /* Full width of grid item */
            box-sizing: border-box; /* Ensure padding and borders are included in the width */
        }

        .button:hover {
            background-color: white;
            color: black;
            border: 2px solid #16a085; /* Adjust hover effect */
        }

        /* Raining Animation */
        .rain {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            pointer-events: none;
            z-index: 1; /* To ensure it's behind the content */
        }

        .rain-drop {
            position: absolute;
            width: 2px;
            height: 100px;
            bottom: 100%;
            background: rgba(255, 255, 255, 0.6);
            animation: fall linear infinite;
        }

        @keyframes fall {
            to {
                transform: translateY(100vh);
            }
        }
    </style>
</head>
<body>
    <div class="rain">
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
        <h2>Name: Jack C. Palmares</h2>
        <h3>Course: BSIS 3-A</h3>
        <form action="cv.php" method="get">
            <button class="button" type="submit">Curriculum Vitae</button>
        </form>
        <form action="theuseofvariable.php" method="get">
        <button class="button" type="submit">The Use of Variable</button>
        </form>
        <form action="manipulatingnumbers.php" method="get">
        <button class="button" type="submit">Manipulating Numbers</button>
        </form>
        <form action="mathfunctions.php" method="get">
        <button class="button" type="submit">Using Math Functions</button>
        </form>
        <form action="usingconstants.php" method="get">
        <button class="button" type="submit">Using Constants</button>
        </form>
        <form action="selectionstatement.php" method="get">
        <button class="button" type="submit">Selection Statement</button>
        </form>
        <form action="loopstatement.php" method="get">
        <button class="button" type="submit">Loop Statement</button>
        </form>
        <form action="userdefinedfunction.php" method="get">
        <button class="button" type="submit">User-Defined Function</button>
        </form>
        <div class="button-container">
            <button class="button">User-Defined Functions</button>
            <button class="button">Single-dimensional Array</button>
            <button class="button">Two-dimensional Array</button>
        </div>
    </div>
</body>
</html>
