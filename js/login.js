jQuery(document).ready(function($) {
    
//    var result = $this->authlib->is_loggedin;
    checkLogin();
    
    function checkLogin(){
        $.ajax({
            type: 'POST',
            url: 'index.php/authlib/is_loggedin',
        })
    }
});