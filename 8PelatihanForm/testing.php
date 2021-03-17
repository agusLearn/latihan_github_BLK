<div class="jumbotron">
		<div class="container">
			<h1 class="display-4">Informasi Nilai Siswa</h1>

			<p class="lead">Nilai UTS <?= $_POST["nama"];?> : 
				<b> <?= $_POST["uts"];  ?> </b>
			</p>
			<p class="lead">Nilai UAS <?= $_POST["nama"];?> :  
				<b> <?= $_POST["uas"];  ?>
			</p>
			<p class="lead">Nilai Tugas <?= $_POST["nama"];?> :  
				<b> <?= $_POST["tugas"];  ?>
			</p>
			<hr class="my-4">

			<!-- Proses -->
			<?php 
			$nama = $_POST["nama"];
			$uts = $_POST["uts"];
			$uas = $_POST["uas"];
			$tugas = $_POST["tugas"];

			$totalNilaiUTS = 0.35*$uts;
			$totalNilaiUAS =  0.5*$uas;
			$totalNilaiTugas =  0.15*$tugas;

			$totalNilaiKeseluruhan = $totalNilaiUTS + $totalNilaiUAS + $totalNilaiTugas;
			?>
			<!-- Penutup Proses -->


		<p>Total Nilai <?= $nama; ?> : <?= $totalNilaiKeseluruhan; ?></p>
		</div>
	</div> 