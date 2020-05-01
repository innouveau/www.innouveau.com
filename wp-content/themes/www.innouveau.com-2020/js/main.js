$(window).ready(function(){
    initRotateTile();
    initFilter();
    resizeVideo();
    initTiles();
    startSloganAnimation();
});

let filter = {
    about: true,
    event: true,
    presentation: true
};

let status = '';

function resizeVideo() {
    let container, height;
    container = $('.tile--video .tile__front-main');
    height = container.outerHeight();
    $('.tile--video iframe').css('height', height);
}

function initRotateTile() {
    $('.tile--rotatable').click(function(event){
        if (!$(event.target).hasClass('a-outer-link')) {
            $(this).toggleClass('tile--rotated');
        }
    });
}


function initFilter() {
    let type, itemsToHide, itemsToShow, intervalHide, intervalShow, iHide, iShow;

    // turn all tile on
    $('.tile').data('vis', 1);

    $('.filter__button').click(function(){
        $(this).toggleClass('filter__button--active');
        type = $(this).data('cat');
        filter[type] = !filter[type];
        itemsToHide = [];
        itemsToShow = [];
        if (intervalHide) {
            clearInterval(intervalHide);
        }

        if (intervalShow) {
            clearInterval(intervalShow);
        }

        iHide = 0;
        iShow = 0;

        for (let key in filter) {
            if (filter[key]) {
                $('.tile--' + key).each(function(){
                    if ($(this).data('vis') === 0) {
                       itemsToShow.push(this);
                   }
                });

            } else {
                $('.tile--' + key).each(function(){
                    if ($(this).data('vis') === 1) {
                        itemsToHide.push(this);
                    }
                });
            }
        }


        if (itemsToHide.length > 0) {
            status = 'hiding';
            intervalHide = setInterval(() => {
                hideItem(itemsToHide[iHide]);
            }, 80);
        }

        if (itemsToShow.length > 0) {
            status = 'showing';
            intervalShow = setInterval(() => {
                showItem(itemsToShow[iShow]);
            }, 80);
        }
    });

    function hideItem(item) {
        $(item).data('vis', 0);
        $(item).addClass('tile--hidden');
        setTimeout(()=> {
            // action could be overruled by a new action
            if (status === 'hiding') {
                $(item).css('width', 0)
            }
        }, 200);
        setTimeout(()=> {
            if (status === 'hiding') {
                $(item).hide();
            }
        }, 1000);
        iHide++;
        if (iHide >= itemsToHide.length) {
            clearInterval(intervalHide);
        }
    }

    function showItem(item) {
        $(item).data('vis', 1);
        $(item).css('width', '');
        $(item).show();
        setTimeout(() => {
            if (status === 'showing') {
                $(item).removeClass('tile--hidden');
            }
        }, 150);

        iShow++;
        if (iShow >= itemsToShow.length) {
            clearInterval(intervalShow);
        }
    }
}

function initTiles() {
    let tiles, i;

    function shuffle(a) {
        for (let i = a.length - 1; i > 0; i--) {
            const j = Math.floor(Math.random() * (i + 1));
            [a[i], a[j]] = [a[j], a[i]];
        }
        return a;
    }

    tiles = [];
    i = 0;
    $('.tile').each(function() {
        tiles.push(this);
    });
    tiles = shuffle(tiles);

    setInterval(() => {
        $(tiles[i]).removeClass('tile--hidden');
        i++;
    }, 20)

}