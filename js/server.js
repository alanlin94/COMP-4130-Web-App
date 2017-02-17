$(document).ready(function(){
    var usernameIn = document.getElementById("username");
    var emailIn = document.getElementById("email");
    var passwordIn = document.getElementById("password");
    var registerBut = document.getElementById("register");

    registerBut.onclick = function(ev){
        $.ajax({
            url:"php/register.php",
            type:"post",
            data:{
                username:usernameIn.value,
                email:emailIn.value,
                password:passwordIn.value,
            },
            success:function(resp){
                console.log(resp);
            }
        });
    }


});
