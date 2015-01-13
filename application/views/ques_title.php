<style>
    .question_details{
        margin-left: 60px;
    }
</style>
<div class = "container">
    <hr>
    <?php
    foreach ($questionArr as $value) {
        ?>
        <div class="question_details">
            <h2><a href="" questionId="<?php echo $value['ques_id']; ?>" class="question_title">
                    <?php
                    echo $value['title'];
                    ?>
                </a>
            </h2>
        </div>
    <hr>
        <?php
    }
    ?>
    <div class="title"></div>
</div>

