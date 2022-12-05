
function loginbutton(){
    var x = new XMLHttpRequest();
    var a = document.getElementById("message");
    x.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == 1){
                window.open('ingame.html', '_self');
            }
            else{
                a.innerHTML = this.responseText;
            }
        }
    };
    x.open("GET", "login.php?un="+UNlogin.value+"&pw="+PWlogin.value, true);
    x.send();
}

function createbutton(){
    // var email = document.getElementById("Email").value;
    // var un = document.getElementById("UNsignup").value;
    // var pw = document.getElementById("PWsignup").value;

    var x = new XMLHttpRequest();
    var a = document.getElementById("message");
    x.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == 1){
                var i = document.getElementById("loginbar");
                var j = document.getElementById("signupbar");

                i.style.display = "block";
                j.style.display = "none";
            }a.innerHTML = this.responseText;
        }
    };
    x.open("GET", "create.php?un="+UNsignup.value+"&pw="+PWsignup.value+"&email="+Email.value, true);
    x.send();
}

function getpass(){
    var x = new XMLHttpRequest();
    var a = document.getElementById('result');
    x.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            a.innerHTML = this.responseText;
        }
    };
    x.open("GET", "forget.php?email="+Email1.value, true);
    x.send();
}
