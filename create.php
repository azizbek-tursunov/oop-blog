<?php
require_once 'config/bootstrap.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Handle form submission
    $title = $_POST['title'];
    $body = $_POST['body'];

    // Save post to database
    Post::create($title, $body);

    // Redirect to post list page
    header('Location: /index.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a post</title>
</head>
<body>
    <h1>Create a post</h1>
    <form method="POST">
        <div>
            <label for="title">Title:</label>
            <input type="text" id="title" name="title" required>
        </div>
        <div>
            <label for="body">Body:</label>
            <textarea id="body" name="body" required></textarea>
        </div>
        <button type="submit">Create post</button>
    </form>
</body>
</html>
    
</body>
</html>