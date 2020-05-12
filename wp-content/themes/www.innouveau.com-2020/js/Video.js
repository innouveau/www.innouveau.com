class Video {
    constructor(element) {
        this.element = $(element);
        this.player = null;
        this.status = {
            loaded: false,
            played: false,
            mini: false,
            triggeredNext: false
        };
        this.init();
    }


    get id() {
        return this.element.data('video-id');
    }

    init() {
        this.load();
    }

    load() {
        const onPlayerReady = function(event) {
            //event.target.mute();
            event.target.playVideo();
        };

        const onPlayerStateChange = function(event) {
            // playing
            if (event.data === 1) {
                this.status.loaded = true;
            }

            // ended
            if (event.data === 0) {
                // loop
                event.target.playVideo();
            }
        };

        this.player = new YT.Player('video-' + this.id, {
            height: '390',
            width: '640',
            videoId: this.id,
            events: {
                'onReady': onPlayerReady,
                'onStateChange': onPlayerStateChange
            },
            playerVars: {
                'autoplay': 0,
                'controls': 1,
                'showinfo': 0,
                'modestbranding': 1,
                'rel': 0,
                'loop': 1
            }
        });
    }

    play() {
        if (this.status.loaded) {
            this.player.playVideo();
        }

    }

    pause() {
        if (this.status.loaded) {
            this.player.pauseVideo();
        }
    }
}
