<?php
$title = "Home";
require_once "includes/header.php";
require_once 'db/conn.php';

//get all Specialties
$result = $crud->getSpecialties();
?>

    <div>
        <div class="row">
            <div class="col">
                <h2 class="text-center" style="color: rgb(0,123,255);"><br><strong>About ScienceSoft – Global IT Company</strong><br><br></h2>
            </div>
        </div>
        <div class="row">
            <div class="col-10 offset-1">
                <p class="text-left" style="font-size: 20px;">Founded in 2017, Kelly's Computer Service is a provider of&nbsp;<strong>IT consulting</strong>&nbsp;and&nbsp;<strong>software development services</strong>. Having started as a small AI product company, we switched to IT services in 2019
                    and ever since we have helped non-IT organizations and software product companies improve business performance and quickly win new customers.</p>
            </div>
        </div>
    </div>

    <div class="features-clean">
        <div class="container">
            <div class="intro">
                <h2 class="text-center" style="color: rgb(0,123,255);"><br><strong>WHAT OUR CUSTOMERS GET CHOOSING Kelly's Computer Service AS A VENDOR</strong><br></h2>
            </div>
            <div class="row features">
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-first-order icon"></i>
                    <h3 class="name" style="color: rgb(0,123,255);"><strong>Predictable performance and quality</strong><br><br></h3>
                    <p class="description">We follow a corporate quality management system established in 2007. According to it, we set up risk management practices on corporate, account, and project levels, and host the Project Management Office, which oversees all corporate
                        processes.
                        <br></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-clock-o icon"></i>
                    <h3 class="name" style="color: rgb(0,123,255);"><strong>Reliable service delivery</strong><br><br></h3>
                    <p class="description">We guarantee that no incident influences our ability to operate. For that, we set up a proven information security strategy and management system and established 24/7 in-house security monitoring. Our infrastructure is cloud-based,
                        and we are ready for remote work.<br></p>
                </div>
                <div class="col-sm-6 col-lg-4 item"><i class="fa fa-code icon"></i>
                    <h3 class="name" style="color: rgb(0,123,255);"><strong>Fast development while retaining application stability</strong><br><br></h3>
                    <p class="description">We established a set of management and technology practices that allows us to release new application versions every 2-3-weeks and implement minor updates up to several times a day. We achieve that due to an iterative approach to development,
                        resorting to Agile project management practices, and relying on cloud-native architectures and modern approaches to infrastructure management.<br></p>
                </div>
            </div>
            <div class="row">
                <div class="col"><img src="assets/img/ManagedIT.png"></div>
            </div>
        </div>
    </div>

    <?php require_once "includes/footer.php"; ?>
