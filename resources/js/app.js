import './bootstrap';
import 'preline';

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
