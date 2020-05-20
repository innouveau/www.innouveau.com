$(window).ready(function(){
    initMenu();
    initScroll();
    initYoutubeAPI();
    initImageFadeIn();
});

function initScroll() {
    $(window).scroll(function (event) {
        let scroll = $(window).scrollTop();

        if (scroll > 80) {
            $('.header').addClass('header--small');
        } else {
            $('.header').removeClass('header--small');
        }

        if (scroll > 150) {
            $('.header').addClass('header--small--delay');
        } else {
            $('.header').removeClass('header--small--delay');
        }

        if (scroll > 600) {
            $('.next-case').addClass('next-case--visible');
        }
    });
}

function initYoutubeAPI() {
    let firstScriptTag,
        tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
}


function onYouTubeIframeAPIReady() {
    $('.video').each(function() {
        new Video(this);
    })
}

function initImageFadeIn() {
    let images, imagesData, windowHeight, margin;
    margin = 300;
    imagesData = [];
    windowHeight = $(window).outerHeight();
    images = $('.content figure');
    images.each(function() {
        let image, top, bottom;
        image = $(this);
        top = image.offset().top;
        bottom = top + image.outerHeight();
        imagesData.push({
            image,
            top,
            bottom
        })
    });

    const onScroll = function() {
        let scroll, remove;
        remove = [];
        scroll = $(window).scrollTop();
        for (let d of imagesData) {
            if (scroll > (d.top - windowHeight + margin)) {
                d.image.addClass('figure--visited');
                remove.push(d);
            }
        }
        for (let i = imagesData.length - 1; i >= 0; i--) {
            let d = imagesData[i];
            if (remove.indexOf(d) > -1) {
                imagesData.splice(i, 1);
            }
        }

        if (imagesData.length === 0) {
            $(window).off("scroll", onScroll);
        }
    };


    $(window).scroll(onScroll);
}
