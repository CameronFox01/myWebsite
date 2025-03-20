<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $projectIdea = $_POST["comments"];

    // Define the file path
    $file = "submissions.txt";

    // Try saving the data
    if (file_put_contents($file, "Email: $email\nProject Idea: $projectIdea\n\n", FILE_APPEND)) {
        echo "Data saved successfully!";
    } else {
        echo "Failed to save data.";
    }
}
?>

