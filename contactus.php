<?php
    include 'header.html';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Indec Diagnostics - Contact Us</title>

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,100..700;1,100..700&family=Manrope:wght@200..800&family=Source+Sans+3:ital,wght@0,200..900;1,200..900&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="styles/contactus.css">
    </head>

    <style> <!-- no clue why I need to put it in the raw HTML file instead of the CSS file, even though it works in the live preview extension, it breaks on xampp. -->
        .waze-button img, .google-maps-button img{
            transition: 150ms ease-in-out;
        }

        .form-button button[type="submit"]:hover > #arrow-top-right {
            content: url(icons/arrow-top-right-red.svg);
            transform: rotate(45deg);
            transition: 150ms ease-in-out;
        }

        .waze-button:hover > img{
            content: url(icons/arrow-top-right-blue.svg);
            transform: rotate(45deg);
            transition: 150ms ease-in-out;
        }

        .google-maps-button:hover > img{
            content: url(icons/arrow-top-right-green.svg);
            transform: rotate(45deg);
            transition: 150ms ease-in-out;
        } 
    </style>
    
    <body>
        <img src="images/contact-hero-image.png" id="contact-hero-image">
        <section class="contact-section">
            <div class="contact-content">
                <h1>Interested In Working Together?</h1>
                <p>Whether you're a healthcare provider, researcher, or organization looking to collaborate or learn more, we’d love to connect and explore how we can work together.</p>
                <h2>Prefer to contact us directly?</h1>
                <div class="email-info">
                    <img src="icons/mail-black.svg" alt="Email">
                    <p>inquiry@indecdiagnostics.com</p> 
                </div>
                <div class="phone-info">
                    <img src="icons/phone-black.svg" alt="Phone">
                    <p>(62-21) 460-8822</p>
                </div>
            </div>
            <div class="contact-form">
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" placeholder="Your Full Name">
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" placeholder="Work/Professional Email Preferred">
                    </div>
                    <div class="form-group">
                        <label>Area of Interest</label>
                        <select name="message" placeholder="Please Select One That Apply">
                            <option value="Product Inquiry">Product Inquiry</option>
                            <option value="Research Collaboration">Research Collaboration</option>
                            <option value="Distribution Partnership">Distribution Partnership</option>
                            <option value="Government or Public Health Support">Government or Public Health Support</option>
                            <option value="Career Application">Career Application</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Message</label>
                        <textarea name="message" placeholder="What Can We Help You With?"></textarea>
                    </div>
                    <div class="form-button">
                        <button type="submit">Let's Talk <img id="arrow-top-right" src="icons/arrow-top-right.svg"></button>
                        <button type="reset">Reset</button>
                    </div>
                </form>
            </div>
        </section>
        <section class="map-section">
            <h1>Our Doors Are Open</h1>
            <p>We welcome in-person meetings—schedule a visit to connect with our team, see our work in action, and explore how we can collaborate.</p>
            <p>Kompleks Perkantoran Taman Pulo Gebang Blok A3 No. 17-20, Jalan Raya Bekasi KM 24, Jakarta 13910, Indonesia.</p>
            <div class="map-buttons">
                <div class="waze-button">
                    <a href="https://ul.waze.com/ul?place=ChIJ_9JhJA6LaS4RS0UGAd4PpwA&ll=-6.18599040%2C106.94782130&navigate=yes&utm_campaign=default&utm_source=waze_website&utm_medium=lm_share_location" target="_blank">Waze </a>
                    <img src="icons/arrow-top-right.svg">
                </div>
                <div class="google-maps-button">
                    <a href="https://maps.app.goo.gl/xoBzCRQBxSp8ihrd6" target="_blank">Google Maps </a>
                    <img src="icons/arrow-top-right.svg">
                </div>
            </div>
            <div class="map-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.5870111300055!2d106.94524637680806!3d-6.18598506061343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e698b0e2461d2ff%3A0xa70fde0106454b!2sPT%20Indec%20Diagnostics!5e0!3m2!1sen!2smy!4v1753053366397!5m2!1sen!2smy" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </section>
    </body>
    <?php
        include 'footer.html';
    ?>
</html> 