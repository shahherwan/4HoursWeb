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
                <h1 id="Header">Sign Up</h1>
                <hr/>
                <form class="form-horizontal" method="post" id="form" action="doUser.php">
                
                    <div class="form-group">   
                        <label for="name" class="col-sm-3 control-label">Name:</label>
                        <div class="col-sm-9">
                            <input type="text" id="name" name="name" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">   
                        <label for="phone" class="col-sm-3 control-label">Phone Number:</label>
                        <div class="col-sm-9">
                            <input type="text" id="phone" name="phone" class="form-control"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email:</label>
                        <div class="col-sm-9">
                            <input type="text" id="email" name="email" class="form-control" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="numJobs" class="col-sm-3 control-label">Number of jobs:</label>
                        <div class="col-sm-9">
                            <input type="text" id="numJobs" name="numJobs" class="form-control" />
                        </div>
                    </div>                                  
                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-9">
                            <input class="btn btn-primary" type="submit" value="Sign up"/>
                        </div>
                    </div>
                </form>
            </div>
    </div>
</body>
</html>
