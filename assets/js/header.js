
if (localStorage.getItem('theme') === 'dark') {
  document.documentElement.classList.add('dark');
} else {
  document.documentElement.classList.remove('dark');
}

let lastScroll = 0;
const header = document.getElementById("mainHeader");

const drawerToggle = document.getElementById('drawerToggle');
const drawer = document.getElementById('mobileDrawer');
const drawerClose = document.getElementById('drawerClose');
const drawerOverlay = document.getElementById('drawerOverlay');

drawerToggle.addEventListener('click', () => {
  drawer.classList.remove('translate-x-full');
  drawerOverlay.classList.remove('hidden');
});

drawerClose.addEventListener('click', () => {
  drawer.classList.add('translate-x-full');
  drawerOverlay.classList.add('hidden');
});

drawerOverlay.addEventListener('click', () => {
  drawer.classList.add('translate-x-full');
  drawerOverlay.classList.add('hidden');
});

window.addEventListener("scroll", () => {
  const currentScroll = window.pageYOffset;

  if (currentScroll > lastScroll && currentScroll > 100) {
    // Scroll hacia abajo — Oculta el header
    header.classList.remove("translate-y-0");
    header.classList.add("-translate-y-full");
  } else {
    // Scroll hacia arriba — Muestra el header
    header.classList.remove("-translate-y-full");
    header.classList.add("translate-y-0");
  }

  lastScroll = currentScroll;
});


function toggleTheme() {
  const html = document.documentElement;
  if (html.classList.contains('dark')) {
    html.classList.remove('dark');
    localStorage.setItem('theme', 'light');
  } else {
    html.classList.add('dark');
    localStorage.setItem('theme', 'dark');
  }
};