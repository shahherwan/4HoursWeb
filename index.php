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
?>
//title, number of jobs, rating.
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        review
        
    </body>
</html>
