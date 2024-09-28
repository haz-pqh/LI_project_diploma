document.addEventListener("DOMContentLoaded", function() {
    const texts = [
        "Discover a world of opportunities where your computing skills will thrive.",
        "Welcome to the Faculty of Computing and Multimedia at Universiti Poly-Tech Malaysia!"
    ]; // Array of texts to be typed out
    const typingText = document.getElementById("typing-text");
    const logoContainer = document.querySelector(".logo_part");
    const logo = document.querySelector(".logo_img");
    const typingContainer = document.querySelector('.typing-container');
    let index = 0;
    let textIndex = 0;
    const typingSpeed = 40; // Typing speed in milliseconds
    const pauseTime = 2000; // Pause time between texts in milliseconds


    function type() {
        if (index < texts[textIndex].length) {
            typingText.innerHTML += texts[textIndex].charAt(index);
            index++;
            setTimeout(type, typingSpeed);
        } else {
            // Pause after typing one text before starting the next
            setTimeout(() => {
                textIndex++;
                if (textIndex < texts.length) {
                    index = 0;
                    typingText.innerHTML = ""; // Clear the text for the new line
                    type();
                } else {
                    // Hide typing container and show logo container after the pause
                    typingText.style.display = 'none';
                    logoContainer.style.display = 'flex';

                    setTimeout(() => {
                        logo.classList.add('zoom_out');
                    }, 100); // Delay to allow the logo to become visible first
                }
            }, pauseTime);
        }
    }

    // Start typing animation
    type();
});