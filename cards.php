<?php
// Include the database configuration file
include_once("config.php"); // Make sure to replace this with your actual database configuration file

// Fetch all cards from the 'cards' table
$sql = "SELECT * FROM cards";
$stmt = $conn->prepare($sql);
$stmt->execute();
$cards = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Display</title>
</head>
<body>

    <h2>Card Display</h2>

    <?php
    // Display cards
    foreach ($cards as $card) {
        echo "<div>";
        echo "<h3>{$card['title']}</h3>";
        echo "<p>{$card['content']}</p>";
        echo "</div>";
    }
    ?>

</body>
</html>