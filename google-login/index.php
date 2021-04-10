    <?php

    //index.php

    //Include Configuration File
    include('config.php');
    error_reporting(0);

    $login_button = '';


    if (isset($_GET["code"])) {

        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);


        if (!isset($token['error'])) {

            $google_client->setAccessToken($token['access_token']);


            $_SESSION['access_token'] = $token['access_token'];


            $google_service = new Google_Service_Oauth2($google_client);


            $data = $google_service->userinfo->get();


            if (!empty($data['given_name'])) {
                $_SESSION['user_first_name'] = $data['given_name'];
            }

            if (!empty($data['family_name'])) {
                $_SESSION['user_last_name'] = $data['family_name'];
            }

            if (!empty($data['email'])) {
                $_SESSION['user_email_address'] = $data['email'];
            }

            if (!empty($data['gender'])) {
                $_SESSION['user_gender'] = $data['gender'];
            }

            if (!empty($data['picture'])) {
                $_SESSION['user_image'] = $data['picture'];
            }
        }
    }


    if (!isset($_SESSION['access_token'])) {

        $login_button = '<a href="' . $google_client->createAuthUrl() . '">Login With Google</a>';
    }

    ?>
    <html>

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
        <script src="https://apis.google.com/js/platform.js" async defer></script>
        <meta name="google-signin-client_id" content="1095430051329-7tc94tni0gfha1od6232tlhhb5nahiur.apps.googleusercontent.com">
        <title>Google Login</title>

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 offset-sm-3 mt-4 mb-4">
                    <h2 class="text-center">About Author</h2>
                    <p class="text-center">Avish Mehta</p>
                </div>
            </div>

            <div class="row">
                <center>
                    <div class="col-md-4">
                        <div class="card-box text-center">
                            <p>I am a Tech Explorer who loves to explore different technologies and get his hands dirty by implementing them and making projects. For more details about me Please check my <a href="https://www.linkedin.com/in/avishmehta/">My Linkedin Profile</a> Please feel free for giving feedbacks</p>
                            <hr>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <?php
                        if ($login_button == '') {
                            // echo '<div class="panel-heading">Welcome User</div><div class="panel-body">';
                            // echo '<img src="' . $_SESSION["user_image"] . '" class="img-responsive img-circle img-thumbnail" />';
                            // echo '<h3><b>Name :</b> ' . $_SESSION['user_first_name'] . ' ' . $_SESSION['user_last_name'] . '</h3>';
                            // echo '<h3><b>Email :</b> ' . $_SESSION['user_email_address'] . '</h3>';
                            // echo '<h3><a href="logout.php">Logout</h3></div>';
                            // echo " user loggedin";
                            header('location:profile.php');
                        } else {
                            echo '<div align="center">' . $login_button . '</div>';
                            // echo "user not loggedin";
                        }
                        ?>
                    </div>
                </center>
            </div>
        </div>


    </html>