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