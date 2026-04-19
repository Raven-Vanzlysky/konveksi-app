<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3">
    <small>&copy; 2026 Larissa Collection</small>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
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
        </script>
</footer>

</body>
</html>