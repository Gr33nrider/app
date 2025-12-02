<?php 
	session_start();
	require_once ("connectDB.php");

	$userId = $_SESSION['userId'];
	$title = $_POST['title'];
	$text = $_POST['text'];

	if (strlen($text) > 100)
	{
		$text_crop = mb_substr($text, 0, 100, 'UTF-8')."...";
	}
	else
	{
		$text_crop = $text;
	}

	$result = mysqli_query($link, "INSERT INTO pages (userId, title, text_crop, text) VALUES ('{$userId}', '{$title}', '{$text_crop}', '{$text}')");
	header("Location: ./index.php");
?>