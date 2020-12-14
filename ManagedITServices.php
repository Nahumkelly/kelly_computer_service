<?php
$title = "Managed IT Services";
require_once "includes/header.php";
require_once 'db/conn.php';

//get all Gender
$result = $crud->getGender();
?>
        <div>
            <div class="row">
                <div class="col">
                    <h2 class="text-center text-primary shadow-sm"><br><strong>Managed IT Services for Stable and Reliably Evolving IT Environment</strong>
                    <br>
                    <img src="assets/img/ManagedIT.png"><br></h2>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <p class="lead text-left">Managed IT services are aimed at handing over your IT operations to a third-party IT services provider, which takes responsibility to ensure high efficiency and timely improvement of your IT environment and processes within it.<br></p>
                    <p
                        class="lead text-left"><strong>Managed IT services by Kelly's Computer Service backed with 12 years of experience in ITSM</strong>&nbsp;span the&nbsp;<strong>all-round support for cloud, on-premises and hybrid infrastructures</strong>&nbsp;and include consulting
                        and migration services for proactive IT evolution.<br></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <h4 class="card-title"><br><strong>IT Stability without Excessive Spending? Possible!</strong><br><br></h4>
                            <p class="lead card-text">Kelly’s Computer Service professionals provide proactive IT infrastructure monitoring, regular software configuration and updates, resource usage optimization, user support and overall improvement of your IT infrastructure
                                and its components.<br><br></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h2 class="text-center text-primary shadow-sm"><strong>IT INFRASTRUCTURE COMPONENTS OUR MANAGED IT SERVICES TACKLE</strong><br><br></h2>
                    <div class="row"></div>
                    <div class="row">
                        <div class="col">
                            <ul>
                                <li class="d-block" style="font-size: 24px;">Networks.</li>
                                <li class="d-block" style="font-size: 24px;">On-premises data centers.</li>
                                <li class="d-block" style="font-size: 24px;">Cloud services (IaaS, PaaS, SaaS).</li>
                                <li class="d-block" style="font-size: 24px;">Cybersecurity tools.</li>
                                <li class="d-block" style="font-size: 24px;">Databases, data warehouses, data lakes.</li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul>
                                <li class="d-block" style="font-size: 24px;">Applications and app infrastructures.</li>
                                <li class="d-block" style="font-size: 24px;">Development infrastructures (CI/CD, development and testing environments).</li>
                                <li class="d-block" style="font-size: 24px;">Websites and web portals.</li>
                                <li class="d-block" style="font-size: 24px;">Desktops.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col"><img class="rounded img-fluid" src="img/networkinfer.png"></div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col">
                            <div class="card text-light bg-primary text-left border rounded-0 shadow" style="font-size: 18px;text-align: left;">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;background: #fbf8f8;color: rgb(3,126,249);"><strong>Basic</strong><br></h4>
                                    <p>Get your infrastructure&nbsp;<strong>continuously supported and optimized</strong>:<br></p>
                                    <ul>
                                        <li>Proactive infrastructure monitoring</li>
                                        <li>IT infrastructure administration:</li>
                                        <li>User administration</li>
                                        <li>Regular software configuration and updates</li>
                                        <li>Network, data center, cloud service management</li>
                                        <li>L1, L2, L3 support</li>
                                        <li>Cloud usage optimization</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="col">
                            <div class="card text-light bg-primary text-left border rounded-0 shadow" style="font-size: 18px;text-align: left;">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;background: #fbf8f8;color: rgb(3,126,249);"><strong>Extended</strong><br></h4>
                                    <p>Includes the&nbsp;<strong>Basic package and&nbsp;consulting on new infrastructure initiatives:</strong><br></p>
                                    <ul>
                                        <li>Analyzing problems in IT infrastructure and providing recommendations</li>
                                        <li>Designing a new IT infrastructure or its components</li>
                                        <li>Designing CI/CD pipelines</li>
                                        <li>Advising on security improvement using the SecOps approach</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <br/>
                        <div class="col">
                            <div class="card text-light bg-primary text-left border rounded-0 shadow" style="font-size: 18px;text-align: left;">
                                <div class="card-body">
                                    <h4 class="card-title" style="text-align: center;background: #fbf8f8;color: rgb(3,126,249);"><strong>Extended Plus</strong><br></h4>
                                    <p>Includes the&nbsp;<strong>Extended package and modernization of your IT</strong>&nbsp;infrastructure:<br></p>
                                    <ul>
                                        <li>Application and data warehouse migration to cloud</li>
                                        <li>Integration of cloud and on-premises apps</li>
                                        <li>Infrastructure and app evolution:</li>
                                        <li>Introduction of minor fixes and major updates</li>
                                        <li>App delivery automaion</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
    </div>
    <?php require_once "includes/footer.php"; ?>