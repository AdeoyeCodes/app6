<?php 

include 'libraries/vendor/autoload.php';

    $google_client = new Google_Client();

    $google_client->setClientId(
    '460862434659-bmkrml008vmimfvb720d6b9ar6g6l45a.apps.googleusercontent.com'
    );

    $google_client->setClientSecret(
    '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'
    );

    $google_client->setRedirectUri(
    'https://test6.boluxcode.org.ng/google2.php'
    );

    $google_client->addScope('email');

    $google_client->addScope('profile');

    if(isset($_GET["code"])) {
    
        $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

        if(!empty($token["access_token"])){
            $google_client->setDefaultAccessToken($token['access_token']);

            $_SESSION['access_token']=$token['access_token'];

            $google_service = new Google_Service_Oauth2($google_client);

            $data = $google_service->userinfo->get();

            $current_datetime = date('Y-m-d H:i:s');


    $_SESSION['first_name']=$data['given_name'];
    $_SESSION['last_name']=$data['family_name'];
    $_SESSION['email_address']=$data['email'];
    $_SESSION['profile_picture']=$data['picture'];




        }
    }


    $login_button = '';

    if(!isset($_SESSION['access_token']) || empty($_SESSION['access_token'])) {

        $login_button = '<a href="'.$google_client->createAuthUrl().'"><img src="sign-in-with-google.png" /></a>';

    }

?>