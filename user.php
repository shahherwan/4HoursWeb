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
$path = '/user/';
$value = $firebase->get($path);
$arr = json_decode($value, true);
foreach ($arr as $key => $value1) {
    $test = array(
        "key" => $key,
        "name" => $value1['name'],
        "email" => $value1['email'],
        "jobs" => $value1['numberOfJobs'],
        "rating" => $value1['rating']
    );
    $valueR[] = $test;
}
?>
<html>
    <head>
    <head>
        <title>Hawker Center</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="js/jquery-1.11.1.min_1.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>


    </head>
</head>
<body>
    <div class="container">
            <div class="row">
                <h1 id="Header">Add New Stall</h1>
                <hr/>
                <form class="form-horizontal" method="post" id="form" action="doAddStall.php">
                    <input type="hidden" name="hid" value="<?php echo $arr['key'] ?>">
                    <input type="hidden" name="hname" value="<?php echo $arr['name'] ?>">
                    <div class="form-group">
                        <label for="approve" class="col-sm-3 control-label">Approve:</label>
                        <div class="col-sm-9">
                            <input class="radio-inline" type="radio" id="yes" name="approve" value="Yes"/>Yes
                            <input class="radio-inline" type="radio" id="no" name="approve" value="No"/>No
                        </div>
                    </div>
                    <div class="form-group">   
                        <label for="comment" class="col-sm-3 control-label">Comment:</label>
                        <div class="col-sm-9">
                            <input type="text" id="comment" name="comment" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="like" class="col-sm-3 control-label">like:</label>
                        <div class="col-sm-9">
                            <input type="text" id="like" name="like" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="food" class="col-sm-3 control-label">Stall Food:</label>
                        <div class="col-sm-9">
                            <input type="text" id="food" name="food" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="stallName" class="col-sm-3 control-label">Stall Name:</label>
                        <div class="col-sm-9">
                            <input type="text" id="stallName" name="stallName" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="price" class="col-sm-3 control-label">Stall Price:</label>
                        <div class="col-sm-9">
                            <input type="text" id="price" name="price" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="username" class="col-sm-3 control-label">Username:</label>
                        <div class="col-sm-9">
                            <input type="text" id="username" name="username" class="form-control" />
                        </div>
                    </div>                
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <input class="btn btn-primary" type="submit" value="Add"/>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</body>
</html>
