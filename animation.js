LottieInteractivity.create({
  player: "#titlelottie",
  mode: "scroll",
  container: "#titlediv",
  actions: [
    {
      visibility: [0, 0.3],
      type: "stop",
      frames: [0],
    },
    {
      visibility: [0.3, 1.0],
      type: "seek",
      frames: [0, 120],
    },
  ],
});

LottieInteractivity.create({
  player: "#f2lottie",
  mode: "scroll",
  container: "#f2div",
  actions: [
    {
      visibility: [0, 0.2],
      type: "stop",
      frames: [0],
    },
    {
      visibility: [0.2, 0.55],
      type: "seek",
      frames: [0, 72],
    },
  ],
});

LottieInteractivity.create({
  player: "#f2lottie",
  mode: "chain",
  container: "#f2div",

  actions: [
    {
      state: "click",
      frames: [72, 84],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [84, 96],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [96, 108],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [72, 84],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [84, 96],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [96, 108],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [72, 84],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [84, 96],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [96, 108],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [72, 84],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [84, 96],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [96, 108],
    },
    {
      state: "click",
      frames: [72, 84],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [84, 96],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [96, 108],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [72, 84],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [84, 96],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [96, 108],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [72, 84],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [84, 96],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [96, 108],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [72, 84],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [84, 96],
      transition: "onComplete",
    },
    {
      state: "click",
      frames: [96, 108],
    },
  ],
});
