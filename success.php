<?php
$title = "success";
require_once "includes/header.php";
require_once "db/conn.php";

require_once "sendemail.php";



if (isset($_POST['submit'])) {
    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];

    $orig_file = $_FILES["avatar"]["tmp_name"];
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    $target_dir = 'uploads/';
    $destination = "$target_dir$email.$ext";
    move_uploaded_file($orig_file, $destination);

    $check_email = $crud->checkCustomerEmail($email);
    // var_dump($check_email);
    // exit();

    if ($check_email['num'] > 0) {
        echo "Sorry! The email you entered is already taken. <a href='javascript:history.go(-1)'>Please try another</a>.";
    } else {
        //call functionto insert and track is success or not
        $isSuccess = $crud->insertCustomer($fname, $lname, $email, $address, $gender, $destination);
        $GenderName = $crud->getGendeById($gender);

        if ($isSuccess) {
            SendEmail::SendMail($email, 'Thanks for Joining Kelly Computer Service', 'Dear ' . $fname . ' '.$lname.',<br><br>This is to confirm that you have sign up to be a part of Kellys Computer Service team.<br/><br/>The Management teanm would like to thank you for your usual support.<br/><br>Regards. <br/><br>Customer Service Team<br>');

            include 'includes/successmessage.php';
        } else {
            include 'includes/errormessage.php';
            header('location : viewrecords.php');
        }
    }
}
?>



                               
                                <div class="card" style="width: 30rem;  background-color: rgb(52, 152, 219);"> 
                               
                                    <div class="card-body" style="color: white; font-size: 20px;">
                                        <h2 class="card-title">Thank you for Registering with Kelly's Computer Service </h2>
                                        <div> <img class="rounded-circle" src="<?php echo $destination ?>" width="120&quot;" height="120&quot;"/></div>
                                        <!-- <--<h4 class="card-subtitle mb-2 text-muted"><?php echo $gender ['name'] ?></h4> --> -->
                                        <h2 class="card-title"><?php echo $_POST['firstname'] . ' ' . $_POST['lastname'] ?></h2>
                                        <h5 class="card-text">Address : <?php echo $_POST['address'] ?></h5>
                                        <h5 class="card-text">Email Address: <?php echo $_POST['email'] ?></h5>
                                        <a href="#" class="card-link">Card link</a>
                                        <a href="#" class="card-link">Another link</a>
                                    </div>
                                </div>
                           

<hr />
<br />

<?php require_once "includes/footer.php"; ?>