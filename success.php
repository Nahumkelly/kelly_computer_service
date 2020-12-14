<?php
$title = "success";
require_once "includes/headers.php";
require_once "db/conn.php";

// require_once "sendemail.php";

if (isset($_POST['submit'])) {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $caddress=$_POST['customer_address'];
    $gender=$_POST['gender'];

    $orig_file=$_FILES["avatar"]["tmp_name"];
    $ext=pathinfo($_FILES["avatar"]["name"],PATHINFO_EXTENSION);
    $target_dir='uploads/';
    $destination="$target_dir$email.$ext";
    move_uploaded_file($orig_file,$destination);
    

    //call functionto insert and track is success or not
    $isSuccess=$crud->insertCustomer($fname, $lname, $email, $caddress,$gender,$destination);
    $GenderName = $crud->getGendeById($gender);

    if ($isSuccess) {
        SendEmail::SendMail($email, 'Welcome to IT Conference 2020', 'Dear ' . $fname . ' '.$lname.',<br><br>This letter is the confirmation of your reservation for the Annual Conference held by the International Computer Association.<br/>This year the conference would be from April 6, 2010, to April 8, 2010.<br/><br/>You have a reserved seat in all the four workshops for the treatment of substance abuse.<br><br/>For any further queries, feel free to write to us or give us a call.<br/><br>Regards. <br/><br>IT Conference Team<br>');

        include 'includes/successmessage.php';
    } else {
        include 'includes/errormessage.php';
        header('location : viewrecords.php');
    }
}
?>



<hr />
<br />

<?php require_once "includes/footer.php"; ?>