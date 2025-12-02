<?php
require_once "connectDB.php";
session_start();
if (empty($_SESSION['name'])) 
{
	header("Location: ./login.php");
}
?>
 <!doctype html>
<html lang="ru" data-bs-theme="white">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Электронные заметки</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body style="margin:0px; background-color: #ededed;">
	<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom bg-white shadow">
			
			<div class="d-flex align-items-center mb-3 mb-md-0 me-md-auto">
				<a href="index.php" class=" link-body-emphasis text-decoration-none">
        <img class="bi me-5 ms-3" width="50" height="50" src="img/gl.png">
        <span class="fs-3">Электронные заметки пользователя </span>
        </a>
        <span class="text-primary fs-3 ms-3"><?php echo $_SESSION['surname']." ".$_SESSION['name'];?></span>
        <a href="user_exit.php" class="btn btn-danger ms-3">Выйти</a>
			</div>
			
      
      <p>
      
		</p>
      

      <ul class="nav nav-pills">
        <li class="nav-item"><a href="index.php" class="nav-link" aria-current="page">Заметки</a></li>
        <li class="nav-item"><a href="note_create.php" class="nav-link active">Создать Заметку</a></li>
      </ul>
    </header>

    <div class="container text-center"><h2>Новая заметка</h2></div>	
<?php
	$userId = $_SESSION['userId'];
	$result = mysqli_query($link, "SELECT COUNT(*) as cnt FROM pages WHERE userId = $userId");
	$row = mysqli_fetch_assoc($result);

	$cnt = $row['cnt'] + 1;
?>
    <div class="container border rounded shadow p-3 mb-5 bg-body-tertiary">
    	
    	<form action="note_save.php" method="post">
		  	<div class="input-group mb-3">
			  <span class="input-group-text" id="basic-addon1">№  <?php echo $cnt ?></span>
			  <input type="text" class="form-control" placeholder="Заголовок" name="title">
			</div>		  
		  	<div class="mb-3">
		    	<textarea class="form-control" style="height: 60vh" name="text"></textarea>
		  	</div>
			<button type="submit" class="btn btn-success">Сохранить</button>
			<a href="index.php" class="btn btn-danger">Отмена</a>
		</form>
    
    </div>

	<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top shadow bg-white p-2 mb-0">
	    <div class="col-md-4 d-flex align-items-center">
	      <a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
	        <svg class="bi" width="30" height="24"><use xlink:href="#bootstrap"></use></svg>
	      </a>
	      <span class="mb-3 mb-md-0 text-body-secondary"></span>
	    </div>	    
	</footer>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>
