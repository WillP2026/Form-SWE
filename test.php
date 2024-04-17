<?php 
    $file = fopen("dropdown.csv","r");
    $row = fgetcsv($file);
    $index = 0;
    $rating = array();
    $teas = array();
    $temperatures = array();
    while(($row=fgetcsv($file))!== FALSE){
        $rating[$index] = $row[0];
        $teas[$index] = $row[1];
        $temperatures[$index] = $row[2];
        $index++;
    }

    echo $teas[1];


?>