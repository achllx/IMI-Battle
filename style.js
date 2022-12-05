// Style Function
function login(){
    var a = document.getElementById("loginbar");
    var b = document.getElementById("signupbar");
    
    document.getElementById("message").innerHTML = "";
    document.getElementById("UNlogin").value = "";
    document.getElementById("PWlogin").value = "";
    a.style.display = "block";
    b.style.display = "none";
}

function signup(){
    var a = document.getElementById("loginbar");
    var b = document.getElementById("signupbar");
    
    document.getElementById("message").innerHTML = "";
    document.getElementById("Email").value = "";
    document.getElementById("UNsignup").value = "";
    document.getElementById("PWsignup").value = "";
    a.style.display = "none";
    b.style.display = "block"; 

}
function forget_password(){
    var x = document.getElementById("verif");
    x.style.display = "block";
}
function back(){
    var x = document.getElementById("verif");
    x.style.display = "none";
    document.getElementById("Email1").value = "";
    document.getElementById("result").innerHTML = "";
}
