<?php  

    $mobil = array("Volvo", "BMW", "Toyota");

    sort($mobil);

    // echo rsort($mobil)."<br>";

    $length=count($mobil);

    echo "Total Data Didalam Array = $length <br>";

    for($a=0; $a < $length; $a++){
        echo $mobil[$a];
        echo "<br/>";
    }

?>