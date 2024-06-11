@extends('layout')

@section('content')
<section class="hero">
    <article class="hero__tour">
        <p class="section-title">THE ULTIMATE LUXURY EXPERIENCE</p>
        <h1>The Perfect Base For You</h1>
        <button class="btn btn--primary">TAKE A TOUR</button>
        <button class="btn btn--dark">LEARN MORE</button>
    </article>
    <article class="hero__availability">
        <div class="arrival-date">
            <p>Arrival Date</p>
            <input type="date" name="arrival-date">
        </div>
        <div class="departure-date">
            <p>Departure Date</p>
            <input type="date" name="departure-date">
        </div>
        <button class="btn btn--primary">CHECK AVAILABILITY</button>
    </article>
</section>

<section class="about-us">
    <article class="about-us__info">
        <p class="section-title">ABOUT US</p>
        <h2>Discover Our Underground.</h2>
        <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        <button class="btn btn--primary">BOOK NOW</button>
    </article>
    <article class="about-us__assets">
        <div class="strong-team">
            <div>
                <img src="./assets/images/strong-team.webp" alt="Image of a united team">
            </div>
            <div>
                <i class="fa-solid fa-people-group fa-xl" style="color: #bead8e;"></i>
                <i class="fa-solid fa-people-group fa-2xl" style="color: #f8f8f8;"></i>
                <h3>Strong Team</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
        <div class="luxury-room">
            <div>
                <img src="./assets/images/luxury-room.webp" alt="Image of one of our luxury rooms">
            </div>
            <div>
                <i class="fa-regular fa-calendar fa-xl" style="color: #bead8e"></i>
                <h3>Luxury Room</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.</p>
            </div>
        </div>
    </article>
</section>

<section id="rooms">
    <article class="rooms">
        <p class="section-title">ROOMS</p>
        <h2>Hand Picked Rooms</h2>
        <div class="slider">
            <div class="slider__icons">
                <i class="fa-solid fa-bed" style="color: #000000;"></i>
                <i class="fa-solid fa-wifi" style="color: #000000;"></i>
                <i class="fa-solid fa-car" style="color: #000000;"></i>
                <i class="fa-regular fa-snowflake" style="color: #000000;"></i>
                <i class="fa-solid fa-dumbbell" style="color: #000000;"></i>
                <i class="fa-solid fa-ban-smoking" style="color: #000000;"></i>
                <i class="fa-solid fa-martini-glass-citrus" style="color: #000000;"></i>
            </div>
            <div class="slider__buttons-image">
                <img src="./assets/images/duplex-room.webp" alt="">
                <div class="buttons">
                    <button class="btn btn--primary">&lt;</button>
                    <button class="btn btn--primary">&gt;</button>
                </div>
            </div>
            <div class="slider__description">
                <h3>Minimal Duplex Room</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
                <div class="rate">
                    <span class="price">&dollar;345</span><span class="night">/Night</span>
                </div>
            </div>
        </div>
    </article>
</section>

<section class="intro-video">
    <article class="intro-video__info">
        <p class="section-title">INTRO VIDEO</p>
        <h2>Meet With Our Luxury Place</h2>
        <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat you have to understand this.</p>
        <video src="./assets/videos/intro-video.mp4#t=15,75" controls autoplay muted></video>
        <button class="btn btn--primary">BOOK NOW</button>
    </article>
</section>

<section class="facilities">
    <article class="facilities__info">
        <p class="section-title">FACILITIES</p>
        <h2>Core Features</h2>
        <div class="icons">
            <i class="fa-solid fa-ranking-star fa-2xl" style="color: #bead8e;"></i>
            <span>01</span>
        </div>
        <h3>Have High Rating</h3>
        <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
    </article>
</section>

<section class="menu">
    <article class="menu__info">
        <i class="fa-solid fa-mug-hot fa-2xl" style="color: #bead8e;"></i>
        <p class="section-title">MENU</p>
        <h2>Our Foods Menu</h2>
        <div class="menu__items">
            <article class="item">
                <img src="./assets/images/eggs-bacon.webp" alt="Eggs and bacon">
                <div class="item__info">
                    <h3>Eggs & Bacon</h3>
                    <p class="section-description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                </div>
            </article>
            <article class="item">
                <img src="./assets/images/coffee-tea.webp" alt="Coffee or tea">
                <div class="item__info">
                    <h3>Tea or Coffee</h3>
                    <p class="section-description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                </div>
            </article>
            <article class="item">
                <img src="./assets/images/chia-pudding.webp" alt="Chia pudding">
                <div class="item__info">
                    <h3>Chia Oatmeal</h3>
                    <p class="section-description">Lorem ipsum dolor sit amet, consectetur adip isicing elit, sed do eiusmod tempor.</p>
                </div>
            </article>
        </div>
        <div class="menu__buttons">
            <button class="btn btn--primary">&lt;</button>
            <button class="btn btn--primary">&gt;</button>
        </div>
    </article>
</section>

<section class="stats">
    <div class="stats__container">
        <article class="stats__item">
            <i class="fa-solid fa-rocket" style="color: #bead8e;"></i>
            <p class="figure">84k<span>+</span></p>
            <p class="footnote">projects are completed</p>
        </article> 
        <article class="stats__item">
            <i class="fa-solid fa-people-roof" style="color: #bead8e;"></i>
            <p class="figure">10M<span>+</span></p>
            <p class="footnote">active backers around the world</p>
        </article> 
        <article class="stats__item">
            <i class="fa-solid fa-money-bill-trend-up" style="color: #bead8e;"></i>
            <p class="figure">84k<span>+</span></p>
            <p class="footnote">categories served</p>
        </article> 
        <article class="stats__item last">
            <i class="fa-solid fa-book-open" style="color: #bead8e;"></i>
            <p class="figure">84k<span>+</span></p>
            <p class="footnote">idea raised funds</p>
        </article> 
    </div>
</section>
@endsection