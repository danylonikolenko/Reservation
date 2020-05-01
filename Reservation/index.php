<!doctype html>
<html lang="en">
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
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active ">
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


<div class="main">



    <div class="container">
        <p class="title-bioro">Biuro</p>

        <div class="square-row">

            <div class="square">
                <div class="row">

<!--                    Miejsca są wypełniane automatycznie podczas ładowania strony za pomocą ajax-->

                    <div class="place" data-place="1" >
                        <div class="soft" data-soft="1">
                        </div>
                        <div class="place-number">
                            1
                        </div>
                    </div>
                    <div class="place" data-place="2" >
                        <div class="soft" data-soft="2">

                        </div>
                        <div class="place-number">
                            2
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="place" data-place="3" >
                        <div class="soft" data-soft="3">
                        </div>
                        <div class="place-number">
                           3
                        </div>
                    </div>
                    <div class="place" data-place="4" >
                        <div class="soft" data-soft="4">
                        </div>
                        <div class="place-number">
                            4
                        </div>
                    </div>
                </div>
            </div>

            <div class="square">
                <div class="row">
                    <div class="place" data-place="5" >
                        <div class="soft" data-soft="5">

                        </div>
                        <div class="place-number">
                            5
                        </div>
                    </div>
                    <div class="place" data-place="6" >
                        <div class="soft" data-soft="6">

                        </div>
                        <div class="place-number">
                            6
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="place" data-place="7" >
                        <div class="soft" data-soft="7">
                        </div>
                        <div class="place-number">
                           7
                        </div>
                    </div>
                    <div class="place" data-place="8" >
                        <div class="soft" data-soft="8">
                        </div>
                        <div class="place-number">
                           8
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="square-row">
            <div class="square">
                <div class="row">
                    <div class="place" data-place="9" >
                        <div class="soft"  data-soft="9">

                        </div>
                        <div class="place-number">
                            9
                        </div>
                    </div>
                    <div class="place" data-place="10" >
                        <div class="soft" data-soft="10">

                        </div>
                        <div class="place-number">
                            10
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="place" data-place="11" >
                        <div class="soft" data-soft="11">
                        </div>
                        <div class="place-number">
                            11
                        </div>
                    </div>
                    <div class="place" data-place="12" >
                        <div class="soft" data-soft="12">

                        </div>
                        <div class="place-number">
                            12
                        </div>
                    </div>
                </div>
            </div>

            <div class="square">
                <div class="row">
                    <div class="place" data-place="13" >
                        <div class="soft" data-soft="13">

                        </div>
                        <div class="place-number">
                            13
                        </div>
                    </div>
                    <div class="place" data-place="14" >
                        <div class="soft" data-soft="14">

                        </div>
                        <div class="place-number">
                            14
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="place" data-place="15" >
                        <div class="soft" data-soft="15">

                        </div>
                        <div class="place-number">
                            15
                        </div>
                    </div>
                    <div class="place" data-place="16" >
                        <div class="soft" data-soft="16">

                        </div>
                        <div class="place-number">
                            16
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="place-descr">
        <p class="title-descr">Wybierz miejsce, aby zobaczyć informacje</p>

        <div class="place-info">
            <p class="num-place"></p>
            <div class="hide-info">
                <label class="info-descr">Status:</label>
                <ul  class="info-status"></ul>
            </div>
            <div class="hide-info">
                <label class="info-descr">Opis:</label>
                <label  class="info opis"></label>
            </div>
            <div class="hide-info">
                <label class="info-descr">Wyposażenie:</label>
                <ul class="info wypos">

                </ul>
            </div>
        </div>
        <button class=" btn-rez hide-info">Rezerwacja</button>
    </div>

</div>

<div class="modal-window">
    <form>
        <div class="modal-content">
                <img width="25px" height="25px" class="close-window" src="img/close.png">
                <label class="modal-place"></label>
                <label>Email:</label><input class="form-control" name="email" type="email"><br>
                <label>Data Od:</label><input style="margin-bottom: 10px" class="form-control" name="dateOd" type="datetime-local">
                <label>Data Do:</label><input style="margin-bottom: 10px" class="form-control" name="dateDo" type="datetime-local">
                <input type="hidden" name="currentTime" type="text" value="<?php echo date('Y-m-d\TH:i');?>">
                <button name="makeRes" class="btn btn-success makeRes" type="button">OK</button>
                <span class="error-msg"></span>
        </div>
    </form>
</div>


<script type="text/javascript" src="script.js"></script>
</body>
</html>
