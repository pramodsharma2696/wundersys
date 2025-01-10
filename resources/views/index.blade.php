@extends('master')
@section('contents')
<style>
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
    .content-box1 {
        position: relative;
        z-index: 2;
        padding: 20px;
        max-width: 650px;
        margin: 0;
        text-align: left;
        /* Align text to the left */
        color: #fff;
    }

    /* Align content box to the left */
    .content-box1 {
        left: -4%;
        /* Adjust percentage as needed for spacing */
        margin-top: 48%;
        transform: translateY(-50%);
    }
.banner-section .content-box1 {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
}

.banner-section .btn-box {
    display: flex;
    gap: 20px; /* Space between the buttons */
    justify-content: center;
    align-items: center;
}

.banner-section .btn-one,
.banner-section .btn-two {
    display: inline-block;
    padding: 12px 60px;
    font-size: 16px;
    font-weight: 600;
    color: #fff;
    background-color: #36a4cb; /* Adjust button color */
    text-decoration: none;
    border-radius: 4px;
    transition: background-color 0.3s ease;
}

.banner-section .btn-one:hover,
.banner-section .btn-two:hover {
    background-color: #0056b3; /* Adjust hover color */
}

.bg-layer video {
    width: 100%;
    height: auto;
    object-fit: cover;
}
.account-block-one .inner-box{
    height: 620px !important;
/* background: #48b2da !important; */
}
</style>

<!-- banner-section -->
<section class="banner-section p_relative">
    <div class="large-container">
        <div class="banner-carousel owl-theme owl-carousel owl-nav-none">
            <div class="slide-item p_relative">
                <div class="bg-layer">
                    <video autoplay loop muted playsinline class="video-bg">
                        <source src="{{ asset('') }}assets/img/wc.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="content-box1 p_relative">
                    <div class="btn-box">
                        <a href="/login" class="theme-btn btn-one">Login</a>
                        <a href="/register" class="theme-btn btn-two">Register</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner-section end -->






<!-- clients-section -->
<section class="clients-section">
    <div class="large-container">
        <div class="tradingview-widget-container" style="width: 100%; height: 100px;">
            <div class="tradingview-widget-container__widget"></div>

            <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-ticker-tape.js" async>
                {
                    "symbols": [{
                            "proName": "FX_IDC:GBPUSD",
                            "title": "GBP to USD"
                        },
                        {
                            "proName": "FX_IDC:USDJPY",
                            "title": "USD to JPY"
                        },
                        {
                            "proName": "FX_IDC:AUDUSD",
                            "title": "AUD to USD"
                        },
                        {
                            "proName": "OANDA:XAUUSD",
                            "title": "Gold Spot"
                        },
                        {
                            "proName": "BITSTAMP:LTCUSD",
                            "title": "Litecoin"
                        }
                    ],
                    "showSymbolLogo": true,
                    "isTransparent": false,
                    "displayMode": "adaptive",
                    "colorTheme": "light",
                    "locale": "en"
                }
            </script>
        </div>
    </div>
</section>
<!-- clients-section end -->


<!-- account-section -->
<section class="account-section pt_100 pb_100">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
    <div class="auto-container" style="max-width: 1600px !important;">
        <div class="sec-title pb_60 centred">
            <span class="sub-title mb_14">Accounts</span>
            <h2>Wundersys Capital Limited Trading Accounts</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                <div class="account-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <!-- <div class="icon-box" style="background: none;"><img src="{{ asset('')}}assets/image/a1.png" alt="Standard Account"></div> -->
                        <h3><a href="{{ url('/standard-account') }}">Standard Account</a></h3><br>
                        <div class="content-box">
                            <ul class="list-item clearfix">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>Initial Deposit</th>
                                            <td>Minimum $100</td>
                                        </tr>
                                        <tr>
                                            <th>Leverage</th>
                                            <td>to 1:100</td>
                                        </tr>
                                        <tr>
                                            <th>Lot Size</th>
                                            <td>Trade Size of 0.01 Lot</td>
                                        </tr>
                                        <tr>
                                            <th>Spread</th>
                                            <td>Start from 2 pips</td>
                                        </tr>
                                        <tr>
                                            <th>Scalping & Hedging</th>
                                            <td>Permitted</td>
                                        </tr>
                                        <tr>
                                            <th>Commission</th>
                                            <td>No commission</td>
                                        </tr>
                                        <tr>
                                            <th>Margin Call & Stop out</th>
                                            <td>Set at 100% &
                                            30% Respectively</td>
                                        </tr>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" class="text-center">
                                                <a href="#" class="theme-btn btn-one mr_10">Open An Account <i class="bi bi-arrow-right"></i></a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                <div class="account-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <!-- <div class="icon-box" style="background: none;"><img src="{{ asset('')}}assets/image/a2.png" alt="ECN Account"></div> -->
                        <h3><a href="{{ url('/standard-account') }}">ECN Account</a></h3><br>
                        <div class="content-box">
                            <ul class="list-item clearfix">
                                <table class="table table-striped">
                                <tbody>
                                        <tr>
                                            <th>Initial Deposit</th>
                                            <td>Minimum $500</td>
                                        </tr>
                                        <tr>
                                            <th>Leverage</th>
                                            <td>to 1:100</td>
                                        </tr>
                                        <tr>
                                            <th>Lot Size</th>
                                            <td>Trade Size of 0.01 Lot</td>
                                        </tr>
                                        <tr>
                                            <th>Spread</th>
                                            <td>Start from 1 pips</td>
                                        </tr>
                                        <tr>
                                            <th>Scalping & Hedging</th>
                                            <td>Permitted</td>
                                        </tr>
                                        <tr>
                                            <th>Commission</th>
                                            <td>No commission</td>
                                        </tr>
                                        <tr>
                                            <th>Margin Call & Stop out</th>
                                            <td>Set at 100% &
                                            30% Respectively</td>
                                        </tr>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <td colspan="2" class="text-center">
                                                <a href="#" class="theme-btn btn-one mr_10">Open An Account <i class="bi bi-arrow-right"></i></a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                <div class="account-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <!-- <div class="icon-box" style="background: none;"><img src="{{ asset('')}}assets/image/a2.png" alt="VIP Account"></div> -->
                        <h3><a href="{{ url('/standard-account') }}">VIP Account</a></h3><br>
                        <div class="content-box">
                            <ul class="list-item clearfix">
                                <table class="table table-striped">
                                <tbody>
                                        <tr>
                                            <th>Initial Deposit</th>
                                            <td>Minimum $5000</td>
                                        </tr>
                                        <tr>
                                            <th>Leverage</th>
                                            <td>to 1:100</td>
                                        </tr>
                                        <tr>
                                            <th>Lot Size</th>
                                            <td>Trade Size of 0.01 Lot</td>
                                        </tr>
                                        <tr>
                                            <th>Spread</th>
                                            <td>Start from 0.2 pips</td>
                                        </tr>
                                        <tr>
                                            <th>Scalping & Hedging</th>
                                            <td>Permitted</td>
                                        </tr>
                                        <tr>
                                            <th>Commission</th>
                                            <td>7$ per lot</td>
                                        </tr>
                                        <tr>
                                            <th>Margin Call & Stop out</th>
                                            <td>Set at 100% &
                                            30% Respectively</td>
                                        </tr>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <td colspan="2" class="text-center">
                                                <a href="#" class="theme-btn btn-one mr_10">Open An Account <i class="bi bi-arrow-right"></i></a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                <div class="account-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <!-- <div class="icon-box" style="background: none;"><img src="{{ asset('')}}assets/image/a2.png" alt="VIP Account"></div> -->
                        <h3><a href="{{ url('/standard-account') }}">ELITE Account</a></h3><br>
                        <div class="content-box">
                            <ul class="list-item clearfix">
                                <table class="table table-striped">
                                <tbody>
                                        <tr>
                                            <th>Initial Deposit</th>
                                            <td>Minimum $25000</td>
                                        </tr>
                                        <tr>
                                            <th>Leverage</th>
                                            <td>to 1:100</td>
                                        </tr>
                                        <tr>
                                            <th>Lot Size</th>
                                            <td>Trade Size of 0.01 Lot</td>
                                        </tr>
                                        <tr>
                                            <th>Spread</th>
                                            <td>Start from 0.2 pips</td>
                                        </tr>
                                        <tr>
                                            <th>Swap</th>
                                            <td>Free</td>
                                        </tr>
                                        <tr>
                                            <th>Scalping & Hedging</th>
                                            <td>Permitted</td>
                                        </tr>
                                        <tr>
                                            <th>Commission</th>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <th>Margin Call & Stop out</th>
                                            <td>Set at 100% &
                                            30% Respectively</td>
                                        </tr>
                                        
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <td colspan="2" class="text-center">
                                                <a href="#" class="theme-btn btn-one mr_10">Open An Account <i class="bi bi-arrow-right"></i></a>
                                            </td>
                                        </tr>
                                    </tfoot>
                                </table>
                                </table>
                            </ul>
                        </div>
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
                                        <p>we believe in empowering traders. Our platform provides the tools and resources you need to succeed, no matter where you are in your trading journey. Whether you're a seasoned professional or just starting out, we're here to support you every step of the way.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-box"><i class="icon-29"></i></div>
                                    <h3>Our Vision</h3>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p>Wundersys Capital Limited was founded with the vision of closing the gap between retail and institutional traders. We provide access to institutional-grade pricing and advanced trading tools, previously reserved for high-net-worth individuals and investment banks.</p>
                                     </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-box"><i class="icon-29"></i></div>
                                    <h3>A Team with Global Experience</h3>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p>Our leadership team brings decades of experience in the Forex, CFD, and Equity markets across the globe. They leverage this expertise to curate the best technology solutions and partner with top-tier pricing providers, ensuring a superior experience for every Wundersys Capital Limited trader.</p>
                                    </div>
                                </div>
                            </li>
                            <li class="accordion block">
                                <div class="acc-btn">
                                    <div class="icon-box"><i class="icon-29"></i></div>
                                    <h3>Excellent Technology & Execution</h3>
                                </div>
                                <div class="acc-content">
                                    <div class="content">
                                        <p>Wundersys Capital Limited offers access to cutting-edge trading platforms, including industry favorites like MetaTrader 4 and MetaTrader 5. Our commitment to low-latency connectivity ensures lightning-fast execution of your trades. Coupled with superior liquidity, you can experience seamless trading with minimal slippage.</p>
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
                    <h3><a href="https://my.wundersyscapital.com/en/auth/sign-up">Crypto Trading</a></h3>
                    <p>One of the primary methods of gold trading is through the spot</p>
                    <div class="btn-box"><a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Start Trading Now</a></div>
                </div>
            </div>
            <div class="trading-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-2.png" alt=""></figure>
                    <h3><a href="https://my.wundersyscapital.com/en/auth/sign-up">Shares Trading</a></h3>
                    <p>One of the primary methods of gold trading is through the spot</p>
                    <div class="btn-box"><a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Start Trading Now</a></div>
                </div>
            </div>
            <div class="trading-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-3.png" alt=""></figure>
                    <h3><a href="https://my.wundersyscapital.com/en/auth/sign-up">Gold Trading</a></h3>
                    <p>One of the primary methods of gold trading is through the spot</p>
                    <div class="btn-box"><a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Start Trading Now</a></div>
                </div>
            </div>
            <div class="trading-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-4.png" alt=""></figure>
                    <h3><a href="https://my.wundersyscapital.com/en/auth/sign-up">Currency Trading</a></h3>
                    <p>One of the primary methods of gold trading is through the spot</p>
                    <div class="btn-box"><a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Start Trading Now</a></div>
                </div>
            </div>
            <div class="trading-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-5.png" alt=""></figure>
                    <h3><a href="https://my.wundersyscapital.com/en/auth/sign-up">Silver Trading</a></h3>
                    <p>One of the primary methods of gold trading is through the spot</p>
                    <div class="btn-box"><a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Start Trading Now</a></div>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64191</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64171</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>12</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64156</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64276</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>09</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.64578</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64228</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>17</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84535</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64589</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>15</span>
                                    </li>
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
                                    <li>
                                        <h6>Ask</h6><span>0.84346</span>
                                    </li>
                                    <li>
                                        <h6>Bid</h6><span>0.64514</span>
                                    </li>
                                    <li>
                                        <h6>Spread</h6><span>13</span>
                                    </li>
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
<section class="process-section pt_100 pb_70">
            <div class="auto-container">
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
                            <figure class="image image-hov-two"><img src="assets/image/how-it-works.png" style="width: 318px;height: auto;margin-left: 200px;" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- process-section end -->


<!-- award-section -->

<!-- award-section end -->


<!-- apps-section -->
<section class="apps-section pb_70">
    <div class="auto-container">
        <div class="inner-container">
            <div class="shape" style="background-image: url(assets/images/shape/shape-4.png);"></div>
            <figure class="image-layer"><img src="{{ asset('') }}assets/image/download-light.png" style="width:455px;height: auto;margin-bottom:25px" alt=""></figure>
            <div class="content_block_two">
                <div class="content-box">
                    <div class="sec-title light pb_40">
                        <span class="sub-title mb_14">Download App</span>
                        <h2>Download Trading App</h2>
                        <p>We use cookines to understand how you use our website and to give you the best possible experience.</p>
                    </div>
                    <ul class="download-list clearfix">
                        <li><a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=WundersysCapital-Live"><i class="fab fa-apple"></i></a></li>
                        <li><a href="https://download.mql5.com/cdn/web/wundersys.capital.limited/mt5/wundersyscapital5setup.exe"><img src="{{ asset('') }}assets/images/icons/icon-2.png" alt=""></a></li>
                        <li><a href="https://download.mql5.com/cdn/mobile/mt5/android?server=WundersysCapital-Live"><i class="fab fa-android"></i></a></li>
                        <!-- <li><a href="{{ asset('') }}index.html"><img src="{{ asset('') }}assets/images/icons/icon-6.png" alt=""></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- apps-section end -->


<!-- news-section -->

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