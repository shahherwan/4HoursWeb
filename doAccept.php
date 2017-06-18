<?php

$id = $_GET['id'];
require 'vendor/autoload.php';

// this can be found from the firebase console database tab
        const DEFAULT_URL = 'https://hours-31412.firebaseio.com/';
// this is the secret, going to be deprecated
// Go to Project Settings --> Service Accounts --> Database Secrets
        const DEFAULT_TOKEN = 'qArAO4BV1fqhLwJSOdxxWZ5qovCEmwZDO1oCuQiK';
// This is the path to the database
// in this case, a jsontree starting from firebase/example will be created
        const DEFAULT_PATH = '/firebase/example';
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);


$path = 'Job_List/'.$id.'/status';
$value = true;
$firebase->set($path, $value);
$status = "";
$to = "shahherwan@gmail.com";
$subject = "You have accepted";
$message = "Helo Herwan, please come in on time";
$from = "andrerexdianarchie@gmail.com";
$headers = "From: $from";
$emailSent = mail($to,$subject,$message,$headers);
        if($emailSent){
            $status .= "The email to $to has been sent. <br/>";
        } else {
            $status .= "Process failed for $to . Please try again";
        }
echo "Mail Sent.";
echo $status;
 header('Location: http://localhost/4Hours/allSubmittedJobs.php');

?>
