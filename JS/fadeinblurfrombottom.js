document.addEventListener('DOMContentLoaded', function () {
    const elements = document.querySelectorAll('.fadeinblurfrombottom');

    function checkPosition() {
        const windowHeight = window.innerHeight;
        elements.forEach(element => {
            const positionFromTop = element.getBoundingClientRect().top;
            if (positionFromTop - windowHeight <= 0) {
                element.classList.add('fade-in-blur');
            }
        });
    }

    window.addEventListener('scroll', checkPosition);
    checkPosition(); // initial check
});
