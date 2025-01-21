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
        margin-top: 42%;
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
        gap: 20px;
        /* Space between the buttons */
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
        background-color: #36a4cb;
        /* Adjust button color */
        /* border-top: 4px solid #333; */
        text-decoration: none;
        border-radius: 4px;
        transition: background-color 0.3s ease;
    }

    .banner-section .btn-one:hover,
    .banner-section .btn-two:hover {
        background-color: #0056b3;
        /* Adjust hover color */
    }

    .bg-layer video {
        width: 100%;
        height: auto;
        object-fit: cover;
    }

    .account-block-one .inner-box {
        height: 545px !important;
        /* background: #48b2da !important; */
    }

    table.table.table-striped {
        margin-top: -20px;
        width: 310px;
    }

    .trading-block-two .inner-box {
        width: 150% !important;
    }

    .banner-carousel .owl-dots button.active {
        opacity: 0;
    }

    @media (max-width: 768px) {
        .trading-block-two .inner-box {
            width: 236% !important;
        }

        .banner-section .btn-one {
            padding: 6px 30px;
        }

        .content-box1 {
            margin-top: 49%;
            margin-bottom: -65px;
        }

        .banner-carousel .slide-item {
            padding: 30px 30px;
        }

        .banner-carousel .owl-dots button.active {
            opacity: 0;
        }
        .hideme{
            display: none;
        }
    }

    /* .header-value {
    margin-left: 64px;
} */

    .page-link {
        padding: 0px 12px;
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
                        <a href="/register" class="theme-btn btn-one">Register</a>
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
                            "proName": "BITSTAMP:LTCUSD",
                            "title": "Litecoin"
                        },
                        {
                            "proName": "OANDA:XAUUSD",
                            "title": "Gold Spot"
                        },
                        {
                            "proName": "FX_IDC:AUDUSD",
                            "title": "AUD to USD"
                        },
                        {
                            "proName": "FX_IDC:GBPUSD",
                            "title": "GBP to USD"
                        },
                        {
                            "proName": "FX_IDC:USDJPY",
                            "title": "USD to JPY"
                        },



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
    <div class="auto-container" style="max-width:1500px !important;">
        <div class="sec-title pb_60 centred">
            <span class="sub-title mb_14">Accounts</span>
            <h2>Wundersys Capital Limited Trading Accounts</h2>
        </div>
        <div class="table-responsive wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
        <table class="table table-bordered table-stripped">
            <thead>
                <tr class="text-center" style="background: #3caed5;">
                    <th></th>
                    <th>
                        <h6 class="mb-3">Account</h6>
                        <h5>Standard</h5>
                    </th>
                    <th>
                        <h6 class="mb-3">Account</h6>
                        <h5>ECN</h5>
                    </th>
                    <th>
                        <h6 class="mb-3">Account</h6>
                        <h5>VIP</h5>
                    </th>
                    <th>
                        <h6 class="mb-3">Account</h6>
                        <h5>Elite</h5>
                    </th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>Initial Deposit</strong></td>
                    <td class="text-center">Min $100</td>
                    <td class="text-center">Min $500</td>
                    <td class="text-center">Min $5000</td>
                    <td class="text-center">Min $25000</td>
                </tr>
                <tr>
                    <td><strong>Leverage</strong></td>
                    <td class="text-center">to 1:100</td>
                    <td class="text-center">to 1:100</td>
                    <td class="text-center">to 1:100</td>
                    <td class="text-center">to 1:100</td>
                </tr>
                <tr>
                    <td><strong>Lot Size</strong></td>
                    <td class="text-center">0.01 Lot</td>
                    <td class="text-center">0.01 Lot</td>
                    <td class="text-center">0.01 Lot</td>
                    <td class="text-center">0.01 Lot</td>
                </tr>
                <tr>
                    <td><strong>Spread</strong></td>
                    <td class="text-center">1.5 pips</td>
                    <td class="text-center">1 pips</td>
                    <td class="text-center">0.2 pips</td>
                    <td class="text-center">0.8 pips</td>
                </tr>
                <tr>
                    <td><strong>Swap</strong></td>
                    <td class="text-center">Applied</td>
                    <td class="text-center">Applied</td>
                    <td class="text-center">Applied</td>
                    <td class="text-center">Free</td>
                </tr>
                <tr>
                    <td><strong>Scalping & Hedging</strong></td>
                    <td class="text-center">Permitted</td>
                    <td class="text-center">Permitted</td>
                    <td class="text-center">Permitted</td>
                    <td class="text-center">Permitted</td>
                </tr>
                <tr>
                    <td><strong>Commission</strong></td>
                    <td class="text-center">No commission</td>
                    <td class="text-center">No commission</td>
                    <td class="text-center">$7 per lot</td>
                    <td class="text-center">No</td>
                </tr>
                <tr>
                    <td><strong>Margin Call, Stop out</strong></td>
                    <td class="text-center">100% & 30%</td>
                    <td class="text-center">100% & 30%</td>
                    <td class="text-center">100% & 30%</td>
                    <td class="text-center">100% & 30%</td>
                </tr>
                <tr class="text-center hideme">
                    <td><strong></strong></td>
                    <td><a href="#" class="theme-btn btn-sm btn-one">Open An Account <i class="bi bi-arrow-right"></i></a></td>
                    <td><a href="#" class="theme-btn btn-sm btn-one">Open An Account <i class="bi bi-arrow-right"></i></a></td>
                    <td><a href="#" class="theme-btn btn-sm btn-one">Open An Account <i class="bi bi-arrow-right"></i></a></td>
                    <td><a href="#" class="theme-btn btn-sm btn-one">Open An Account <i class="bi bi-arrow-right"></i></a></td>
                </tr>
            </tbody>

        </table>
        </div>
    </div>
</section>
<!-- account-section -->


<!-- about-section -->

<section class="about-section pt_100 pb_100" style="display: none;">
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
                                        <p>Wundersys Capital Limited offers access to cutting-edge trading platforms, including industry favorites like MetaTrader 5. Our commitment to low-latency connectivity ensures lightning-fast execution of your trades. Coupled with superior liquidity, you can experience seamless trading with minimal slippage.</p>
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
                    <p>One of the primary methods of Crypto trading is through the spot.</p>
                    <div class="btn-box"><a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Start Trading Now</a></div>
                </div>
            </div>
            <div class="trading-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-2.png" alt=""></figure>
                    <h3><a href="https://my.wundersyscapital.com/en/auth/sign-up">Shares Trading</a></h3>
                    <p>One of the primary methods of Shares trading is through the spot.</p>
                    <div class="btn-box"><a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Start Trading Now</a></div>
                </div>
            </div>
            <div class="trading-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-3.png" alt=""></figure>
                    <h3><a href="https://my.wundersyscapital.com/en/auth/sign-up">Gold Trading</a></h3>
                    <p>One of the primary methods of Gold trading is through the spot.</p>
                    <div class="btn-box"><a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Start Trading Now</a></div>
                </div>
            </div>
            <div class="trading-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-4.png" alt=""></figure>
                    <h3><a href="https://my.wundersyscapital.com/en/auth/sign-up">Currency Trading</a></h3>
                    <p>One of the primary methods of Currency trading is through the spot</p>
                    <div class="btn-box"><a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Start Trading Now</a></div>
                </div>
            </div>
            <div class="trading-block-one">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{ asset('') }}assets/images/resource/trading-5.png" alt=""></figure>
                    <h3><a href="https://my.wundersyscapital.com/en/auth/sign-up">Silver Trading</a></h3>
                    <p>One of the primary methods of Silver trading is through the spot.</p>
                    <div class="btn-box"><a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Start Trading Now</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- trading-section end -->
<!-- trading-section end -->
<section class="trading-style-two centred pt-5 pb-4">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-2.png);"></div>
    <div class="container">
        <div class="sec-title text-center text-light mb-4">
            <span class="sub-title d-block mb-2">Trade Now</span>
            <h2 style="color: #fff;">Forex Market Spreads</h2>
        </div>
        <div class="project-tab">
            <div class="p-tabs-content">
                <div class="p-tab active-tab" id="tab-1">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>Instrument</th>
                                        <th>Ask</th>
                                        <th>Bid</th>
                                        <th>Spread</th>
                                        <th>Convert %</th>
                                        <th>Graph</th>
                                    </tr>
                                </thead>
                                <tbody class="trading-table-body">
                                    <!-- Trading rows will be dynamically added here -->
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex justify-content-center">
                            <nav>
                                <ul class="pagination">
                                    <!-- Pagination buttons will be dynamically added here -->
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



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
                            <p>Our team will set up your account and help you build job to easy-to-use web dashboard.</p>
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
@push('scripts')
<script>
    $(document).ready(function() {
    const allowedSymbols = [
        "AUDCAD", "AUDCHF", "AUDJPY", "AUDNZD", "AUDUSD", "CADCHF", "CADJPY", "CHFJPY", "EURAUD",
        "EURCAD", "EURCHF", "EURGBP", "EURJPY", "EURNOK", "EURNZD", "EURSEK", "EURUSD", "GBPAUD",
        "GBPCAD", "GBPCHF", "GBPJPY", "GBPNZD", "GBPUSD", "NZDCAD", "NZDCHF", "NZDJPY", "NZDUSD",
        "USDCAD", "USDCHF", "USDCNH", "USDHKD", "USDJPY", "USDMXN", "USDNOK", "USDSEK", "USDZAR",
    ];

    const itemsPerPage = 5;
    let tradingData = [];
    let currentPage = 1;

    // Load previous prices from localStorage or initialize an empty object
    let previousPrices = JSON.parse(localStorage.getItem('previousPrices')) || {};

    // Function to create the graph as an image based on percentChange
    function createImageGraph(symbol, percentChange) {
        const imageContainer = $(`#graph-${symbol}`);
        const isUp = percentChange > 0;
        const imageUrl = isUp ?
            "https://www.markets.com/chartpngv2/eurcad-up.png" : // Green graph for uptrend
            "https://www.markets.com/chartpngv2/eurcad-down.png"; // Red graph for downtrend
        const altText = isUp ? "Upward Trend" : "Downward Trend";

        // Set the image source and visibility based on percentChange
        imageContainer.html(`
            <img class="change-graph" onerror="this.style.opacity='0'" 
                 src="${imageUrl}" loading="lazy" height="25" alt="${altText}">
        `);
    }

    const renderTable = () => {
        const startIndex = (currentPage - 1) * itemsPerPage;
        const endIndex = startIndex + itemsPerPage;
        const visibleData = tradingData.slice(startIndex, endIndex);

        const tableBody = $(".trading-table-body");
        tableBody.empty();

        visibleData.forEach(({
            symbol,
            ask,
            bid,
            spread,
            percentChange
        }) => {
            const formattedSymbol = symbol.slice(0, 3) + "/" + symbol.slice(3);

            const newRow = `
                <tr>
                    <td>${formattedSymbol}</td>
                    <td class="text-center">${ask}</td>
                    <td class="text-center">${bid}</td>
                    <td class="text-center">${spread}</td>
                    <td class="text-center">${percentChange}%</td>
                    <td class="text-center" style="width: 80px; height: 25px;" id="graph-${symbol}">
                        <!-- Placeholder for image graph -->
                    </td>
                </tr>`;
            tableBody.append(newRow);

            createImageGraph(symbol, parseFloat(percentChange));
        });

        renderPagination();
    };

    const renderPagination = () => {
        const totalPages = Math.ceil(tradingData.length / itemsPerPage);
        const paginationContainer = $(".pagination");
        paginationContainer.empty();

        for (let i = 1; i <= totalPages; i++) {
            const pageButton = `<li class="page-item ${i === currentPage ? 'active' : ''}"><a class="page-link" href="#" data-page="${i}">${i}</a></li>`;
            paginationContainer.append(pageButton);
        }
    };

    $(document).on("click", ".page-link", function(e) {
        e.preventDefault();
        currentPage = parseInt($(this).data("page"), 10);
        renderTable();
    });

    const server = {
        connect: function() {
            const location = "wss://quotes.fx-edge.com/wsquotes/servlet/WebSocket";
            this._ws = new WebSocket(location);
            this._ws.onopen = this._onopen;
            this._ws.onmessage = this._onmessage.bind(this);
            this._ws.onclose = this._onclose.bind(this);
        },
        _onopen: function() {
            console.log("WebSocket connection established.");
        },
        _onmessage: function(event) {
            try {
                const content = JSON.parse(event.data);
                if (content.type === "PricesAndOrderBook") {
                    this.updateTradingData(content);
                }
            } catch (error) {
                console.error("Error processing WebSocket message:", error);
            }
        },
        _onclose: function() {
            console.log("WebSocket connection closed. Reconnecting...");
            setTimeout(() => this.connect(), 1000);
        },
        updateTradingData: function(content) {
            const {
                symbol,
                decimalPlaces,
                bidPrice,
                askPrice
            } = content;
            if (!allowedSymbols.includes(symbol)) return;

            const spread = askPrice - bidPrice;
            const percentChange = ((askPrice - bidPrice) / bidPrice) * 100; // Calculate percentage change
            const formattedAsk = (askPrice / Math.pow(10, decimalPlaces)).toFixed(decimalPlaces);
            const formattedBid = (bidPrice / Math.pow(10, decimalPlaces)).toFixed(decimalPlaces);
            const formattedSpread = (spread / Math.pow(10, decimalPlaces)).toFixed(decimalPlaces);
            const formattedPercentChange = percentChange.toFixed(2);

            // Determine the arrow direction for ask and bid prices
            const prevAsk = previousPrices[symbol]?.ask || askPrice;
            const prevBid = previousPrices[symbol]?.bid || bidPrice;
            const askArrow = askPrice > prevAsk ? `<span style="color:green;">↑</span>` :
                askPrice < prevAsk ? `<span style="color:red;">↓</span>` : "";
            const bidArrow = bidPrice > prevBid ? `<span style="color:green;">↑</span>` :
                bidPrice < prevBid ? `<span style="color:red;">↓</span>` : "";

            // Update previous prices
            previousPrices[symbol] = {
                ask: askPrice,
                bid: bidPrice
            };

            // Store the updated prices in localStorage for persistence
            localStorage.setItem('previousPrices', JSON.stringify(previousPrices));

            const existingIndex = tradingData.findIndex((item) => item.symbol === symbol);
            if (existingIndex !== -1) {
                tradingData[existingIndex] = {
                    symbol,
                    ask: `${formattedAsk} ${askArrow}`, // Add arrow to ask
                    bid: `${formattedBid} ${bidArrow}`, // Add arrow to bid
                    spread: formattedSpread,
                    percentChange: formattedPercentChange
                };
            } else {
                tradingData.push({
                    symbol,
                    ask: `${formattedAsk} ${askArrow}`, // Add arrow to ask
                    bid: `${formattedBid} ${bidArrow}`, // Add arrow to bid
                    spread: formattedSpread,
                    percentChange: formattedPercentChange
                });
            }

            renderTable();
        },
    };

    server.connect();
});

</script>
@endpush

@endsection