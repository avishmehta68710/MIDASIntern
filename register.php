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
    <link rel="stylesheet" href="css/register-login.css" />
    <title>Sign in & Sign up Form</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="#" class="sign-in-form">
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" placeholder="Username" name="username">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" placeholder="Email" name="email">
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" placeholder="Password" name="password">
                    </div>
                    <input type="submit" class="btn" value="Sign up" name="submit">
                </form>
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Welcome </h3>
                    <p>
                        Join Us for exciting adventures
                    </p>
                </div>
                <img src="media/register.svg" class="image" alt="" />
            </div>
        </div>

        <script src="js/script.js"></script>
</body>

</html>

<?php
$name = $_GET['username'];
$em = $_GET['email'];
$pa = $_GET['password'];


if ($name != "" && $em != "" && $pa != "") {
    $query = "INSERT INTO user VALUES ('$name','$em','$pa')";
    $data = mysqli_query($conn, $query);

    if ($data) {
        echo "Data Inserted Into Database";
        $_SESSION['un'] = $name;
        $_SESSION['ema'] = $em;
        header('location:google-login/register_profile.php');
    }
} else {
    echo "Failed to insert data into DataBase";
}
?>