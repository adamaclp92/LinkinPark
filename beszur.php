<?php
include 'db_connection.php';

$sql="INSERT INTO message (nev, email, uzenet)
VALUES
('$_POST[nev]','$_POST[email]','$_POST[uzenet]')";

if (!mysqli_query($con, $sql))
  die('Hiba: ' . mysqli_error());
else{
  echo '<script>alert("Sikeres üzenetküldés!")</script>'; 
}
mysqli_close($con);

?>

<!DOCTYPE html>
<html lang="hu">
	<head>
	   <title>Linkin Park</title>
	  <meta charset="utf-8">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <meta name="author" content="Herczeg Ferenc">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      -->
	  <link text="text/css" rel="stylesheet" href="css/bootstrap.css">
	  <link text="text/css" rel="stylesheet" href="css/style.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<nav class="navbar navbar-expand-lg navbar-light bg-dark" id="navbarka">
			<div class="container-fluid">
			  <a class="navbar-brand active" id="navitems" href="index.html">Főoldal</a>
			  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				  <li class="nav-item">
					<a class="nav-link" id="navitems" aria-current="page" href="egyuttes.html">Az együttesről</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" id="navitems" aria-current="page" href="tagok.html">Tagok</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" id="navitems" aria-current="page" href="albumok.html">Albumok</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" id="navitems" aria-current="page" href="kedvencek.html">Kedvencek</a>
				  </li>
				</ul> 
			</div>
			<ul class="navbar-nav me-auto mb-2 mb-lg-0">
				<li class="nav-item">
					<a class="navbar-brand" id="navitems" aria-current="page" href="kapcsolatok.html">Kapcsolat</a>
				  </li>	
			<li class="nav-item">
				<a class="navbar-brand" id="navitems" aria-current="page" href="uzenet.html">Üzenet</a>
			  </li>
			</ul>

			</div>
          </nav>
          <form action="beszur.php" method="post">
            <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Név</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" name="nev">
            </div>
            <label for="exampleFormControlInput1" class="form-label">E-mail cím</label>
            <input type="email" class="form-control" id="exampleFormControlInput1" name="email">
            </div>
            <div class="mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Üzenet</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="uzenet"></textarea>
			
			</div>
			<button type="submit" class="btn btn-primary">Elküldés</button>
        </form>
    </body>
</html>

