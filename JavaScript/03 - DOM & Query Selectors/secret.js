function alohomora(r) {
  var n = '';
  return (
    r.split(' ').map(function (r) {
      n += String.fromCharCode(parseInt(r, 2));
    }),
    n
  );
}
