var footballsound = new Audio();
footballsound.src = "Assets/Frame 2/Football Kick.mp3";

let button = document.querySelector(".btn");
let form = document.querySelector(".form");

button.addEventListener("click", function () {
  form.classList.toggle("form--no");
});
