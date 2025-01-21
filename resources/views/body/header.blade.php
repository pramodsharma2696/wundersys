<style>
    /* Default: Hide the 'hideme' class on desktop */
.hideme {
        display: none;
    }

/* Show 'hideme' class on mobile screens */
@media (max-width: 768px) {
    .hideme {
        display: block; /* Makes the hidden elements visible on small screens */
    }

    .hideme a {
        display: inline-block;
        padding: 8px 15px;
        font-weight: 500;
        text-decoration: none;
        color: #333;
    }

    .hideme a:hover {
        color: #007bff; /* Optional hover effect */
    }
}
.header-style-five .main-menu .navigation > li > a {
    border: 1px solid #131615;
    border-radius: 40px;
    padding: 2px 20px;
}
.main-menu .navigation > li {
    margin: 0px 4px;
}
.main-menu .navigation > li.dropdown:hover > ul{
    margin-top: -30px;
}
</style>
<header class="main-header header-style-five">

    <!-- header-lower -->
    <div class="header-lower">
        <div class="large-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="{{ url('/') }}"><img src="{{ asset('') }}assets/img/logo/logo.svg" alt="" class="img-size"></a></figure>
                <div class="menu-area">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light clearfix">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="current dropdown"><a href="{{ url('/') }}">Home</a>
                                <li class="dropdown"><a href="#">Company</a>
                                    <ul>
                                        <li><a href="{{ url('why-choose-us') }}" style="letter-spacing: 0px;">Why Choose Wundersys?</a></li>
                                        <li><a href="{{ url('news') }}">Company News</a></li>
                                        <li><a href="{{ url('security-funds') }}">Security of Funds</a></li>
                                    </ul>
                                </li>
                                </li>
                                </li>
                                <li class="dropdown"><a href="#">Trading</a>
                                    <ul>
                                        <li class="dropdown"><a href="{{ url('forex') }}">Products</a>
                                            <ul>
                                                <li><a href="{{ url('forex') }}">Forex</a></li>
                                                <li><a href="{{ url('commodities') }}">Commodities</a></li>
                                                <li><a href="{{ url('indices') }}">Indices</a></li>
                                                <li><a href="{{ url('cryptocurrencies') }}">Cryptocurrencies</a></li>
                                                <!-- <li><a href="{{ url('us-stocks') }}">US Stocks</a></li> -->
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="#">Accounts</a>
                                            <ul>
                                                <li><a href="{{ url('all-accounts') }}">All Accounts</a></li>
                                                <li><a href="{{ url('standard-account') }}">Standard Account</a></li>
                                                <li><a href="{{ url('ecn-account') }}">ECN Account</a></li>
                                                <li><a href="{{ url('vip-account') }}">VIP Account</a></li>
                                                <li><a href="{{ url('elite-account') }}">ELITE Account</a></li>
                                                <!-- <li><a href="{{ url('primium-account') }}">Premium Account</a></li> -->
                                                <!-- <li><a href="{{ url('open-an-account') }}">Open an Account</a></li> -->
                                                <li><a href="{{ url('funds-withdrawals') }}" style="letter-spacing: 0px;">Funds & Withdrawals</a></li>
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Platform</a>
                                    <ul>
                                        <li><a href="{{ url('mt5-desktop') }}">MT5 Desktop</a></li>
                                        <li><a href="{{ url('mt5-android') }}">MT5 Android</a></li>
                                        <li><a href="{{ url('mt5-ios') }}">MT5 iOS</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown"><a href="#">Knowledge portal</a>
                                    <ul>
                                        <li><a href="{{ url('knowledge-portal') }}#basics" style="letter-spacing: 0px;">Basics of Trading</a></li>
                                        <li><a href="{{ url('knowledge-portal') }}#fa" style="letter-spacing: 0px;">Fundamental analysis</a></li>
                                        <li><a href="{{ url('knowledge-portal') }}#ta" style="letter-spacing: 0px;">Technical analysis</a></li>
                                        <li><a href="{{ url('knowledge-portal') }}#pshyco" style="letter-spacing: 0px;">Trader Psychology</a></li>
                                        <li><a href="{{ url('forex-glossary') }}" style="letter-spacing: 0px;">Traders Glossary</a></li>
                                        <!-- <li><a href="{{ url('cme-group-education') }}" style="letter-spacing: 0px;">CME Group Education</a></li> -->
                                        <!-- <li><a href="{{ url('security-funds') }}">Articles</a></li> -->
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Tools</a>
                                    <ul>
                                        <li><a href="{{ url('/profit-calculator') }}">Profit Calculator</a></li>
                                        <li><a href="{{ url('/margin-calculator') }}" style="letter-spacing: 0px;">Margin Calculator</a></li>
                                        <li><a href="{{ url('/pip-calculator') }}"> Pip Calculator</a></li>
                                        <li><a href="{{ url('/economic-calendar') }}" style="letter-spacing: 0px;">Economic Calendar</a></li>

                                    </ul>
                                </li>
                                <li><a href="{{ url('contact-us') }}">Contact</a></li>
                                <li><a href="{{ url('faq') }}">FAQ</a></li>
                                <li class="hideme"><a href="https://my.wundersyscapital.com/en/auth/sign-in">Log In</a></li>
                                <li class="hideme"><a href="https://my.wundersyscapital.com/en/auth/sign-up">Register</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="menu-right-content">
                    <div class="search-btn mr_25"><a href="https://my.wundersyscapital.com/en/auth/sign-in" class="theme-btn btn-one">Log In</a></div>
                    <div class="btn-box"><a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Register</a></div>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="large-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="{{ url('/') }}"><img src="{{ asset('') }}assets/img/logo/logo.svg" alt="" class="img-size"></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="menu-right-content">
                <div class="search-btn mr_25"><a href="https://my.wundersyscapital.com/en/auth/sign-in" class="theme-btn btn-one">Login</a></div>
                <div class="btn-box"><a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Register</a></div>
                </div>
            </div>
        </div>
    </div>
</header>