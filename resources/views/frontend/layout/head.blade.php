<meta charset=utf-8 />
<meta http-equiv=x-ua-compatible content="ie=edge" />
<title>@yield('title') - Bootstrap 5 eCommerce HTML Template.</title>
<meta name=description content="" />
<meta name=viewport content="width=device-width, initial-scale=1" />
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('website') }}/assets/images/favicon.svg" />

<link rel=stylesheet
    href="{{ asset('website') }}/assets/css/A.bootstrap.min.css%2bLineIcons.3.0.css%2btiny-slider.css%2bglightbox.min.css%2cMcc.OzR7N5fb_Y.css.pagespeed.cf.svKjl5Nf5n.css" />
<link rel=stylesheet href="{{ asset('website') }}/assets/css/A.main.css.pagespeed.cf.wZnWV-GMUP.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


<script data-pagespeed-no-defer>
    (function() {
        function f(a, b, d) {
            if (a.addEventListener) a.addEventListener(b, d, !1);
            else if (a.attachEvent) a.attachEvent("on" + b, d);
            else {
                var c = a["on" + b];
                a["on" + b] = function() {
                    d.call(this);
                    c && c.call(this)
                }
            }
        };
        window.pagespeed = window.pagespeed || {};
        var g = window.pagespeed;

        function k(a) {
            this.g = [];
            this.f = 0;
            this.h = !1;
            this.j = a;
            this.i = null;
            this.l = 0;
            this.b = !1;
            this.a = 0
        }

        function l(a, b) {
            var d = b.getAttribute("data-pagespeed-lazy-position");
            if (d) return parseInt(d, 0);
            var d = b.offsetTop,
                c = b.offsetParent;
            c && (d += l(a, c));
            d = Math.max(d, 0);
            b.setAttribute("data-pagespeed-lazy-position", d);
            return d
        }

        function m(a, b) {
            var d, c, e;
            if (!a.b && (0 == b.offsetHeight || 0 == b.offsetWidth)) return !1;
            a: if (b.currentStyle) c = b.currentStyle.position;
                else {
                    if (document.defaultView && document.defaultView.getComputedStyle && (c = document.defaultView
                            .getComputedStyle(b, null))) {
                        c = c.getPropertyValue("position");
                        break a
                    }
                    c = b.style && b.style.position ? b.style.position : ""
                }
            if ("relative" == c) return !0;
            e = 0;
            "number" == typeof window.pageYOffset ? e = window.pageYOffset : document.body && document.body
                .scrollTop ? e = document.body.scrollTop : document.documentElement &&
                document.documentElement.scrollTop && (e = document.documentElement.scrollTop);
            d = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
            c = e;
            e += d;
            var h = b.getBoundingClientRect();
            h ? (e = h.top - d, c = h.bottom) : (h = l(a, b), d = h + b.offsetHeight, e = h - e, c = d - c);
            return e <= a.f && 0 <= c + a.f
        }
        k.prototype.m = function(a) {
            p(a);
            var b = this;
            window.setTimeout(function() {
                var d = a.getAttribute("data-pagespeed-lazy-src");
                if (d)
                    if ((b.h || m(b, a)) && -1 != a.src.indexOf(b.j)) {
                        var c = a.parentNode,
                            e = a.nextSibling;
                        c && c.removeChild(a);
                        a.c && (a.getAttribute = a.c);
                        a.removeAttribute("onload");
                        a.tagName && "IMG" == a.tagName && g.CriticalImages && f(a, "load", function() {
                            g.CriticalImages.checkImageForCriticality(this);
                            b.b && (b.a--, b.a || g.CriticalImages.checkCriticalImages())
                        });
                        a.removeAttribute("data-pagespeed-lazy-src");
                        a.removeAttribute("data-pagespeed-lazy-replaced-functions");
                        c && c.insertBefore(a, e);
                        if (c = a.getAttribute("data-pagespeed-lazy-srcset")) a.srcset = c, a
                            .removeAttribute("data-pagespeed-lazy-srcset");
                        a.src = d
                    } else b.g.push(a)
            }, 0)
        };
        k.prototype.loadIfVisibleAndMaybeBeacon = k.prototype.m;
        k.prototype.s = function() {
            this.h = !0;
            q(this)
        };
        k.prototype.loadAllImages = k.prototype.s;

        function q(a) {
            var b = a.g,
                d = b.length;
            a.g = [];
            for (var c = 0; c < d; ++c) a.m(b[c])
        }

        function t(a, b) {
            return a.a ? null != a.a(b) : null != a.getAttribute(b)
        }
        k.prototype.u = function() {
            for (var a = document.getElementsByTagName("img"), b = 0, d; d = a[b]; b++) t(d,
                "data-pagespeed-lazy-src") && p(d)
        };
        k.prototype.overrideAttributeFunctions = k.prototype.u;

        function p(a) {
            t(a, "data-pagespeed-lazy-replaced-functions") || (a.c = a.getAttribute, a.getAttribute = function(a) {
                "src" == a.toLowerCase() && t(this, "data-pagespeed-lazy-src") && (a =
                    "data-pagespeed-lazy-src");
                return this.c(a)
            }, a.setAttribute("data-pagespeed-lazy-replaced-functions", "1"))
        }
        g.o = function(a, b) {
            function d() {
                if (!(c.b && a || c.i)) {
                    var b = 200;
                    200 < (new Date).getTime() - c.l && (b = 0);
                    c.i = window.setTimeout(function() {
                        c.l = (new Date).getTime();
                        q(c);
                        c.i = null
                    }, b)
                }
            }
            var c = new k(b);
            g.lazyLoadImages = c;
            f(window, "load", function() {
                c.b = !0;
                c.h = a;
                c.f = 200;
                if (g.CriticalImages) {
                    for (var b = 0, d = document.getElementsByTagName("img"), r = 0, n; n = d[r]; r++) -
                        1 != n.src.indexOf(c.j) && t(n, "data-pagespeed-lazy-src") && b++;
                    c.a = b;
                    c.a || g.CriticalImages.checkCriticalImages()
                }
                q(c)
            });
            b.indexOf("data") && ((new Image).src = b);
            f(window,
                "scroll", d);
            f(window, "resize", d)
        };
        g.lazyLoadInit = g.o;
    })();

    pagespeed.lazyLoadInit(true, "../../pagespeed_static/1.JiBnMqyl6S.gif");
</script>
