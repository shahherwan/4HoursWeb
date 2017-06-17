
<html>
    <head>
        <title>Create Job Vacancy</title>
        <meta charset="UTF-8">
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        ?>
        <div class="container">
            <h3>Kok Cheng - Create Job Vacancy</h3>
            <form class="form-horizontal" method="post" action="doCreateJob.php" enctype="multipart/form-data">

                <div class="form-group">
                    <label for="jobTitle" class="col-md-2 control-label">Job Title:</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="jobTitle" id="jobTitle" maxlength="150"  value="Subway Service Crew" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="jobDesc" class="col-md-2 control-label">Job Desc:</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="jobDesc" id="jobDesc" maxlength="150"  value="Serve the customer" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="salary" class="col-md-2 control-label">Salary:</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="salary" id="salary" maxlength="150"  value="10" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="date" class="col-md-2 control-label">Date:</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="date" id="date" maxlength="150"  value="16/06/2017" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="time" class="col-md-2 control-label">Time:</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="time" id="time" maxlength="150"  value="5pm - 11pm" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="location" class="col-md-2 control-label">Location:</label>
                    <div class="col-md-10">
                        <input class="form-control" type="text" name="location" id="location" maxlength="150"  value="Plaza Singapura" required/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="urgent" class="col-md-2 control-label">Urgent?</label>
                    <div class="col-md-10">
                        <input type="radio" name="urgent" value="Yes" checked>Yes
                        <input type="radio" name="urgent" value="No">No
                        <br/>
                    </div>
                </div>

                <div class="form-group">
                    <label for="dynamicPricing" class="col-md-2 control-label">Dynamic Pricing: </label>
                    <div class="col-md-10">
                        <input type="radio" name="dynamicPricing" value="1.2x" checked>1.2
                        <input type="radio" name="dynamicPricing" value="1.4x">1.4
                        <input type="radio" name="dynamicPricing" value="1.6x">1.6
                        <br/><br/>
                    </div>
                </div>

                <input type="submit" value="Add Job" class="btn-block btn-success">

            </form>
        </div>
    </body>
</html>
