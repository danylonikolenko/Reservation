<?php
include "db.php";
$sql = "SELECT * FROM `zamowenie` JOIN `osoba` on `osoba`.`Email` = `zamowenie`.`osoba_email`";
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

<p class="raport-title">Raport</p>
<table style="width: 95%; margin: auto;margin-bottom: 45px" class="table table-dark">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Miejsce №</th>
        <th scope="col">Osoba</th>
        <th scope="col">Email</th>
        <th scope="col">Telefon</th>
        <th scope="col">Od</th>
        <th scope="col">Do</th>
    </tr>
    <tbody>
    <?php
        $count = 1;
      foreach ($result as $value=>$key){
          echo "
              <tr>
                <th scope=\"row\">$count</th>
                <td>".$key['miejsce']."</td>
                <td>".$key['Imie']."&nbsp;".$key['Nazwisko']."</td>
                <td>".$key['Email']."</td>
                <td>".$key['Telefon']."</td>
                <td>".$key['od']."</td>
                <td>".$key['do']."</td>               
             </tr>
          ";
          $count++;
      }
    ?>


    </tbody>
</table>


</body>
</html>