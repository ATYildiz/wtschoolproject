<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">

	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


   
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
				
				<button class="btn btn-outline-light my-2 my-sm-0" type="button">Giriş Yap</button>
				
			</div>

				
		</header>
		<div class="container">
			<div class="col-12">
				<?php
				
					if(!$_POST)
						header("Location:Iletisim.html");

					echo '<ul class="list-group">';
					if($_POST["Adiniz"])
					{
						echo '
						<li class="list-group-item">
						<b>Adınız & Soyadınız</b><br>
						'.$_POST["Adiniz"].'
						</li>
						';
					}
					if($_POST["MailAdresi"])
					{
						echo '
						<li class="list-group-item">
						<b>Mail Adresiniz</b><br>
						'.$_POST["MailAdresi"].'
						</li>
						';
					}
					if($_POST["Mesaj"])
					{
						echo '
						<li class="list-group-item">
						<b>Mesajınız</b><br>
						'.$_POST["Mesaj"].'
						</li>
						';
					}
					if($_POST["Sehir"])
					{
						echo '
						<li class="list-group-item">
						<b>Şehriniz</b><br>
						'.$_POST["Sehir"].'
						</li>
						';
					}
					if(count($_POST["Hobi"]))
					{
						echo '
						<li class="list-group-item">
						<b>Hobileriniz</b><br>
						'.implode($_POST["Hobi"],",").'
						</li>
						';
					}

					echo '</ul>';
				?>
			</div>		
		</div>
	</body>