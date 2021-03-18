<?php 

    $day = date('D');
    // echo $day; 
    switch ($day) {
        case 'Sun':
           $hari = "Minggu";
            break;
        
        case 'Mon':
            $hari = "Senin";
            break;

        case 'Tue':
            $hari = "Selasa";
            break;

        case 'Wen':
            $hari = "Rabu";
            break; 

        case 'Thu':
            $hari = "Kamis";
            break;  

        case 'Fri':
            $hari = "Jumat";
            break;

        default:
           $hari = "Sabtu";
            break;
    }

    echo $hari;
     

?>