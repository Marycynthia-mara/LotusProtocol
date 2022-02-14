@extends('inc.frontend_layout')
@section('content')


<!-- Banners Start -->
<div class="banner blog" id="home" style="background-image: url('/assets/img/bg-3.jpg')">
    <!-- hero-area Start -->
    <div class="hero-area">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-8 wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <div class="banner-content">
                        <h2 class="title">Blog Pages</h2>
                        <ul class="breadcrumb">
                            <li>
                                <a href=/>Home</a> <i class="flaticon-airplane49"></i>
                            </li>
                            <li>
                                <a href="#">Pages</a> <i class="flaticon-airplane49"></i>
                            </li>
                            <li>
                                Blog Pages
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Blog-section Start -->
<div class="blog-section padding-top padding-bottom">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="post-item">
                    <div class="post-thumb wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <a href="blog-details.html"><img src="/assets/img/blog1.jpg" alt="blog"></a>
                    </div>
                    <div class="post-content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h3 class="subtitle">
                            <a href="blog-details.html">Introducing Market Data Widgets for the Lotus Protocol Wallet. </a>
                        </h3>
                        <p class="text">Our goal is to simplify investing so that anyone can be an investor.Withthis
                            in mind, we hand-pick the investments we offer on our platform..</p>
                        <a href="blog-details.html" class="read">3 min Read</a>
                    </div>
                </div>
                <div class="post-item">
                    <div class="post-thumb wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <a href="blog-details.html"><img src="/assets/img/blog2.jpg" alt="blog"></a>
                    </div>
                    <div class="post-content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h3 class="subtitle">
                            <a href="blog-details.html">Introducing Lotus Protocol – A New Blockchain for the Future.</a>
                        </h3>
                        <p class="text">Our goal is to simplify investing so that anyone can be an investor.Withthis
                            in mind, we hand-pick the investments we offer on our platform..</p>
                        <a href="blog-details.html" class="read">3 min Read</a>
                    </div>
                </div>
                <div class="post-item">
                    <div class="post-thumb wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <a href="blog-details.html"><img src="/assets/img/blog3.jpg" alt="blog"></a>
                    </div>
                    <div class="post-content wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                        <h3 class="subtitle">
                            <a href="blog-details.html">$10,000 HUB – Deposit and trading competition. </a>
                        </h3>
                        <p class="text">Our goal is to simplify investing so that anyone can be an investor.Withthis
                            in mind, we hand-pick the investments we offer on our platform..</p>
                        <a href="blog-details.html" class="read">3 min Read</a>
                    </div>
                </div>
                <div class="pagination-area text-center wow fadeInUp" data-wow-duration="0.3s"
                    data-wow-delay="0.3s">
                    <a href="#0"><i class="fas fa-angle-double-left"></i>Prev</a>
                    <a href="#0">1</a>
                    <a href="#0">2</a>
                    <a href="#0" class="active">3</a>
                    <a href="#0">4</a>
                    <a href="#0">Next<i class="fas fa-angle-double-right"></i></a>
                </div>
            </div>

            <div class="col-lg-4 col-md-8 col-sm-10">
                <div class="widget widget-search wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <h4 class="lasthead">search</h4>
                    <form class="search-form">
                        <input type="text" placeholder="Enter your Search Content" required="">
                        <button class="button-1" type="submit"><i class="flaticon-loupe"></i>Search</button>
                    </form>
                </div>
                <div class="widget widget-post wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <h4 class="lasthead">latest post</h4>

                    <div class="widget-slider owl-carousel owl-theme">
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="/assets/img/blog1.jpg" alt="blog">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="fun">
                                    <a href="blog-details.html">Fun and Practical Tablet
                                        Apps for Seniors</a>
                                </h5>
                                <div class="meta-post">
                                    <a href="#0" class="mr-4"><i class="far fa-comments"></i>20
                                        Comments</a>
                                    <a href="#0"><i class="far fa-eye"></i>466 View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="/assets/img/blog2.jpg" alt="blog">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="fun">
                                    <a href="blog-details.html">Fun and Practical Tablet
                                        Apps for Seniors</a>
                                </h5>
                                <div class="meta-post">
                                    <a href="#0" class="mr-4"><i class="far fa-comments"></i>20
                                        Comments</a>
                                    <a href="#0"><i class="far fa-eye"></i>466 View</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="thumb">
                                <a href="blog-details.html">
                                    <img src="/assets/img/blog3.jpg" alt="blog">
                                </a>
                            </div>
                            <div class="content">
                                <h5 class="fun">
                                    <a href="blog-details.html">Fun and Practical Tablet
                                        Apps for Seniors</a>
                                </h5>
                                <div class="meta-post">
                                    <a href="#0" class="mr-4"><i class="far fa-comments"></i>20
                                        Comments</a>
                                    <a href="#0"><i class="far fa-eye"></i>466 View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="widget widget-follow wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <h4 class="lasthead">Follow Us</h4>
                    <ul class="social-icons">
                        <li>
                            <a href="#0" class="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0" class="active">
                                <i class="fab fa-pinterest-p"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-google"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="widget widget-categories wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <h4 class="lasthead">categories</h4>
                    <ul>
                        <li>
                            <a href="#0">
                                <span>Apps Feature</span><span>50</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <span>Technology</span><span>43</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <span>Marketing </span><span>34</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <span>Inspiration</span><span>63</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <span>Apple Store </span><span>11</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <span>Branding</span><span>30</span>
                            </a>
                        </li>
                        <li>
                            <a href="#0">
                                <span>Lifestyle </span><span>55</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="widget widget-tags wow fadeInUp" data-wow-duration="0.3s" data-wow-delay="0.3s">
                    <h4 class="lasthead">featured tags</h4>
                    <ul>
                        <li>
                            <a href="#0">IOS APPS</a>
                        </li>
                        <li>
                            <a href="#0">SOFTWARE</a>
                        </li>
                        <li>
                            <a href="#0">APPS
                            </a>
                        </li>
                        <li>
                            <a href="#0">ANDROID</a>
                        </li>
                        <li>
                            <a href="#0" class="active">UX DESIGN</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection