function skill() {
  var position = document.getElementById("skills");
  position.scrollIntoView({ behavior: "smooth" });
}

function contactMe() {
  var contact = document.getElementById("contact");
  contact.scrollIntoView({ behavior: "smooth" });
}

function educationView() {
  var edu = document.getElementById("projects");
  edu.scrollIntoView({ behavior: "smooth" });
}

function seeResume() {
  d1 = document.createElement("div");
  messageDiv = document.getElementById("messageDiv");
  messageDiv.style.display = "block";
  d1.innerHTML = messageDiv.innerHTML;
  d1.className = "col-12 offset-0 col-lg-8 offset-lg-2 rounded bg-dark d1";
  d1.id = "d1";
  document.body.appendChild(d1);
  document.body.appendChild(document.getElementById("messageDiv"));
}

function closeResume() {
  var d1 = document.getElementById("d1");
  d1.remove({ behavior: "smooth" });
}

function sendMessage() {
  var name = document.getElementById("name");
  var email = document.getElementById("email");
  var message = document.getElementById("message");

  var form = new FormData();
  form.append("name", name.value);
  form.append("email", email.value);
  form.append("message", message.value);

  var r = new XMLHttpRequest();
  r.onreadystatechange = function () {
    var t = r.responseText;

    if (r.readyState == 4) {
      if (t == "Success") {
        alert(
          "Thankyou verymuch, I will send my reply as soon as possible!!"
        );
        location.reload();
      } else {
        alert(t);
      }
    }
  };

  r.open("POST", "messageProcess.php", true);
  r.send(form);
}

var button = document.getElementById("scrollButton");
window.addEventListener("scroll", function () {
  if (this.window.pageYOffset > 20) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
});

function scrollToTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

function menuIconDisplay() {
  var menuBar = document.getElementById("menu");
  if (menuBar) {
    menu.remove({ behavior: "smooth" });
  } else if (!menuBar) {
    menuBar = document.createElement("div");
    menuBar.style.display = "block";
    menuBar.className = "menuDiv col-12 opacity-75 bg-primary";
    menuBar.id = "menu";
    menuBar.innerHTML = document.getElementById("menuItems").innerHTML;
    document.body.appendChild(menuBar);
  }
}

function disappear() {
  document.getElementById("menu").remove({ behavior: "smooth" });
}

window.reload();
function skill() {
  var position = document.getElementById("skills");
  position.scrollIntoView({ behavior: "smooth" });
}

function contactMe() {
  var contact = document.getElementById("contact");
  contact.scrollIntoView({ behavior: "smooth" });
}

function educationView() {
  var edu = document.getElementById("projects");
  edu.scrollIntoView({ behavior: "smooth" });
}

function seeResume() {
  d1 = document.createElement("div");
  messageDiv = document.getElementById("messageDiv");
  messageDiv.style.display = "block";
  d1.innerHTML = messageDiv.innerHTML;
  d1.className = "col-12 offset-0 col-lg-8 offset-lg-2 rounded bg-dark d1";
  d1.id = "d1";
  document.body.appendChild(d1);
  document.body.appendChild(document.getElementById("messageDiv"));
}

function closeResume() {
  var d1 = document.getElementById("d1");
  d1.remove({ behavior: "smooth" });
}



var button = document.getElementById("scrollButton");
window.addEventListener("scroll", function () {
  if (this.window.pageYOffset > 20) {
    button.style.display = "block";
  } else {
    button.style.display = "none";
  }
});

function scrollToTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

function menuIconDisplay() {
  var menuBar = document.getElementById("menu");
  if (menuBar) {
    menu.remove({ behavior: "smooth" });
  } else if (!menuBar) {
    menuBar = document.createElement("div");
    menuBar.style.display = "block";
    menuBar.className = "menuDiv col-12 opacity-75 bg-primary";
    menuBar.id = "menu";
    menuBar.innerHTML = document.getElementById("menuItems").innerHTML;
    document.body.appendChild(menuBar);
  }
}

function disappear() {
  document.getElementById("menu").remove({ behavior: "smooth" });
}

window.reload();
