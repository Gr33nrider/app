<?php 
	require_once "connectDB.php";
	session_start();
	if (!empty($_POST['log']) && !empty($_POST['pass'])) 
	{
		$log_ctrl = $_POST["log"];
		$pass_ctrl = $_POST['pass'];

		$result = mysqli_query( $link, "SELECT *,COUNT(*) as cnt FROM users WHERE login = '{$log_ctrl}' ");
		$row = mysqli_fetch_assoc($result);

		if ($row['cnt'] == 1)
		{
			if ($row['login'] == $log_ctrl)
			{
				if ($row['password'] == $pass_ctrl)
				{
					$_SESSION['userId'] = $row['id'];
					$_SESSION['surname'] = $row['Surname'];
					$_SESSION['name'] = $row['name'];
					header("Location: ./index.php");
				}
				else
				{
					echo "<h1>Неверный пароль! Доступ запрещен</h1>";
				}
			}
			else
			{
				echo "<h1>Неверный логин! Доступ запрещен</h1>";
			}
		}
		else
		{
			echo "<h1>Такого логина не существует!</h1>";
		}

	}

?>