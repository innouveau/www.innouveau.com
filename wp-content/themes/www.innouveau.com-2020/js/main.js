$(window).ready(function(){
    initMenu();
    initHeader();
    initYoutubeAPI();
});

function initYoutubeAPI() {
    let firstScriptTag,
        tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
}

function onYouTubeIframeAPIReady() {
    console.log('youtube api ready');
    $('.video').each(function() {
        new Video(this);
    })
}
