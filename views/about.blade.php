@extends('layout')

@section('content')

    <section class="hero">
        <article class="hero__tour">
            <p class="section-title">THE ULTIMATE LUXURY</p>
            <h1>About Us</h1>
            <div class="navigation">
                <p><a href="../index.html">Home</a> | <span>About</span></p>
            </div>
        </article>
    </section>

    <section class="introduction">
        <div class="introduction__content">
            <video src="./assets/videos/intro-video.mp4#t=15,75" controls autoplay muted></video>
            <h3>Hello. Our hotel has been present for over 20 years. We make the best for all our customers.</h3>
            <div class="introduction__services">
                <article>
                    <i class="fa-solid fa-bed"></i>
                    <span class="section-title">BREAKFAST</span>
                </article>
                <article>
                    <i class="fa-solid fa-plane-departure"></i>
                    <span class="section-title">AIRPORT PICKUP</span>
                </article>
                <article>
                    <i class="fa-solid fa-building-user"></i>
                    <span class="section-title">CITY GUIDE</span>
                </article>
                <article>
                    <i class="fa-solid fa-crown"></i>
                    <span class="section-title">LUXURY ROOM</span>
                </article>
            </div>
        </div>
    </section>

    <section class="restaurant">
        <div class="restaurant__content">
            <img src="./assets/images/hotel-restaurant.webp" alt="A restaurant in our hotel">
            <p class="section-title">RESTAURANT</p>
            <h3 class="start-align">Get Restaurant Facilities & Many Other More</h3>
            <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tem por incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            <button class="btn btn--primary">TAKE A TOUR</button>
        </div>
    </section>

    <section class="facilities--dark">
        <article class="facilities__info">
            <p class="section-title">FACILITIES</p>
            <h2>Core Features</h2>
            <div>
                <div class="icons">
                    <i class="fa-solid fa-ranking-star fa-2xl" style="color: #bead8e;"></i>
                    <span class="--dark">01</span>
                </div>
                <h3>Have High Rating</h3>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna.</p>
            </div>
            
        </article>
    </section>

    <section class="counter">
        <div class="counter__content">
            <p class="section-title">COUNTER</p>
            <h2 class="start-align">Some Fun Facts</h2>
            <article class="counter__card">
                <i class="fa-regular fa-face-laugh-beam"></i>
                <div>
                    <span class="number">8000</span>
                    <span class="note">happy users</span>
                </div>
                <div></div>
                <i class="fa-solid fa-arrow-right"></i>
            </article>
            <article class="counter__card">
                <i class="fa-regular fa-thumbs-up"></i>
                <div>
                    <span class="number">10M</span>
                    <span class="note">reviews & likes</span>
                </div>
                <div></div>
                <i class="fa-solid fa-arrow-right"></i>
            </article>
            <article class="counter__card">
                <i class="fa-solid fa-earth-europe"></i>
                <div>
                    <span class="number">100</span>
                    <span class="note">country coverage</span>
                </div>
                <div></div>
                <i class="fa-solid fa-arrow-right"></i>
            </article>
            <img src="./assets/images/happy-people.webp" alt="People enjoying the hotel">
        </div>
    </section>
@endsection