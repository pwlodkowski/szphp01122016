<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>30.11.2016</title>
    </head>
    <body>
        <?php
        // SORTOWANIE TABLIC
        
        $tablicaLiczby = array(2,9,4,7,1,5,3); //tablica autonumerowana
        $tablicaLiczby2 = [2,9,4,7,1,5,3]; // tablica autonumerowana
        
        $tablicaLiczby3 = array("Przemek","Tomek","Jacek","Agnieszka", "Darek"); //tablica autonumerowana
        
        var_dump($tablicaLiczby);
        var_dump($tablicaLiczby2);
        
        $tablicaAsocjacyjna = array(
            "index_01" => "Wartość_03",
            "index_02" => "Wartość_04",
            "index_03" => "Wartość_01",
            "index_04" => "Wartość_02"
        );
        
        $tablicaAsocjacyjna2 = [
            "index_01" => "Wartość_01",
            "index_02" => "Wartość_03",
            "index_03" => "Wartość_02",
            "index_04" => [2,7,4,9,1,0,3]
        ];
        
        var_dump($tablicaAsocjacyjna);
        var_dump($tablicaAsocjacyjna2);
        
        //echo $tablicaAsocjacyjna2["index_04"][4];
        
        // Sortowanie tablicy autonumerowanej
        sort($tablicaLiczby);
        var_dump($tablicaLiczby);
        
        // Sortowanie tablicy autonumerownej - reverse
        rsort($tablicaLiczby);
        var_dump($tablicaLiczby);
        
        sort($tablicaLiczby3);
        var_dump($tablicaLiczby3);
        
        rsort($tablicaLiczby3);
        var_dump($tablicaLiczby3);
        
        // Sortowanie tablicy asocjacyjnej po wartosci
        asort($tablicaAsocjacyjna);
        var_dump($tablicaAsocjacyjna);
        
        asort($tablicaAsocjacyjna2);
        var_dump($tablicaAsocjacyjna2);
        
        // Sortowanie tablicy autonumerowanej wewnatrz tablicy asocjacyjnej
        $tabWeBackup = $tablicaAsocjacyjna2['index_04'];
        sort($tabWeBackup);
        $tablicaAsocjacyjna2['index_04'] = $tabWeBackup;
        var_dump($tablicaAsocjacyjna2);
        
        // Sortowanie tablicy asocjacyjnej - reverse
        arsort($tablicaAsocjacyjna);
        var_dump($tablicaAsocjacyjna);
        
        // Sortowanie tablicy asocjacyjnej - wg indexu
        ksort($tablicaAsocjacyjna);
        var_dump($tablicaAsocjacyjna);
        
        // Sortowanie tablicy asocjacyjnej - wg indexu - reverse
        krsort($tablicaAsocjacyjna);
        var_dump($tablicaAsocjacyjna);
        
        $tablicaZwierzaki = array(
            array("pies","kot","chomik"), // 0
            array("zebra","indyk","owca"), // 1
            array("wilk","sarna","żubr") //  2
        );
                
        var_dump($tablicaZwierzaki);
        
        
         //Multisort
        array_multisort($tablicaZwierzaki[0]);
        array_multisort($tablicaZwierzaki[1]);
        array_multisort($tablicaZwierzaki[2]);
        
        var_dump($tablicaZwierzaki);
        
        // Policzenie ilosci elementow tablicy
        $iloscElementowTablicy = count($tablicaLiczby3);
        echo 'Ilość elementów tablicy: '.$iloscElementowTablicy;
        
        $test = in_array("Przemek", $tablicaLiczby3);
        echo '<br>'.$test.'<br>';
        
        if($test == 1) {
            echo 'true';
        } else {
            echo 'false';
        }
        
        switch(true) {
            case $test == 1:
            case $test == 3: 
            case $test == 5:     
                break;
            case $test == 2:
                break;
            default:
                break;
        }
        
        ?>
    </body>
</html>
