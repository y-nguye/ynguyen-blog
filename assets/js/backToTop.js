function backToTop() {
    const backToTop = document.getElementById('back-to-top');
    const navATags = document.querySelectorAll('#back-to-top a');
    const navBtnTags = document.querySelectorAll('#back-to-top button');

    backToTop.addEventListener('click', function (event) {
        document.body.scrollTop = 0; // For Safari
        document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE, and Opera
    });
    navATags.forEach(function (tag) {
        tag.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    });
    navBtnTags.forEach(function (tag) {
        tag.addEventListener('click', function (event) {
            event.stopPropagation();
        });
    });
}
