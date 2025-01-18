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

<!-- MT5 Overview -->
<section id="desktop" class="account-style-three pt_100 pb_70">
    <div class="auto-container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                <div class="content_block_eight">
                    <div class="content-box ml_60">
                        <div class="sec-title pb_20">
                            <h2>MT5 for Desktop</h2>
                            <p>Experience advanced trading on MT5 for desktop, featuring a robust suite of tools and functionality to enhance your trading strategies.</p>
                        </div>
                        <ul class="list-style-one mb_40 clearfix">
                            <li>Access to multiple asset classes, including Forex, CFDs, and more.</li>
                            <li>Advanced charting tools and over 80 built-in technical indicators.</li>
                            <li>Support for algorithmic trading with MQL5.</li>
                            <li>Multiple order types and risk management tools.</li>
                        </ul>
                        
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                <figure class="image-box">
                    <img src="{{ asset('')}}assets/mt5/desktop.png" alt="MT5 Desktop" style="width:640px !important;max-width: none;">
                </figure>
            </div>
        </div>
    </div>
</section>


@endsection
