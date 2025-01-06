<header class="main-header header-style-one">
    <!-- header-top -->
    <div class="header-top">
        <div class="large-container">
            <div class="top-inner">
                <div class="support-box">
                    <div class="icon-box"><i class="icon-07"></i></div>
                    <a href="{{ asset('') }}tel:912345678">912345 678</a>
                </div>
                <div class="option-block">
                    <!-- <div class="language-picker js-language-picker mr_40" data-trigger-class="btn btn--subtle">
                        <form action="https://azim.hostlin.com/Fortradex/index-2.html" class="language-picker__form">
                            <label for="language-picker-select">Select your language</label>
                            <select name="language-picker-select" id="language-picker-select">
                                <option lang="de" value="deutsch"></option>
                                <option lang="en" value="english" selected></option>
                                <option lang="fr" value="francais"></option>
                                <option lang="it" value="italiano"></option>
                            </select>
                        </form>
                    </div> -->
                    <a href="#" class="theme-btn btn-one mr_10">Open Demo Account</a>
                    <a href="#" class="theme-btn btn-one mr_10">Open Live Account</a>
                    <a href="#" class="theme-btn btn-two">Log In</a>
                </div>
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="large-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="{{ url('/') }}"><img src="{{ asset('') }}assets/img/logo/logo1.jpg" alt="" class="img-size" style="width:140px"></a></figure>
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
                                <li class="current dropdown"><a href="{{ asset('') }}index.html">Home</a>                                </li>
                                <li class="dropdown"><a href="#">Trading</a>
                                    <ul>
                                        <li class="dropdown"><a href="{{ url('forex') }}">Instruments</a>
                                            <ul>
                                                <li><a href="{{ url('forex') }}">Forex</a></li>
                                                <li><a href="{{ url('equities') }}">Equities</a></li>
                                                <li><a href="{{ url('indices') }}">Indices</a></li>
                                                <li><a href="{{ url('commodities') }}">Commodities</a></li>
                                                <li><a href="{{ url('cryptocurrencies') }}">Cryptocurrencies</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ url('account') }}">Account Types</a>
                                            <ul>
                                                <li><a href="{{ url('account#std_account') }}">Standard Account</a></li>
                                                <li><a href="{{ url('account#prime_account') }}">Prime Account</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ url('account') }}">Platform</a>
                                            <ul>
                                                <li><a href="{{ url('metatrader5') }}"> MetaTrader 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ url('tools') }}">Tools</a>
                                            <ul>
                                                <li><a href="{{ url('tools#Autochartist') }}">Autochartist </a></li>
                                                <li><a href="{{ url('tools#vps') }}">VPS</a></li>
                                                <li><a href="{{ url('tools#mql5') }}">MQL 5</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown"><a href="{{ url('conditions') }}">Conditions</a>
                                            <ul>
                                                <li><a href="{{ url('conditions#leverage') }}">Leverage </a></li>
                                                <li><a href="{{ url('conditions#swaps') }}">Swaps</a></li>
                                                <li><a href="{{ url('conditions#rollovers') }}">Rollovers</a></li>
                                                <li><a href="{{ url('conditions#dividends') }}">Dividends</a></li>
                                                <li><a href="{{ url('conditions#market') }}">Market Notifications</a></li>
                                                <li><a href="{{ url('conditions#product') }}">Product Information</a></li>
                                            </ul>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="{{ url('about-us') }}">Company</a>
                                    <ul>
                                        <li><a href="{{ url('about-us') }}#about_company">About Company</a></li>
                                        <li><a href="{{ url('about-us') }}#our_brand">Our Brand Values</a></li>
                                        <li><a href="{{ url('about-us') }}#3step">3 Step Process</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{ url('contact-us') }}">Contact</a></li>
						        <li><a href="{{ url('FAQ') }}">FAQ</a></li>
                            </ul>
                        </div>
                    </nav>
                    <div class="search-btn ml_30"><button class="search-toggler"><i class="icon-10"></i></button></div>
                </div>
            </div>
        </div>
    </div>
    <!-- header-bottom -->
    <div class="header-bottom">
        <div class="large-container">
            <div class="bottom-inner">
                <div class="inner-box">
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
                <!-- <div class="inner-box">
                            <ul class="stock-list">
                                <li class="upper">US30 394833.90 <span>(+0.93 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391323.90 <span>(-0.12 <i class="icon-05"></i>)</span></li>
                                <li class="lower">US30 391467.90 <span>(-0.35 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 354033.90 <span>(+0.55 <i class="icon-06"></i>)</span></li>
                                <li class="upper">US30 394346.90 <span>(+0.76 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391300.90 <span>(-0.43 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 394833.90 <span>(+0.93 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391323.90 <span>(-0.12 <i class="icon-05"></i>)</span></li>
                                <li class="lower">US30 391467.90 <span>(-0.35 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 354033.90 <span>(+0.55 <i class="icon-06"></i>)</span></li>
                                <li class="upper">US30 394346.90 <span>(+0.76 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391300.90 <span>(-0.43 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 394833.90 <span>(+0.93 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391323.90 <span>(-0.12 <i class="icon-05"></i>)</span></li>
                                <li class="lower">US30 391467.90 <span>(-0.35 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 354033.90 <span>(+0.55 <i class="icon-06"></i>)</span></li>
                                <li class="upper">US30 394346.90 <span>(+0.76 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391300.90 <span>(-0.43 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 394833.90 <span>(+0.93 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391323.90 <span>(-0.12 <i class="icon-05"></i>)</span></li>
                                <li class="lower">US30 391467.90 <span>(-0.35 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 354033.90 <span>(+0.55 <i class="icon-06"></i>)</span></li>
                                <li class="upper">US30 394346.90 <span>(+0.76 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391300.90 <span>(-0.43 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 394833.90 <span>(+0.93 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391323.90 <span>(-0.12 <i class="icon-05"></i>)</span></li>
                                <li class="lower">US30 391467.90 <span>(-0.35 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 354033.90 <span>(+0.55 <i class="icon-06"></i>)</span></li>
                                <li class="upper">US30 394346.90 <span>(+0.76 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391300.90 <span>(-0.43 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 394833.90 <span>(+0.93 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391323.90 <span>(-0.12 <i class="icon-05"></i>)</span></li>
                                <li class="lower">US30 391467.90 <span>(-0.35 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 354033.90 <span>(+0.55 <i class="icon-06"></i>)</span></li>
                                <li class="upper">US30 394346.90 <span>(+0.76 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391300.90 <span>(-0.43 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 394833.90 <span>(+0.93 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391323.90 <span>(-0.12 <i class="icon-05"></i>)</span></li>
                                <li class="lower">US30 391467.90 <span>(-0.35 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 354033.90 <span>(+0.55 <i class="icon-06"></i>)</span></li>
                                <li class="upper">US30 394346.90 <span>(+0.76 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391300.90 <span>(-0.43 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 394833.90 <span>(+0.93 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391323.90 <span>(-0.12 <i class="icon-05"></i>)</span></li>
                                <li class="lower">US30 391467.90 <span>(-0.35 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 354033.90 <span>(+0.55 <i class="icon-06"></i>)</span></li>
                                <li class="upper">US30 394346.90 <span>(+0.76 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391300.90 <span>(-0.43 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 394833.90 <span>(+0.93 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391323.90 <span>(-0.12 <i class="icon-05"></i>)</span></li>
                                <li class="lower">US30 391467.90 <span>(-0.35 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 354033.90 <span>(+0.55 <i class="icon-06"></i>)</span></li>
                                <li class="upper">US30 394346.90 <span>(+0.76 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391300.90 <span>(-0.43 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 394833.90 <span>(+0.93 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391323.90 <span>(-0.12 <i class="icon-05"></i>)</span></li>
                                <li class="lower">US30 391467.90 <span>(-0.35 <i class="icon-05"></i>)</span></li>
                                <li class="upper">US30 354033.90 <span>(+0.55 <i class="icon-06"></i>)</span></li>
                                <li class="upper">US30 394346.90 <span>(+0.76 <i class="icon-06"></i>)</span></li>
                                <li class="lower">US30 391300.90 <span>(-0.43 <i class="icon-05"></i>)</span></li>
                            </ul>
                        </div> -->
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="large-container">
            <div class="outer-box">
                <figure class="logo-box"><a href="{{ url('/') }}"><img src="{{ asset('') }}assets/img/logo/logo5.jpg" alt="" class="img-size"></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <div class="search-btn ml_30"><button class="search-toggler"><i class="icon-10"></i></button></div>
                </div>
            </div>
        </div>
    </div>
</header>