// Fade-in de imágenes al entrar en pantalla.
// Se carga en <head> (sin defer) para ocultar las imágenes antes del primer pintado.
(function () {
  if (!('IntersectionObserver' in window)) return;
  document.documentElement.classList.add('fx-ready');

  document.addEventListener('DOMContentLoaded', function () {
    var io = new IntersectionObserver(function (entries) {
      entries.forEach(function (e) {
        if (e.isIntersecting) {
          e.target.setAttribute('data-in', '');
          io.unobserve(e.target);
        }
      });
    }, { rootMargin: '0px 0px -10% 0px' });

    document.querySelectorAll('.pg img').forEach(function (img) { io.observe(img); });
  });
})();

// Enlaces para compartir con la URL y el título de la página actual.
document.addEventListener('DOMContentLoaded', function () {
  var url = encodeURIComponent(location.href);
  var text = encodeURIComponent(document.title);
  var links = {
    facebook: 'https://www.facebook.com/sharer/sharer.php?u=' + url,
    x: 'https://x.com/intent/post?url=' + url + '&text=' + text
  };
  document.querySelectorAll('[data-share]').forEach(function (a) {
    a.href = links[a.getAttribute('data-share')];
  });
});
