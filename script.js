setTimeout(function () {
  document.querySelector(".loader").style.opacity = "0";
  setTimeout(function () {
    document.querySelector(".loader").style.display = "none";
    document.querySelector(".content").style.display = "block";
  }, 200);
}, 2000);

//first audio for football
var footballsound = new Audio();
footballsound.src = "Assets/Frame 2/Football Kick.mp3";

//audio for manny speaking with animals
var f3sounds = [
  "Assets/Frame 4/elephant speak.mp3",
  "Assets/Frame 4/monkey.wav",
  "Assets/Frame 4/rabbit.mp3",
  "Assets/Frame 4/frog speak.mp3",
];

var currentSound = 0;

var f3sounddiv = document.getElementById("f3div");

f3sounddiv.addEventListener("click", function () {
  var f3audio = new Audio();
  f3audio.src = f3sounds[currentSound];
  f3audio.play();
  currentSound = currentSound + 1;
});

//audio for manny crying because of rejection
var f4sounddiv = document.getElementById("f4div");
var f4audio = new Audio();
f4audio.src = "Assets/Frame 5/elephant cry.mp3";

f4sounddiv.addEventListener("mouseover", function () {
  f4audio.play();
});

//audio tiger growl
var f5sounddiv = document.getElementById("f5div");
var f5audio = new Audio();
f5audio.src = "Assets/Frame 6/tiger growl.wav";

f5sounddiv.addEventListener("mouseover", function () {
  f5audio.play();
});
