<!DOCTYPE html>
<html>
<head>
	<title>Halaman Form</title>

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

	<div class="card" style="width: 500px; padding: 20px;" id="form-inputan">
		 <h5 class="card-title">Form Ujian</h5>

		<form>
			<div class="form-group">
				<label for="nm">Nama</label>
				<input type="text" class="form-control" id="nm" name="nama">
			</div>

			<div class="form-group">
				<label for="uts">Nilai UTS</label>
				<input type="number" class="form-control" id="uts" name="UTS">
			</div>

			<div class="form-group">
				<label for="uas">Nilai UAS</label>
				<input type="number" class="form-control" id="uas" name="UAS">
			</div>

			<div class="form-group">
				<label for="tugas">Nilai Tugas</label>
				<input type="number" class="form-control" id="tugas" name="TUGAS">
			</div>

			<button type="button" class="btn btn-primary mb-2 float-right" id="input-data">Masukan Data</button>
		</form>

	</div>

	<div id="tampilan-Informasi">
		
	</div>


	<!-- JS Script Library -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>


	<script>
		$(document).ready(function(){
			$('button').on('click', function(){
				var nama = document.getElementById("nm").value;
				var uts = document.getElementByName("UTS");
				var uas = document.getElementByName("UAS");
				var tugas = document.getElementByName("TUGAS");

				alert("Nama : "+ nama);
				// $('#form-inputan').css("display", "none");

				// $.ajax({
				// 	type: 'post',
				// 	url: 'testing.php',
				// 	data:{nama:nama, uts:uts, uas:uas, tugas:tugas},
				// 	success: function(data){
				// 		$("#tampilan-Informasi").html(data);
				// 	}
				// });
			});
		});
	</script>
</body>
</html>