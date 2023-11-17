function sidebar() {
    const catItem = document.querySelectorAll('.cat-item');
    const catItemA = document.querySelectorAll('.cat-item a');

    catItem.forEach(function (nav) {
        nav.classList.add('text-secondary');
    });

    catItemA.forEach(function (nav) {
        nav.classList.add('link-secondary');
    });
}
