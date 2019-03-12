<?php
    
    /*$arrayName = array("milla", "keren");
    echo $arrayName[0];
    echo "\n";

    $arrayTwo = array(
        array(
            "nama" => "Milla",
            "nim" => "17106050030",
            "kampus" => "uiin"
        ),
        array(
            "nama" => "Nina",
            "nim" => "17106050031",
            "kampus" => "uiin"
        )
    );

    //echo $arrayTwo[0]["nim"];

    for($i=0; $i<2;$i++){
        foreach($arrayTwo[$i] as $key => $value){
            echo $arrayTwo[$i][$key]."<br>";
        }
    }

    /*
    print_r($arrayTwo);
    
    for($i=0; $i<2;$i++){
        echo $arrayName[$i];
    }

    echo "\n";

    print_r($arrayTwo);

    echo "\n";*/

    $nama ="";
    if (empty($nama) || $nama == "" || $nama === "") {
        echo "KOSONG";
    }else {
        echo "ADA";
    }

    $suhu = 30;
    if ($suhu < 30) {
        echo "dingin";
    }elseif($suhu < 40){
        echo "biasa";
    }else{
        echo "apasih";
    }

?>