<?php
    $produto1 = [
        "nome" => "Camera",
        "marca" => "LG",
        "preto" => 2500
    ];
    $produto2 = [
        "nome" => "Notebook",
        "marca" => "Dell",
        "preto" => 7500
    ];
    $produto3 = [
        "nome" => "Smartphone",
        "marca" => "Sansung",
        "preto" => 3500
    ];
    $produtos = [
        $produto1,
        $produto2,
        $produto3,
    ];
    echo json_encode($produtos) . "<br>";
    
    ?>