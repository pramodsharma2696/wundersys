@extends('master')
@section('contents')
<style>
 /* Adjust the positioning of the title and buttons */
.news-section .row.pt_70 {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* Mobile responsiveness */
@media (max-width: 767px) {

    .slider-track {
    display: flex;
    transition: transform 0.5s ease;
    width: calc(100%* 3);
    flex-direction: column;
}
   


    .slider-container {
        width: 100%;
    }

    /* Show 1 card per slide on mobile */
    .slider-container .col-lg-4 {
        flex: 0 0 100%; /* Each card takes up full width on mobile */
        margin-bottom: 20px;
    }

    .controls {
        margin-left: 0;
    }
}

@media (min-width: 768px) {
    /* For desktop, show 3 cards per slide */
    .slider-container .col-lg-4 {
        flex: 0 0 33.33%;
        margin-bottom: 20px;
    }
   
}

/* Slider styles */
.slider-container {
    display: flex;
    overflow: hidden;
    width: 100%;
    position: relative;
}


.slider-track {
    display: flex;
    transition: transform 0.5s ease;
    width: calc(100% * 3); /* For 3 items */
}

    .news-block {
        flex: 0 0 33.33%;
    }

/* Card styles */
.card {
    height: 250px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    background: #f6f8f9;
}

.card:hover {
    background: #d8dbdd6e;
}

    .slider-container .col-lg-4 {
        margin-bottom: 20px;
    }

    .h-100 {
        padding: 10px;
        margin-left: 10px;
        margin-right: 10px;
        height: 80% !important;
    }
    .pt_701 {
    padding-top: 0px!important;
}
.mtop{
    margin-top: -65px;
}
</style>

<!-- page-title -->
<section class="page-title centred pt_90 pb_0">
    <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>CME Group Education</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>CME Group Education</li>
            </ul>
        </div>
    </div>
</section>

<!-- page-title -->
<section class="page-title centred pt_90 pb_0">
    <div class="pattern-layer rotate-me"></div>
    <div class="auto-container">
        <div class="content-box">
            <h2>Free forex trading online courses for beginners</h2>
            <h5 class="pt_10">Welcome to the FxPro CME Group Education Course!</h5>
            <p class="pt_10">At FxPro, we are pleased to announce the launch of new education material from CME Group, who provide us with a range of instruments and in-depth education content to help you further understand the markets. Watch videos or read the transcripts to develop your trading knowledge.</p>
        </div>
    </div>
</section>

<section class="news-section pt_0 pb_10" id="basics">
    <div class="auto-container">
        <div class="row clearfix pt_70 slider-container">
            <div class="slider-track">
                <!-- 9 Cards -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Fundamental Analysis</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Technical Analysis</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Risk Management</h5>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- 2 -->
        <div class="row clearfix pt_70 mtop slider-container">
            <div class="slider-track">
                <!-- 9 Cards -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Economic Indicators</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Trading Psychology</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Building a Trading Plan</h5>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- 3 -->
        <div class="row clearfix pt_70 mtop slider-container">
            <div class="slider-track">
                <!-- 9 Cards -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Understanding Metals</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Understanding Futures</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Understanding Equity-Indexes</h5>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <!-- 4 -->
        <div class="row clearfix pt_70 mtop slider-container">
            <div class="slider-track">
                <!-- 9 Cards -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Understanding Commodities</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Understanding Cryptocurrencies</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Futures Vs ETFs</h5>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>


@endsection