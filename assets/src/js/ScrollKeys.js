! function() {
    function e() {
        var e = !1;
        e && c("keydown", o), g.keyboardSupport && !e && u("keydown", o)
    }

    function t() {
        if (document.body) {
            var t = document.body,
                r = document.documentElement,
                a = window.innerHeight,
                o = t.scrollHeight;
            if (x = document.compatMode.indexOf("CSS") >= 0 ? r : t, w = t, e(), S = !0, top != self) y = !0;
            else if (o > a && (t.offsetHeight <= a || r.offsetHeight <= a) && (r.style.height = "auto", setTimeout(refresh, 10), x.offsetHeight <= a)) {
                var n = document.createElement("div");
                n.style.clear = "both", t.appendChild(n)
            }
            g.fixedBackground || b || (t.style.backgroundAttachment = "scroll", r.style.backgroundAttachment = "scroll")
        }
    }

    function r(e, t, r, a) {
        if (a || (a = 1e3), d(t, r), 1 != g.accelerationMax) {
            var o = +new Date,
                n = o - T;
            if (n < g.accelerationDelta) {
                var i = (1 + 30 / n) / 2;
                i > 1 && (i = Math.min(i, g.accelerationMax), t *= i, r *= i)
            }
            T = +new Date
        }
        if (M.push({ x: t, y: r, lastX: 0 > t ? .99 : -.99, lastY: 0 > r ? .99 : -.99, start: +new Date }), !C) {
            var l = e === document.body,
                u = function(o) {
                    for (var n = +new Date, i = 0, c = 0, s = 0; s < M.length; s++) {
                        var d = M[s],
                            f = n - d.start,
                            m = f >= g.animationTime,
                            p = m ? 1 : f / g.animationTime;
                        g.pulseAlgorithm && (p = h(p));
                        var w = d.x * p - d.lastX >> 0,
                            v = d.y * p - d.lastY >> 0;
                        i += w, c += v, d.lastX += w, d.lastY += v, m && (M.splice(s, 1), s--)
                    }
                    l ? window.scrollBy(i, c) : (i && (e.scrollLeft += i), c && (e.scrollTop += c)), t || r || (M = []), M.length ? E(u, e, a / g.frameRate + 1) : C = !1
                };
            E(u, e, 0), C = !0
        }
    }

    function a(e) {
        S || t();
        var a = e.target,
            o = l(a);
        if (!o || e.defaultPrevented || s(w, "embed") || s(a, "embed") && /\.pdf/i.test(a.src)) return !0;
        var n = e.wheelDeltaX || 0,
            i = e.wheelDeltaY || 0;
        return n || i || (i = e.wheelDelta || 0), !g.touchpadSupport && f(i) ? !0 : (Math.abs(n) > 1.2 && (n *= g.stepSize / 120), Math.abs(i) > 1.2 && (i *= g.stepSize / 120), r(o, -n, -i), void e.preventDefault())
    }

    function o(e) {
        var t = e.target,
            a = e.ctrlKey || e.altKey || e.metaKey || e.shiftKey && e.keyCode !== H.spacebar;
        if (/input|textarea|select|embed/i.test(t.nodeName) || t.isContentEditable || e.defaultPrevented || a) return !0;
        if (s(t, "button") && e.keyCode === H.spacebar) return !0;
        var o, n = 0,
            i = 0,
            u = l(w),
            c = u.clientHeight;
        switch (u == document.body && (c = window.innerHeight), e.keyCode) {
            case H.up:
                i = -g.arrowScroll;
                break;
            case H.down:
                i = g.arrowScroll;
                break;
            case H.spacebar:
                o = e.shiftKey ? 1 : -1, i = -o * c * .9;
                break;
            case H.pageup:
                i = .9 * -c;
                break;
            case H.pagedown:
                i = .9 * c;
                break;
            case H.home:
                i = -u.scrollTop;
                break;
            case H.end:
                var d = u.scrollHeight - u.scrollTop - c;
                i = d > 0 ? d + 10 : 0;
                break;
            case H.left:
                n = -g.arrowScroll;
                break;
            case H.right:
                n = g.arrowScroll;
                break;
            default:
                return !0
        }
        r(u, n, i), e.preventDefault()
    }

    function n(e) { w = e.target }

    function i(e, t) { for (var r = e.length; r--;) z[N(e[r])] = t; return t }

    function l(e) {
        var t = [],
            r = x.scrollHeight;
        do { var a = z[N(e)]; if (a) return i(t, a); if (t.push(e), r === e.scrollHeight) { if (!y || x.clientHeight + 10 < r) return i(t, document.body) } else if (e.clientHeight + 10 < e.scrollHeight && (overflow = getComputedStyle(e, "").getPropertyValue("overflow-y"), "scroll" === overflow || "auto" === overflow)) return i(t, e) } while (e = e.parentNode)
    }

    function u(e, t, r) { window.addEventListener(e, t, r || !1) }

    function c(e, t, r) { window.removeEventListener(e, t, r || !1) }

    function s(e, t) { return (e.nodeName || "").toLowerCase() === t.toLowerCase() }

    function d(e, t) { e = e > 0 ? 1 : -1, t = t > 0 ? 1 : -1, (k.x !== e || k.y !== t) && (k.x = e, k.y = t, M = [], T = 0) }

    function f(e) {
        if (e) {
            e = Math.abs(e), D.push(e), D.shift(), clearTimeout(A);
            var t = D[0] == D[1] && D[1] == D[2],
                r = m(D[0], 120) && m(D[1], 120) && m(D[2], 120);
            return !(t || r)
        }
    }

    function m(e, t) { return Math.floor(e / t) == e / t }

    function p(e) { var t, r, a; return e *= g.pulseScale, 1 > e ? t = e - (1 - Math.exp(-e)) : (r = Math.exp(-1), e -= 1, a = 1 - Math.exp(-e), t = r + a * (1 - r)), t * g.pulseNormalize }

    function h(e) { return e >= 1 ? 1 : 0 >= e ? 0 : (1 == g.pulseNormalize && (g.pulseNormalize /= p(1)), p(e)) }
    var w, v = { frameRate: 150, animationTime: 400, stepSize: 120, pulseAlgorithm: !0, pulseScale: 8, pulseNormalize: 1, accelerationDelta: 20, accelerationMax: 1, keyboardSupport: !0, arrowScroll: 50, touchpadSupport: !0, fixedBackground: !0, excluded: "" },
        g = v,
        b = !1,
        y = !1,
        k = { x: 0, y: 0 },
        S = !1,
        x = document.documentElement,
        D = [120, 120, 120],
        H = { left: 37, up: 38, right: 39, down: 40, spacebar: 32, pageup: 33, pagedown: 34, end: 35, home: 36 },
        g = v,
        M = [],
        C = !1,
        T = +new Date,
        z = {};
    setInterval(function() { z = {} }, 1e4);
    var A, N = function() { var e = 0; return function(t) { return t.uniqueID || (t.uniqueID = e++) } }(),
        E = function() { return window.requestAnimationFrame || window.webkitRequestAnimationFrame || function(e, t, r) { window.setTimeout(e, r || 1e3 / 60) } }(),
        K = /chrome/i.test(window.navigator.userAgent),
        L = "onmousewheel" in document;
    L && K && (u("mousedown", n), u("mousewheel", a), u("load", t))
}();