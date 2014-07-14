app = {}, UTIL = {
    fire: function(n, o, i) {
        var e = app;
        o = void 0 === o ? "init" : o, "" !== n && e[n] && "function" == typeof e[n][o] && e[n][o](i);
    },
    loadEvents: function() {
        var n = document.body.id;
        UTIL.fire("common"), UTIL.fire(n), $.each(document.body.className.split(/\s+/), function(o, i) {
            UTIL.fire(n, i);
        }), UTIL.fire("common", "finalize");
    }
}, $(document).ready(UTIL.loadEvents), app.common = {
    init: function() {},
    finalize: function() {}
}, app.home = {
    init: function() {
        console.log("Hello World!");
    }
};