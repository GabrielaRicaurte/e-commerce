import './bootstrap';
import 'preline';
// import 'aos/dist/aos.css';

// Tema: aplicar preferencia inicial y alternar
const THEME_KEY = 'theme';
const rootElement = document.documentElement;

// Aplicar preferencia al cargar (antes del interactivo)
(() => {
  try {
    const stored = localStorage.getItem(THEME_KEY);
    const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
    const shouldUseDark = stored ? stored === 'dark' : prefersDark;
    rootElement.classList.toggle('dark', shouldUseDark);
  } catch (_) {
    // noop
  }
})();

const registerThemeToggle = () => {
  const toggle = document.getElementById('themeToggle');
  if (!toggle) return;
  if (toggle.__themeBound) return; // evitar doble binding en HMR
  toggle.__themeBound = true;
  toggle.addEventListener('click', () => {
    const isDark = rootElement.classList.toggle('dark');
    try {
      localStorage.setItem(THEME_KEY, isDark ? 'dark' : 'light');
    } catch (_) {}
  });
};

if (document.readyState === 'loading') {
  window.addEventListener('DOMContentLoaded', registerThemeToggle);
} else {
  registerThemeToggle();
}

// Inicialización de Splide para el header (si existe el slider en el DOM)
const initHeaderSplide = () => {
  if (typeof Splide === 'undefined') return; // asegurar que la librería esté cargada (CDN en layout)
  const slider = document.querySelector('.splide');
  if (!slider || slider.__splideBound) return;
  slider.__splideBound = true;
  slider.classList.add('is-initializing');
  const splide = new Splide(slider, {
    type: 'fade', // Cambiar a 'loop' para desplazamiento horizontal
    rewind: true,
    arrows: false,
    autoplay: true,
    interval: 3500,
    speed: 800,
    perPage: 1,
    pauseOnHover: false,
    pagination: false,
    easing: 'cubic-bezier(.65,.05,.36,1)'
  });
  splide.on('mounted', () => slider.classList.remove('is-initializing'));
  splide.mount();
};

if (document.readyState === 'loading') {
  window.addEventListener('DOMContentLoaded', initHeaderSplide);
} else {
  initHeaderSplide();
}

AOS.init({
    duration: 800,
    easing: 'ease-in-out',
    once: false, // Permite que la animación ocurra cada vez que el elemento entra en vista
    mirror: true // La animación se repite al hacer scroll hacia arriba
});
