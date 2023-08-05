<?php

class Post
{
	public static $conn;


	public $id;
	public $title;
	public $body;
	public $created_at;

	public static function getAll()
	{
		$query = "SELECT * FROM posts";
		$stmt = self::$conn->prepare($query);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
		$stmt->execute();
		return $stmt->fetchAll();
	}

	public static function getById($id)
	{
		$query = "SELECT * FROM posts WHERE id = ?";
		$stmt = self::$conn->prepare($query);
		$stmt->setFetchMode(PDO::FETCH_CLASS, 'Post');
		$stmt->execute([$id]);
		return $stmt->fetch();

	}

	public static function create($title, $body)
	{
		$query = "INSERT INTO posts (title, body) VALUES (?, ?)";
		$stmt = self::$conn->prepare($query);
		$stmt->execute([$title, $body]);
	}
}