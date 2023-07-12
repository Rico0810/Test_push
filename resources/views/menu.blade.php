<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>menu</title>
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet" />
        <link href="css/style.css" rel="stylesheet" />
        <link href="css/responsive.css" rel="stylesheet" />
        <style>
            .footer{
                background-color: black;
                text-align: center;
                bottom: 0;
                width: 100%;
            }
            .type {
                overflow: hidden;
                top: 20;
                width: 100%;
            }

            .type a {
                float: center;
                display: inline-block;
                color: black;
                text-align: center;
                padding: 14px 16px;
                border-radius: 50px;
                border-color: black;
                text-decoration: none;
                font-size: 17px;
                font-weight: bold;
            }

            .type a:hover {
                background-color: #CFB872;
            }
        </style>
    </head>

    <body>
        <div class="hero_area">
            <header class="header_section">
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <span style="color:#CFB872;font-weight:bold;">Good Morning, Amanda</span>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#CFB872;">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="d-flex ml-auto flex-column flex-lg-row align-items-center">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="/home"> Home <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/history"> History </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/"> Login </a>
                            </li>
                        </ul>
                        </div>
                        </div>
                    </nav>
                </div>
            </header>
        </div>

        <section class="how_section layout_padding">
            <div class="heading_container">
                <input type="search" placeholder="search" style="width:95%;border-radius:100px;height:40px;margin-top:-50px;">
            </div>

            <div class="type" id="myNavbar">
                <a href="">All</a>
                <a href="">Brewed</a>
                <a href="">Blended</a>
                <a href="">Others</a>
            </div>

            <div class="how_container" >
                <div class="box">
                    <div class="img-box" style="display: block;justify-content:center;">
                        <img src="images/iced-car-mac.png" style="width:80px; height:80px;" ><br>
                        <p style="font-size: 10pt;"><b>ICED CARAMEL<br>
                            MACCHIATO<br><b>
                            <i><small>35.000 IDR</small></i>
                        </p>
                    </div>
                </div>
            </div>

            <div class="how_container" >
                <div class="box">
                    <div class="img-box" style="display: block;justify-content:center;">
                        <img src="images/iced-ame.png" style="width:80px; height:80px;" ><br>
                        <p style="font-size: 10pt;"><b>ICED<br>
                            AMERICANO<br><b>
                            <i><small>25.000 IDR</small></i>
                        </p>
                    </div>
                </div>
            </div>

            <div class="how_container" >
                <div class="box">
                    <div class="img-box" style="display: block;justify-content:center;"><br>
                        <img src="images/hot-moc.png" style="width:60px; height:60px;" ><br>
                        <p style="font-size: 10pt;"><b>HOT<br>
                            MOCHA<br><b>
                            <i><small>30.000 IDR</small></i>
                        </p>
                    </div>
                </div>
            </div>

            <div class="how_container" >
                <div class="box">
                    <div class="img-box" style="display: block;justify-content:center;">
                        <img src="images/bis-lat.png" style="width:80px; height:80px;" ><br>
                        <p style="font-size: 10pt;"><b>BISCOFF<br>
                            CAFE LATTE<br><b>
                            <i><small>35.000 IDR</small></i>
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <div class="footer">
            <ul>
                <div>
                    <span style="color:#CFB872;font-weight:bold;"><small>© 2023 Le Café, All Rights Reserved.</small></span>
                </div>
            </ul>
        </div>

        <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script type="text/javascript">
            $(".owl-carousel").owlCarousel({
                loop: true,
                margin: 0,
                navText: [],
                center: true,
                autoplay: true,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    1000: {
                        items: 3
                    }
                }
            });
        </script>
    </body>
</html>
