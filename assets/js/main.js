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

const subMenu = document.querySelectorAll('.sub-menu a');

menuItemHasChildren.forEach(function (menuItem) {
    var currentElement = menuItem.childNodes;

    menuItem.classList.add('dropdown');
    currentElement.forEach(function (item) {
        if (item.nodeName === 'A') {
            item.setAttribute('aria-haspopup', 'true');
            item.setAttribute('aria-expanded', 'false');
        }
        if (item.nodeName === 'UL') {
            item.classList.add('dropdown-menu', 'border', 'shadow');
        }
    });
});

subMenu.forEach(function (item) {
    item.classList.add('dropdown-item');
});

/*
menuItemHasChildren.forEach(function (menuItem) {
    var menuItemId = menuItem.id;
    var currentElement = menuItem.childNodes;
    menuItem.classList.add('dropdown');
    currentElement.forEach(function (item) {
        if (item.nodeName === 'A') {
            item.setAttribute('id', 'children-' + menuItemId);
            item.setAttribute('data-bs-toggle', 'dropdown');
            item.setAttribute('aria-haspopup', 'true');
            item.setAttribute('aria-expanded', 'false');
            item.addEventListener('mouseup', function (event) {
                var isDropdownMenuClicked = item.contains(event.target);
                if (!isDropdownMenuClicked) {
                    event.stopPropagation();
                }
                // var link = this.getAttribute('href');
                // window.location.href = link;
            });
        }
        if (item.nodeName === 'UL') {
            item.classList.add('dropdown-menu');
            item.setAttribute('aria-labelledby', 'children-' + menuItemId);
        }
    });
});
*/
