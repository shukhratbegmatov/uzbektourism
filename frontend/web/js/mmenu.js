!function (t) {
    var e = {};

    function n(o) {
        if (e[o]) return e[o].exports;
        var i = e[o] = {i: o, l: !1, exports: {}};
        return t[o].call(i.exports, i, i.exports, n), i.l = !0, i.exports
    }

    n.m = t, n.c = e, n.d = function (t, e, o) {
        n.o(t, e) || Object.defineProperty(t, e, {enumerable: !0, get: o})
    }, n.r = function (t) {
        "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {value: "Module"}), Object.defineProperty(t, "__esModule", {value: !0})
    }, n.t = function (t, e) {
        if (1 & e && (t = n(t)), 8 & e) return t;
        if (4 & e && "object" == typeof t && t && t.__esModule) return t;
        var o = Object.create(null);
        if (n.r(o), Object.defineProperty(o, "default", {
            enumerable: !0,
            value: t
        }), 2 & e && "string" != typeof t) for (var i in t) n.d(o, i, function (e) {
            return t[e]
        }.bind(null, i));
        return o
    }, n.n = function (t) {
        var e = t && t.__esModule ? function () {
            return t.default
        } : function () {
            return t
        };
        return n.d(e, "a", e), e
    }, n.o = function (t, e) {
        return Object.prototype.hasOwnProperty.call(t, e)
    }, n.p = "", n(n.s = 0)
}([function (t, e, n) {
    "use strict";
    n.r(e);
    var o = function () {
            function t(t) {
                var e = this;
                this.listener = function (t) {
                    (t.matches ? e.matchFns : e.unmatchFns).forEach((function (t) {
                        t()
                    }))
                }, this.toggler = window.matchMedia(t), this.toggler.addListener(this.listener), this.matchFns = [], this.unmatchFns = []
            }

            return t.prototype.add = function (t, e) {
                this.matchFns.push(t), this.unmatchFns.push(e), (this.toggler.matches ? t : e)()
            }, t
        }(), i = function (t) {
            return Array.prototype.slice.call(t)
        }, r = function (t, e) {
            return i((e || document).querySelectorAll(t))
        },
        s = ("ontouchstart" in window || navigator.msMaxTouchPoints, navigator.userAgent.indexOf("MSIE") > -1 || navigator.appVersion.indexOf("Trident/") > -1),
        a = "mm-spn", c = function () {
            function t(t, e, n, o, i) {
                this.node = t, this.title = e, this.selectedClass = n, this.node.classList.add(a), s && (o = !1), this.node.classList.add(a + "--" + i), this.node.classList.add(a + "--" + (o ? "navbar" : "vertical")), this._setSelectedl(), this._initAnchors()
            }

            return Object.defineProperty(t.prototype, "prefix", {
                get: function () {
                    return a
                }, enumerable: !0, configurable: !0
            }), t.prototype.openPanel = function (t) {
                var e = t.dataset.mmSpnTitle, n = t.parentElement;
                n === this.node ? this.node.classList.add(a + "--main") : (this.node.classList.remove(a + "--main"), e || i(n.children).forEach((function (t) {
                    t.matches("a, span") && (e = t.textContent)
                }))), e || (e = this.title), this.node.dataset.mmSpnTitle = e, r("." + a + "--open", this.node).forEach((function (t) {
                    t.classList.remove(a + "--open"), t.classList.remove(a + "--parent")
                })), t.classList.add(a + "--open"), t.classList.remove(a + "--parent");
                for (var o = t.parentElement.closest("ul"); o;) o.classList.add(a + "--open"), o.classList.add(a + "--parent"), o = o.parentElement.closest("ul")
            }, t.prototype._setSelectedl = function () {
                var t = r("." + this.selectedClass, this.node), e = t[t.length - 1], n = null;
                e && (n = e.closest("ul")), n || (n = this.node.querySelector("ul")), this.openPanel(n)
            }, t.prototype._initAnchors = function () {
                var t = this;
                this.node.addEventListener("click", (function (e) {
                    var n = !1;
                    n = (n = (n = n || function (t) {
                        return !!t.target.matches("a") && (t.stopImmediatePropagation(), !0)
                    }(e)) || function (e) {
                        var n, o = e.target;
                        return !!(n = o.closest("span") ? o.parentElement : !!o.closest("li") && o) && (i(n.children).forEach((function (e) {
                            e.matches("ul") && t.openPanel(e)
                        })), e.stopImmediatePropagation(), !0)
                    }(e)) || function (e) {
                        var n = e.target, o = r("." + a + "--open", n), i = o[o.length - 1];
                        if (i) {
                            var s = i.parentElement.closest("ul");
                            if (s) return t.openPanel(s), e.stopImmediatePropagation(), !0
                        }
                    }(e)
                }))
            }, t
        }(), d = "mm-ocd", u = function () {
            function t(t, e) {
                var n = this;
                void 0 === t && (t = null), this.wrapper = document.createElement("div"), this.wrapper.classList.add("" + d), this.wrapper.classList.add(d + "--" + e), this.content = document.createElement("div"), this.content.classList.add(d + "__content"), this.wrapper.append(this.content), this.backdrop = document.createElement("div"), this.backdrop.classList.add(d + "__backdrop"), this.wrapper.append(this.backdrop), document.body.append(this.wrapper), t && this.content.append(t);
                var o = function (t) {
                    n.close(), t.preventDefault(), t.stopImmediatePropagation()
                };
                this.backdrop.addEventListener("touchstart", o), this.backdrop.addEventListener("mousedown", o)
            }

            return Object.defineProperty(t.prototype, "prefix", {
                get: function () {
                    return d
                }, enumerable: !0, configurable: !0
            }), t.prototype.open = function () {
                this.wrapper.classList.add(d + "--open"), document.body.classList.add(d + "-opened")
            }, t.prototype.close = function () {
                this.wrapper.classList.remove(d + "--open"), document.body.classList.remove(d + "-opened")
            }, t
        }(), l = function () {
            function t(t, e) {
                void 0 === e && (e = "all"), this.menu = t, this.toggler = new o(e)
            }

            return t.prototype.navigation = function (t) {
                var e = this;
                if (!this.navigator) {
                    var n = (t = t || {}).title, o = void 0 === n ? "Menu" : n, i = t.selectedClass,
                        r = void 0 === i ? "Selected" : i, s = t.slidingSubmenus, a = void 0 === s || s, d = t.theme,
                        u = void 0 === d ? "light" : d;
                    this.navigator = new c(this.menu, o, r, a, u), this.toggler.add((function () {
                        return e.menu.classList.add(e.navigator.prefix)
                    }), (function () {
                        return e.menu.classList.remove(e.navigator.prefix)
                    }))
                }
                return this.navigator
            }, t.prototype.offcanvas = function (t) {
                var e = this;
                if (!this.drawer) {
                    var n = (t = t || {}).position, o = void 0 === n ? "left" : n;
                    this.drawer = new u(null, o);
                    var i = document.createComment("original menu location");
                    this.menu.after(i), this.toggler.add((function () {
                        e.drawer.content.append(e.menu)
                    }), (function () {
                        e.drawer.close(), i.after(e.menu)
                    }))
                }
                return this.drawer
            }, t
        }();
    e.default = l;
    window.MmenuLight = l
}]);