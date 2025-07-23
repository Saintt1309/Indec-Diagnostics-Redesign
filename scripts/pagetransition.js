// Page Switching Animation
    const pageLinks = document.querySelectorAll('.navbar a');
    pageLinks.forEach(link => {
        link.addEventListener('click', (event) => {
            event.preventDefault();
            const target = event.target.getAttribute('href');

            // Add the fade-out effect to main content
            document.querySelector('main').style.transition = 'opacity 0.5s ease-in-out';
            document.querySelector('main').style.opacity = 0;

            // Wait for the fade-out effect to complete before switching pages
            setTimeout(() => {
                window.location.href = target;
            }, 500); // Match this delay with the CSS transition duration
        });
    });

    // Page Load Animation
    const mainContent = document.querySelector('body');
    mainContent.style.opacity = 0; // Start with opacity 0
    mainContent.style.transition = 'opacity 1s ease-in'; // Define the fade-in transition

    // Add a delay to ensure the fade-in effect applies after initial render
    setTimeout(() => {
        mainContent.style.opacity = 1; // Fade in the main content
    }, 100); // Short delay for better effect
