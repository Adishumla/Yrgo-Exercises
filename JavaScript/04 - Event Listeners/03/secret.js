/**
 * Minified by jsDelivr using Terser v5.3.0.
 
 *
 * Do NOT use SRI with dynamically generated files! More information: https://www.jsdelivr.com/using-sri-with-dynamic-files
 */
!(function (t, e) {
  !(function t(e, n, a, o) {
    var i = !!(
      e.Worker &&
      e.Blob &&
      e.Promise &&
      e.OffscreenCanvas &&
      e.HTMLCanvasElement &&
      e.HTMLCanvasElement.prototype.transferControlToOffscreen &&
      e.URL &&
      e.URL.createObjectURL
    );
    function r() {}
    function l(t) {
      var a = n.exports.Promise,
        o = void 0 !== a ? a : e.Promise;
      return 'function' == typeof o ? new o(t) : (t(r, r), null);
    }
    var c,
      s,
      h,
      u,
      d,
      f,
      g,
      m,
      b =
        ((h = Math.floor(1e3 / 60)),
        (u = {}),
        (d = 0),
        'function' == typeof requestAnimationFrame &&
        'function' == typeof cancelAnimationFrame
          ? ((c = function (t) {
              var e = Math.random();
              return (
                (u[e] = requestAnimationFrame(function n(a) {
                  d === a || d + h - 1 < a
                    ? ((d = a), delete u[e], t())
                    : (u[e] = requestAnimationFrame(n));
                })),
                e
              );
            }),
            (s = function (t) {
              u[t] && cancelAnimationFrame(u[t]);
            }))
          : ((c = function (t) {
              return setTimeout(t, h);
            }),
            (s = function (t) {
              return clearTimeout(t);
            })),
        { frame: c, cancel: s }),
      v =
        ((m = {}),
        function () {
          if (f) return f;
          if (!a && i) {
            var e = [
              'var CONFETTI, SIZE = {}, module = {};',
              '(' + t.toString() + ')(this, module, true, SIZE);',
              'onmessage = function(msg) {',
              '  if (msg.data.options) {',
              '    CONFETTI(msg.data.options).then(function () {',
              '      if (msg.data.callback) {',
              '        postMessage({ callback: msg.data.callback });',
              '      }',
              '    });',
              '  } else if (msg.data.reset) {',
              '    CONFETTI.reset();',
              '  } else if (msg.data.resize) {',
              '    SIZE.width = msg.data.resize.width;',
              '    SIZE.height = msg.data.resize.height;',
              '  } else if (msg.data.canvas) {',
              '    SIZE.width = msg.data.canvas.width;',
              '    SIZE.height = msg.data.canvas.height;',
              '    CONFETTI = module.exports.create(msg.data.canvas);',
              '  }',
              '}',
            ].join('\n');
            try {
              f = new Worker(URL.createObjectURL(new Blob([e])));
            } catch (t) {
              return (
                void 0 !== typeof console &&
                  'function' == typeof console.warn &&
                  console.warn('🎊 Could not load worker', t),
                null
              );
            }
            !(function (t) {
              function e(e, n) {
                t.postMessage({ options: e || {}, callback: n });
              }
              (t.init = function (e) {
                var n = e.transferControlToOffscreen();
                t.postMessage({ canvas: n }, [n]);
              }),
                (t.fire = function (n, a, o) {
                  if (g) return e(n, null), g;
                  var i = Math.random().toString(36).slice(2);
                  return (g = l(function (a) {
                    function r(e) {
                      e.data.callback === i &&
                        (delete m[i],
                        t.removeEventListener('message', r),
                        (g = null),
                        o(),
                        a());
                    }
                    t.addEventListener('message', r),
                      e(n, i),
                      (m[i] = r.bind(null, { data: { callback: i } }));
                  }));
                }),
                (t.reset = function () {
                  for (var e in (t.postMessage({ reset: !0 }), m))
                    m[e](), delete m[e];
                });
            })(f);
          }
          return f;
        }),
      y = {
        particleCount: 50,
        angle: 90,
        spread: 45,
        startVelocity: 45,
        decay: 0.9,
        gravity: 1,
        ticks: 200,
        x: 0.5,
        y: 0.5,
        shapes: ['square', 'circle'],
        zIndex: 100,
        colors: [
          '#26ccff',
          '#a25afd',
          '#ff5e7e',
          '#88ff5a',
          '#fcff42',
          '#ffa62d',
          '#ff36ff',
        ],
        disableForReducedMotion: !1,
        scalar: 1,
      };
    function p(t, e, n) {
      return (function (t, e) {
        return e ? e(t) : t;
      })(t && null != t[e] ? t[e] : y[e], n);
    }
    function M(t) {
      return parseInt(t, 16);
    }
    function w(t) {
      (t.width = document.documentElement.clientWidth),
        (t.height = document.documentElement.clientHeight);
    }
    function x(t) {
      var e = t.getBoundingClientRect();
      (t.width = e.width), (t.height = e.height);
    }
    function C(t, e, n, i, r) {
      var c,
        s,
        h = e.slice(),
        u = t.getContext('2d'),
        d = l(function (e) {
          function l() {
            (c = s = null), u.clearRect(0, 0, i.width, i.height), r(), e();
          }
          (c = b.frame(function e() {
            !a ||
              (i.width === o.width && i.height === o.height) ||
              ((i.width = t.width = o.width), (i.height = t.height = o.height)),
              i.width ||
                i.height ||
                (n(t), (i.width = t.width), (i.height = t.height)),
              u.clearRect(0, 0, i.width, i.height),
              (h = h.filter(function (t) {
                return (function (t, e) {
                  (e.x += Math.cos(e.angle2D) * e.velocity),
                    (e.y += Math.sin(e.angle2D) * e.velocity + e.gravity),
                    (e.wobble += 0.1),
                    (e.velocity *= e.decay),
                    (e.tiltAngle += 0.1),
                    (e.tiltSin = Math.sin(e.tiltAngle)),
                    (e.tiltCos = Math.cos(e.tiltAngle)),
                    (e.random = Math.random() + 5),
                    (e.wobbleX = e.x + 10 * e.scalar * Math.cos(e.wobble)),
                    (e.wobbleY = e.y + 10 * e.scalar * Math.sin(e.wobble));
                  var n = e.tick++ / e.totalTicks,
                    a = e.x + e.random * e.tiltCos,
                    o = e.y + e.random * e.tiltSin,
                    i = e.wobbleX + e.random * e.tiltCos,
                    r = e.wobbleY + e.random * e.tiltSin;
                  return (
                    (t.fillStyle =
                      'rgba(' +
                      e.color.r +
                      ', ' +
                      e.color.g +
                      ', ' +
                      e.color.b +
                      ', ' +
                      (1 - n) +
                      ')'),
                    t.beginPath(),
                    'circle' === e.shape
                      ? t.ellipse
                        ? t.ellipse(
                            e.x,
                            e.y,
                            Math.abs(i - a) * e.ovalScalar,
                            Math.abs(r - o) * e.ovalScalar,
                            (Math.PI / 10) * e.wobble,
                            0,
                            2 * Math.PI
                          )
                        : (function (t, e, n, a, o, i, r, l, c) {
                            t.save(),
                              t.translate(e, n),
                              t.rotate(i),
                              t.scale(a, o),
                              t.arc(0, 0, 1, r, l, c),
                              t.restore();
                          })(
                            t,
                            e.x,
                            e.y,
                            Math.abs(i - a) * e.ovalScalar,
                            Math.abs(r - o) * e.ovalScalar,
                            (Math.PI / 10) * e.wobble,
                            0,
                            2 * Math.PI
                          )
                      : (t.moveTo(Math.floor(e.x), Math.floor(e.y)),
                        t.lineTo(Math.floor(e.wobbleX), Math.floor(o)),
                        t.lineTo(Math.floor(i), Math.floor(r)),
                        t.lineTo(Math.floor(a), Math.floor(e.wobbleY))),
                    t.closePath(),
                    t.fill(),
                    e.tick < e.totalTicks
                  );
                })(u, t);
              })).length
                ? (c = b.frame(e))
                : l();
          })),
            (s = l);
        });
      return {
        addFettis: function (t) {
          return (h = h.concat(t)), d;
        },
        canvas: t,
        promise: d,
        reset: function () {
          c && b.cancel(c), s && s();
        },
      };
    }
    function k(t, n) {
      var a,
        o = !t,
        r = !!p(n || {}, 'resize'),
        c = p(n, 'disableForReducedMotion', Boolean),
        s = i && !!p(n || {}, 'useWorker') ? v() : null,
        h = o ? w : x,
        u = !(!t || !s) && !!t.__confetti_initialized,
        d =
          'function' == typeof matchMedia &&
          matchMedia('(prefers-reduced-motion)').matches;
      function f(e, n, o) {
        for (
          var i,
            r,
            l,
            c,
            s,
            u,
            d,
            f = p(e, 'particleCount', Math.floor),
            g = p(e, 'angle', Number),
            m = p(e, 'spread', Number),
            b = p(e, 'startVelocity', Number),
            v = p(e, 'decay', Number),
            y = p(e, 'gravity', Number),
            w = p(e, 'colors'),
            x = p(e, 'ticks', Number),
            k = p(e, 'shapes'),
            I = p(e, 'scalar'),
            T = (function (t) {
              var e = p(t, 'origin', Object);
              return (e.x = p(e, 'x', Number)), (e.y = p(e, 'y', Number)), e;
            })(e),
            E = f,
            S = [],
            F = t.width * T.x,
            z = t.height * T.y;
          E--;

        )
          S.push(
            ((i = {
              x: F,
              y: z,
              angle: g,
              spread: m,
              startVelocity: b,
              color: w[E % w.length],
              shape:
                k[
                  ((u = 0),
                  (d = k.length),
                  Math.floor(Math.random() * (d - u)) + u)
                ],
              ticks: x,
              decay: v,
              gravity: y,
              scalar: I,
            }),
            (r = void 0),
            (l = void 0),
            (c = void 0),
            (s = void 0),
            (c = i.angle * (Math.PI / 180)),
            (s = i.spread * (Math.PI / 180)),
            {
              x: i.x,
              y: i.y,
              wobble: 10 * Math.random(),
              velocity: 0.5 * i.startVelocity + Math.random() * i.startVelocity,
              angle2D: -c + (0.5 * s - Math.random() * s),
              tiltAngle: Math.random() * Math.PI,
              color:
                ((r = i.color),
                (l = String(r).replace(/[^0-9a-f]/gi, '')),
                l.length < 6 && (l = l[0] + l[0] + l[1] + l[1] + l[2] + l[2]),
                {
                  r: M(l.substring(0, 2)),
                  g: M(l.substring(2, 4)),
                  b: M(l.substring(4, 6)),
                }),
              shape: i.shape,
              tick: 0,
              totalTicks: i.ticks,
              decay: i.decay,
              random: Math.random() + 5,
              tiltSin: 0,
              tiltCos: 0,
              wobbleX: 0,
              wobbleY: 0,
              gravity: 3 * i.gravity,
              ovalScalar: 0.6,
              scalar: i.scalar,
            })
          );
        return a ? a.addFettis(S) : (a = C(t, S, h, n, o)).promise;
      }
      function g(n) {
        var i = c || p(n, 'disableForReducedMotion', Boolean),
          g = p(n, 'zIndex', Number);
        if (i && d)
          return l(function (t) {
            t();
          });
        o && a
          ? (t = a.canvas)
          : o &&
            !t &&
            ((t = (function (t) {
              var e = document.createElement('canvas');
              return (
                (e.style.position = 'fixed'),
                (e.style.top = '0px'),
                (e.style.left = '0px'),
                (e.style.pointerEvents = 'none'),
                (e.style.zIndex = t),
                e
              );
            })(g)),
            document.body.appendChild(t)),
          r && !u && h(t);
        var m = { width: t.width, height: t.height };
        function b() {
          if (s) {
            var e = {
              getBoundingClientRect: function () {
                if (!o) return t.getBoundingClientRect();
              },
            };
            return (
              h(e),
              void s.postMessage({
                resize: { width: e.width, height: e.height },
              })
            );
          }
          m.width = m.height = null;
        }
        function v() {
          (a = null),
            r && e.removeEventListener('resize', b),
            o && t && (document.body.removeChild(t), (t = null), (u = !1));
        }
        return (
          s && !u && s.init(t),
          (u = !0),
          s && (t.__confetti_initialized = !0),
          r && e.addEventListener('resize', b, !1),
          s ? s.fire(n, m, v) : f(n, m, v)
        );
      }
      return (
        (g.reset = function () {
          s && s.reset(), a && a.reset();
        }),
        g
      );
    }
    (n.exports = k(null, { useWorker: !0, resize: !0 })),
      (n.exports.create = k);
  })(
    (function () {
      return void 0 !== t ? t : 'undefined' != typeof self ? self : this;
    })(),
    e,
    !1
  ),
    (t.confetti = e.exports);
})(window, {});
//# sourceMappingURL=/sm/9688826196c1d2f0e537c35a034ab8876ac7f5652d14f485125a607a9aae375d.map

const canvas = document.querySelector('canvas');
var myConfetti = confetti.create(canvas, {
  resize: true,
  useWorker: true,
});

const celebrate = () => {
  myConfetti({
    particleCount: 100,
    spread: 160,
    // any other options from the global
    // confetti function
  });
};
