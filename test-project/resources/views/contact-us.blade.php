<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Republisys</title>

        <!-- Fonts and icons -->
        <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">


        <!-- bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

        <!-- custom stylesheet -->
        <link rel="stylesheet" type="text/css" href="/css/style.css">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-dark">
        <img src="/img/logo-rep-white–2@3x.png">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Program</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Companies</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>    
            </nav>
    
    <!-- banner contact us section -->
    <div class="banner-contact jumbotron-fluid text-left">
        <div class="container">
            <h1 class="display-4 contactUs-text"><span class="team">Get in touch </span>with us</h1>
            <p class="lead-concern">Your concern is very important to us. You can reach us through <span class="email">support@republisys.com</span> or fill out the online form.</p>
        </div>
    </div>

    <!-- form section -->
    <div class="container-fluid banner-form">
    <div class="container">
    <div class="row">
        <div class="col-md-5">
            <form action="#" method="post" class="form">
            <div class="get-in-touch">
                <div class="form-group form-contact">
                    <input type="text" class="form-control" id="name" placeholder="Enter full name" required/>
                </div>
                <div class="form-group form-contact">
                    <input type="email" class="form-control" id="Email" placeholder="Enter email address" required/>
                </div>
                <div class="form-group form-contact">
                    <input type="email" class="form-control" id="Email" placeholder="Contact Number" required/>
                </div>
                <div class="form-group form-contact">
                    <input type="email" class="form-control" id="Email" placeholder="Subject" required/>
                </div>
                <div class="form-group form-contact">
                    <textarea class="form-control" rows="3" placeholder="Enter your message" required></textarea>
                </div>
                <a href="#" class="btn btn-info btn-sm btn-block btn-contact-submit" role="button">Submit</a>
            </div>
            </form>
        </div>

        <div class="col-md-5 address">
            <img src="img/philippines-2@3x.png" style="float: left;"><h1 class="text-ph">Philippines</h1>
            <p class="ph-add">Unit 2109 Antel Global Corporate Center <br> #3 Julia Vargas Ave. Ortigas Center Pasig City 1605 <br>+63 2 661 6403 | 0917 830 5866</p>
            <img src="img/united-states@3x.png" style="float: left;"><h1 class="text-us">usa</h1>
            <p class="us-add">30 Jericho Executive Plaza Suite<br>600W Jericho, New York 11753<br>+1 (516) 260 6222</p>
            <a href=""><i class="fa fa-google-plus-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
            <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
        </div>
    </div>
</div>
</div>


        
        <!--  Javascript, Jquery and Popper-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>
