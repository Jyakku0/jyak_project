<!DOCTYPE html>
<html>
<head>
    <title>User-Defined Functions</title>
    <style>
        @keyframes wind {
            0% { opacity: 0.5; transform: translateX(0); }
            50% { opacity: 1; transform: translateX(20px); }
            100% { opacity: 0.5; transform: translateX(0); }
        }

        body {
            background: linear-gradient(to right, #8e44ad, #9b59b6); /* Purple gradient background */
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
            background-color: #6c5ce7; /* Purple for the button */
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
            background-color: #a29bfe; /* Lighter purple on hover */
        }

        .wind {
            position: absolute;
            width: 200px;
            height: 200px;
            border: 2px solid #fff;
            border-radius: 50%;
            opacity: 0.5;
            animation: wind 5s infinite;
        }

        .wind:nth-child(1) {
            top: 20%;
            left: 30%;
            animation-delay: 0s;
        }

        .wind:nth-child(2) {
            top: 60%;
            left: 70%;
            animation-delay: 2.5s;
        }
    </style>
</head>
<body>
    <div class="wind"></div>
    <div class="wind"></div>
    <div class="container">
        <h1>User-Defined Functions</h1>
        <p><strong>Problem:</strong> Calculate the optimal route for a delivery driver to make multiple deliveries in a single trip, minimizing the total distance traveled.</p>
        
        <?php
        function calculateDistance($lat1, $lon1, $lat2, $lon2) {
            $radius = 6371; // Earth radius in km
            $lat_diff = deg2rad($lat2 - $lat1);
            $lon_diff = deg2rad($lon2 - $lon1);
            $a = sin($lat_diff / 2) * sin($lat_diff / 2) +
                 cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * 
                 sin($lon_diff / 2) * sin($lon_diff / 2);
            $c = 2 * atan2(sqrt($a), sqrt(1 - $a));
            return $radius * $c;
        }

        function findClosest($current_location, $locations) {
            $closest = null;
            $min_distance = PHP_INT_MAX;
            foreach ($locations as $location) {
                $distance = calculateDistance($current_location[0], $current_location[1], $location[0], $location[1]);
                if ($distance < $min_distance) {
                    $min_distance = $distance;
                    $closest = $location;
                }
            }
            return $closest;
        }

        function removeLocation(&$locations, $location) {
            foreach ($locations as $key => $value) {
                if ($value == $location) {
                    unset($locations[$key]);
                    return;
                }
            }
        }

        function deliveryRoute($start, $locations) {
            $route = [$start];
            $current_location = $start;
            while (!empty($locations)) {
                $closest = findClosest($current_location, $locations);
                $route[] = $closest;
                removeLocation($locations, $closest);
                $current_location = $closest;
            }
            return $route;
        }

        function displayRoute($route) {
            echo "<ul>";
            foreach ($route as $location) {
                echo "<li>Lat: {$location[0]}, Lon: {$location[1]}</li>";
            }
            echo "</ul>";
        }

        // Sample locations
        $start = [10.3157, 123.8854]; // Cebu City
        $locations = [
            [10.2998, 123.8963], // Mandaue
            [10.3125, 123.8854], // SM City Cebu
            [10.3283, 123.9283], // Lapu-Lapu
            [10.2928, 123.8807], // IT Park
            [10.3243, 123.9229]  // Mactan
        ];

        $route = deliveryRoute($start, $locations);

        echo "<h2>Optimal Route:</h2>";
        displayRoute($route);

        // Functions explained
        echo "<h2>Functions Explained:</h2>";
        echo "<ul>";
        echo "<li><strong>calculateDistance(\$lat1, \$lon1, \$lat2, \$lon2)</strong> - Calculates the distance between two geographic coordinates using the Haversine formula.</li>";
        echo "<li><strong>findClosest(\$current_location, \$locations)</strong> - Finds the closest location to the current location from a list of locations.</li>";
        echo "<li><strong>removeLocation(&\$locations, \$location)</strong> - Removes a specified location from the list of locations.</li>";
        echo "<li><strong>deliveryRoute(\$start, \$locations)</strong> - Computes the optimal delivery route starting from the given start location.</li>";
        echo "<li><strong>displayRoute(\$route)</strong> - Displays the computed delivery route in an ordered list format.</li>";
        echo "</ul>";
        ?>
        <br>
        <a href="mainpage.php" class="home-button">Back to Home</a>
    </div>
</body>
</html>
