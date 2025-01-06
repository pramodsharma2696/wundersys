@extends('master')
@section('contents')
<style>

/* Video background styling */
.video-bg {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: -1;
}

/* Content box styling */
.content-box {
    position: relative;
    z-index: 2;
    padding: 20px;
    max-width: 650px;
    margin: 0;
    text-align: left; /* Align text to the left */
    color: #fff;
}

/* Align content box to the left */
.content-box {
    left: -4%; /* Adjust percentage as needed for spacing */
    margin-top: 18%;
    transform: translateY(-50%);
}

/* Overlay styling */
.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Adjust opacity for desired effect */
    z-index: 1;
    border-radius: 10px; /* Optional: Add rounded corners */
}

/* Text content styling */
.text-content {
    position: relative;
    z-index: 2;
}



</style>


<!-- banner-section -->
<section class="banner-section p_relative pt_20">
    <div class="large-container">
        <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
            <div class="slide-item p_relative">
                <div class="bg-layer">
                    <video autoplay loop muted playsinline class="video-bg">
                        <source src="{{ asset('') }}assets/img/currency.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="content-box p_relative">
                    <div class="overlay"></div>
                    <div class="text-content">
                        <h2>Make Every Trade with Wundersys Capital Limited</h2>
                        <p>Whether you are into Forex, Commodities, Stocks, Indices or Digital Assets, we’ve got you covered</p>
                        <div class="btn-box">
                            <!-- <a href="#" class="theme-btn btn-one">Create Account</a> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="slide-item p_relative">
                <div class="bg-layer">
                    <video autoplay loop muted playsinline class="video-bg">
                        <source src="{{ asset('') }}assets/img/currency.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="content-box p_relative">
                    <div class="overlay"></div>
                    <div class="text-content">
                        <h2>Navigate the Global markets with a platform built for performance</h2>
                        <p>Get the most accurate market data, alerts, conversions and tools - all within a platform that adapts to your trading needs</p>
                        <div class="btn-box">
                            <!-- <a href="{{ asset('') }}index.html" class="theme-btn btn-one">Create Account</a> -->
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- banner-section end -->





        <!-- clients-section -->
        <section class="clients-section pt_40 pb_40">
            <div class="large-container">
                <ul class="clients-list">
                    <li><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/clients/clients-1.png" alt=""></a></li>
                    <li><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/clients/clients-2.png" alt=""></a></li>
                    <li><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/clients/clients-3.png" alt=""></a></li>
                    <li><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/clients/clients-4.png" alt=""></a></li>
                    <li><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/clients/clients-5.png" alt=""></a></li>
                    <li><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/clients/clients-6.png" alt=""></a></li>
                    <li><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/clients/clients-7.png" alt=""></a></li>
                </ul>
            </div>
        </section>
        <!-- clients-section end -->


        <!-- account-section -->
        <section class="account-section pt_100 pb_70">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
            <div class="auto-container">
                <div class="sec-title pb_60 centred">
                    <span class="sub-title mb_14">Account</span>
                    <h2>Trading Accounts</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                        <div class="account-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-01"></i></div>
                                <h3><a href="{{ asset('') }}account-details.html">Professional Account</a></h3>
                                <p>Traders with professional accounts gain access to a wide range of benefits, including enhanced trading platforms</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                        <div class="account-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-02"></i></div>
                                <h3><a href="{{ asset('') }}account-details.html">Overview Account</a></h3>
                                <p>The primary feature of a trading overview account is its ability to aggregate information from multiple accounts and</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                        <div class="account-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-03"></i></div>
                                <h3><a href="{{ asset('') }}account-details.html">Demo Account</a></h3>
                                <p>Trading demo accounts are particularly valuable for novice traders who are new to the world of investing.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                        <div class="account-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-04"></i></div>
                                <h3><a href="{{ asset('') }}account-details.html">Islamic Account</a></h3>
                                <p>Islamic accounts also adhere to ethical guidelines that prohibit trading certain financial instruments deemed</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- account-section -->


        <!-- about-section -->
        <section class="about-section pt_100 pb_100">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box mr_80">
                                <div class="sec-title pb_30">
                                    <span class="sub-title mb_14">Account</span>
                                    <h2>Trading Accounts</h2>
                                </div>
                                <ul class="accordion-box">
                                    <li class="accordion block active-block">
                                        <div class="acc-btn active">
                                            <div class="icon-box"><i class="icon-29"></i></div>
                                            <h3>Who we are</h3>
                                        </div>
                                        <div class="acc-content current">
                                            <div class="content">
                                                <p>As a brokerage firm or trading platform. We are dedicated to providing innovative and user-friendly trading</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-29"></i></div>
                                            <h3>What we do</h3>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>As a brokerage firm or trading platform. We are dedicated to providing innovative and user-friendly trading</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="accordion block">
                                        <div class="acc-btn">
                                            <div class="icon-box"><i class="icon-29"></i></div>
                                            <h3>How it works</h3>
                                        </div>
                                        <div class="acc-content">
                                            <div class="content">
                                                <p>As a brokerage firm or trading platform. We are dedicated to providing innovative and user-friendly trading</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 video-column">
                        <div class="video_block_one">
                            <div class="video-box z_1 p_relative ml_70 centred">
                                <div class="video-inner" style="background-image: url(assets/images/resource/video-1.jpg);">
                                    <div class="video-content">
                                        <div class="curve-text">
                                            <span class="curved-circle">watch&nbsp;&nbsp;the&nbsp;&nbsp;video&nbsp;&nbsp;right&nbsp;&nbsp;now&nbsp;&nbsp;</span>
                                        </div>
                                        <a href="{{ asset('') }}https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption=""><i class="icon-11"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- funfact-section -->
        <section class="funfact-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                        <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer">
                                        <span class="odometer" data-count="150">00</span>+<span class="text">Countries</span>
                                    </div>
                                    <p>Trade policies and agreements shape the trading landscape of countries</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer">
                                        <span class="odometer" data-count="40">00</span>+<span class="text">Million Invest</span>
                                    </div>
                                    <p>Investing a million dollars in trading represents a significant opportunity and</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 funfact-block">
                            <div class="funfact-block-one">
                                <div class="inner-box">
                                    <div class="count-outer">
                                        <span class="odometer" data-count="90">00</span>+<span class="text">Awards</span>
                                    </div>
                                    <p>Trading awards recognize excellence and achievement within the financial</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->


        <!-- trading-section -->
        <section class="trading-section pt_100 pb_100">
            <div class="auto-container">
                <div class="sec-title centred pb_60">
                    <span class="sub-title mb_14">Trading Platforms</span>
                    <h2>Things We Trade</h2>
                </div>
                <div class="inner-container clearfix">
                    <div class="trading-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-1.png" alt=""></figure>
                            <h3><a href="{{ asset('') }}markets-details.html">Crypto Trading</a></h3>
                            <p>One of the primary methods of gold trading is through the spot</p>
                            <div class="btn-box"><a href="{{ asset('') }}markets-details.html" class="theme-btn btn-one">Start Trading Now</a></div>
                        </div>
                    </div>
                    <div class="trading-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-2.png" alt=""></figure>
                            <h3><a href="{{ asset('') }}markets-details.html">Shares Trading</a></h3>
                            <p>One of the primary methods of gold trading is through the spot</p>
                            <div class="btn-box"><a href="{{ asset('') }}markets-details.html" class="theme-btn btn-one">Start Trading Now</a></div>
                        </div>
                    </div>
                    <div class="trading-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-3.png" alt=""></figure>
                            <h3><a href="{{ asset('') }}markets-details.html">Gold Trading</a></h3>
                            <p>One of the primary methods of gold trading is through the spot</p>
                            <div class="btn-box"><a href="{{ asset('') }}markets-details.html" class="theme-btn btn-one">Start Trading Now</a></div>
                        </div>
                    </div>
                    <div class="trading-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-4.png" alt=""></figure>
                            <h3><a href="{{ asset('') }}markets-details.html">Currency Trading</a></h3>
                            <p>One of the primary methods of gold trading is through the spot</p>
                            <div class="btn-box"><a href="{{ asset('') }}markets-details.html" class="theme-btn btn-one">Start Trading Now</a></div>
                        </div>
                    </div>
                    <div class="trading-block-one">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-5.png" alt=""></figure>
                            <h3><a href="{{ asset('') }}markets-details.html">Silver Trading</a></h3>
                            <p>One of the primary methods of gold trading is through the spot</p>
                            <div class="btn-box"><a href="{{ asset('') }}markets-details.html" class="theme-btn btn-one">Start Trading Now</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trading-section end -->


        <!-- trading-style-two -->
        <section class="trading-style-two centred pt_100 pb_90">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
            <div class="auto-container">
                <div class="sec-title light pb_60">
                    <span class="sub-title mb_14">Trade Now</span>
                    <h2>Market Spreads and Swaps</h2>
                </div>
                <div class="project-tab">
                    <div class="tab-btn-box mb_40">
                        <ul class="tab-btns product-tab-btns clearfix">
                            <li class="p-tab-btn active-btn" data-tab="#tab-1">Forex</li>
                            <li class="p-tab-btn" data-tab="#tab-2">Cryto CFDs</li>
                            <li class="p-tab-btn" data-tab="#tab-3">Share CFDs</li>
                            <li class="p-tab-btn" data-tab="#tab-4">Commondities</li>
                            <li class="p-tab-btn" data-tab="#tab-5">Spot Metals</li>
                            <li class="p-tab-btn" data-tab="#tab-6">Energies</li>
                            <li class="p-tab-btn" data-tab="#tab-7">Indices</li>
                        </ul>
                    </div>
                    <div class="p-tabs-content">
                        <div class="p-tab active-tab" id="tab-1">
                            <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-2">
                            <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-3">
                            <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-4">
                            <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-5">
                            <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-6">
                            <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="p-tab" id="tab-7">
                            <div class="five-item-carousel owl-carousel owl-theme owl-nav-none dots-style-one">
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>AUD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-1.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-2.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64191</span></li>
                                            <li><h6>Bid</h6><span>0.64171</span></li>
                                            <li><h6>Spread</h6><span>12</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>EUR-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-3.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-4.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64156</span></li>
                                            <li><h6>Bid</h6><span>0.64276</span></li>
                                            <li><h6>Spread</h6><span>09</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>GBP-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-5.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-6.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.64578</span></li>
                                            <li><h6>Bid</h6><span>0.64228</span></li>
                                            <li><h6>Spread</h6><span>17</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>CAD-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-7.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-8.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84535</span></li>
                                            <li><h6>Bid</h6><span>0.64589</span></li>
                                            <li><h6>Spread</h6><span>15</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                                <div class="trading-block-two">
                                    <div class="inner-box">
                                        <h5>RYL-USD</h5>
                                        <ul class="flag"> 
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-9.png" alt=""></li>
                                            <li><img src="{{ asset('') }}assets/images/icons/flag-10.png" alt=""></li>
                                        </ul>
                                        <ul class="text-list clearfix">
                                            <li><h6>Ask</h6><span>0.84346</span></li>
                                            <li><h6>Bid</h6><span>0.64514</span></li>
                                            <li><h6>Spread</h6><span>13</span></li>
                                        </ul>
                                        <div class="btn-box"><a href="{{ asset('') }}account-details.html">Trade</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- trading-style-two end -->


        <!-- process-section -->
        <section class="process-section">
            <div class="auto-container">
                <div class="inner-container pt_100 pb_70">
                    <div class="sec-title centred pb_60">
                        <span class="sub-title mb_14">The Process</span>
                        <h2>How It Works</h2>
                    </div>
                    <div class="row clearfix">
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <div class="process-block-one">
                                    <div class="inner-box">
                                        <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                        <span class="count-text">1</span>
                                        <h3>Sign up, It's Free!</h3>
                                        <p>Our team will set up your account and help you build job to  easy-to-use web dashboard.</p>
                                    </div>
                                </div>
                                <div class="process-block-one">
                                    <div class="inner-box">
                                        <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                        <span class="count-text">2</span>
                                        <h3>Find best Deals and Invest</h3>
                                        <p>Create and Trade anywhere from 1-100% openings with just a few clicks. customize your own.</p>
                                    </div>
                                </div>
                                <div class="process-block-one">
                                    <div class="inner-box">
                                        <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                        <span class="count-text">3</span>
                                        <h3>Get you profit back</h3>
                                        <p>View market, reviews, and rosters before forex arrive on the site, and post reviews and pay, effortlessly.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image image-hov-two"><img src="{{ asset('') }}assets/images/resource/process-1.jpg" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- process-section end -->


        <!-- award-section -->
        <section class="award-section pt_100 pb_100" style="display: none;">
            <div class="auto-container">
                <div class="sec-title centred pb_60">
                    <span class="sub-title mb_14">AWARDED BY THE BEST</span>
                    <h2>Globally Awarded</h2>
                </div>
                <div class="table-outer">
                    <table class="award-table">
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td><h3><a href="{{ asset('') }}index.html">The Best Trading Platform, UK</a></h3></td>
                                <td><span>x1</span></td>
                                <td><figure class="image-box"><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/icons/award-1.png" alt=""></a></figure></td>
                                <td>2023</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td><h3><a href="{{ asset('') }}index.html">Awards Interior Excellence</a></h3></td>
                                <td><span>x3</span></td>
                                <td><figure class="image-box"><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/icons/award-2.png" alt=""></a></figure></td>
                                <td>2017</td>
                            </tr>
                            <tr>
                                <td>03</td>
                                <td><h3><a href="{{ asset('') }}index.html">The Best Trading Platform, UK</a></h3></td>
                                <td><span>x4</span></td>
                                <td><figure class="image-box"><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/icons/award-3.png" alt=""></a></figure></td>
                                <td>2022</td>
                            </tr>
                            <tr>
                                <td>04</td>
                                <td><h3><a href="{{ asset('') }}index.html">Advance HighTechnology Trade</a></h3></td>
                                <td><span>x3</span></td>
                                <td><figure class="image-box"><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/icons/award-4.png" alt=""></a></figure></td>
                                <td>2014</td>
                            </tr>
                            <tr>
                                <td>05</td>
                                <td><h3><a href="{{ asset('') }}index.html">The Best Trading Platform, London</a></h3></td>
                                <td><span>x4</span></td>
                                <td><figure class="image-box"><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/icons/award-5.png" alt=""></a></figure></td>
                                <td>2018</td>
                            </tr>
                        </tbody>    
                    </table>
                </div>
            </div>
        </section>
        <!-- award-section end -->


        <!-- apps-section -->
        <section class="apps-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                    <figure class="image-layer"><img src="{{ asset('') }}assets/images/resource/mockup-1.png" alt=""></figure>
                    <div class="content_block_two">
                        <div class="content-box">
                            <div class="sec-title light pb_40">
                                <span class="sub-title mb_14">Download App</span>
                                <h2>Download Trading App</h2>
                                <p>We use cookines to understand how you use our website and to give you the best possible experience.</p>
                            </div>
                            <ul class="download-list clearfix">
                                <li><a href="{{ asset('') }}index.html"><i class="fab fa-apple"></i></a></li>
                                <li><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/icons/icon-2.png" alt=""></a></li>
                                <li><a href="{{ asset('') }}index.html"><i class="fab fa-android"></i></a></li>
                                <li><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/icons/icon-6.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- apps-section end -->


        <!-- news-section -->
        <section class="news-section pt_100 pb_70">
            <div class="auto-container">
                <div class="sec-title centred pb_60">
                    <span class="sub-title mb_14">Media Center</span>
                    <h2>Latest News Update</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <span class="post-date">20TH April, 2024</span>
                                <h3><a href="{{ asset('') }}blog-details.html">USD/JPY Stages the more upsides can Bulls Aim for 160x Bonus?</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curaitur in euismod odio gravida gravida. Discovery of the text's origin is attributed</p>
                                <div class="link"><a href="{{ asset('') }}blog-details.html">Read More</a></div>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{ asset('') }}assets/images/resource/testimonial-1.png" alt=""></figure>
                                <span>Daniel Marcon</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <span class="post-date">19TH April, 2024</span>
                                <h3><a href="{{ asset('') }}blog-details.html">Nemo's Eurovision win fires up Swiss advocates for non-binary rights</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curaitur in euismod odio gravida gravida. Discovery of the text's origin is attributed</p>
                                <div class="link"><a href="{{ asset('') }}blog-details.html">Read More</a></div>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{ asset('') }}assets/images/resource/testimonial-2.png" alt=""></figure>
                                <span>Robert Henry</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <span class="post-date">18TH April, 2024</span>
                                <h3><a href="{{ asset('') }}blog-details.html">Wall St Week Ahead-Earnings bolster US stocks but crucial inflation report looms</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curaitur in euismod odio gravida gravida. Discovery of the text's origin is attributed</p>
                                <div class="link"><a href="{{ asset('') }}blog-details.html">Read More</a></div>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{ asset('') }}assets/images/resource/testimonial-3.png" alt=""></figure>
                                <span>Victor Classic</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


        <!-- subscribe-section -->
        <section class="subscribe-section">
            <div class="bg-color"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text-box">
                                <h2>Subscribe for latest update</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                            <div class="form-inner">
                                <form method="post" action="https://azim.hostlin.com/Fortradex/contact.html">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                        <button type="submit" class="theme-btn btn-one">Subscribe<i class="icon-26"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->


@endsection