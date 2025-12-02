<?php  

$title = $_POST['title'];
$text = $_POST['text'];
$pid = $_POST['pid'];

require_once("connectDB.php");

$result = mysqli_query($link, "SELECT * FROM pages WHERE id = {$pid}");
$row = mysqli_fetch_row($result);

if ($title != $row[2])
{
	$result = mysqli_query($link, "UPDATE pages SET title = '{$title}' WHERE id = {$pid}");
}
if ($text != $row[4])
{
	if (strlen($text) > 100)
	{
		$text_crop = mb_substr($text, 0, 100, 'UTF-8')."...";
	}
	else
	{
		$text_crop = $text;
	}

	$result = mysqli_query($link, "UPDATE pages SET text = '{$text}', text_crop = '$text_crop' WHERE id = {$pid}");
}

header("Location: ./index.php");

?>
