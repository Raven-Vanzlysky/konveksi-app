const themeSwitch = document.getElementById('themeSwitch');
const html = document.documentElement;

// Load saved theme
const savedTheme = localStorage.getItem('theme');
if (savedTheme) {
    html.setAttribute('data-bs-theme', savedTheme);
    themeSwitch.checked = savedTheme === 'dark';
}

themeSwitch.addEventListener('change', function () {
    const theme = this.checked ? 'dark' : 'light';
    html.setAttribute('data-bs-theme', theme);
    localStorage.setItem('theme', theme);
});