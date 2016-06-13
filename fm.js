var Home = 'http://example.org/';

$(document).ready(function() {
    var player = $("#player"),
    name = $("#song-name"),
    img = $("#song-image"),
    next = $("#next");
    var stream = {
        mp3: ""
    };
    function fm() {
        $.ajax({
            url: Home + "index.php?c=fm&m=random",
            type: "GET",
            async: false,
            dataType: "json",
            success: function(data) {
                stream = {
                    mp3: data.url
                };
                img.attr("src", data.img);
                name.text(data.name)
            }
        })
    }
    player.jPlayer({
        ready: function() {
            $(this).jPlayer("setMedia", stream).jPlayer("play")
        },
        ended: function(event) {
            fm();
            $(this).jPlayer("setMedia", stream).jPlayer("play")
        },
        supplied: "mp3,oga",
        cssSelectorAncestor: ".fm"
    });
    fm();
    next.click(function() {
        fm();
        player.jPlayer("setMedia", stream).jPlayer("play")
    })
});