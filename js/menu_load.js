jQuery(document).ready(function ($) {
    var user = $('.usernameid').text();
    $(".menu_home").click(function () {
        loadHome();
        if(user == 'Guest'){
            $('.answer_details').hide();
            $('.answerQues').hide();
//            alert('here')
        }
    });
    $(".menu_questions").click(function () {
        loadQuestions();
        if(user == 'Guest'){
            $('.answer_details').hide();
            $('.answerQues').hide();
//            alert('here')
        }
    });
    $(".menu_about_us").click(function () {
        loadAboutUs();
    });
    $(".menu_contact_us").click(function () {
        loadContactUs();
    });

//    $(".menu_home").load("ajax/home.php", function () {
//        loadHome();
//    });

    var loadHome = function () {
        $.ajax({
            type: 'POST',
            url: 'index.php/auth_controller/load_home',
            data: {},
            success: function (data) {
                $('#cont').html(data);
                $("#centeredmenu>ul>li>a.active").removeClass("active");
                $('.menu_home>a').addClass("active");

            }
        })
    }
    var loadQuestions = function () {
        $.ajax({
            type: 'POST',
            url: 'index.php/auth_controller/load_questions',
            data: {},
            success: function (data) {
                $('#cont').html(data);
                $("#centeredmenu>ul>li>a.active").removeClass("active");
                $('.menu_questions>a').addClass("active");

            }
        })
    }
    var loadAboutUs = function () {
        $.ajax({
            type: 'POST',
            url: 'index.php/auth_controller/load_about_us',
            data: {},
            success: function (data) {
                $('#cont').html(data);
                $("#centeredmenu>ul>li>a.active").removeClass("active");
                $('.menu_about_us>a').addClass("active");

            }
        })
    }
    var loadContactUs = function () {
        $.ajax({
            type: 'POST',
            url: 'index.php/auth_controller/load_contact_us',
            data: {},
            success: function (data) {
                $('#cont').html(data);
                $("#centeredmenu>ul>li>a.active").removeClass("active");
                $('.menu_contact_us>a').addClass("active");

            }
        })
    }
});


