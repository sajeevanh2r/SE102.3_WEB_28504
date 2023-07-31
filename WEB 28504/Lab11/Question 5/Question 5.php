<!DOCTYPE html>
<html>
<head>
    <title>Fruits Array</title>
</head>
<body>
    <?php
    // Create the fruits array
    $fruits = array("Apple", "Banana", "Orange", "Mango", "Grapes");

    // Use foreach loop to print each element of the array
    echo "<h1>List of Fruits:</h1>";
    echo "<ul>";
    foreach ($fruits as $fruit) {
        echo "<li>$fruit</li>";
    }
    echo "</ul>";
    ?>
</body>
</html>
