<html>
    <head>
        <title>Ask Question</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../../css/style.css" rel="stylesheet">
        <link href="../../css/jquery-ui.min.css" rel="stylesheet">
        <link href="../../css/jquery-ui.structure.css" rel="stylesheet">
        <link href="../../css/jquery-ui.theme.css" rel="stylesheet">
        <script type="text/javascript" src = "js/jQuery.js"></script>
        <script type="text/javascript" src = "js/jquery-ui.min.js"></script>
        
        <script type="text/javascript" src = "js/tags.js"></script>
        <style>
            .ask-ques-form{
                background: gainsboro;
                margin: 0 20px;
                padding: 20px 12px 10px 20px;
                font: 13px Arial, Helvetica, sans-serif;
            }

            .ask-ques-form label{
                background: firebrick;
                display: block;
                margin: 0px 0px 15px 0px;
            }
            .ask-ques-form label > span{
                width: 100px;
                font-weight: bold;
                float: left;
                padding-top: 8px;
                padding-right: 5px;
            }
            .btn-tags{
                margin-left: 105px;
            }
        </style>
    </head>
    <body>
        <h2>Tags</h2>
        <div class="container addtags" style="display:none; background-color: black;">
            <div class="row clearfix">
                <div class="col-md-6 col-md-offset-3 column tags-form">
                    <form action="" method="POST">
                        <div class="form-group">

                            <label for="inputselecttag" class="col-sm-2 control-label"><span>Select Tag:</span></label>
                            <select class="form-control" id="inputselecttag" name = "selecttag" type="text" ></select>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Add</button>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="inputcreatetag" class="col-sm-2 control-label"><span>Create New Tag:</span></label>
                            <input class="form-control" id="inputcreatetag" name = "createtag" type="text" />
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Create</button>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10 btn-tags">
                                <button type="submit" class="btn btn-default" name = "addtags"><span>Add Tags</span></button>
                                <input class ="inputtags" name ="tags" type="text"/>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <textarea rows="4" cols="50" class="form-control" id="inputtags" name = "tags" type="text" ></textarea>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Done</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--<div id="includedContent"></div>-->
        <h2>Ask Question</h2>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-6 col-md-offset-3 column ask-ques-form">
                    <form action="http://localhost/AWT/index.php/question_controller/createQuestion" method="POST">
                        <div class="form-group">

                            <label for="inputcategory" class="col-sm-2 control-label"><span>Category:</span></label>
                            <select class="form-control inputtxt" id="inputcategory" name = "category" type="text" >
                                <option value="none">None</option>
                            <option value="applications">Applications</option>
                            <option value="treatments">Treatments</option>
                            </select>
                        </div>
                        <br><br>
                        <div class="form-group asd">
                            <label for="inputtitle" class="col-sm-2 control-label"><span>Title:</span></label>
                            <input class="form-control inputtxt" id="inputtitle" name = "title" type="text" />
                        </div>
                        <br><br>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10 btn-tags">
                                <button type="button" class="btn btn-default btnadd" name = "addtags"><span>Add Tags</span></button>
                                <input class ="inputtags" name ="tags" type="text"/>
                            </div>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <label for="inputquestion" class="col-sm-2 control-label"><span>Question:</span></label>
                            <textarea rows="4" cols="50" class="form-control inputtxt" id="inputquestion" name = "question" type="text" ></textarea>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-default">Ask</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>
