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
$path = '/Job_List/';
$value = $firebase->get($path);
$arr = json_decode($value, true);
$valueR = array();
foreach ($arr as $key => $value1) {
    if($value1['status'] === false){
    $test = array(
        "key" => $key,
        "title" => $value1['Job_Title'],
    );
     $valueR[] = $test;
    };
   
}
?>
<html>
    <head>
   
        <title>4 Hours</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.1.min_1.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>


    </head>
</head>
<body>
    <div class="container">
          <?php include 'navbar.php' ?>
        <table id="defaultTable" class="table table-bordered table-striped" cellspacing="0" width="100%">
            <tr><th>Job Title</th></tr>
            <?php for ($i = 0; $i < count($valueR); $i++) { ?>
                <tr>
                    <td>
                        <a href="review.php?id=<?php echo $valueR[$i]['key'] ?>"> <?php echo $valueR[$i]['title'] ?></a>
                                       
                       </td>
                </tr>
           <?php } ?>
        </table>
    </div>
</body>
</html>
