<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>history</title>
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
            <div style="display:flex;">
                <div style="margin:20px;font-weight:bold;">
                    <p>Let's see your purchase history!</p>
                </div>
            </div>
            <div style="display:flex;">
                <div style="margin:20px;">
                    <p>Congratulations! You have 75 stars!</p>
                </div>

                <div style="justify-content:flex-end;">
                    <img src="images/progres.png" style="margin:20px;align:right">
                </div>
            </div>
            <div>
                <button type="button" class="btn btn-dark mr-auto" style="color:#CFB872; border-radius:100px;margin-top:-50px;margin-left:70%;font-weight:bold;">Redeem</button>
            </div>
            <div class="how_container" >
                @foreach($hist1 as $history1)
                    <div class="boks">
                        <img src="images/{{ $history1["gambar"] }}" style="margin:10px;" >
                        <p style="margin-left:0px;margin-top:20px;"><b> {{ $history1["title1"] }} <br> {{ $history1["title2"] }} </b><br><i><small> {{ $history1["price"] }} <br> {{ $history1["date"] }} </small></i></p>
                    </div>
                @endforeach
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
