<?php

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

$jobTitle = $_POST['jobTitle'];
$jobDesc = $_POST['jobDesc'];
$salary = $_POST['salary'];
$date = $_POST['date'];
$time = $_POST['time'];
$location = $_POST['location'];
$urgent = $_POST['urgent'];
$dynamicPricing = $_POST['dynamicPricing'];

$status = "";
$to = "15017103@myrp.edu.sg";
$subject = "Test mail";
$message = "Hello! This is a simple email message.";
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


//Create 
$path = 'Job_List/';
$value = array("Job_Title" => $jobTitle, "Job_Description" => $jobDesc,
    "Salary" => $salary, "Date" => $date, "Time" => $time,
    "Location" => $location, "Urgent" => $urgent,
    "Dynamic_Pricing" => $dynamicPricing, "status" => false);
$firebase->push($path, $value);

header('Location: review.php');

?>