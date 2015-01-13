<html>
    <head>
        <title>Register</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
    </head>

    <style>
        .reg_main{
            margin-left: 100px;
            margin-right: 100px;
            border-style: solid;
            background-color: lightgoldenrodyellow;
        }
        .regcont{
            background-color: khaki;
            padding: 50 0 0 100px;
            margin: 0 50 0 50px;
        }
        .inputtxt{
            padding-right: 50px;
            float: right;
            padding-left: 50px;
            margin-right: 35em;

        }
        .control-label{
            float: left;
            font-family: sans-serif;
            font-size: 20;
        }
    </style>
    <body>
        <!--<div id="includedContent"></div>-->
        <div class ="reg_main">
             <div class="header1">
                <h1>Dys Answers</h1>
                <h2>Register</h2>
            </div>
            <div>
                <img src="images/register.jpg" alt="" width="128" height="128">
            </div>
            
            <div class="container regcont">
                <div class="row clearfix">
                    <div class="col-md-6 col-md-offset-3 column">
                        <form action="http://localhost/AWT/index.php/auth_controller/createaccount" method="POST">
                            <div class="form-group">
                                <label for="inputName" class="col-sm-2 control-label">Name:</label>
                                <input class="form-control inputtxt" id="inputName" name = "name" type="text" />
                            </div>
                            <br><br>
                            <div class="form-group">

                                <label for="inputUsername" class="col-sm-2 control-label">Username:</label>
                                <input class="form-control inputtxt" id="inputUsername" name = "username" type="text" />
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
                                <input class="form-control inputtxt" id="inputEmail" name = "email" type="email" />
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label for="inputpwd" class="col-sm-2 control-label">Password:</label>
                                <input class="form-control inputtxt" id="inputpwd" name = "password" type="password" />
                            </div>
                            <br><br>
                            <div class="form-group">
                                <label for="inputconfpwd" class="col-sm-2 control-label">Confirm Password:</label>
                                <input class="form-control inputtxt" id="inputconfpwd" name = "confpwd" type="password" />
                            </div>
                            <br><br>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Register</button>
                                </div>
                            </div>
                            <span style="color: red"><?php echo $errmsg ?></span> <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
