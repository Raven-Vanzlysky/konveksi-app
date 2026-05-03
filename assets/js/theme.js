const toggle = document.getElementById('themeSwitch');
const root = document.documentElement;

// set theme
const setTheme = (theme) => {
  root.setAttribute('data-bs-theme', theme);
  localStorage.setItem('theme', theme);
};

// load theme awal
const saved = localStorage.getItem('theme') || 'light';
setTheme(saved);
toggle.checked = saved === 'dark';

// event switch
toggle.onchange = () => {
  setTheme(toggle.checked ? 'dark' : 'light');
};