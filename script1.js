// upload
function upload() {
  var files = document.getElementById("file").files;

  if (files.length > 0) {
    var formData = new FormData();
    formData.append("file", files[0]);
    var x = document.getElementById("profilepicture");
    var xhttp = new XMLHttpRequest();
    // Set POST method and ajax file path
    xhttp.open("POST", "upload.php", true);
    // call on request changes state
    xhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        x.innerHTML = this.responseText;
        var y = document.getElementById("upload");
        y.style.display = "none";
      }
    };
    // Send request with data
    xhttp.send(formData);
  } else {
    alert("Please select a file");
  }
}
//delchar
function delchar() {
  var x = new XMLHttpRequest();
  x.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == "Success") {
        window.open("index.html", "_self");
      } else {
        document.getElementById("note").innerHTML = this.responseText;
      }
    }
  };
  x.open("GET", "delchar.php?a=" + dctype.value, true);
  x.send();
}
// change password
function changepass() {
  var x = new XMLHttpRequest();
  x.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      if (this.responseText == "Success") {
        document.getElementById("cppassword").value = "";
        window.open("index.html", "_self");
      }
    }
  };
  x.open("GET", "changepass.php?a=" + cppassword.value, true);
  x.send();
}
//back to login page
function exit() {
  window.open("index.html", "_self");
}

//load data
function player() {
  var x = new XMLHttpRequest();
  var a = document.getElementById("player");
  x.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      a.innerHTML = this.responseText;
    }
  };
  x.open("GET", "player.php?", true);
  x.send();
}
function PName() {
  var x = new XMLHttpRequest();
  var a = document.getElementById("PName");
  x.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      a.innerHTML = this.responseText;
    }
  };
  x.open("GET", "PName.php?", true);
  x.send();
}
function enemy() {
  var x = new XMLHttpRequest();
  var a = document.getElementById("enemy");
  x.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      a.innerHTML = this.responseText;
    }
  };
  x.open("GET", "enemy.php?", true);
  x.send();
}
function EName() {
  var x = new XMLHttpRequest();
  var a = document.getElementById("EName");
  x.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      a.innerHTML = this.responseText;
    }
  };
  x.open("GET", "EName.php?", true);
  x.send();
}
function profile() {
  var x = new XMLHttpRequest();
  var a = document.getElementById("profilepicture");
  x.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      a.innerHTML = this.responseText;
    }
  };
  x.open("GET", "profile.php?", true);
  x.send();
}
function Eprofile() {
  var x = new XMLHttpRequest();
  var a = document.getElementById("enemypicture");
  x.onreadystatechange = function () {
    if (this.readyState == 4 && this.status == 200) {
      a.innerHTML = this.responseText;
    }
  };
  x.open("GET", "Eprofile.php?", true);
  x.send();
}
