document.addEventListener('DOMContentLoaded', function () {
    header();
    sidebar();
    darkTheme();

    const tags = document.querySelectorAll('.tag');
    tags.forEach(function (tag) {
        tag.addEventListener('click', function () {
            const link = tag.querySelector('a');
            if (link) {
                window.location.href = link.href;
            }
        });
    });

    // Hiển thị trang web sau khi tải xong
    document.body.style.display = 'flex';
});
