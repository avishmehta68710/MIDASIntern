<?php
include("connection.php");
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="1095430051329-7tc94tni0gfha1od6232tlhhb5nahiur.apps.googleusercontent.com">
    <link rel="stylesheet" href="css/register-login.css" />
    <title>Login</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form" method="POST">
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Email" name="username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <input type="submit" value="Login" class="btn solid" name="submit">
                    <p class="social-text">Or Sign in with Google</p>
                    <div class="social-media">
                        <a href="./google-login/index.php" class="social-icon">
                            <i class="fab fa-google"></i>
                        </a>
                        </a>
                    </div>
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>New here ?</h3>
                    <p>
                        We Invite you to join us for an exciting roller coaster ride. Excited ??? Head Over to account creation.
                    </p>
                    <p>Don't have an account <a type="submit" value=" Create Account " class="btn solid" name="submit" href="./register.php">Create</a></p>
                </div>
                <img src="media/log.svg" class="image" alt="" />
            </div>
        </div>

    </div>

    <script src="js/script.js"></script>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $un = $_POST['username'];
    $pass = $_POST['password'];

    $query = "SELECT * FROM user WHERE EMAIL = '$un' && password = '$pass' ";
    $data = mysqli_query($conn, $query) or die(mysqli_error($conn));

    $total = mysqli_num_rows($data);
    if ($total == 1) {
        echo "Login Ok";
        $_SESSION['un'] = $username;
        $_SESSION['ema'] = $un;
        $_SESSION['loggedin'] = true;
        header('location:google-login/register_profile.php');
    } else {
        echo "Login Failed";
        echo "<script type='text/javascript'>alert('Invalid Credentials');document.location='login.php'</script>";
        header('location:login.php');
    }
}
?>