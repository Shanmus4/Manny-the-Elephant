document.addEventListener("DOMContentLoaded", (event) => {
  document.getElementById("loading").style.display = "none";
  document.getElementById("content").style.display = "block";
  console.log("complete");
});

var footballsound = new Audio();
footballsound.src = "Assets/Frame 2/Football Kick.mp3";
