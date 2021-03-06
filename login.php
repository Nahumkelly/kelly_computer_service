<?php
$title = 'User Login';
require_once 'includes/header.php';
require_once 'db/conn.php';

// If data was submitted via a form request, then...
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = strtolower(trim($_POST['username']));
    $password = $_POST['password'];
    $new_password = md5($password . $username);
    $result = $user->getUser($username, $new_password);
    if (!$result) {
        echo '<div class="alert alert-danger">Username or Password is incorrect! Please try again. </div>';
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['userid'] = $result['id'];
        header("Location: viewrecords.php");
    }
}
?>

<h1 class="text-center"><?php echo $title ?></h1>

<div class="row">
    <div class="col">
        <!-- 1 of 3 -->
    </div>
    <div class="col=ml">
        <div>
            <p style="text-align: center;"> <img class="center" src="img\Login.png" alt="Nahum" width="150&quot;" height="150&quot;"> </p>
                
        </div>

        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
            <table class="table table-sm">
                <tr>
                    <td> <label for="username">Username: * </lable>
                    </td>
                    <td> <input type="text" name="username" class="form-control" id="username" value="<?php if ($_SERVER['REQUEST_METHOD'] == 'POST') echo $_POST['username']; ?>">

                        <?php if (empty($username) && $_SERVER['REQUEST_METHOD'] == 'POST') echo "<p class='text-danger'>username_error</p>"; ?>
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password: * </label></td>
                    <td> <input type="password" name="password" class="form-control" id="password">
                        <?php if (empty($password) && isset($password_error)) echo "<p class='text-danger'>$password_error</p>"; ?>
                    </td>
                </tr>
            </table>

            <input type="submit" value="Login" class="btn btn-primary btn-block"><br>
            <a href="#">Forget Password</a>
        </form>
    </div>
    <div class="col">
       
    </div>
</div>
<br>
<br>

<?php
include_once 'includes/footer.php';
?>