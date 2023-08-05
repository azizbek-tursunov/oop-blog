<?php

require_once 'config/bootstrap.php';

$post_id = $_GET['id'];


$post = Post::getById($post_id);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $post->title ?></title>
</head>
<body>
    <div>
        <h1><?= $post->title ?></h1>
        <p><?= $post->body ?></p>
    </div>
    
</body>
</html>