@extends('master')
@section('contents')

        <!-- page-title -->
        <section class="page-title centred pt_90 pb_60">
            <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Latest News Update</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Company News</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


      


        <!-- news-section -->
        <section class="news-section pt_0 pb_70">
            <div class="auto-container">
                <div class="sec-title centred pb_60">
                    <span class="sub-title mb_14">Media Center</span>
                    <!-- <h2>Latest News Update</h2> -->
                </div>
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <!-- <span class="post-date">20TH April, 2024</span> -->
                                <h3><a href="{{ url('/news-details') }}">USD/JPY Stages the more upsides can Bulls Aim for 160x Bonus?</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curaitur in euismod odio gravida gravida. Discovery of the text's origin is attributed</p>
                                <div class="link"><a href="{{ url('/news-details') }}">Read More</a></div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <h3><a href="{{ url('/news-details') }}">Nemo's Eurovision win fires up Swiss advocates for non-binary rights</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curaitur in euismod odio gravida gravida. Discovery of the text's origin is attributed</p>
                                <div class="link"><a href="{{ url('/news-details') }}">Read More</a></div>
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                               
                                <h3><a href="{{ url('/news-details') }}">Wall St Week Ahead-Earnings bolster US stocks but crucial inflation report looms</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curaitur in euismod odio gravida gravida. Discovery of the text's origin is attributed</p>
                                <div class="link"><a href="{{ url('/news-details') }}">Read More</a></div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


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