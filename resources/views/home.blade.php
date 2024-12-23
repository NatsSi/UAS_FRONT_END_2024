@extends('layouts.app')

@section('title')
Home
@endsection

@section('head')
<link rel="stylesheet" href="/css/Home.css">
@endsection

@section('content')
<div ng-controller="MainController">
    <h1>
        [[ pesan ]]
    </h1>
    <section id="hero">
        <div id="content">
            <h2>Explore the Path of Balance</h2>
            <p>Let yourself be enveloped in a gentle harmony where yoga, well-being, and a caring diet come together.
            </p>
            <a href="/html/Register.html" id="button-register-1">Start your journey</a>
        </div>
        <div id="hero-image-1">
            <img src="{{asset('/images/benjamin-child-rOn57CBgyMo-unsplash.jpg')}}" alt="Yoga Pose">
        </div>
    </section>

    <section id="services">
        <div id="services-grid">
            <div class="services-item one appear">
                <h3>OUR SERVICES</h3>
                <h2>Our services for a healthy body</h2>
                <p>Explore the ancient heritage of yoga through our classes, which are accessible to all levels and
                    accompanied by a balanced diet.</p>
            </div>
            <div class="service-item two appear">
                <img src="{{asset('/images/sonnie-hiles-rX8gBeg2WM0-unsplash.jpg')}}" alt="Yoga pose">
                <div class="service-overlay">
                    <h4>Yoga pose</h4>
                </div>
            </div>
            <div class="service-item three appear">
                <img src="{{asset('/images/dane-wetton-t1NEMSm1rgI-unsplash.jpg')}}" alt="Yoga routine">
                <div class="service-overlay">
                    <h4>Yoga routine</h4>
                </div>
            </div>
            <div class="service-item four appear">
                <img src="{{asset('/images/brooke-lark-jUPOXXRNdcA-unsplash.jpg')}}" alt="Nutrition">
                <div class="service-overlay">
                    <h4>Nutrition</h4>
                </div>
            </div>
            <div class="service-item five appear">
                <img src="{{asset('/images/kelsey-chance-ZrhtQyGFG6s-unsplash.jpg')}}" alt="Retreats">
                <div class="service-overlay">
                    <h4>Retreats</h4>
                </div>
            </div>
            <div class="service-item six appear">
                <img src="{{asset('/images/wesley-tingey-57wo9F-r2-A-unsplash.jpg')}}"
                    alt="Ready to start your journey?">
                <div class="service-overlay">
                    <h4>Ready to start your journey?</h4>
                </div>
            </div>
        </div>
    </section>

    <section id="well-being">
        <div id="content-wrapper">
            <div id="left-content">
                <h3 class="appear2">YOGA SPIRIT</h3>
                <h2 class="appear2">Yoogy is committed to your well-being</h2>
                <p class="appear2">Explore the ancient heritage of yoga through our classes, which are accessible to all
                    levels and accompanied by a balanced diet.</p>

                <div class="service-item appear2">
                    <div class="service-icon">&#x1F331;</div> <!-- Yoga icon -->
                    <div class="service-text">
                        <h4>Yoga classes</h4>
                        <p>Immerse yourself in the ancient art of yoga with our classes for all levels. From soothing
                            hatha
                            yoga sessions to dynamic vinyasa practices, find the discipline that resonates with you.</p>
                        <a href="/html/Register.html" class="button-register-2">Access the course
                            <span>&#x27A4;</span></a>
                    </div>
                </div>

                <div class="service-item appear2">
                    <div class="service-icon">&#x1F9D8;</div> <!-- Meditation icon -->
                    <div class="service-text">
                        <h4>Holistic well-being</h4>
                        <p>Explore holistic approaches to well-being, from guided meditation to massage therapy. Nourish
                            your spirit and rebalance your vital energy.</p>
                        <a href="/html/Register.html" class="button-register-2">Access our advice
                            <span>&#x27A4;</span></a>
                    </div>
                </div>

                <div class="service-item appear2">
                    <div class="service-icon">&#x1F96A;</div> <!-- Food icon -->
                    <div class="service-text">
                        <h4>Conscious eating</h4>
                        <p>Discover how food can be a source of healing. Our nutrition experts will guide you towards
                            conscious eating to revitalise your body from the inside out.</p>
                        <a href="/html/Register.html" class="button-register-2">Access to recipes
                            <span>&#x27A4;</span></a>
                    </div>
                </div>
            </div>

            <div id="right-content" class="appear2">
                <img src="{{asset('/images/dane-wetton-t1NEMSm1rgI-unsplash.jpg')}}" alt="Yoga Well-being">
            </div>
        </div>
    </section>

    <section id="events_retreats">
        <div id="content-text" class="appear3">
            <h1>EVENTS & RETREATS</h1>
            <h2>Find out more about our events and retreats</h1>
                <p>Explore the ancient heritage of yoga through our classes, which are accessible to all levels and
                    accompanied by a balanced diet.</p>
        </div>
        <div class="appear3">
            <img src="{{asset('/images/kike-vega-F2qh3yjz6Jk-unsplash.jpg')}}" alt="Yoga Pose" id="hero-image-2">
        </div>
        <div id="retreat-details" class="appear3">
            <div class="retreat-box">
                <h2>Retreats Tailored to You</h2>
                <p>Our retreats are designed to fit your needs, whether you're a yoga novice or expert. Find the perfect
                    balance of activity and relaxation.</p>
            </div>
            <div class="retreat-box">
                <h2>Diverse Yoga Practices</h2>
                <p>Experience a variety of yoga styles. Our expert instructors guide you in finding the style that
                    speaks to
                    you, from calming Yin to dynamic Ashtanga.</p>
            </div>
            <div class="retreat-box">
                <h2>Nature and Nurture</h2>
                <p>Connect with the calming power of nature. Our retreats are set in beautiful, peaceful locations that
                    offer a perfect backdrop for mindfulness.</p>
            </div>
        </div>

    </section>

    <section id="pricing">
        <div id="feature-text" class="appear4">
            <h2>Our plan for a journey of well-being</h2>
            <p>Explore the ancient heritage of yoga through our classes, which are accessible to all levels and
                accompanied
                by a balanced diet.</p>
        </div>
        <div id="pricing-cards" class="appear4">
            <div class="card card-one">
                <h3>ZEN STARTER</h3>
                <h2>$10/mth</h2>
                <ul>
                    <li>Curated yoga classes for beginners</li>
                    <li>5 yoga classes per month</li>
                    <li>Access to the online community</li>
                    <li>Weekly guided meditation sessions</li>
                </ul>
                <a href="/html/Register.html" class="button-register-3">Subscribe</a>
            </div>

            <div class="card card-two">
                <h3>ENERGY BOOSTER</h3>
                <h2>$18/mth</h2>
                <ul>
                    <li>Dynamic yoga program for energy</li>
                    <li>10 yoga classes per month, including dynamic Vinyasa sessions</li>
                    <li>Monthly workshops on nutrition and wellness</li>
                    <li>Priority access to special events</li>
                </ul>
                <a href="/html/Register.html" class="button-register-3">Subscribe</a>
            </div>

            <div class="card card-three">
                <h3>MINDFUL PRO</h3>
                <h2>$24/mth</h2>
                <ul>
                    <li>Unlimited access to all classes and workshops</li>
                    <li>Personalized wellness coaching sessions</li>
                    <li>Access to exclusive yoga retreats at a discounted rate</li>
                    <li>Access to all basic features</li>
                </ul>
                <a href="/html/Register.html" class="button-register-3">Subscribe</a>
            </div>

            <div class="card card-four">
                <h3>ULTIMATE ZEN</h3>
                <h2>$32/mth</h2>
                <ul>
                    <li>Premium yoga experience with exclusive benefits</li>
                    <li>Unlimited access + free guest pass to all classes</li>
                    <li>Private yoga sessions with international experts</li>
                    <li>Premium welcome pack and discounts on partner products</li>
                </ul>
                <a href="/html/Register.html" class="button-register-3">Subscribe</a>
            </div>
        </div>
    </section>

    <section id="share-moments">
        <h1 class="appear5">Share your Yogo moments with us</h1>

        <div id="gallery" class="appear5">
            <div class="image-box image-one"><img src="{{asset('/images/conscious-design-vSC8Qpi6bZ8-unsplash.jpg')}}"
                    alt="Yoga Pose">
            </div>
            <div class="image-box image-two"><img src="{{asset('/images/yoav-aziz-AiHJiRCwB3w-unsplash.jpg')}}"
                    alt="Salad">
            </div>
            <div class="image-box image-three"><img
                    src="{{asset('/images/carolin-thiergart-fnInh7eQy70-unsplash.jpg')}}" alt="Handstand Yoga"></div>
            <div class="image-box image-four"><img src="{{asset('/images/brooke-lark-W9OKrxBqiZA-unsplash.jpg')}}"
                    alt="Smoothie">
            </div>
            <div class="image-box image-five"><img src="{{asset('/images/manel-sean-rmy5P_gp4jc-unsplash.jpg')}}"
                    alt="Avocado with Topping"></div>
            <div class="image-box image-six"><img src="{{asset('/images/lightscape-0BhsN70JVA8-unsplash.jpg')}}"
                    alt="Soup">
            </div>
        </div>
    </section>
</div>


<script src="{{asset('/js/Home.js')}}"></script>
@endsection