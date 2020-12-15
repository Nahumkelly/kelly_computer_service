<?php
 $title = "editpost";
 require_once "includes/header.php";
 require_once 'db/conn.php';

//get values from post opertion
if (isset($_POST['submit'])) {
    $id =$_POST['id'];
    $fname =$_POST['firstname'];
    $lname =$_POST['lastname'];
    $email =$_POST['email'];
    $address =$_POST['address'];
    $gender =$_POST['gender'];

    $orig_file = $_FILES["avatar"]["tmp_name"];
    $ext = pathinfo($_FILES["avatar"]["name"], PATHINFO_EXTENSION);
    $target_dir = 'uploads/';
    $destination ="$target_dir$email.$ext";
    move_uploaded_file($orig_file,$destination);

    $isSuccess = $crud->editCustomer($id, $fname, $lname, $email, $address, $gender, $destination);
    

        // if ($isSuccess) {
        //     SendEmail::SendMail($email, 'Welcome to IT Conference 2020', 'Dear ' . $fname . ' '.$lname.',<br><br>This letter is the confirmation of your reservation for the Annual Conference held by the International Computer Association.<br/>This year the conference would be from April 6, 2010, to April 8, 2010.<br/><br/>You have a reserved seat in all the four workshops for the treatment of substance abuse.<br><br/>For any further queries, feel free to write to us or give us a call.<br/><br>Regards. <br/><br>IT Conference Team<br>');

        //     include 'includes/successmessage.php';
        // } else {
        //     include 'includes/errormessage.php';
        //     header('location : viewrecords.php');
        // }
}
    ?>