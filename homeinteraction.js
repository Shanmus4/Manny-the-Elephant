//nav bar

document.getElementById("discover").addEventListener("click", function () {
  document.getElementById("discoverpage").style.display = "block";
  document.getElementById("feedbackpage").style.display = "none";
  document.getElementById("instructionpage").style.display = "none";
});

document.getElementById("feedbacks").addEventListener("click", function () {
  document.getElementById("discoverpage").style.display = "none";
  document.getElementById("feedbackpage").style.display = "block";
  document.getElementById("instructionpage").style.display = "none";
});

document.getElementById("instruction").addEventListener("click", function () {
  document.getElementById("discoverpage").style.display = "none";
  document.getElementById("feedbackpage").style.display = "none";
  document.getElementById("instructionpage").style.display = "block";
});

document.addEventListener("DOMContentLoaded", function (event) {
  const showNavbar = (toggleId, navId, bodyId, headerId) => {
    const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId),
      bodypd = document.getElementById(bodyId),
      headerpd = document.getElementById(headerId);

    // Validate that all variables exist
    if (toggle && nav && bodypd && headerpd) {
      toggle.addEventListener("click", () => {
        // show navbar
        nav.classList.toggle("show");
        // change icon
        toggle.classList.toggle("bi-x-lg");
        // add padding to body
        bodypd.classList.toggle("body-pd");
        // add padding to header
        headerpd.classList.toggle("body-pd");
      });
    }
  };

  showNavbar("header-toggle", "nav-bar", "body-pd", "header");

  /*===== LINK ACTIVE =====*/
  const linkColor = document.querySelectorAll(".nav_link");

  function colorLink() {
    if (linkColor) {
      linkColor.forEach((l) => l.classList.remove("active"));
      this.classList.add("active");
    }
  }
  linkColor.forEach((l) => l.addEventListener("click", colorLink));
});

//homepage
