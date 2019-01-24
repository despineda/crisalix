<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Republisys</title>

        <!-- Fonts -->
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
    
    <!-- banner -->
    <div class="banner-career jumbotron jumbotron-fluid text-center">
        <div class="container">
            <h1 class="display-4 join">Join Our <span class="team">Team</span></h1>
            <p class="lead">"Our Goal is to focus on you while you focus on growth"</p>
        </div>
    </div>

    <!-- open position section -->
    <section class="details-card">
    <div class="container text-center">
        <h2 class="open-text">Open Position</h2>
        <div class="row">
            <div class="col-md-4 div-one">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/icon-apple@3x.png" alt="">
                    </div>
                    <div class="card-desc">
                        <h3 class="job-title">iOS Developers</h3>
                        <p>Full-time</p>
                        <hr>
                        <a href="#" class="job-description">View Job Description</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4 div-two">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/icon-book@3x.png" alt="">
                    </div>
                    <div class="card-desc">
                        <h3 class="job-title">Book Keepers</h3>
                        <p>Full-time</p>
                        <hr>
                        <a href="#" class="job-description">View Job Description</a>   
                    </div>
                </div>
            </div>
            <div class="col-md-4 div-three">
                <div class="card-content">
                    <div class="card-img">
                        <img src="img/icon-front-end@3x.png" alt="">
                    </div>
                    <div class="card-desc">
                        <h3 class="job-title">Front-End Developers</h3>
                        <p>Full-time</p>
                        <hr>
                        <a href="#" class="job-description">View Job Description</a>   
                    </div>
                </div>
            </div>
        </div>
        <h6 class="drop-email">If you think you have what it takes to help establish the next multi-million company drop us a message at <span class="email">jobs@republisys.com</span></h6>
    </div>
</section>

<!-- subscribe section -->
<div class="jumbotron-subscribe jumbotron-fluid text-center">
  <div class="container subscribe text-center">
    <h1 class="subscribe-text">Subscribe to Our <span class="news">Newsletter</span></h1>
    <input type="text" class="form-control form-email" placeholder="Enter your email address" aria-label="Recipient's username" aria-describedby="basic-addon2" ><button type="button" class="btn btn-primary submit-btn">Submit</button>
  </div>
</div>   

<!-- get in touch section -->
<div class="container-fluid get-intouch text-center">
    <h1 class="contact-text"><span class="get-text">Get In Touch </span>With Us</h1>
    <p class="reach-us">Your concern is very important for us. You can reach us through<br><span class="support">support@republisys.com </span>or fill in the online form</p>
    <div class="row form-row">
        <div class="col-sm-3"></div>
        <div class="col-sm-6 contact-form">
            <form id="contact" method="post" class="form" role="form">
            <div class="row">
                <div class="col-xs-6 col-md-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Enter full name" type="text" required autofocus />
                </div>
                <div class="col-xs-6 col-md-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Enter email address" type="email" required />
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6 col-md-6 form-group">
                    <input class="form-control" id="name" name="name" placeholder="Contact number" type="text" required autofocus />
                </div>
                <div class="col-xs-6 col-md-6 form-group">
                    <input class="form-control" id="email" name="email" placeholder="Subject" type="email" required />
                </div>
            </div>
            <textarea class="form-control" id="message" name="message" placeholder="Enter your message" rows="5"></textarea>
            <br />
            <div class="row">
                <div class="col-xs-12 col-md-12 form-group">
                    <button class="btn btn-primary pull-right button-submit" type="submit">Submit</button>
            </form>
        </div>
    </div>
        <!--  Javascript, Jquery and Popper-->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>
