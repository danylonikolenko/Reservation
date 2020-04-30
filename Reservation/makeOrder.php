<?php
include "db.php";



    $email = $_POST['email'];
    $miejsce = $_POST['miejsce'];
    $od =  strtotime($_POST['dateOd']);
    $do =  strtotime($_POST['dateDo']);


    $DateOd = $_POST['dateOd'];
    $DateDo = $_POST['dateDo'];

    $sql = "SELECT * FROM `osoba` WHERE `Email` = '$email'";
    $result = $mysqli->query($sql);
    if (mysqli_num_rows($result) != 0) {

        $sqlZam = "SELECT * FROM `zamowenie` WHERE `miejsce` = $miejsce";
        $rezZam = $mysqli->query($sqlZam);

            $flag = true;
            foreach ($rezZam as $value=>$key){

                    if( (($od > strtotime($key['od'])&&$do > strtotime($key['od'])) && ($od > strtotime($key['do'])&&$do > strtotime($key['do']))) ||
                        (($od < strtotime($key['od'])&&$do < strtotime($key['od'])) && ($do > strtotime($key['do'])&&$do > strtotime($key['do']))) ){

                    }else{
                        $flag = false;
                        echo "Juz istneje rezerwacja w tym czasie";
                        return 0;
                    }

                }


                        $sqlIn = "INSERT INTO `zamowenie`(`osoba_email`, `miejsce`, `od`, `do`) VALUES ('$email','$miejsce' ,'$DateOd', '$DateDo')";
                        $rez = $mysqli->query($sqlIn);
                        echo 1;


    }else{
        echo "Zly email";
    }

