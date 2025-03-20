<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $projectIdea = $_POST["comments"];

    // Save to file
    file_put_contents("submissions.txt", "Email: $email\nProject Idea: $projectIdea\n\n", FILE_APPEND);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submission Successful</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
            background-color: #f4f4f4;
        }
        .message-box {
            background: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: inline-block;
        }
        h1 {
            color: #28a745;
        }
        a {
            display: inline-block;
            margin-top: 15px;
            padding: 10px 15px;
            background: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        a:hover {
            background: #0056b3;
        }
    </style>
</head>
<body>
    <div class="message-box">
        <h1>🎉 Success! 🎉</h1>
        <p>Thank you, <strong><?php echo htmlspecialchars($email); ?></strong>! Your project idea has been submitted.</p>
        <p>We'll review your submission and get back to you soon.</p>
        <a href="index.html">Back to Home</a>
    </div>
</body>
</html>


