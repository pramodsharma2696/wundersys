@extends('master')
@section('contents')
<style>
    .android-img{
        width:640px !important;
        max-width: none;
    }
    @media (max-width: 768px) {
            .android-img{
            width:350px !important;
            max-width: none;
        }
    }
</style>
<!-- Page Title -->
<section class="page-title centred pt_90 pb_0">
    <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>MT5 Trading Platform</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>MT5</li>
            </ul>
        </div>
    </div>
</section>

<!-- MT5 for Android -->
<section id="android" class="account-style-three pt_100 pb_70">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 inner-column order-lg-2">
                <figure class="image-box">
                    <img src="{{ asset('')}}assets/mt5/android.png" class="android-img" alt="MT5 Android">
                </figure>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_eight">
                    <div class="content-box ml_60">
                        <div class="sec-title pb_20">
                            <h2>MT5 for Android</h2>
                            <p>Stay connected and trade on-the-go with MT5 for Android. Enjoy seamless trading at your fingertips.</p>
                        </div>
                        <ul class="list-style-one mb_40 clearfix">
                            <li>Trade anytime, anywhere with real-time quotes and charts.</li>
                            <li>Manage your accounts with ease and execute trades instantly.</li>
                            <li>Comprehensive order history and notifications for key events.</li>
                            <li>Lightweight and user-friendly interface for mobile devices.</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="account-style-three pt_100 pb_70">
            <div class="auto-container">
                <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                        <div class="content_block_eight">
                            <div class="content-box ml_60">
                                <div class="sec-title pb_20">
                                    <h2>Open a Wundersys Capital Limited account in 3 simple steps.</h2>
                                    <p>Open an account with Wundersys Capital Limited today and benefit from our commitment to protecting your funds.</p>
                                </div>
                                
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 pt_100 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 account-block">
                                    <div class="account-block-one pb_1 wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="icon-box">
                                            <img src="{{ asset('')}}assets/image/t1.svg" alt="Register">
                                            </div>
                                            <h3><a href="#">Register</a></h3>
                                            <p>Choose your preferred account type and begin the process.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 account-block">
                                    <div class="account-block-one wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="icon-box"><img src="{{ asset('')}}assets/image/t2.svg" alt="Fund"></div>
                                            <h3><a href="#">Fund</a></h3>
                                            <p>Fund your trading account depending on the account you choose. Pick out our deposit methods of your choice.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 account-block">
                                    <div class="account-block-one pb_1 wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="inner-box">
                                            <div class="icon-box"><img src="{{ asset('')}}assets/image/t3.svg" alt="Start Trading"></div>
                                            <h3><a href="#">Start Trading</a></h3>
                                            <p>Trade 100+ CFD instruments with tight spreads on the industry's most trusted platforms MT5.</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one common-btn">Open an Account</a>
                    
                </div>
            </div>
        </section>
@endsection
