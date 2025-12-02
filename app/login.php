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
		<span class="badge bg-primary"><h1 class="text-center">Авторизация</h1></span>
		<br>
		<form class="" action="login_control.php" method="post">
		  <div class="mb-3 mt-4 ms-5 me-5">
		    <label for="exampleInputEmail1" class="form-label">Введите логин</label>
		    <input type="text" class="form-control border border-1 border-primary text-center" placeholder="Логин" id="exampleInputEmail1" aria-describedby="emailHelp" name="log">
		  </div>
		  <div class="mb-3 ms-5 me-5">
		    <label for="exampleInputPassword1" class="form-label">Введите пароль</label>
		    <input type="password" class="form-control border border-1 border-primary text-center" placeholder="Пароль" id="exampleInputPassword1" name="pass">
		  </div>
		  <button type="submit" class="btn btn-primary">Войти</button>
		</form>
		<div class=" m-2">
			Первый раз в системе?
			<a href="./regist.php">Регистрация</a>
		</div>
		<br>
		<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#successModal"  id="successBtn" hidden >
  Запустите демо модального окна
</button>
	</div>

	<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="false" id="successBtn">
	  <div class="modal-dialog modal-dialog-centered">
	    <div class="modal-content">
	      <div class="modal-body mt-5 mb-5 text-center fs-5">
	      	<br>
	        Пользователь успешно зарегистрирован!
	        <br>
	      </div>
	    </div>
	  </div>
	</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<?php  
	if (isset($_GET['res'])) {
		if ($_GET['res'] == 1)  {
			echo "<script type='text/javascript'>
							const myInput = document.getElementById('successBtn');
							myInput.click();
						</script>";
		}
	}

?>
  </body>
</html>
