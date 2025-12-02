<?php 
	require_once "connectDB.php";

	if (!empty($_GET['log']) && !empty($_GET['pass']) && !empty($_GET['sur']) && !empty($_GET['name'])) 
	{
		$log_ctrl = $_GET["log"];
		$pass_ctrl = $_GET['pass'];
		$sur = $_GET['sur'];
		$name = $_GET['name'];

		$result = mysqli_query( $link, "SELECT *,COUNT(*) as cnt FROM users WHERE login = '{$log_ctrl}' ");
		$row = mysqli_fetch_assoc($result);

		if ($row['cnt'] < 1)
		{
			$result = mysqli_query( $link, "INSERT INTO users (Surname, name, login, password) VALUES ('{$sur}', '{$name}', '{$log_ctrl}', '{$pass_ctrl}') ");
			header("Location: ./login.php?res=1");
		}
		else
		{
			echo "<h1>Пользователь с таким логином уже существует!</h1>";
		}

	}

?>