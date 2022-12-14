/********** CROPPER THE PHOTOS WITH PREVIEW **********/

var cropper = function() {
    return function() {
        this.eles = {
            ele: void 0,
            container: void 0,
            img: void 0,
            overlay: void 0
        }, this.img = void 0, this.imgInfo = {
            aw: 0,
            ah: 0,
            w: 0,
            h: 0,
            at: 0,
            al: 0,
            t: 0,
            l: 0,
            s: 1
        }, this.init = function(t) {
            this.settings = {
                slider: t + " .cropSlider"
            };
            var e, n, i, t = $(t + " .cropMain"),
                a = this;
            n = $("<div />").attr({
                "class": "crop-container"
            }).css({
                width: t.width(),
                height: t.height()
            }), e = $("<img />").attr({
                "class": "crop-img"
            }).css({
                zIndex: 59,
                top: 0,
                left: 0
            }), i = $("<div />").attr({
                "class": "crop-overlay"
            }).css({
                zIndex: 60
            }), n.append(i), n.append(e), t.append(n), this.eles.ele = t, this.eles.container = n, this.eles.img = e, this.eles.overlay = i, n.resize(function() {
                a.imgSize()
            }), i.bind(null !== document.ontouchstart ? "mousedown" : "touchstart", function(t) {
                var e = $(this),
                    n = {
                        x: t.pageX || t.originalEvent.pageX,
                        y: t.pageY || t.originalEvent.pageY
                    },
                    o = {
                        x: e.parent().offset().left,
                        y: e.parent().offset().top
                    };
                return t.preventDefault(), $(document).bind(null !== document.ontouchmove ? "mousemove" : "touchmove", function(t) {
                    if (t.pageX || void 0 !== typeof t.originalEvent.changedTouches[0]) {
                        var i = {
                            x: t.pageX || t.originalEvent.changedTouches[0].pageX,
                            y: t.pageY || t.originalEvent.changedTouches[0].pageY
                        };
                        0 == parseInt(e.css("top")) && e.css({
                            top: a.eles.ele.offset().top,
                            left: a.eles.ele.offset().left
                        }), a.imgMove({
                            t: parseInt(e.css("top")) - (o.y - (n.y - i.y)),
                            l: parseInt(e.css("left")) - (o.x - (n.x - i.x))
                        }), e.css({
                            left: o.x - (n.x - i.x),
                            top: o.y - (n.y - i.y)
                        })
                    }
                }), $(document).bind(null !== document.ontouchend ? "mouseup" : "touchend", function(t) {
                    $(document).unbind(null !== document.ontouchmove ? "mousemove" : "touchmove"), i.css({
                        top: 0,
                        left: 0
                    })
                }), !1
            }), this.slider()
        }, this.loadImg = function(t) {
            var e = this;
            this.eles.img.attr("src", t).on("load", function() {
                e.imgSize()
            })
        }, this.imgSize = function() {
            var t = this.eles.img,
                e = {
                    w: t.css("width", "").width(),
                    h: t.css("height", "").height()
                },
                n = this.eles.container;
            ({
                wh: this.eles.container.width() / this.eles.container.height(),
                hw: this.eles.container.height() / this.eles.container.width()
            });
            this.imgInfo.aw = e.w, this.imgInfo.ah = e.h, n.height() > n.width() && e.w / n.width() > e.h / n.height() ? (this.imgInfo.h = n.height(), this.imgInfo.w = e.w / (e.h / n.height()), this.imgInfo.al = 0) : e.w < e.h || e.w / n.width() < e.h / n.height() ? (this.imgInfo.w = n.width(), this.imgInfo.h = e.h / (e.w / n.width()), this.imgInfo.al = 0) : (this.imgInfo.h = n.height(), this.imgInfo.w = e.w / (e.h / n.height()), this.imgInfo.al = 0), this.imgResize()
        }, this.imgResize = function(t) {
            var e = this.eles.img,
                n = this.imgInfo,
                i = n.s;
            n.s = t || n.s, e.css({
                width: n.w * n.s,
                height: n.h * n.s
            }), this.imgMove({
                t: -(n.h * i - n.h * n.s) / 2,
                l: -(n.w * i - n.w * n.s) / 2
            })
        }, this.imgMove = function(t) {
            var e = this.eles.img,
                n = this.imgInfo,
                i = this.eles.container;
            n.t += t.t, n.l += t.l;
            var a = n.at - n.t,
                o = n.al - n.l;
            a > .01 ? (a = .01, n.t = .01 == n.at ? 0 : -.01) : a < -(n.h * n.s - (i.height() - .01)) && (a = -(n.h * n.s - (i.height() - .01)), n.t = .01 == n.at ? n.h * n.s - (i.height() - .02) : n.h * n.s - (i.height() - .01)), o > .01 ? (o = .01, n.l = .01 == n.al ? 0 : -.01) : o < -(n.w * n.s - (i.width() - .01)) && (o = -(n.w * n.s - (i.width() - .01)), n.l = .01 == n.al ? n.w * n.s - (i.width() - .02) : n.w * n.s - (i.width() - .01)), e.css({
                top: a,
                left: o
            })
        }, this.slider = function() {
            var t = this;
            $(this.settings.slider).noUiSlider({
                range: [1, 4],
                start: 1,
                step: .002,
                handles: 1,
                slide: function() {
                    var e = $(this).val();
                    t.imgResize(e)
                }
            })
        }, coordinates = function t(e) {
            var n = e.imgInfo,
                i = e.eles.container,
                a = e.eles.img,
                o = a.attr("src"),
                t = {
                    x: -(parseInt(a.css("left")) - .01) * (n.aw / (n.w * n.s)),
                    y: -(parseInt(a.css("top")) - .01) * (n.ah / (n.h * n.s)),
                    w: (i.width() - .02) * (n.aw / (n.w * n.s)),
                    h: (i.height() - .02) * (n.ah / (n.h * n.s)),
                    image: o
                };
            return t
        }
    }
}();
! function(t, e) {
    if (t.zepto && !t.fn.removeData) throw new ReferenceError("Zepto is loaded without the data module.");
    t.fn.noUiSlider = function(n) {
        function i(e, n, i) {
            t.isArray(e) || (e = [e]), t.each(e, function(t, e) {
                "function" == typeof e && e.call(n, i)
            })
        }

        function a(e) {
            return e instanceof t || t.zepto && t.zepto.isZ(e)
        }

        function o(n) {
            n.preventDefault();
            var i, a, o = 0 === n.type.indexOf("touch"),
                s = 0 === n.type.indexOf("mouse"),
                r = 0 === n.type.indexOf("pointer"),
                h = n;
            return 0 === n.type.indexOf("MSPointer") && (r = !0), n.originalEvent && (n = n.originalEvent), o && (i = n.changedTouches[0].pageX, a = n.changedTouches[0].pageY), (s || r) && (r || window.pageXOffset !== e || (window.pageXOffset = document.documentElement.scrollLeft, window.pageYOffset = document.documentElement.scrollTop), i = n.clientX + window.pageXOffset, a = n.clientY + window.pageYOffset), t.extend(h, {
                x: i,
                y: a
            })
        }

        function s(e, n, i, a, s) {
            return e = e.replace(/\s/g, b + " ") + b, s ? (s > 1 && (a = t.extend(n, a)), n.on(e, t.proxy(i, a))) : (a.handler = i, n.on(e, t.proxy(function(t) {
                return this.target.is('[class*="noUi-state-"], [disabled]') ? !1 : void this.handler(o(t))
            }, a)))
        }

        function r(t) {
            return !isNaN(parseFloat(t)) && isFinite(t)
        }

        function h(t) {
            return parseFloat(this.style[t])
        }

        function l(e, n) {
            function i(t) {
                return a(t) || "string" == typeof t || !1 === t
            }
            var o = {
                handles: {
                    r: !0,
                    t: function(t) {
                        return t = parseInt(t, 10), 1 === t || 2 === t
                    }
                },
                range: {
                    r: !0,
                    t: function(t, e, n) {
                        return 2 !== t.length ? !1 : (t = [parseFloat(t[0]), parseFloat(t[1])], !r(t[0]) || !r(t[1]) || "range" === n && t[0] === t[1] || t[1] < t[0] ? !1 : (e[n] = t, !0))
                    }
                },
                start: {
                    r: !0,
                    t: function(e, n, i) {
                        return 1 === n.handles ? (t.isArray(e) && (e = e[0]), e = parseFloat(e), n.start = [e], r(e)) : this.parent.range.t(e, n, i)
                    }
                },
                connect: {
                    t: function(t, e) {
                        return !0 === t || !1 === t || "lower" === t && 1 === e.handles || "upper" === t && 1 === e.handles
                    }
                },
                orientation: {
                    t: function(t) {
                        return "horizontal" === t || "vertical" === t
                    }
                },
                margin: {
                    r: !0,
                    t: function(t, e, n) {
                        return t = parseFloat(t), e[n] = t, r(t)
                    }
                },
                serialization: {
                    r: !0,
                    t: function(e, n) {
                        if (e.resolution) switch (e.resolution) {
                            case 1:
                            case .1:
                            case .01:
                            case .001:
                            case 1e-4:
                            case 1e-5:
                                break;
                            default:
                                return !1
                        } else n.serialization.resolution = .01;
                        return e.mark ? "." === e.mark || "," === e.mark : (n.serialization.mark = ".", e.to ? 1 === n.handles ? (t.isArray(e.to) || (e.to = [e.to]), n.serialization.to = e.to, i(e.to[0])) : 2 === e.to.length && i(e.to[0]) && i(e.to[1]) : !1)
                    }
                },
                slide: {
                    t: function(t) {
                        return "function" == typeof t
                    }
                },
                set: {
                    t: function(t, e) {
                        return this.parent.slide.t(t, e)
                    }
                },
                step: {
                    t: function(t, e, n) {
                        return this.parent.margin.t(t, e, n)
                    }
                },
                init: function() {
                    var e = this;
                    return t.each(e, function(t, n) {
                        n.parent = e
                    }), delete this.init, this
                }
            }.init();
            t.each(o, function(t, i) {
                if (i.r && !e[t] && 0 !== e[t] || (e[t] || 0 === e[t]) && !i.t(e[t], e, t)) throw console && console.log && console.group && (console.group("Invalid noUiSlider initialisation:"), console.log("Option:   ", t), console.log("Value:    ", e[t]), console.log("Slider:    ", n[0]), console.groupEnd()), new RangeError("noUiSlider")
            })
        }

        function d(t, e) {
            return t = t.toFixed(e.data("decimals")), t.replace(".", e.data("mark"))
        }

        function c(t, e, n) {
            var i = t.data("nui").options,
                a = t.data("nui").base.data("handles"),
                o = t.data("nui").style;
            if (!r(e) || e === t[0].gPct(o)) return !1;
            if (e = 0 > e ? 0 : e > 100 ? 100 : e, i.step && !n) {
                var s = C.from(i.range, i.step);
                e = Math.round(e / s) * s
            }
            return e === t[0].gPct(o) || t.siblings("." + E[1]).length && !n && a && (t.data("nui").number ? (n = a[0][0].gPct(o) + i.margin, e = n > e ? n : e) : (n = a[1][0].gPct(o) - i.margin, e = e > n ? n : e), e === t[0].gPct(o)) ? !1 : (0 === t.data("nui").number && e > 95 ? t.addClass(E[13]) : t.removeClass(E[13]), t.css(o, e + "%"), t.data("store").val(d(C.is(i.range, e), t.data("nui").target)), !0)
        }

        function u(n, i) {
            var o = n.data("nui").number,
                r = {
                    target: n.data("nui").target,
                    options: n.data("nui").options,
                    handle: n,
                    i: o
                };
            return a(i.to[o]) ? (s("change blur", i.to[o], M[0], r, 2), s("change", i.to[o], r.options.set, r.target, 1), i.to[o]) : "string" == typeof i.to[o] ? t('<input type="hidden" name="' + i.to[o] + '">').appendTo(n).addClass(E[3]).change(M[1]) : !1 === i.to[o] ? {
                val: function(t) {
                    return t === e ? this.handleElement.data("nui-val") : void this.handleElement.data("nui-val", t)
                },
                hasClass: function() {
                    return !1
                },
                handleElement: n
            } : void 0
        }

        function g(t) {
            var e = this.base,
                n = e.data("style"),
                a = t.x - this.startEvent.x,
                o = "left" === n ? e.width() : e.height();
            "top" === n && (a = t.y - this.startEvent.y), a = this.position + 100 * a / o, c(this.handle, a), i(e.data("options").slide, e.data("target"))
        }

        function f() {
            var e = this.base,
                n = this.handle;
            n.children().removeClass(E[4]), x.off(I.move), x.off(I.end), t("body").off(b), e.data("target").change(), i(n.data("nui").options.set, e.data("target"))
        }

        function p(e) {
            var n = this.handle,
                i = n[0].gPct(n.data("nui").style);
            n.children().addClass(E[4]), s(I.move, x, g, {
                startEvent: e,
                position: i,
                base: this.base,
                target: this.target,
                handle: n
            }), s(I.end, x, f, {
                base: this.base,
                target: this.target,
                handle: n
            }), t("body").on("selectstart" + b, function() {
                return !1
            })
        }

        function m(t) {
            t.stopPropagation(), f.call(this)
        }

        function v(t) {
            if (!this.base.find("." + E[4]).length) {
                var e, n, a = this.base;
                n = this.handles;
                var o = a.data("style");
                t = t["left" === o ? "x" : "y"];
                var s = "left" === o ? a.width() : a.height(),
                    r = [],
                    h = {
                        left: a.offset().left,
                        top: a.offset().top
                    };
                for (e = 0; e < n.length; e++) r.push({
                    left: n[e].offset().left,
                    top: n[e].offset().top
                });
                e = 1 === n.length ? 0 : (r[0][o] + r[1][o]) / 2, n = 1 === n.length || e > t ? n[0] : n[1], a.addClass(E[5]), setTimeout(function() {
                    a.removeClass(E[5])
                }, 300), c(n, 100 * (t - h[o]) / s), i([n.data("nui").options.slide, n.data("nui").options.set], a.data("target")), a.data("target").change()
            }
        }

        function w() {
            var e = [];
            return t.each(t(this).data("handles"), function(t, n) {
                e.push(n.data("store").val())
            }), 1 === e.length ? e[0] : e
        }

        function y(n, a) {
            return n === e ? w.call(this) : (a = !0 === a ? {
                trigger: !0
            } : a || {}, t.isArray(n) || (n = [n]), this.each(function(o, s) {
                s = t(s), t.each(t(this).data("handles"), function(o, r) {
                    if (null !== n[o] && n[o] !== e) {
                        var h, l;
                        l = r.data("nui").options.range, h = n[o], a.trusted = !0, (!1 === a.trusted || 1 === n.length) && (a.trusted = !1), 2 === n.length && 0 <= t.inArray(null, n) && (a.trusted = !1), "string" === t.type(h) && (h = h.replace(",", ".")), h = C.to(l, parseFloat(h)), h = c(r, h, a.trusted), a.trigger && i(r.data("nui").options.set, s), h || (h = r.data("store").val(), l = C.is(l, r[0].gPct(r.data("nui").style)), h !== l && r.data("store").val(d(l, s)))
                    }
                })
            }))
        }
        var b = ".nui",
            x = t(document),
            I = {
                start: "mousedown touchstart",
                move: "mousemove touchmove",
                end: "mouseup touchend"
            },
            z = t.fn.val,
            E = "noUi-base noUi-origin noUi-handle noUi-input noUi-active noUi-state-tap noUi-target -lower -upper noUi-connect noUi-vertical noUi-horizontal noUi-background noUi-z-index".split(" "),
            S = [E[0]],
            U = [E[1]],
            P = [E[2]],
            C = {
                to: function(t, e) {
                    return e = 0 > t[0] ? e + Math.abs(t[0]) : e - t[0], 100 * e / this.len(t)
                },
                from: function(t, e) {
                    return 100 * e / this.len(t)
                },
                is: function(t, e) {
                    return e * this.len(t) / 100 + t[0]
                },
                len: function(t) {
                    return t[0] > t[1] ? t[0] - t[1] : t[1] - t[0]
                }
            },
            M = [function() {
                this.target.val([this.i ? null : this.val(), this.i ? this.val() : null], {
                    trusted: !1
                })
            }, function(t) {
                t.stopPropagation()
            }];
        return window.navigator.pointerEnabled ? I = {
            start: "pointerdown",
            move: "pointermove",
            end: "pointerup"
        } : window.navigator.msPointerEnabled && (I = {
            start: "MSPointerDown",
            move: "MSPointerMove",
            end: "MSPointerUp"
        }), t.fn.val = function() {
            return this.hasClass(E[6]) ? y.apply(this, arguments) : z.apply(this, arguments)
        },
            function(e) {
                return this.each(function(n, i) {
                    i = t(i), i.addClass(E[6]);
                    var a, o, r, d, g = t("<div/>").appendTo(i),
                        f = [],
                        w = [U.concat([E[1] + E[7]]), U.concat([E[1] + E[8]])],
                        y = [P.concat([E[2] + E[7]]), P.concat([E[2] + E[8]])];
                    for (e = t.extend({
                        handles: 2,
                        margin: 0,
                        orientation: "horizontal"
                    }, e) || {}, e.serialization || (e.serialization = {
                        to: [!1, !1],
                        resolution: .01,
                        mark: "."
                    }), l(e, i), e.S = e.serialization, e.connect ? "lower" === e.connect ? (S.push(E[9], E[9] + E[7]), w[0].push(E[12])) : (S.push(E[9] + E[8], E[12]), w[0].push(E[9])) : S.push(E[12]), o = "vertical" === e.orientation ? "top" : "left", r = e.S.resolution.toString().split("."), r = "1" === r[0] ? 0 : r[1].length, "vertical" === e.orientation ? S.push(E[10]) : S.push(E[11]), g.addClass(S.join(" ")).data("target", i), i.data({
                        base: g,
                        mark: e.S.mark,
                        decimals: r
                    }), a = 0; a < e.handles; a++) d = t("<div><div/></div>").appendTo(g), d.addClass(w[a].join(" ")), d.children().addClass(y[a].join(" ")), s(I.start, d.children(), p, {
                        base: g,
                        target: i,
                        handle: d
                    }), s(I.end, d.children(), m, {
                        base: g,
                        target: i,
                        handle: d
                    }), d.data("nui", {
                        target: i,
                        decimals: r,
                        options: e,
                        base: g,
                        style: o,
                        number: a
                    }).data("store", u(d, e.S)), d[0].gPct = h, f.push(d), c(d, C.to(e.range, e.start[a]));
                    g.data({
                        options: e,
                        handles: f,
                        style: o
                    }), i.data({
                        handles: f
                    }), s(I.end, g, v, {
                        base: g,
                        target: i,
                        handles: f
                    })
                })
            }.call(this, n)
    }
}($);

export {cropper};
