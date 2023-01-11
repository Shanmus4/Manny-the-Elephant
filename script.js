LottieInteractivity.create({
    player:'#titlelottie',
    mode:"scroll",
    container:'#titlediv',
        actions: [
        {
            visibility:[0, 1.0],
            type: "seek",
            frames: [0, 120],
        },
        ]
    });