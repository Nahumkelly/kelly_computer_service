<?php
$title = "Edit";
// require_once 'includes/auth_check.php';
require_once 'db/conn.php';
require_once "includes/header.php";

//get all Gender
$result = $crud->getGender();

if (!isset($_GET['id'])) {
    //echo 'Error';
    include 'includes/errormessage.php';
    header('location : viewrecords.php');
} else {
    $id = $_GET['id'];
    $customer = $crud->getcustomerDetails($id);
?>

    <div class="container-fluid">
        <h1 class="text-primary">Edit Custmer Information</h1>
        <hr>
        <form method="post" enctype="multipart/form-data" action="editpost.php">

            <div class="container-fluid">
                <input type="hidden" name="id" value=" <?php echo $customer['customer_id'] ?>" />
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="firstname">First Name</label>
                            <input required type="text" value=" <?php echo $customer['firstname'] ?>" class="form-control" id="firstname" name="firstname" style="background-color: rgb(0, 102, 255); color: white">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="lastname">Last Name</label>
                            <input required type="text" value=" <?php echo $customer['lastname'] ?>" class="form-control" id="lastname" name="lastname" style="background-color: rgb(0, 102, 255); color: white">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input required type="email" value=" <?php echo $customer['email_address'] ?>" class="form-control" id="email" name="email" aria-describedby="emailHelp" style="background-color: rgb(0, 102, 255); color: white" readonly>
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input required type="text" value=" <?php echo $customer['cus_address'] ?>" class="form-control" id="address" name="address" style="background-color: rgb(0, 102, 255); color: white">
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="custom-file">
                            <label class="custom-file-label" for="avatar" value="<?php echo $customer['profile_pic'] ?> style="background-color: rgb(0, 102, 255); color: white">Choose file</label>
                            <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" style="background-color: rgb(0, 102, 255); color: white">
                            <small id="avatar" class="form-text text-danger">File Upload is Optional.</small>
                        </div>
                    </div>

                    <div class="col">
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" style="background-color: rgb(0, 102, 255); color: white">
                        <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                            <option value="<?php echo $r['gender_id']; ?>"<?php if (
                                    $r['gender_id'] == $customer['gender_id']) echo 'selected' ?>>
                                    <?php echo $r['name']; ?>
                                    </option>
                        <?php } ?>
                    </select>
                </div>
                </div>

                
                </div>
            </div>


            <br />
            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            <a href="viewrecords.php" class=" btn btn-danger btn-block">Cancel </a>


            < <br />
        </form>
        <br />
    </div>



<?php } ?>
<hr />
<br />

<?php require_once "includes/footer.php"; ?>