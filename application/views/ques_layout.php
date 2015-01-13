<script type="text/javascript" src = "js/answers.js"></script>
<style>
    .question_details, .answer_details{
        border-style: groove;
        margin: 16px;
        padding: 20px;
    }
    .answerQues{
        margin-left: 50px;
    }
    .question_details{
        background-color: #a5a5a5;
    }
    .answer_details{
        background-color: ThreeDLightShadow;
    }
</style>
<div class = "containerques">


    <div class="question_ans_details">
        <div class="question_details" questionId="<?php echo $questionArrId[0]['ques_id']; ?>">
            <h3>
                <?php
                echo $questionArrId[0]['title'];
                ?>
            </h3>
            <br>
            <?php
            echo $questionArrId[0]['category'];
            ?>
            <br>
            <?php
            echo $questionArrId[0]['tags'];
            ?>
            <br>
            <?php
            echo $questionArrId[0]['question'];
            ?>
        </div>
        <?php
        foreach ($answersArrId as $value) {
            ?>
            <div class="answer_details">

                <?php
                echo $value['answer'];
                ?>
                <br>
                <a>
                    <?php
                    echo $value['user_id'];
                    ?>
                </a>
            </div>
            <?php
        }
        ?>
        <div class="container answerQues">
            <div class="col-md-6 col-md-offset-3 column">
                <form action="" method="POST">

                    <div class="form-group">
                        <label for="inputAnswer" class="col-sm-2 control-label">Your Answer:</label><br>
                        <textarea rows="4" cols="50" class="answerarea"></textarea>
                    </div>
                    <br><br>

                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="button" name="answer" class="btn btn-default btn-answer">Answer</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="title"></div>
</div>

