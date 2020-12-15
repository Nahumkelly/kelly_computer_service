<?php
$title = "About Us";
require_once "includes/header.php";
require_once "includes/banner.php";
require_once 'db/conn.php';

//get all Gender
$result = $crud->getGender();
?>
<div class="row">
    <div class="col">
        <h2 class="text-center" style="color: rgb(0,123,255);"><br><strong>About Kelly's Computer Service – Global IT Company</strong><br><br></h2>
    </div>
</div>
<div class="row">
    <div class="col-10 offset-1">
        <p class="text-left" style="font-size: 20px;"><br>Founded in 2017, Kelly' Computer Service is a provider of&nbsp;<strong>IT consulting</strong>&nbsp;and&nbsp;<strong>software development services</strong>. Having started as a small AI product company, we switched to IT services in 2002
            and ever since we have helped non-IT organizations and software product companies improve business performance and quickly win new customers.<br><br></p><img class="rounded-circle img-fluid shadow-lg" data-bs-hover-animate="swing" src="assets/img/homepageimage.jpg" width="1000px" height="50ox">
    </div>
</div>
<div class="row">
    <div class="col"></div>
</div>
</div>
</div>
<div class="projects-horizontal">
    <div class="container">
        <div class="intro">
            <h2 class="text-center" style="color: rgb(0,123,255);">Meet the Management Team</h2>
        </div>
        <div class="row projects">
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <a href="#"><img class="rounded-circle img-fluid shadow-lg" src="img/kelly.png"></a>
                    </div>
                    <div class="col">
                        <h3 class="name">Nahum Kelly</h3>
                        <p class="description">CEO, Kelly's Computer Service<br><br>Mr. Kelly has been leading our company for 5 years. He holds a Bachelor Degree's in Information Communication Technology From&nbsp;&nbsp;<br>Vocational Training Development Institute&nbsp;&nbsp;Under
                            his leadership, Kelly's Computer Service&nbsp; achieved 3 times growth.<br><br></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <a href="#"><img class="rounded-circle img-fluid shadow-lg" src="img/gillian.jpg" width="200px" height="100px"></a>
                    </div>
                    <div class="col">
                        <h3 class="name">Gillian Wallace</h3>
                        <p class="description">VP Sales and BD&nbsp;Kelly's Computer Service<br>Miss. Wallace has been Kelly’s Computer Service VP for 12 years. She holds a PhD in Management from UWI Erasmus University. She is an author of a number of academic and business
                            papers on IT outsourcing, online services procurement and online IT marketplaces.<br></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <a href="#"><img class="rounded-circle img-fluid shadow-lg" src="img/yanick.jpg" width="200px"></a>
                    </div>
                    <div class="col">
                        <h3 class="name">Yanick Levy</h3>
                        <p class="description">Chief Technology Officer<br>Mr. Levy entered Kelly's Computer Service&nbsp; in Late 2017 and became CTO in 2018. He holds a&nbsp;<br>Bachelor Degree's in Information Communication Technology From&nbsp;&nbsp;<br>Vocational Training
                            Development Institute&nbsp;. Under his management, we launched Mobile, SharePoint and CRM development services and grew to 700 IT experts.<br></p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 item">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <a href="#"><img class="rounded-circle img-fluid shadow-lg" src="img/Rev.jpg"></a>
                    </div>
                    <div class="col">
                        <h3 class="name">Revonda McLeod&nbsp;</h3>
                        <p class="description">CEO, Kelly's Computer Service<br><br>With a Bachelor’s degree in&nbsp;<br><strong>Logistics management</strong>&nbsp;, entered Kelly's Computer Service in 2017 and worked with us for two years in different positions from software
                            development to project management.&nbsp; Miss. McLeod is a Microsoft Certified Professional and Microsoft Certified Technology Specialist, and she also holds the Professional Scrum Developer certificate.<br><br></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once "includes/footer.php"; ?>