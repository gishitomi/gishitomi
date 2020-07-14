$(function() {
    $(".left-box").hover(function() {
        $(this).css("background-color", "red");
    }, function() {
        $(this).css("background-color", "");
    });
    setInterval(function() {
        $(".bar1").animate({ width: '100%' }, 2000).delay(1400);
        $(".bar2").delay(300).animate({ width: '100%' }, 2000).delay(1100);
        $(".bar3").delay(600).animate({ width: '100%' }, 2000).delay(800);
        $(".bar4").delay(900).animate({ width: '100%' }, 2000).delay(500);
        $(".bar1").delay(1200).animate({ width: '-100%' }, 2000).delay(1400);
        $(".bar2").delay(1500).animate({ width: '-100%' }, 2000).delay(1100);
        $(".bar3").delay(1800).animate({ width: '-100%' }, 2000).delay(800);
        $(".bar4").delay(2100).animate({ width: '-100%' }, 2000).delay(500);
    }, 0)

    var rec = $(".rec").offset().top;
    // var rec = $(".rec").offset({ top: 1000 });

    var it = $(".it").offset().top;
    var study = $(".study").offset().top;
    var dialy = $(".dialy").offset().top;
    $("#scroll_btn1").click(function() {
        $("body,html").animate({
            scrollTop: rec - 30
        }, 700, "swing");
        return false;
    });
    $("#scroll_btn2").click(function() {
        $("body,html").animate({
            scrollTop: it - 30
        }, 500, "swing");
        return false;
    });
    $("#scroll_btn3").click(function() {
        $("body,html").animate({
            scrollTop: study - 30
        }, 500, "swing");
        return false;
    });
    $("#scroll_btn4").click(function() {
        $("body,html").animate({
            scrollTop: dialy - 30
        }, 500, "swing");
        return false;
    });
    $(".right-box").click(function() {
        $(".right-box span").toggleClass("clicked");
        $(".menu-wrapper").toggleClass("clicked");
    });
});

// vue.js

var app = new Vue({
    el: '#app-note',
    data: {
        message: 'こんにちは'
    },
    methods: {
        getHTML: function() {
            var vm = this
                // var params = { page: 1, per_page: 20, query: 'HTML' }
            axios.get('https://qiita.com/api/v2/items')
                .then(function(response) {
                    console.log(response)
                })
                .catch(function(error) {
                    console.log(error)
                })
        }
    }
})