var user_id = "null";
var user_password = "null";


//updater
function sign_up(){
//    document.write("user_id");
//    document.write(user_password);
    
    user_id = document.getElementById("register_id").value;
    
    user_password = document.getElementById("register_password").value;
    
    alert("signed up");

}

function login(){
//    document.getElementById("check_result_id").value = user_id;
//    document.getElementById("check_result_password").value = user_password;
    
    
    var id = document.getElementById("login_id");
    var password = document.getElementById("login_password");
    
    if(id == user_id && password == user_password){
        location.href="MVC_login.html";
//        alert("login success"+user_id+ user_password);
    }
    
    else{
        alert("error");
        document.write(user_id);
        document.write(user_password);
    }
}

