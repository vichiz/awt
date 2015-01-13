<html>
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <!--<div id="includedContent"></div>-->
        <div>
            <h1>Dys Answers</h1>
            <h2>User Login</h2>
        </div>
        
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-6 col-md-offset-3 column">
                    <form action="http://localhost/AWT/index.php/auth_controller/authenticate" method="POST">
                        <div class="form-group">
                            <label for="inputUsername" class="col-sm-2 control-label">Username:</label>
                            <input class="form-control" id="inputUsername" name = 'uname' type="text" />
                            <br><br>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
                            <input class="form-control" id="inputPassword3" name = 'pword' type="password" />
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label><input type="checkbox" /> Remember me</label>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Login</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>



    </body>
</html>
