jQuery(document).ready(function($) {
    
    $(".btnAskQues").click(function(e){
        e.preventDefault();
        askQuestion();
    });
    
var askQuestion = function() {
        $.ajax({
            type: 'POST',
            url: 'index.php/question_controller/askQuestion',
            data: {},
            success: function(data) {
                $('.questions_form').html(data);

            }
        })
    }
    
    $(".menu_home").click(function () {
        loadQues();
    })
    
    $(".menu_questions").click(function () {
        loadQues();
    })
    
    var loadQues = function () {
        
        $.ajax({
            type: 'POST',
            url: 'index.php/question_controller/getQuestion',
            data: {},
            success: function (data) {
              $(".classcontainer").html(data);
              $(".questions_form").html(data);

            }
        })
    }
    
    $(".question_title").click(function (e) {
        e.preventDefault();
        var quesId = $(this).attr('questionId');
        //loadQuesDetails(quesId);
        loadAnswers(quesId);
    })
    
    var loadQuesDetails = function (quesId) {
        $.ajax({
            type: 'POST',
            url: 'index.php/question_controller/getQuestionById',
            data: {quesId:quesId},
            success: function (data) {
              $(".classcontainer").html(data);
              $(".questions_form").html(data);

            }
        })
    }

var loadAnswers = function (quesId) {
        $.ajax({
            type: 'POST',
            url: 'index.php/answer_controller/getAnswersById',
            data: {quesId:quesId},
            success: function (data) {
              $(".classcontainer").html(data);
              $(".questions_form").html(data);

            }
        })
    }
});