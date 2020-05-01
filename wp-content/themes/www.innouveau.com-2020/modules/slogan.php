<script>
    let slogan = {
        tick: 0,
        words: {
            code: 'code',
            thatLoves: 'that loves',
            design: 'design'
        }
    };

    function startSloganAnimation() {
        slogan.interval = setInterval(() => {
            sloganTick();
        }, 100);
    }

    function sloganTick() {
        slogan.tick++;
        if (slogan.tick === 5) {
            $('.slogan__chunk-1').html('{{');
            $('.slogan__chunk-3').html('}}');
        }

        function readWord(word) {
            let letter, element;
            if (slogan.words[word].length > 0) {
                letter = slogan.words[word][0];
                element = $('.slogan .slogan__chunk--' + word);
                element.html(element.html() + letter);
                slogan.words[word] = slogan.words[word].substr(1);
            }
        }

        if (slogan.tick > 6) {
            readWord('code');
        }

        if (slogan.tick > 10) {
            readWord('thatLoves');
        }

        if (slogan.tick === 20) {
            $('.slogan__chunk-5').html('((');
            $('.slogan__chunk-7').html('))');
        }

        if (slogan.tick > 20) {
            readWord('design');
        }

        if (slogan.tick === 30) {
            clearInterval(slogan.interval);
        }
    }
</script>

<div class="slogan">
    <b>Innouveau</b><br>
    <span class="slogan__chunk-1 slogan__code"></span><span class="slogan__chunk-2 slogan__chunk--code"></span><span class="slogan__chunk-3 slogan__code "></span><br>
    <span class="slogan__chunk-4 slogan__chunk--thatLoves"></span><br>
    <span class="slogan__chunk-5 slogan__code"></span><span class="slogan__chunk-6 slogan__chunk--design"></span><span class="slogan__chunk-7 slogan__code"></span>
</div>