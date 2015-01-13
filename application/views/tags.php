<html>
    <head>
        <title>Ask Question</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/style.css" rel="stylesheet">
        <style>

        </style>
    </head>
    <body>
        <!--<div id="includedContent"></div>-->
        <h2>Tags</h2>
        <div class="container">
            <div class="row clearfix">
                <div class="col-md-6 col-md-offset-3 column tags-form">
                    <form action="http://localhost/AWT/index.php/question_controller/createQuestion" method="POST">
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
    </div>
</body>
</html>
