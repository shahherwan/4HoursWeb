<?php
require 'vendor/autoload.php';
session_start();
// this can be found from the firebase console database tab
        const DEFAULT_URL = 'https://hours-31412.firebaseio.com/';
// this is the secret, going to be deprecated
// Go to Project Settings --> Service Accounts --> Database Secrets
        const DEFAULT_TOKEN = 'qArAO4BV1fqhLwJSOdxxWZ5qovCEmwZDO1oCuQiK';
// This is the path to the database
// in this case, a jsontree starting from firebase/example will be created
        const DEFAULT_PATH = '/firebase/example';
$firebase = new \Firebase\FirebaseLib(DEFAULT_URL, DEFAULT_TOKEN);

if (isset($_POST)) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $numJobs = $_POST['numJobs'];
  
}
$path = 'user/';
$value =array (
    "name" => $name,
    "email" => $phone,
    "phone" => $email,
    "numJobs" => $numJobs);

$firebase->push($path,$value);

echo "Thanks for registration, you will now receive email from us if there is a job vacancy";

?>
