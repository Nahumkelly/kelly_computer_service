<?php 
//This include session file. this ffile contain code that starts/returns a session
//By having it in the header file. it will be included on every page, allowing sesssion capability to be used on every page a cross the website
include_once 'includes/session.php'?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow:300,400,500,600,700,900,900i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400|Roboto:300,400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Ubuntu+Condensed">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="css/sitestyle.css">
    <title>Attendance - <?php echo "$title"?></title>
</head>


<body>
    <div class="container-fluid">
        <div>
            <div class="caption v-middle text-center">
                <h1 class="cd-headline clip">
                    <span class="blc"><img  style="width:300px" src="assets/img/logo2.png" alt="Slide Image"/>     </span>

                    <span class="cd-words-wrapper">
			              <b class="is-visible"> KELLY'S</b>
			              <b> Computer</b>
			              <b> SERVICE</b>
			            </span>
                </h1>
            </div>
            <nav class="navbar navbar-light navbar-expand-md navbar-fixed-top navigation-clean-button">
                <div class="container">
                    <div><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-2"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
                    <div class="collapse navbar-collapse" id="navcol-2">
                        <ul class="nav navbar-nav nav-right">
                            <li class="nav-item"><a class="nav-link active" href="index.php" style="/*color: rgba(251,2,2,0.9);*/text-align: center;font-family: 'Roboto Slab', serif;/*font-size: 21px;*//*border-width: 4px;*//*box-shadow: inset 5px 5px 5px 5px rgba(7,2,251,0.9);*//*text-shadow: 2px 2px 3px rgba(252,251,251,0.9);*//*background: rgb(252,252,252);*/">Home </a></li>
                            <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">Services </a>
                                <div class="dropdown-menu" style="background: rgb(0,123,255);">
                                <a class="dropdown-item" href="ManagedITServices.php" style="color: rgb(251,1,1);">Managed IT Services</a>
                                <a class="dropdown-item" href="softwaredevelopmentservices.php" style="color: rgb(251,1,1);">Software Development Services</a>
                                <a class="dropdown-item" href="services.html" style="color: rgb(251,1,1);">Price Packages</a>
                                </div>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#">Product</a></li>
                            <li class="nav-item"><a class="nav-link" href="about.php">About </a></li>
                            <li class="nav-item"><a class="nav-link" href="policy.php">Privacy Policy<br></a></li>
                            <li class="nav-item"><a class="nav-link" href="contact.php">Contact </a></li>
                        </ul>
                        <p class="ml-auto navbar-text actions"><a class="login" href="login.php">Log In</a> <a class="btn btn-light action-button" role="button" href="register.php" style="color: rgba(247,249,246,0.9);box-shadow: 0px 0px rgba(84,247,3,0.9);">Sign Up</a></p>
                    </div>
                </div>
            </nav>
            <div class="carousel slide" data-ride="carousel" id="carousel-1">
                <div class="carousel-inner" role="listbox">

                    <div class="carousel-item active">
                        <img src="assets/img/slider1.jpg" alt="Slide Image" class="w-100 d-block" />
                        <div class="description text-center">
                            <br>
                            <h4>Signs Plus Phoenix Location</h4>
                            <br>
                            <form action="storefront_signs.html">
                                <button type="submit">
              ABOUT US
              </button>
                            </form>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="w-100 d-block" src="assets/img/slider2.jpg" alt="Slide Image" />
                        <div class="description text-center">
                            <br>
                            <h4>Signs Plus Prescott Location</h4>
                            <br>
                            <form action="mission_statement.html">
                                <button type="submit">OUR MISSION &amp; VISION</button>
                            </form>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="w-100 d-block" src="assets/img/slider3.png" alt="Slide Image" />
                        <div class="description text-center">
                            <br>
                            <h4>Inventive</h4>
                            <br>
                            <form action="custom_signs.html">
                                <button type="submit">LEARN ABOUT STORE SIGNAGE
              </button>
                            </form>
                            <br><br><br><br>
                            <p1>“The new sign design was inventive, unique and represented my
                                <br> business as being different than all my competitors...Kudos for a job well done.”
                            </p1>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="w-100 d-block" src="assets/img/slider4.jpg" alt="Slide Image" />
                        <div class="description text-center">
                            <br>
                            <h4>Partnerships</h4>
                            <br>
                            <form action="neon_signs.html">
                                <button type="submit">
              LEARN ABOUT NEON SIGNS
              </button>
                            </form>
                            <br><br><br><br>
                            <p1>"I fully expect Signs Plus to partner with us on the remaining clubs...
                                <br> This rapid growth would not be possible without the professionalism and the organizational skills of the Signs Plus team."
                            </p1>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img class="w-100 d-block" src="assets/img/slider5.jpg" alt="Slide Image" />
                        <div class="description text-center">
                            <br>
                            <h4>Instrumental</h4>
                            <br>
                            <form action="monument_and_pylon_signs.html">
                                <button type="submit">LEARN MORE ABOUT MONUMENTS & PYLONS
              </button>
                            </form>
                            <br><br><br><br>
                            <p1> "Signs Plus has been instrumental in securing additional signage
                                <br> at two of my stores after city planners said no.
                                <br> Bottom line: I trust these people and their word is all I need."
                            </p1>
                        </div>
                    </div>
                </div>

                <div>
                    <a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon">
      </span>
                        <span class="sr-only">Previous
        </span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                        <span class="sr-only">    
          Next
          </span></a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
           