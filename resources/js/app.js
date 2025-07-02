import './bootstrap';

document.addEventListener("DOMContentLoaded", function () {
    const toggleButton = document.querySelector(".toggle");
    const menuToggleButton = document.getElementById('menu-toggle');
    const sidebar = document.getElementById('sidebar');

    toggleButton?.addEventListener("click", () => {
        const isDark = document.documentElement.classList.contains("dark");
        document.documentElement.classList.toggle("dark", !isDark);
        localStorage.theme = isDark ? "light" : "dark";
    });

    menuToggleButton?.addEventListener("click", () => {
        sidebar.classList.toggle('hidden');
        sidebar.classList.toggle('flex');
    });

    document.querySelectorAll('#sidebar .menu-item > button').forEach(button => {
        const icon = button.querySelector('i.bi-caret-down');
        button.addEventListener('click', () => {
            const submenu = button.nextElementSibling;
            const isOpen = submenu.classList.contains('open');

            document.querySelectorAll('#sidebar .submenu').forEach(el => {
                if (el !== submenu) {
                    el.style.maxHeight = null;
                    el.classList.remove('open');
                    el.previousElementSibling.querySelector('i').style.transform = 'rotate(0deg)';
                }
            });

            if (isOpen) {
                submenu.style.maxHeight = null;
                submenu.classList.remove('open');
                icon.style.transform = 'rotate(0deg)';
            } else {
                submenu.style.maxHeight = submenu.scrollHeight + "px";
                submenu.classList.add('open');
                icon.style.transform = 'rotate(180deg)';
            }
        });
    });
});
