@extends('master')
@section('contents')

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
                    <img src="{{ asset('')}}assets/mt5/android.png" alt="MT5 Android" style="width:640px !important;max-width: none;">
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

@endsection
