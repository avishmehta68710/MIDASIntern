<?php
include('connection.php');
session_start();
error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <meta name="google-signin-client_id" content="1095430051329-7tc94tni0gfha1od6232tlhhb5nahiur.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

    <style>
        .user-pic {
            width: 100px;
            height: 100px;
            overflow: hidden;
            margin: 20px auto 20px;
            border-left: 3px solid #ddd;
            border-right: 3px solid #ddd;
            border-top: 3px solid #007bff;
            border-bottom: 3px solid #007bff;
            transform: rotate(-30deg);
            transition: 0.5s;
        }

        .card-box:hover .user-pic {
            transform: rotate(0deg);
            transform: scale(1.1);
        }

        .card-box {
            padding: 15px;
            background-color: #fdfdfd;
            margin: 20px 0px;
            border-radius: 10px;
            border: 1px solid #eee;
            box-shadow: 0px 0px 8px 0px #d4d4d4;
            transition: 0.5s;
        }

        .card-box:hover {
            border: 1px solid #007bff;
        }

        .card-box p {
            color: #808080;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3 mt-4 mb-4">
                <h2 class="text-center">User Profile</h2>
                <p class="text-center">Welcome To The Team</p>
            </div>
        </div>
        <center>
            <div class="center">
                <div class="col-md-4">
                    <div class="card-box text-center">
                        <div class="user-pic">
                            <img src="https://user-images.githubusercontent.com/69706506/114175948-9ec15780-994b-11eb-89bf-1b7830a1bcd3.png">
                        </div>
                        <h4><?php echo '' . $_SESSION['un']  . '</h3>'; ?> </h4>
                        <h6><?php echo '' . $_SESSION['ema'] . '</h3>'; ?></h6>
                        <hr>
                        <p><i>For More Details about the teams and MIDAS Lab Head Over to Know More Button</i></p>
                        <hr>
                        <a href="../index.html" class="btn btn-primary">Know More</a>
                    </div>
                </div>
            </div>
        </center>
    </div>
</body>

</html>