@extends('inc.frontend_layout')
@section('content')


<!-- Banners Start -->
<div class="banner about" id="home" style="background-image: url('/assets/img/bg-2.jpg')">
    <!-- hero-area Start -->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="banner-content">
                        <h2 class="title">About Us</h2>
                        <ul class="breadcrumb">
                            <li>
                                <a href="/">Home</a> <i class="flaticon-airplane49"></i>
                            </li>
                            <li>
                                About Us
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- About Section Start -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5">
                <div class="about-thumb wow fadeInLeft" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <img src="/assets/img/about.png" alt="about" class="about-img">
                </div>
            </div>
            <div class="col-xl-7">
                <div class="about-content">
                    <div class="upper-content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h4 class="lasthead">A Few Words About Us</h4>
                        <h2 class="title">MISSION.</h2>
                        <p class="text">
                            We are unlocking the potentials of the blockchain industry, Exploring the Crypto world and Empower Crypto & DeFi enthusiasts to achieve their dreams — let our passion fuel your dreams.
                        </p>

                        <p class="text" style="margin-top:30px">
                            We built TheLotusProtocol with the passion to help users and our Cryptocommunity make massive profits from the volatility of the Financial market.
                        </p>

                        <h2 class="title">VISION.</h2>
                        <p class="text">
                            There’s so much money out there in the Crypto world. Just go get yours.
                        </p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Chart Section Start -->
<section class="chart-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <div class="upper-content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <h2 class="title">VALUES</h2>
                    <p class="text">
                        We constantly Listen, Care, and Improve. We aim to revolutionize the industry by fusing the best of cryptocurrency and traditional finance.
                    </p>

                    <p class="text" style="margin-top:20px">
                        Our innovative, highly advanced, user-friendly platform has been designed from the ground-up using best-in-class infrastructure to provide our users with the industry’s safest, fastest, fairest and most transparent trading experience.
                    </p>

                    <p class="text" style="margin-top:20px">
                        We endeavor to provide a professional, smart, intuitive and innovative online trading, investing and staking experience for retail and institutional clients around the world.
                    </p>
                </div>
            </div>
            <div class="col-lg-7 wow fadeInRight" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <img src="/assets/img/chart.jpeg" alt="about" class="about-img">
                {{-- <div id="chart">
                    <div id="timeline-chart"></div>
                </div> --}}
            </div>
        </div>
    </div>
</section>

<!--  History-section Start -->
<section class="history-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="upper-content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <h4 class="lasthead">Highly Committed && Pioneering Professionals</h4>
                    <h2 class="title">More About Us</h2>
                    <p class="text">
                        We are committed to creating a fair, transparent and efficient trading environment.
                    </p>

                    <p class="text" style="margin-top:20px">
                        We bring in the best talents from the foreign exchange and investment banking industries. Our team consists of industry leading technology developers, financial and consumer technology experts with significant experience in innovating within the vertical. 
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="history-slider owl-carousel owl-theme">
                    <div class="history-item item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="history-content">
                            <div class="content">
                                <h6 class="title">Affiliate Program</h6>
                                <p>Earn money by recommending our website to others</p>
                            </div>
                        </div>
                        <div class="history-thumb">
                            <div class="anime-item-2"></div>
                            <span>Coming Soon</span>
                        </div>
                    </div>
                    <div class="history-item item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="history-content">
                            <div class="content">
                                <h6 class="title">Affiliate Program</h6>
                                <p>Earn money by recommending our website to others</p>
                            </div>
                        </div>
                        <div class="history-thumb">
                            <div class="anime-item-2"></div>
                            <span>Coming Soon</span>
                        </div>
                    </div>
                    <div class="history-item item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="history-content">
                            <div class="content">
                                <h6 class="title">Affiliate Program</h6>
                                <p>Earn money by recommending our website to others</p>
                            </div>
                        </div>
                        <div class="history-thumb">
                            <div class="anime-item-2"></div>
                            <span>Coming Soon</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Section Start -->
<!-- <div class="team-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <div class="upper-content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <h4 class="lasthead">Meet our most valued</h4>
                    <h2 class="title">Expert Team Members</h2>
                    <p class="text">
                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus, consectetur harum.
                        Dolor aut, modi nulla harum eius dolorum accusantium, autem saepe eum optio, quibusdam vero
                        quis sequi ut qui laudantium.
                    </p>
                </div>
            </div>
            <div class="col-12">
                <div class="team  owl-carousel owl-theme">
                    <div class="team-single item wow fadeInUp" data-wow-duration="0.2s" data-wow-delay="0.2s">
                        <div class="thumb">
                            <img src="/assets/img/avatar-1.jpg" alt="">
                        </div>
                        <div class="content">
                            <h5 class="text"><a href="#">Alex Love</a></h5>
                            <p class="text">Manager</p>
                        </div>
                    </div>
                    <div class="team-single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="thumb">
                            <img src="/assets/img/avatar-2.jpg" alt="">
                        </div>
                        <div class="content">
                            <h5 class="text"><a href="#">Kathy Holt</a></h5>
                            <p class="text">Art Director</p>
                        </div>
                    </div>
                    <div class="team-single item wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.4s">
                        <div class="thumb">
                            <img src="/assets/img/avatar-3.jpg" alt="">
                        </div>
                        <div class="content">
                            <h5 class="text"><a href="#">Steven Mann</a></h5>
                            <p class="text">Devoloper</p>
                        </div>
                    </div>
                    <div class="team-single item wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                        <div class="thumb">
                            <img src="/assets/img/avatar-4.jpg" alt="">
                        </div>
                        <div class="content">
                            <h5 class="text"><a href="#">Cody Wilson</a></h5>
                            <p class="text">CEO </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- testomonial Start -->
{{-- <div class="testomonial about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                <div class="upper-content">
                    <h4 class="lasthead">Testimonials</h4>
                    <h2 class="title">5000+ happy clients all around the world</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="testo-box owl-carousel owl-theme">
                    <div class="single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="person">
                            <div class="tumb">
                                <img src="/assets/img/reviewer1.png" alt="">
                            </div>
                            <h2 class="name">Martha Vargas</h2>
                            <h5>Founder of Pinterest</h5>
                        </div>
                        <div class="content">
                            <h4 class="lasthead">
                                “Very helpful excellent service always answering all my questions And the most
                                important thing was that wat they offer me is wat it was I highly recommended thanks
                                for all the help keep up the good work”
                            </h4>
                        </div>
                    </div>
                    <div class="single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="person">
                            <div class="tumb">
                                <img src="/assets/img/reviewer-2.png" alt="">
                            </div>
                            <h2 class="name">Chris Bates</h2>
                            <h5>Founder of Facebook</h5>
                        </div>
                        <div class="content">
                            <h4 class="lasthead">
                                “Very helpful excellent service always answering all my questions And the most
                                important thing was that wat they offer me is wat it was I highly recommended thanks
                                for all the help keep up the good work”
                            </h4>
                        </div>
                    </div>
                    <div class="single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="person">
                            <div class="tumb">
                                <img src="/assets/img/reviewer-3.png" alt="">
                            </div>
                            <h2 class="name">Alfredo Harrison</h2>
                            <h5>Founder of Tesla</h5>
                        </div>
                        <div class="content">
                            <h4 class="lasthead">
                                “Very helpful excellent service always answering all my questions And the most
                                important thing was that wat they offer me is wat it was I highly recommended thanks
                                for all the help keep up the good work”
                            </h4>
                        </div>
                    </div>
                    <div class="single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="person">
                            <div class="tumb">
                                <img src="/assets/img/reviewer-4.png" alt="">
                            </div>
                            <h2 class="name">Ellis Phillips</h2>
                            <h5>Founder of Pinterest</h5>
                        </div>
                        <div class="content">
                            <h4 class="lasthead">
                                “Very helpful excellent service always answering all my questions And the most
                                important thing was that wat they offer me is wat it was I highly recommended thanks
                                for all the help keep up the good work”
                            </h4>
                        </div>
                    </div>
                    <div class="single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="person">
                            <div class="tumb">
                                <img src="/assets/img/reviewer-2.png" alt="">
                            </div>
                            <h2 class="name">Andrew Owens</h2>
                            <h5>Founder of Pinterest</h5>
                        </div>
                        <div class="content">
                            <h4 class="lasthead">
                                “Very helpful excellent service always answering all my questions And the most
                                important thing was that wat they offer me is wat it was I highly recommended thanks
                                for all the help keep up the good work”
                            </h4>
                        </div>
                    </div>
                    <div class="single item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <div class="person">
                            <div class="tumb">
                                <img src="/assets/img/reviewer-4.png" alt="">
                            </div>
                            <h2 class="name">Myron Castillo</h2>
                            <h5>Founder of Gobuy</h5>
                        </div>
                        <div class="content">
                            <h4 class="lasthead">
                                “Very helpful excellent service always answering all my questions And the most
                                important thing was that wat they offer me is wat it was I highly recommended thanks
                                for all the help keep up the good work”
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}


@endsection