@extends('layout')

@section('content')
    <section class="hero">
        <article class="hero__tour">
            <p class="section-title">THE ULTIMATE LUXURY</p>
            <h1>Ultimate Room</h1>
            <div class="navigation">
                <p><a href="../index.html">Home</a> | <span>Room Details</span></p>
            </div>
        </article>
    </section>

    <section class="room-details">
        <div class="room-details__content">
            <p class="section-title">DOUBLE BED</p>
            <h3 class="start-align">Luxury Double Bed</h3>
            <div class="rate">
                <span class="price">&dollar;345</span><span class="night">/Night</span>
            </div>
            <img src="/assets/images/duplex-room.webp" alt="One of our duplex rooms">
            <div class="room-details__availability">
                <p class="title">Check Availability</p>
                <article class="date">
                    <label>Check In</label>
                    <input type="date" name="arrival-date">
                </article>
                <article class="date">
                    <label>Check Out</label>
                    <input type="date" name="departure-date">
                </article>
                <button class="btn btn--primary">CHECK AVAILABILITY</button>
            </div>
            <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
        </div>
    </section>

    <section class="amenities">
        <div class="amenities__content">
            <h3 class="start-align">Amenities</h3>
            <div class="amenities__list">
                <article>
                    <i class="fa-solid fa-wind"></i>
                    <p>Air Conditioner</p>
                </article>
                <article>
                    <i class="fa-solid fa-bacon"></i>
                    <p>Breakfast</p>
                </article>
                <article>
                    <i class="fa-solid fa-spray-can-sparkles"></i>
                    <p>Cleaning</p>
                </article>
                <article>
                    <i class="fa-solid fa-cart-shopping"></i>
                    <p>Groceries</p>
                </article>
                <article>
                    <i class="fa-brands fa-shopify"></i>
                    <p>Shops Nearby</p>
                </article>
                <article>
                    <i class="fa-solid fa-headset"></i>
                    <p>24/7 Online Support</p>
                </article>
                <article>
                    <i class="fa-solid fa-shield-halved"></i>
                    <p>Smart Security</p>
                </article>
                <article>
                    <i class="fa-solid fa-wifi"></i>
                    <p>High Speed WI-FI</p>
                </article>
                <article>
                    <i class="fa-solid fa-kitchen-set"></i>
                    <p>Kitchen</p>
                </article>
                <article>
                    <i class="fa-solid fa-shower"></i>
                    <p>Shower</p>
                </article>
                <article>
                    <i class="fa-solid fa-bed"></i>
                    <p>Single Bed</p>
                </article>
                <article>
                    <i class="fa-solid fa-toilet-paper"></i>
                    <p>Towels</p>
                </article>
                <article>
                    <i class="fa-solid fa-vault"></i>
                    <p>Secure Locker</p>
                </article>
                <article>
                    <i class="fa-solid fa-people-group"></i>
                    <p>Expert Team</p>
                </article>
            </div>
        </div>
    </section>

    <section class="founder">
        <div class="founder__content">
            <article class="founder__profile-pic">
                <img src="/assets/images/founder.webp" alt="Founder of Hotel Miranda">
                <div>
                    <i class="fa-solid fa-check"></i>
                </div>
            </article>
            <h3>Rosalina D. William</h3>
            <p class="section-title">FOUNDER, QUX CO.</p>
            <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
    </section>

    <section class="cancellation">
        <div class="cancellation__content">
            <h3 class="start-align">Cancellation</h3>
            <p class="section-description">
                Phasellus volutpat neque a tellus venenatis, a euismod augue facilisis. Fusce ut metus mattis, consequat metus nec, luctus lectus. Pellentesque orci quis hendrerit sed eu dolor. Cancel up to 14 days to get a full refund.
            </p>
        </div>
    </section>

    <section class="room-list">
        <div class="room-list__content">
            <h3 class="start-align">Related Rooms</h3>
            <article class="room-list__item">
            <div class="room-list__slider">
                <img src="/assets/images/luxury-room.webp" alt="A room in our hotel">
                <div class="buttons">
                    <button class="btn btn--primary">&lt;</button>
                    <button class="btn btn--primary">&gt;</button>
                </div>
            </div>
                <div class="room-list__icons">
                    <i class="fa-solid fa-bed" style="color: #000000;"></i>
                    <i class="fa-solid fa-wifi" style="color: #000000;"></i>
                    <i class="fa-solid fa-car" style="color: #000000;"></i>
                    <i class="fa-regular fa-snowflake" style="color: #000000;"></i>
                    <i class="fa-solid fa-dumbbell" style="color: #000000;"></i>
                    <i class="fa-solid fa-ban-smoking" style="color: #000000;"></i>
                    <i class="fa-solid fa-martini-glass-citrus" style="color: #000000;"></i>
                </div>
                <h3>Minimal Duplex Room</h3>
                <p class="section-description">Lorem ipsum dolor sit amet, consectetur adipi sicing elit, sed do eiusmod tempor.</p>
                <div class="room-list__rate">
                    <span>$345/Night</span><span>Booking Now</span>
                </div>
            </article>
        </div>
    </section>

    @endsection