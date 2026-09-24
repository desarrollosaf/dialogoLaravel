/* ==========================================================
   Animaciones de la página
   ========================================================== */

// Opciones (antes eran propiedades del editor)
const OPCIONES = {
  animarEntrada: true,  // secciones e imágenes aparecen al hacer scroll
  contarNumeros: true,  // las cifras cuentan desde 0
  texturaPapel: true    // fondo con textura de papel
};

document.addEventListener('DOMContentLoaded', () => {
  const reducirMovimiento = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const hayObserver = 'IntersectionObserver' in window;
  const animar = OPCIONES.animarEntrada && !reducirMovimiento && hayObserver;
  const contar = OPCIONES.contarNumeros && !reducirMovimiento && hayObserver;

  if (!OPCIONES.texturaPapel) document.documentElement.classList.add('sin-textura');

  // Observa elementos y ejecuta `alMostrar` una sola vez cuando entran en pantalla
  const observarUnaVez = (elementos, alMostrar, opciones) => {
    const io = new IntersectionObserver((entradas) => {
      entradas.forEach((e) => {
        if (e.isIntersecting) { alMostrar(e.target); io.unobserve(e.target); }
      });
    }, opciones);
    elementos.forEach((el) => io.observe(el));
  };

  /* ---------- Secciones ---------- */

  const secciones = Array.from(document.querySelectorAll('.reveal'));
  const mostrarSeccion = (el) => el.classList.add('is-visible');

  if (!animar) {
    secciones.forEach(mostrarSeccion);
  } else {
    observarUnaVez(secciones, mostrarSeccion, { rootMargin: '0px 0px -8% 0px', threshold: 0.05 });
    // Respaldo: mostrar todo aunque el observer no se dispare
    setTimeout(() => secciones.forEach(mostrarSeccion), 4000);
  }

  /* ---------- Imágenes ---------- */

  const variantes = [
    { desde: 'scale(1.08) translateY(24px)',   dur: '1.4s',  curva: 'cubic-bezier(.2,.7,.2,1)' },
    { desde: 'translateX(-40px)',              dur: '1s',    curva: 'cubic-bezier(.16,.84,.28,1)' },
    { desde: 'scale(0.86)',                    dur: '1.1s',  curva: 'cubic-bezier(.2,1.05,.3,1)' },
    { desde: 'translateX(40px)',               dur: '1s',    curva: 'cubic-bezier(.16,.84,.28,1)' },
    { desde: 'translateY(48px)',               dur: '1.1s',  curva: 'cubic-bezier(.16,.84,.28,1)' },
    { desde: 'rotate(-3deg) scale(1.04)',      dur: '1.2s',  curva: 'cubic-bezier(.2,.8,.2,1)' },
    { desde: 'scale(1.14)',                    dur: '1.5s',  curva: 'cubic-bezier(.25,.75,.2,1)' },
    { desde: 'translateY(-34px)',              dur: '1s',    curva: 'cubic-bezier(.2,.8,.2,1)' },
    { desde: 'rotate(2.5deg) translateY(28px)', dur: '1.25s', curva: 'cubic-bezier(.2,.85,.25,1)' },
    { desde: 'skewY(2deg) translateX(-28px)',  dur: '1.1s',  curva: 'cubic-bezier(.16,.84,.28,1)' },
    { desde: 'scale(0.92) translateY(30px)',   dur: '1.2s',  curva: 'cubic-bezier(.2,.9,.25,1)' },
    { desde: 'translateX(-56px) scale(1.05)',  dur: '1.3s',  curva: 'cubic-bezier(.2,.8,.2,1)' }
  ];

  const imagenes = Array.from(document.querySelectorAll('.pagina img:not(.nav img):not(.pie img)'));
  const mostrarImagen = (el) => { el.style.opacity = '1'; el.style.transform = 'none'; };

  if (animar) {
    imagenes.forEach((el, i) => {
      const v = el.hasAttribute('data-reveal-img')
        ? { desde: 'scale(1.03)', dur: '1.8s', curva: 'ease-out' }
        : el.hasAttribute('data-zoom-in')
          ? { desde: 'scale(0.72)', dur: '1.5s', curva: 'cubic-bezier(.16,.84,.28,1)' }
          : variantes[i % variantes.length];
      el.style.willChange = 'opacity, transform';
      el.style.transition = `opacity ${v.dur} ease, transform ${v.dur} ${v.curva}`;
      el.style.opacity = '0';
      el.style.transform = v.desde;
    });
    observarUnaVez(imagenes, mostrarImagen, { threshold: 0.15 });
    setTimeout(() => imagenes.forEach(mostrarImagen), 4000);
  }

  /* ---------- Contador de cifras ---------- */

  if (contar) {
    const animarNumero = (el) => {
      const objetivo = parseInt(el.dataset.count, 10);
      const duracion = 1100;
      const inicio = performance.now();
      const paso = (t) => {
        const p = Math.min(1, (t - inicio) / duracion);
        el.textContent = String(Math.round(objetivo * (1 - Math.pow(1 - p, 3))));
        if (p < 1) requestAnimationFrame(paso);
      };
      el.textContent = '0';
      requestAnimationFrame(paso);
    };
    observarUnaVez(document.querySelectorAll('[data-count]'), animarNumero, { threshold: 0.4 });
  }
});
