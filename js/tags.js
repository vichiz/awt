$(document).ready(function () {
//    setTimeout(popup, 3000);
//function popup() {
//$("#logindiv").css("display", "block");
//}
    $(".addtags").dialog({
        autoOpen: false,
        modal:true,
        show: {
            effect: "blind",
            duration: 1000
        },
        hide: {
            effect: "explode",
            duration: 1000
        }
    });
    $(".btn-tags").click(function () {
        $(".addtags").dialog("open");
    });

//
//    $(".btn-tags").click(function (e) {
//        e.preventDefault();
//        console.log('here')
//        $(".asd").css("display", "block");
//    });
});