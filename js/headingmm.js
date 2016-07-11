var robjs = null;
window.onload = function () {

    var els = document.querySelectorAll('.rotatexy');
    if (els.length) {
        robjs = [];
        els.forEach(function (el) {
            var style = getComputedStyle(el);
            var transform = style.transform || style.webkitTransform || style.mozTransform;
            transform = transform == "none" ? "" : transform;
            robjs.push({
                el: el,
                transform: transform
            });

            console.log(transform);
        });
    }

    window.onmousemove = function (ev) {
        if (robjs == null || robjs.length == 0) {
            return;
        }
        var x = ev.clientX,
            y = ev.clientY,
            width = window.innerWidth,
            height = window.innerHeight;

        var midx = width / 2,
            midy = height / 2;

        var xdeg = 30,
            ydeg = 30;

        var rotatex = ((x - midx) / midx) * xdeg,
            rotatey = -((y - midy) / midy) * ydeg;

        robjs.forEach(function (robj) {
            console.log(robj.transform);
            robj.el.style.transform = robj.transform + " rotateY(" + rotatex + "deg) rotateX(" + rotatey + "deg)";
        });
    }
}