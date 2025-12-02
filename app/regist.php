<?php 

?>
 <!doctype html>
<html lang="ru" data-bs-theme="white">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Электронные заметки</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body style="margin:0px; background-color: #FFC0CB;">
		
		<header class="d-flex flex-wrap justify-content-center py-3 mb-5 border-bottom bg-white">
	    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
		    <img class="bi me-5 ms-3" width="50" height="50" src="img/gl.png">
		    <span class="fs-3">Электронные заметки</span>
	    </a>
		</header>

		<div class="container p-2 rounded mt-5 shadow w-25 text-center" style="background-color: #E2BFF6;">
			<span class="badge bg-primary"><h1 class="text-center">Регистрация</h1></span>
			<br>	
			<form action="regist_control.php" method="get">
			  <div class="mb-3 mt-4 ms-5 me-5">
			    <label for="exampleInputEmail1" class="form-label">Новый логин</label>
			    <input type="text" class="form-control border border-1 border-primary text-center" required placeholder="Введите логин" id="exampleInputEmail1" aria-describedby="emailHelp" name="log">
			    <div id="passwordHelpBlock" class="form-text">
	  			Например: L0gIn_12345
					</div>
			  </div>
			  <div class="mb-3 ms-5 me-5">
			    <label for="exampleInputPassword1" class="form-label">Новый пароль</label>
			    <input type="password" class="form-control border border-1 border-primary text-center" required placeholder="Введите пароль" id="exampleInputPassword1" name="pass">
			  </div>
			  <div class="mb-3 ms-5 me-5">
			    <label for="exampleInputPassword1" class="form-label">Фамилия</label>
			    <input type="text" class="form-control border border-1 border-primary text-center" placeholder="Заполните фамилию (необязательно)" id="exampleInputPassword1" name="sur">
			  </div>
			  <div class="mb-3 ms-5 me-5">
			    <label for="exampleInputPassword1" class="form-label">Имя</label>
			    <input type="text" class="form-control border border-1 border-primary text-center" placeholder="Заполните имя" required id="exampleInputPassword1" name="name">
			  </div>
			  <button type="submit" class="btn btn-primary">Зарегистрироваться</button>
			</form>
			<div class=" m-2">
				Уже зарегистрированы? 
				<a href="./login.php">Вход</a>
			</div>
			<br>
		</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
