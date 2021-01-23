<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> 
    <link rel="stylesheet" href="styles.css">
    <title>Hearts Cafeteria</title>
</head>
<body>

    <nav class="navbar navbar-expand-md navbar-dark sticky-top">
    <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/coffeePage.php">Coffee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="pages/ordersPage.php">Orders</a>
                </li>
            </ul>
        </div>
    </div>
    </nav>

    <div class="container-fluid padding">
        <div class="row welcome text-center">
            <div class="col-12">
                <h1 class="display-4">Cafeteria</h1>
            </div>
            <hr>
            <div class="col-12">
                <p>
                Pre nego što dođe do vašeg stola, naša kafa prolazi dugačak put. Od plantaže u najudaljenijim krajevima sveta, preko ruku farmera i berača plodova, do prženja i najfinijeg mlevenja u našim mlinovima, a ipak, svaka šoljica znači tek jedan novi početak uživanja u danu pred nama.

Iako veoma mlad brend, za manje od tri godine dokazanim kvalitetom i konstantnim inovacijama postali smo jedan od najbrže rastućih lanaca kafeterija u Srbiji, koji u svom asortimanu za sada nudi više od 15 jedinstvenih vrsta kafa sa svih strana sveta, među kojima su i veoma retki ukusi, ekskluzivni u ovom delu Evrope.

Gosti Kafeterije se svakog jutra mogu razbuditi uz ukuse Indija ili Brazil espresa, poboljšati produktivnost uz ukuse Kolumbije, Kenije ili Etiopije, uživati u specijalno pripremljenim blendovima ili završiti dan uz bezkofeinske napitke.


                </p>              
            </div>
        </div>
    </div>

    <div id="slides" class="carousel slide" data-ride="carousel">
        <ul class="carousel-indicators">
            <li data-target="#slides" data-slide-to="0" class="active"></li>
            <li data-target="#slides" data-slide-to="1"></li>
            <li data-target="#slides" data-slide-to="2"></li>
        </ul>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/cafeteria.jpg" alt="Cafeteria">>
            </div>
            <div class="carousel-item">
                <img src="img/coffee-machine.jpg" alt="Coffee machine">
            </div>
            <div class="carousel-item">
                <img src="img/coffee.jpg" alt="Coffee">
            </div>
        </div>
    </div>


    <footer>

        <div class="container-fluid padding">
            <div class="row text-center">
                <div class="col-md-6">                   
                    <hr class="light">
                    <h5>Opening hours</h5>
                    <hr class="light">
                    <p>Working days: 7am - 8pm</p>
                    <p>Weekends: 8am - 6pm</p>
                </div>
                <div class="col-md-6">
                    <hr class="light">
                    <p>Contact: +123456789</p>
                    <p>heartscafeteria@gmail.com</p> 
                    <p>Kneza Mihaila 11</p>
                    <p>Belgrade, Serbia</p>
                </div>
                
            </div>
        </div>

    </footer>

</body>
</html>