<!DOCTYPE html>
<html>
<head>
    <title>Day of the Week</title>
</head>
<body>
    <h1>Day of the Week</h1>
    <form method="post" action="">
        <label for="dayNumber">Enter a number (1 to 7):</label>
        <input type="number" id="dayNumber" name="dayNumber" min="1" max="7" required>
        <input type="submit" value="Show Day">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dayNumber = $_POST["dayNumber"];
        $dayName = "";

        switch ($dayNumber) {
            case 1:
                $dayName = "Monday";
                break;
            case 2:
                $dayName = "Tuesday";
                break;
            case 3:
                $dayName = "Wednesday";
                break;
            case 4:
                $dayName = "Thursday";
                break;
            case 5:
                $dayName = "Friday";
                break;
            case 6:
                $dayName = "Saturday";
                break;
            case 7:
                $dayName = "Sunday";
                break;
            default:
                echo "<p>Invalid number. Please enter a number between 1 to 7.</p>";
                break;
        }

        if ($dayName !== "") {
            echo "<p>Day $dayNumber is: $dayName</p>";
        }
    }
    ?>
</body>
</html>
