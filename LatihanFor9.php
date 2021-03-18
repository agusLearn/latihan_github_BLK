
	<?php 
			for($a=1; $a<= 5; $a++)
			{ 
				for ($i=1; $i<=$a ; $i++) { 
					echo "*";
				}
				echo "<br>";
			}
	?>
	
	<?php 

	for($a=1; $a<=5; $a++)
		{ 
			for ($i=1; $i<=$a; $i++) 
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
		} 
	?>
