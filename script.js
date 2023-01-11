LottieInteractivity.create({
    player:'#titlelottie',
    mode:"scroll",
    container:'#titlediv',
        actions: [
            {
                visibility:[0, 0.3],
                type: "stop",
                frames: [0]
            },
            {
                visibility: [0.3, 1.0],
                type: "seek",
                frames: [0, 120]
            }
        ]
    });