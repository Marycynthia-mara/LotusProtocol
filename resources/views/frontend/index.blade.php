@extends('inc.frontend_layout')
@section('content')


    <!-- Banners Start -->
    <div class="banner" id="home" >
        <div class="hero-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-12 col-lg-12">
                        <div class="banner-content">
                            <!-- <h3 class="subtitle wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">Welcome to
                                Lotus Protocol</h3> -->
                            <h1 class="head wow fadeInUp text-center" data-wow-duration="0.3s" data-wow-delay="0.3s">Best Crypto Investments</h1>
                            <p class="text-small text-center wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                We've helped over 10,000 people start Bitcoin
                                investing. Build your future.
                            </p>
                            <a href="/register" style="margin: 0 auto; margin-top: 20px;" class="button button-1 wow fadeInUp" data-wow-duration="0.3s"
                                data-wow-delay="0.3s">Start Now !</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Compare Start -->
    <div class="compare" id="currency">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="coin-box owl-carousel owl-theme">
                        <div class="compare-box item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="single">
                                <div class="icon">
                                    <img src="/assets/img/coin-icon-1.png" alt="" class="coin-icon">
                                    <p class="text">Bitcoin <span>BTC</span></p>
                                </div>
                                <h4 class="lasthead">$10,260.74 <span>+2.01%</span></h4>
                                <p class="text">Price (24 hours)</p>
                            </div>
                        </div>
                        <div class="compare-box item wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.3s">
                            <div class="single">
                                <div class="icon">
                                    <img src="/assets/img/coin-icon-2.png" alt="" class="coin-icon">
                                    <p class="text">Ethereum <span>ETH</span></p>
                                </div>
                                <h4 class="lasthead">$352.72 <span>+7.34%</span></h4>
                                <p class="text">Price (24 hours)</p>
                            </div>
                        </div>
                        <div class="compare-box item wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.3s">
                            <div class="single">
                                <div class="icon">
                                    <img src="/assets/img/coin-icon-3.png" alt="" class="coin-icon">
                                    <p class="text">Litecoin <span>LTC</span></p>
                                </div>
                                <h4 class="lasthead">$48.24 <span>+2.59%</span></h4>
                                <p class="text">Price (24 hours)</p>
                            </div>
                        </div>
                        <div class="compare-box item wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                            <div class="single">
                                <div class="icon">
                                    <img src="/assets/img/coin-icon-4.png" alt="" class="coin-icon">
                                    <p class="text">Dash <span>DASH</span></p>
                                </div>
                                <h4 class="lasthead">$68.64 <span>+1.23%</span></h4>
                                <p class="text">Price (24 hours)</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Feature Start -->
    <div class="feature" id="feature">
        <div class="shap">
            <img src="/assets/img/feature-shap.png" alt="" class="fshap">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
                    <div class="upper-content">
                        <h4 class="lasthead wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">Why choose
                            Lotus Protocol</h4>
                        <h2 class="title wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">Effortless crypto
                            investing</h2>
                        <p class="text wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            The simple way to grow your money like the world’s most sophisticated investors.
                        </p>
                        <a href="/register" class="button button-1 wow fadeInUp" data-wow-duration="0.3s"
                            data-wow-delay="0.3s">Sign up for free </a>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="row">
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                            <div class="feature-box one">
                                <div class="tumb">
                                    <img src="/assets/img/feature-icon-1.png" alt="">
                                </div>
                                <p class="text">
                                    The fast & simpleway to Invest crypto
                                </p>

                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="0.4s" data-wow-delay="0.3s">
                            <div class="feature-box two">
                                <div class="tumb">
                                    <img src="/assets/img/feature-icon-2.png" alt="">
                                </div>
                                <p class="text">
                                    Professional, Safe & Secure
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.3s">
                            <div class="feature-box three">
                                <div class="tumb">
                                    <img src="/assets/img/feature-icon-3.png" alt="">
                                </div>
                                <p class="text">
                                    Multi-Currency Support
                                </p>

                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp" data-wow-duration="0.6s" data-wow-delay="0.3s">
                            <div class="feature-box four">
                                <div class="tumb">
                                    <img src="/assets/img/feature-icon-4.png" alt="">
                                </div>
                                <p class="text">
                                    Our people are available for you 24/7
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Deposit Start -->
    <div class="deposit" id="deposit" style="background-image: url('/assets/img/deposit-bg.png'); masgin-bottom:100px">
        <div class="sape">
            <img src="/assets/img/rdot-1.png" alt="" class="rdot-1">
            <img src="/assets/img/rdot-2.png" alt="" class="rdot-2">
            <img src="/assets/img/rdot-3.png" alt="" class="rdot-3">
        </div>

        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto">
                    <div class="upper-content text-center wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h4 class="lasthead">Our investment offer</h4>
                        <h2 class="title">Deposit Portfolio</h2>
                        <p class="text">
                            Your total income directly depends on the amount you invest,
                            so the more you contribute, the more you can earn.
                        </p>
                    </div>
                </div>
                <div class="col-12">
                    <div class="offer">
                        <h3 class="subtitle">We are Offering</h3>
                        <div class="offer-box" style="background-image: url('/assets/img/offer-box-bg.png')">
                            <div class="offer-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                <div class="icon">
                                    <img src="/assets/img/offer-icon-1.png" alt="" class="offer-icon">
                                </div>
                                <div class="content">
                                    <h2 class="pursent">3.00%</h2>
                                    <p class="text">Daily Profit</p>
                                </div>
                            </div>
                            <div class="arrow wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                <img src="/assets/img/arrow-right.png" alt="" class="arrow-pic">
                            </div>
                            <div class="offer-item wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                                <div class="icon">
                                    <img src="/assets/img/offer-icon-2.png" alt="" class="offer-icon">
                                </div>
                                <div class="content">
                                    <h2 class="pursent">30.00%</h2>
                                    <p class="text">Daily Profit</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
