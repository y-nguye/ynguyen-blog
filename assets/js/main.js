document.addEventListener('DOMContentLoaded', function () {
    const tooltipTriggerList = document.querySelectorAll(
        '[data-bs-toggle="tooltip"]'
    );
    const tooltipList = [...tooltipTriggerList].map(
        (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
    );

    // ---------------------- Header ----------------------
    const menuUl = document.querySelector('.menu ul');

    if (menuUl) {
        menuUl.classList.add('navbar-nav', 'me-auto', 'mb-2', 'mb-lg-0');
    }

    const navbarNavLi = document.querySelectorAll('.navbar-nav li');

    navbarNavLi.forEach(function (nav) {
        nav.classList.add('nav-item');
    });

    const navItems = document.querySelectorAll('.nav-item a');

    navItems.forEach(function (link) {
        link.classList.add('nav-link');
    });

    const menuItemHasChildren = document.querySelectorAll(
        '.menu-item-has-children'
    );

    menuItemHasChildren.forEach(function (menuItem) {
        var currentElement = menuItem.childNodes;

        menuItem.classList.add('dropdown');
        currentElement.forEach(function (item) {
            if (item.nodeName === 'A') {
                item.setAttribute('aria-expanded', 'false');
            }
            if (item.nodeName === 'UL') {
                item.classList.add('dropdown-menu', 'border', 'shadow');
            }
        });
    });

    const subMenu = document.querySelectorAll('.sub-menu');
    const subMenuA = document.querySelectorAll('.sub-menu a');
    const additionalHTML = `<button type="button" title="dropdown" class="btn dropdown-toggle-split fs-6 text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-chevron-down align-middle"></i>
                            </button>`;

    subMenu.forEach(function (item) {
        item.insertAdjacentHTML('beforebegin', additionalHTML);
    });

    subMenuA.forEach(function (item) {
        item.classList.add('dropdown-item');
    });

    const catItem = document.querySelectorAll('.cat-item');
    const catItemA = document.querySelectorAll('.cat-item a');

    catItem.forEach(function (nav) {
        nav.classList.add('text-secondary');
    });

    catItemA.forEach(function (nav) {
        nav.classList.add('link-secondary');
    });

    // ------------------------------ Dark theme ------------------------------
    const navbarNav = document.querySelector('.navbar-nav');
    // Thêm vào sau khi đã tạo thẻ ul:navbar-nav
    navbarNav.innerHTML += `<li class="ms-auto mt-auto">
                                <button type="button"
                                        class="btn ms-auto appearance-btn appearance-btn--navbar-expand"
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
            x.innerHTML = `<i class="bi bi-sun-fill align-middle"></i>`;
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
                localStorage.setItem('theme', isDarkMode ? 'dark' : 'light');

                if (localStorage.getItem('theme') === 'dark') {
                    appearanceBtn.forEach(function (x) {
                        x.innerHTML = `<i class="bi bi-sun-fill align-middle"></i>`;
                    });
                } else {
                    appearanceBtn.forEach(function (x) {
                        x.innerHTML = `<i class="bi bi-moon align-middle"></i>`;
                    });
                }
            });
        });
    });

    // ------------------------------ Hiển thị trang web sau khi tải xong ------------------------------
    document.body.style.display = 'flex';
});
