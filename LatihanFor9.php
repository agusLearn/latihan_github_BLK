<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<Select name="urutan">
		<?php for($a=1; $a<=10; $a++): ?>
			<option value="<?php echo "$a" ?>">
				<?php echo "$a" ?>
			</option>
		<?php endfor ?>
	</Select>

	
	<select name="pilihan" id="pilihan">
		<?php for($a=1900; $a<2021; $a++): ?>
			<option <?php if ($a == 1995){ echo "selected";} ?> >
				<?php echo $a ?>
			</option>
		<?php endfor ?>
	</select>

	<br>
	<br>
	

	<?php for($a=1; $a<= 5; $a++){ 
		for ($i=1; $i<=$a ; $i++) { 
			echo "*";
		}
		echo "<br>";
	 } ?>


	<?php for($a=1; $a<=6; $a++)
	{ 
		for ($i=1; $i<=$a ; $i++) 
		{ 
			if($a==3){
				if($i != 2){
					echo $a;
				}else{
					echo "x";
				}
			}else{
				echo $a;
			}
			// if ($a == 1) 
			// {
			// 	echo $a;
			// }
			// else if ($a == 2) 
			// {
			// 	echo $a;
			// }
			// else if ($a == 3) 
			// {
			// 	if($i != 2){
			// 		echo $a;
			// 	}else{
			// 		echo "x";
			// 	}
			// }
			// else if ($a == 4) 
			// {
			// 	echo $a;
			// }
			// else{
			// 	echo $a;
			// }
		}
		echo "<br>";
	} ?>

</body>
</html>

