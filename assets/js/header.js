function header() {
    // Thêm bootstrap vào header

    const menu = document.querySelector('.menu');

    if (menu) {
        menu.classList.add('w-100');
    }

    const menuUl = document.querySelector('.menu ul');

    if (menuUl) {
        menuUl.classList.add('navbar-nav', 'mb-2', 'mb-lg-0');
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
    const additionalHTML = `<button type="button" title="dropdown" class="btn dropdown-toggle-split text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-chevron-down align-middle"></i>
                            </button>`;

    subMenu.forEach(function (item) {
        item.insertAdjacentHTML('beforebegin', additionalHTML);
    });

    subMenuA.forEach(function (item) {
        item.classList.add('dropdown-item');
    });
}
