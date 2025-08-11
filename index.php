<?php
    $name = array('abebe', 'zeleke', 'nahom', 'israel');
    array_push($name, "alemitu", "tina");
    array_pop($name);
    foreach($name as $food){
        echo $food . "<br>";
    };

    $comp = array(
        "ZEMS" => "3emp",
        "APL" => "45emp",
        "ERT" => "32emp"
    );
    echo $comp["ERT"] . "<br>";

    $comp["ZEMS"] = "2133";
    array_pop($comp);

    foreach($comp as $key => $value){
        echo $key . "=>" . $value . "<br>";
    }
?>
