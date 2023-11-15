// ---------------------- Header ----------------------
const menu = document.querySelector('.menu ul');
if (menu) {
    menu.classList.add('navbar-nav', 'me-auto', 'mb-2', 'mb-lg-0');
}

const navbarNav = document.querySelectorAll('.navbar-nav li');

navbarNav.forEach(function (nav) {
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
const additionalHTML = `<button type="button" class="btn dropdown-toggle-split fs-6 text-secondary" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-chevron-down"></i>
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
