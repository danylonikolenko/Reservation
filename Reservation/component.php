<?php
include "db.php";

if(isset( $_POST['num'])){  //Uzyskiwanie danych o sprzęcie dla każdego miejsca w  oknie po lewej stronie
    $number = $_POST['num'];
    $sql ="SELECT * FROM `wyposazenie` where `miejsce` = $number";
    $result = $mysqli->query($sql);
    $tabWyposazenie = array();
   foreach ($result as $value=>$key){

    $tab = [
        "Rodzaj" => $key['Rodzaj'],
        "Model" => $key['Model'],
        "Oznaczenie" => $key['Oznaczenie'],
       "miejsce" => $key['miejsce'],
        "Rok_zakupu" =>$key['Rok_zakupu'],
        "Opis" => $key['Opis']
    ];
       array_push($tabWyposazenie,$tab);
       }

    echo json_encode($tabWyposazenie);

}
if(isset( $_POST['place'])){ //Wyszukiwanie danych o sprzęcie, godzinach zamówień dla
                             // wybranego miejsca oraz informacji o tym miejscu i prowadzi ich do normalnego widoku json

    $number = $_POST['place'];

    $sql ="SELECT * FROM `zamowenie` where `miejsce` = $number";
    $result = $mysqli->query($sql);
    $tabZamowenie = array();
    foreach ($result as $value=>$key){
        $tabZamowenieElements = [
            "DataOd" => $key['od'],
            "DataDo" =>$key['do']

        ];
        array_push($tabZamowenie,$tabZamowenieElements);

    }
    $sql ="SELECT * FROM `miejsce` where `Numer` = $number";
    $result = $mysqli->query($sql);
    foreach ($result as $value=>$key){
        $tabMiejsce = [
            "Opis" => $key['Opis'],
            "Numer" =>$key['Numer'],
            "Status" =>$key['Status']

        ];
    }
    $sql ="SELECT * FROM `wyposazenie` where `miejsce` = $number";
    $result = $mysqli->query($sql);
    $tabWyposazenie = array();
    foreach ($result as $value=>$key){

        $wypElements = [
            "Rodzaj" => $key['Rodzaj'],
            "Model" => $key['Model'],
            "Oznaczenie" => $key['Oznaczenie'],
            "miejsce" => $key['miejsce'],
            "Rok_zakupu" =>$key['Rok_zakupu'],
            "Wartosc" =>$key['Wartosc'],
            "Opis" => $key['Opis_wyp'],

        ];
        array_push($tabWyposazenie,$wypElements);
    }
    $tmparray = [
        "Wyposazenie"=>$tabWyposazenie,
        "Zamowenie"=>$tabZamowenie
    ];
    $tabMiejsce+=$tmparray;

    $array = array();
    array_push($array, $tabMiejsce);
    echo json_encode($array);

}

    if(isset($_POST['placeWyp'])){ // Zmienia miejsca wybranego sprzętu na stronie soft.php
        $miejsce = $_POST['placeWyp'];
        $ozn = $_POST['oznaczenie'];
        $sql = "UPDATE `wyposazenie` SET `miejsce`=$miejsce WHERE `Oznaczenie` = '$ozn'";
        $result=$mysqli->query($sql);
    }
