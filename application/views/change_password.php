<html>
    <head>
        <title>Change Password</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!--<div id="includedContent"></div>-->
        <?php include 'basic_layout.php'; ?>
        <h2>Change Password</h2>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-6 col-md-offset-3 column">
                    <div class="form-group">

                        <label for="inputCurPassword" class="col-sm-2 control-label">Current Password:</label>
                        <input class="form-control inputtxt" id="inputcurpwd" name = "name" type="text" />
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="inputnewpwd" class="col-sm-2 control-label">New Password:</label>
                        <input class="form-control inputtxt" id="inputnewpwd" name = "password" type="password" />
                    </div>
                    <br><br>
                    <div class="form-group">
                        <label for="inputconfpwd" class="col-sm-2 control-label">Confirm Password:</label>
                        <input class="form-control inputtxt" id="inputconfpwd" name = "confpwd" type="password" />
                    </div>
                    <br><br>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default">Change</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
