<?php
	
require_once 'config/bootstrap.php';

$posts = Post::getAll();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oop blog</title>
</head>
<body>
    <a href="create.php">Create a post</a>
    <h1>Posts</h1>
    <ul>
        <?php foreach($posts as $post): ?>
            <li>
                <a href="post.php?id=<?= $post->id ?>"><h2><?php echo $post->title; ?></h2></a>
                <p><?php echo $post->body; ?></p>
                <p><?php echo $post->created_at; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>