
        </div>

<?php
$year = getdate();?>
<div class="footer-dark">
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-3 item">
                <h3>Services</h3>
                <ul>
                    <li><a href="softwaredevelopmentservices.html">Software Development<br></a></li>
                    <li><a href="ManagedITServices.html">Managed IT Services<br></a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-md-3 item">
                <h3>About</h3>
                <ul>
                    <li><a href="about.html">Company</a></li>
                    <li><a href="#">Team</a></li>
                    <li><a href="#">Careers</a></li>
                </ul>
            </div>
          
            <div class="col-md-6 item text">
                <h3>Kelly's Computer Service</h3>
                <p>Founded in 2017, Kelly's Computer Service is a provider of&nbsp;<strong>IT consulting</strong>&nbsp;and&nbsp;<strong>software development services</strong>. Having started as a small AI product company, we switched to IT services
                    in 2019 and ever since we have helped non-IT organizations and software product companies improve business performance and quickly win new customers.</p>
            </div>
            <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
        </div>
        <br/>
        <?php 
           echo'<p style="text-align: center">Copyright &copy; 2000-'. $year['year'].' Kellys Computer Service</p>'
        ?>
        
        </div>
        </footer>

    </div>
    
</div>
</div>
       

</dev>
</div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.3.1/js/swiper.jquery.min.js"></script>
    <script src="assets/js/script.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script>
$( function() {
    $( "#dob" ).datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "-120:+0",
      dateFormat: "yy-mm-dd"
    });
  } );

  </script>
</body>

</html>