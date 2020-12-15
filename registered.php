<?php
$title = "Registeration";
require_once "includes/headers.php";
require_once 'db/conn.php';

//get all Gender
$result=$crud->getGender();
?>
<div class="container-fluid">
    <h1 class="text-primary">Registeration Information</h1>
    <hr>
    <form method="post" enctype="multipart/form-data" action="success.php">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input required type="text" class="form-control" id="firstname" name="firstname" style="background-color: rgb(0, 102, 255); color: white">
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input required type="text" class="form-control" id="lastname" name="lastname" style="background-color: rgb(0, 102, 255); color: white">
                </div>
            </div>
            </div>
        </div>

        <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" style="background-color: rgb(0, 102, 255); color: white">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input required type="text" class="form-control" id="address" name="address" style="background-color: rgb(0, 102, 255); color: white">
                </div>
            </div>
            </div>
        </div>

        <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="custom-file">
                    <label class="custom-file-label" for="avatar" style="background-color: rgb(0, 102, 255); color: white">Choose file</label>
                    <input type="file" accept="image/*" class="custom-file-input" id="avatar" name="avatar" style="background-color: rgb(0, 102, 255); color: white">
                    <small id="avatar" class="form-text text-danger">File Upload is Optional.</small>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="gender">Gender</label>
                    <select class="form-control" id="gender" name="gender" style="background-color: rgb(0, 102, 255); color: white">
                        <?php while ($r = $result->fetch(PDO::FETCH_ASSOC)) { ?>
                            <option value="<?php echo $r['gender_id']; ?>"><?php echo $r['name']; ?></option>
                        <?php } ?>
                    </select>
                </div>
                </div>
                </div>
            </div>
    

            <br />
            <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
            <a href="index.php" class=" btn btn-danger btn-block">Cancel </a>


            < <br />
    </form>
    <br />
</div>




<?php require_once "includes/footer.php"; ?>