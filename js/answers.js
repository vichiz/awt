jQuery(document).ready(function ($) {

    $(".btn-answer").click(function (e) {
        e.preventDefault();

        var quesId = $('.question_details').attr('questionId');
        var userId = $('.usernameid').text();
        var answer = $('.answerarea').val();

        ansQuestion(quesId, userId, answer);
    });

    var ansQuestion = function (quesId, userId, answer) {
        $.ajax({
            type: 'POST',
            url: 'index.php/answer_controller/answerQuestion',
            data: {quesId: quesId, userId: userId, answer: answer},
            success: function (data) {
            }
        })
    }
});