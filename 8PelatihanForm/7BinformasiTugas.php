<!DOCTYPE html>
<html>
<head>
	<title>Hasil Form Buku</title>

	<!-- CSS Bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	<!-- CSS sendiri -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	 <nav class="navbar navbar-expand-lg navbar-light bg-light">
		<a class="navbar-brand" href="#">Latihan 7</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
				<a class="nav-link active" href="7AfileForm.php">Form Latihan 7A <span class="sr-only"></span></a>
				<a class="nav-link active" href="7BfileForm.php">Form Latihan 7B <span class="sr-only"></span></a>
			</div>
		</div>
	</nav>


	<div class="jumbotron">
		<div class="container">
			<h1 class="display-4">Informasi Nilai Siswa</h1>

			<p class="lead">Nilai UTS <?= $_POST["nama"];?> : 
				<b> <?= $_POST["UTS"];  ?> </b>
			</p>
			<p class="lead">Nilai UAS <?= $_POST["nama"];?> :  
				<b> <?= $_POST["UAS"];  ?>
			</p>
			<p class="lead">Nilai Tugas <?= $_POST["nama"];?> :  
				<b> <?= $_POST["TUGAS"];  ?>
			</p>
			<hr class="my-4">

			<!-- Proses -->
			<?php 
			$nama = $_POST["nama"];
			$uts = $_POST["UTS"];
			$uas = $_POST["UAS"];
			$tugas = $_POST["TUGAS"];

			$totalNilaiUTS = 0.35*$uts;
			$totalNilaiUAS =  0.5*$uas;
			$totalNilaiTugas =  0.15*$tugas;

			$totalNilaiKeseluruhan = $totalNilaiUTS + $totalNilaiUAS + $totalNilaiTugas;
			?>
			<!-- Penutup Proses -->


		<p>Total Nilai <?= $nama; ?> : <?= $totalNilaiKeseluruhan; ?></p>
		</div>
	</div> 



	<!-- JS Script Library -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

	
</body>
</html>