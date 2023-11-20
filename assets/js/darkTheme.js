function darkTheme() {
    const navbarNav = document.querySelector('.navbar-nav');

    if (navbarNav) {
        // Thêm vào sau khi đã nhận được thẻ ul:navbar-nav
        navbarNav.innerHTML += `<li class="ms-auto mt-auto">
                                <button type="button"
                                        class="btn appearance-btn appearance-btn--navbar-expand"
                                        title="Chuyển đổi giao diện"
                                </button>
                            </li>`;

        const appearance = document.querySelectorAll('.appearance');
        const appearanceBtn = document.querySelectorAll('.appearance-btn');

        if (localStorage.getItem('theme') === 'dark') {
            appearance.forEach(function (x) {
                x.classList.add('dark-mode');
            });
            appearanceBtn.forEach(function (x) {
                x.innerHTML = `<i class="bi bi-sun align-middle"></i>`;
            });
        } else {
            appearanceBtn.forEach(function (x) {
                x.innerHTML = `<i class="bi bi-moon align-middle"></i>`;
            });
        }

        appearanceBtn.forEach(function (index) {
            index.addEventListener('click', function () {
                appearance.forEach(function (x) {
                    x.classList.toggle('dark-mode');
                    const isDarkMode = document
                        .querySelector('main')
                        .classList.contains('dark-mode');
                    localStorage.setItem(
                        'theme',
                        isDarkMode ? 'dark' : 'light'
                    );

                    if (localStorage.getItem('theme') === 'dark') {
                        appearanceBtn.forEach(function (x) {
                            x.innerHTML = `<i class="bi bi-sun align-middle"></i>`;
                        });
                    } else {
                        appearanceBtn.forEach(function (x) {
                            x.innerHTML = `<i class="bi bi-moon align-middle"></i>`;
                        });
                    }
                });
            });
        });
    }
}
