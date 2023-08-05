<?php 

require_once 'autoload.php';

$database = new Database(
    '127.0.0.1', 
    'oop-blog', 
    'root', 
    ''
);

$conn = $database->connect();

Post::$conn = $conn;