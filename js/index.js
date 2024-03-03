document.addEventListener("DOMContentLoaded", function () {
    const logoElement = document.getElementById('logo');
    const text = logoElement.textContent;
    const delay = 4000; // 4 seconds

    function animateText() {
        let currentIndex = 0;

        function setText() {
            logoElement.textContent = text.substring(0, currentIndex);
            currentIndex++;
            if (currentIndex > text.length) {
                setTimeout(eraseText, delay);
            } else {
                setTimeout(setText, 100); // Adjust the time for each letter appearance
            }
        }

        function eraseText() {
            logoElement.textContent = text.substring(0, currentIndex);
            currentIndex--;
            if (currentIndex === 0) {
                setTimeout(animateText, delay);
            } else {
                setTimeout(eraseText, 100); // Adjust the time for each letter disappearance
            }
        }

        setText();
    }

    animateText();
});
