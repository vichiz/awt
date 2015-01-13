<html>
    <head>
        <title>BasicLayout</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script type="text/javascript" src = "js/JQuery.js"></script>
        <script type="text/javascript" src = "js/menu_load.js"></script>
        <script type="text/javascript" src = "js/questions.js"></script>
        <style>
            .main{
                background-color: white;
                /*margin: 20,20,20,20px;*/
                margin-left: 100px;
                margin-right: 100px;
                border-style: double;
            }
            .col1{
                width: 50%;
                /*height: 200px;*/
                background-color: antiquewhite;
                float: left;
            }
            .col2{
                width: 50%;
                float: left;
                background-color: antiquewhite;
                height: 80px;
            }
            .rowlogin{
                margin-left: 25em;
                margin-bottom: 10px;
            }
            #centeredmenu {
                float:left;
                width:100%;
                background-color: #d59392;
                border-bottom:4px solid #000;
                overflow:hidden;
                position:relative;
            }
            #centeredmenu ul {
                clear:left;
                float:left;
                list-style:none;
                margin:0;
                padding:0;
                position:relative;
                left:50%;
                text-align:center;
            }
            #centeredmenu ul li {
                display:block;
                float:left;
                list-style:none;
                margin:0;
                padding:0;
                position:relative;
                right:50%;
            }
            #centeredmenu ul li a {
                display:block;
                margin:0 0 0 1px;
                padding:3px 10px;
                background:#ddd;
                color:#000;
                text-decoration:none;
                line-height:1.3em;
            }
            #centeredmenu ul li a:hover {
                background:#369;
                color:#fff;
            }
            #centeredmenu ul li a.active,
            #centeredmenu ul li a.active:hover {
                color:#fff;
                background:#000;
                font-weight:bold;
            }
            .usernameid{
                 margin-right: 136px;
                 float: right;
            }
            .rowsearch{
                float: right;
            }
        </style>

    </head>
    <body>
        <div class="container main">
            <div class="row clearfix">
                <div class="col-md-6 column col1">
                    <h1>Dys Answers</h1>
                </div>
                <div class="col-md-6 column col2">
                    <div class="user">
                        <a href="" class="usernameid"><?php echo $name; ?></a>
                    </div>
                    <div class="col-md-4 column rowlogin">
                        <?php
                        if ($name=="Guest") {
                            echo '<a href="index.php/auth_controller/login" class="btn1">Log in</a>&nbsp;&nbsp;';
                            echo '<a href="index.php/auth_controller/register" class="btn2">Sign up</a>';   
                        }else{
                            
                            echo '<a href="http://localhost/AWT/index.php/auth_controller/logout" class="btn3">Sign out</a>';
                        }
                        
                        ?>
                     
                       
                    </div>
                    <div class="col-md-4 column rowsearch">
                        <form action="#">
                            <input type="search" name="search">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                </div>
                <div class="col-md-12 column cmenu">
                    <div id="centeredmenu">
                        <ul>
                            <li class="menu_home"><a href="#" class="active">Home</a></li>
                            <li class = "menu_questions"><a href="#" >Questions</a></li>
                            <li class="menu_about_us"><a href="#">About Us</a></li>
                            <li class="menu_contact_us"><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
                <div id="cont">
                    <!--<img src="images/register.jpg" alt="" width="128" height="128">-->
                </div>
            </div>
        </div> 
    </body>
</html>
