@extends('layout')

@section('content')

    <section class="hero">
        <article class="hero__tour">
            <p class="section-title">THE ULTIMATE LUXURY</p>
            <h1>Contact Us</h1>
            <div class="navigation">
                <p><a href="../index.html">Home</a> | <span>Contact</span></p>
            </div>
        </article>
    </section>

    <section class="contact-details">
        <div class="contact-details__content">
            <article class="contact-details__item">
                <i class="fa-solid fa-location-dot"></i>
                <div>
                    <h4>Hotel Address</h4>
                    <div>
                        <p>19/A, Cirikon City hall Tower</p>
                        <p>New York, NYC</p>
                    </div>
                </div>
            </article>
            <article class="contact-details__item">
                <i class="fa-solid fa-phone"></i>
                <div>
                    <h4>Phone Number</h4>
                    <div>
                        <p>+97656 8675 7864 7</p>
                        <p>+876 766 8675 765 6</p>
                    </div>
                </div>
            </article>
            <article class="contact-details__item">
                <i class="fa-regular fa-envelope"></i>
                <div>
                    <h4>Email</h4>
                    <div>
                        <p>info@webmail.com </p>
                        <p>jobs.webmail@mail.com</p>
                    </div>
                </div>
            </article>
        </div>
    </section>

    <section class="contact-form">
        <div class="contact-form__content">
            <img src="/assets/images/happy-people.webp" alt="A picture of our lovely staff">
            <form action="">
                <input type="text" name="full-name" id="full-name" placeholder="Your full name">
                <input type="text" name="phone" id="phone" placeholder="Add phone number">
                <input type="email" name="email" id="email" placeholder="Enter email address">
                <input type="text" name="subject" id="subject" placeholder="Enter subject">
                <textarea name="cooments" id="comments" cols="30" rows="10" placeholder="Enter message"></textarea>
                <button class="btn btn--primary">SEND</button>
            </form>
        </div>
    </section>
    @endsection