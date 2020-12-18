<?php
$title = "Software Development Services";
$page="dropdown";
require_once "includes/header.php";
require_once "includes/banner.php";
require_once 'db/conn.php';

//get all gender
$result = $crud->getGender();
?>
    <div>
        <div>
            <div class="row">
                <div class="col">
                    <h2 class="text-center text-primary shadow-sm"><br><br><strong>Software Development Services</strong><br>
                    <img src="img/software-development.png"><br></h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="lead text-left">Invent, build, integrate, scale and upgrade your applications with Kelly's Computer Service! For more than three decades, Kelly's Computer Service has been harnessing digital technologies for the benefit of Fortune 500 businesses,
                        mid and large enterprises, and startups across the variety of industries. Fully in the art and science of software engineering and management, we help you to build high-quality software solutions and products as well as deliver
                        a wide range of related professional services.<br></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 class="text-center text-primary shadow-sm"><strong>IT INFRASTRUCTURE COMPONENTS OUR MANAGED IT SERVICES TACKLE</strong><br></h2>
                    <div class="row">
                        <div class="col">
                            <div class="card text-light bg-primary text-left border rounded-0 shadow" style="font-size: 18px;text-align: left;">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;background: #fbf8f8;color: rgb(3,126,249);"><strong>Complete software development outsourcing</strong><br></h4>
                                    <p>Shouldering complete software development project pipeline or its part of mid and large enterprises to support their business growth.<br></p>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="col">
                            <div class="card text-light bg-primary text-left border rounded-0 shadow" style="font-size: 18px;text-align: left;">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;background: #fbf8f8;color: rgb(3,126,249);"><strong>Custom software development</strong><br></h4>
                                    <p>Development of custom enterprise software solutions to address the unique needs of your business.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp;<br></p>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="col">
                            <div class="card text-light bg-primary text-left border rounded-0 shadow" style="font-size: 18px;text-align: left;">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;background: #fbf8f8;color: rgb(3,126,249);"><strong>Software product development</strong><br></h4>
                                    <p>Development of SaaS, mobile and desktop applications for marketing and distributing to mass enterprise/consumer users.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col">
                            <div class="card text-light bg-primary text-left border rounded-0 shadow" style="font-size: 18px;text-align: left;">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;background: #fbf8f8;color: rgb(3,126,249);"><strong>Software Consulting</strong><br></h4>
                                    <p>A holistic set of consulting services for both new and ongoing software development projects – from ideation and feasibility study to implementation strategy.<br></p>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="col">
                            <div class="card text-light bg-primary text-left border rounded-0 shadow" style="font-size: 18px;text-align: left;">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;background: #fbf8f8;color: rgb(3,126,249);"><strong>Software support and evolution</strong><br></h4>
                                    <p>A broad set of services – help desk &amp; support, cloud migration, legacy reengineering, and more – to keep your business-critical applications healthy and stable.<br></p>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="col">
                            <div class="card text-light bg-primary text-left border rounded-0 shadow" style="font-size: 18px;text-align: left;">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;background: #fbf8f8;color: rgb(3,126,249);"><strong>Development team augmentation</strong><br></h4>
                                    <p>More than 700 IT specilists to help you handle the lack of your internal resources and capabilities.&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                                        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<br></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="projects-horizontal">
        <div class="container">
            <div class="intro">
                <h2 class="text-center text-primary shadow-sm"><strong>SELECTED PROJECTS</strong>
                <br><img src="img/software-development.png"><br></h2>
            </div>
            <div class="row projects">
                <div class="col item">
                    <div class="row">
                        <div class="col-1 col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="img/schema-data-poclain.png" width="200px"></a></div>
                        <div class="col">
                            <h3 class="name"><strong>Big Data Implementation for Advertising Channel Analysis in 10+ Countries</strong></h3>
                            <p class="description">Migration to a new analytical system that ScienceSoft implemented helped one of the top market research companies secure an innovative big data solution based on Apache Hadoop, Apache Hive and Apache Spark frameworks. The new
                                system was 100 times faster compared to the old one and could process 1,000 different data formats.</p>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-1 col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="img/unnamed.png" width="200px"></a></div>
                        <div class="col">
                            <h3 class="name"><strong>Development of Mobile Video Streaming Apps for a TV Industry Leader</strong><br></h3>
                            <p class="description">A success story of a long-term partnership (over 5.5 years) which has brought the Customer to become one of the leading TV apps providers in the world. Created with ScienceSoft's help, the company's star product – hybrid mobile
                                apps – now power T-Mobile, Orange and other telecom industry leaders..</p>
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-1 col-md-12 col-lg-5"><a href="#"><img class="img-fluid" src="img/web.jpg" width="200px"></a></div>
                        <div class="col">
                            <h3 class="name"><strong>Development of Alternative Web Browser Software for Mac</strong><br></h3>
                            <p class="description">A success story of a long-term partnership (over 5.5 years) which has brought the Customer to become one of the leading TV apps providers in the world. Created with ScienceSoft's help, the company's star product – hybrid mobile
                                apps – now power T-Mobile, Orange and other telecom industry leaders..</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </div>
    <?php require_once "includes/footer.php"; ?>