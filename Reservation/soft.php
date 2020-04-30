<?php
include "db.php";
$sql = "SELECT * FROM `wyposazenie` JOIN `miejsce` on `wyposazenie`.`miejsce` = `miejsce`.`numer`";
$result = $mysqli->query($sql);
?>
<!doctype html>
<body lang="en">
<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Reservation</title>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <!-- Bootstrap core CSS -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Material Design Bootstrap -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.7/css/mdb.min.css" rel="stylesheet">
        <link rel="stylesheet" href="style.css">
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    </head>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link a-link" href="index.php">Rezerwacja miejsca</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link a-link" href="raport.php">Zarezerwowany terminy</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link a-link" href="soft.php">Wyposazenie</a>
            </li>
        </ul>
    </div>
</nav>

<p class="raport-title">Wyposazenie</p>
<table style="width: 95%; margin: auto; margin-bottom: 45px" class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Miejsce №</th>
        <th scope="col">Rodzaj</th>
        <th scope="col">Model</th>
        <th scope="col">Oznaczenie</th>
        <th scope="col">Rok zakupu</th>
        <th scope="col">Wartosc</th>
        <th scope="col">Opis</th>

    </tr>
    <tbody>
    <?php
    $count = 1;
    foreach ($result as $value=>$key){
        echo "
              <tr>
                <th scope=\"row\">$count</th>
                <td width='10%'><input  class='inp-wyp' value='".$key['miejsce']."'></td>
                <td>".$key['Rodzaj']."</td>
                <td>".$key['Model']."</td>
                <td>".$key['Oznaczenie']."<input class='inp-oznacz' type='hidden' value='".$key['Oznaczenie']."'></td>
                <td>".$key['Rok_zakupu']."</td>
                <td>".$key['Wartosc']."</td>  
                <td>".$key['Opis_wyp']."</td>               
             
             </tr>
          ";
        $count++;
    }
    ?>


    </tbody>
</table>


<script type="text/javascript" src="script.js"></script>
</body>
</html>