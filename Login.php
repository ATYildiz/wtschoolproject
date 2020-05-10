<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
   <title>Ahmet Talha YILDIZ</title>
  </head>
  <body>
	
		<header class="navbar navbar-expand-lg navbar-dark bg-primary">	<!--MENÜ ÇUBUĞU-->
<<<<<<< HEAD
			<a class="navbar-brand " href="index.html">
=======
			<a class="navbar-brand " href="AnaSayfa.html">
>>>>>>> e1fef3f223971cc556607f0c263c1f7aed784f60
				<img class="logo-padding"src="images/logo.png" width="180"   alt="Saü">
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item ">
<<<<<<< HEAD
						<a class="nav-link" href="index.html">Hakkında</a>
=======
						<a class="nav-link" href="AnaSayfa.html">Hakkında</a>
>>>>>>> e1fef3f223971cc556607f0c263c1f7aed784f60
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Özgeçmiş.html">Özgeçmiş</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Şehrim.html">Şehrim</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="Mirasımız.html">Mirasımız</a>
					</li>
					<li class="nav-item">
						<a class="nav-link active" href="Iletisim.html">İletişim</a>
					</li>
					
				</ul>
				<button class="btn btn-outline-light my-2 my-sm-0" type="button" data-toggle="modal" data-target="#girisModal">Giriş Yap</button>
				
			</div>

				
		</header>
		
		<div class="container">
			<div class="col-12">
				<?php
				
					if(!$_POST)
					{
						header("Location:Iletisim.html");
					}						
					else
					{
						if($_POST["MailAdresi"] != "B191210900@sakarya.edu.tr")
							echo '<div class="alert alert-danger" role="alert">Mail adresinizi yanlış girdiniz.</div>';
						else if($_POST["Parola"] != "123")
							echo '<div class="alert alert-danger" role="alert">Parolanızı yanlış girdiniz.</div>';
						else
							echo '<div class="alert alert-success" role="alert">Giriş başarılı!<br>Hoşgeldin, B191210900</div>';
					}
				?>
			</div>		
		</div>

	<div class="modal fade" id="girisModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">
			<form action="Login.php" method="POST">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalCenterTitle">Üye Girişi</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">				
				<div class="form-group">
					<label for="exampleInputEmail1">Mail Adresi</label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="MailAdresi" required>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Parola</label>
					<input type="password" class="form-control" id="exampleInputPassword1" name="Parola" required>
				</div>			  
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Vazgeç</button>
				<button type="submit" class="btn btn-primary">Giriş Yap</button>
			</div>
			</form>
			</div>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="js/site.js"></script>
</body>