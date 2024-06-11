<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Miranda</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./styles/styles.css">
    <script src="https://kit.fontawesome.com/eb68fb70a6.js" crossorigin="anonymous"></script>
</head>
<body>
    <section id="navbar">
        <nav class="nav">
            <div class="nav__name">
                <i class="fa-solid fa-bars fa-xl nav__burger-menu"></i>
                <span class="nav__logo"> H </span>
                <div>
                    <span><b>HOTEL</b></span><span>MIRANDA</span>
                </div>
            </div>
            <div class="nav__icons">
                <i class="fa-regular fa-user fa-xl nav__user-info"></i>
                <i class="fa-solid fa-magnifying-glass fa-xl nav__search"></i>
            </div>
            <div class="nav__links">
                <a href="./pages/contact.html">About Us</a>
                <a href="./pages/rooms.html">Rooms</a>
                <a href="./pages/offers.html">Offers</a>
                <a href="./pages/contact.html">Contact</a>
            </div>
        </nav> 
    </section>

    @yield('content')

    <section class="contact">
        <div class="contact__container">
            <div class="contact__socials">
                <article>
                    <span class="logo">H</span>
                    <div>
                        <span><b>HOTEL</b></span><span>MIRANDA</span>
                    </div>
                </article>
                <p class="section-description">Lorem ipsum dolor sit amet, consect etur adipisicing elit, sed doing eius mod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat ion ullamco laboris nisi.</p>
                <div class="contact__socials__icons">
                    <article class="icon facebook">
                        <i class="fa-brands fa-square-facebook"></i>
                    </article>
                    <article class="icon twitter">
                        <i class="fa-brands fa-square-twitter"></i>
                    </article>
                    <article class="icon behance">
                        <i class="fa-brands fa-square-behance"></i>
                    </article>
                    <article class="icon linkedin">
                        <i class="fa-brands fa-linkedin"></i>
                    </article>
                    <article class="icon youtube">
                        <i class="fa-brands fa-square-youtube"></i>
                    </article>
                </div>
            </div>

            <div class="contact__services">
                <h3 class="start-align">Services</h3>
                <div class="contact__services__container">
                    <article class="service">
                        <span>+ Restaurant & Bar</span>
                    </article>
                    <article class="service">
                        <span>+ Swimming Pool</span>
                    </article>
                    <article class="service">
                        <span>+ Wellness & Spa</span>
                    </article>
                    <article class="service">
                        <span>+ Conference Room</span>
                    </article>
                    <article class="service">
                        <span>+ Coctail Party House</span>
                    </article>
                    <article class="service">
                        <span>+ Gaming Zone</span>
                    </article>
                    <article class="service">
                        <span>+ Marriage Party</span>
                    </article>
                    <article class="service">
                        <span>+ Party Planning</span>
                    </article>
                    <article class="service">
                        <span>+ Tour Consultancy</span>
                    </article>
                </div>
            </div>

            <div class="contact__contact-us">
                <h3 class="start-align">Contact Us</h3>
                <article class="contact__contact-us__card phone">
                    <i class="fa-solid fa-phone"></i>
                    <div>
                        <span class="card-title"><b>Phone Number</b></span><span class="card-info">+994 505 486769</span>
                    </div>
                </article>
                <article class="contact__contact-us__card email">
                    <i class="fa-regular fa-envelope"></i>
                    <div>
                        <span class="card-title"><b>Email</b></span><span class="card-info">info@hotelmiranda.com</span>
                    </div>
                </article>
                <article class="contact__contact-us__card address">
                    <i class="fa-solid fa-map-location-dot"></i>
                    <div>
                        <span class="card-title"><b>Address</b></span><span class="card-info">Kingston Rd 89, Cheltenham, Gloucester.</span>
                    </div>
                </article>
            </div>
        </div>
    </section>
    

    <section class="footer">
        <footer>
            <p class="copyright">Copyright by @Example - 2020</p>
            <p><a href="" class="tos">Terms of use</a> | <a href="" class="policy">Privacy and Environmental Policy</a></p>
        </footer>
    </section>
</body>
</html>