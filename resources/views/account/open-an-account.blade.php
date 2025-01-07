@extends('master')
@section('contents')

        <!-- page-title -->
        <section class="page-title centred pt_90 pb_0">
            <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Open an Account</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Open an Account</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <section class="account-style-three pt_100 pb_70">
            <div class="auto-container">
                <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column pb_70">
                        <div class="content_block_eight">
                            <div class="content-box ml_60">
                                <div class="sec-title pb_20">
                                <span class="sub-title mb_14">Why Have an Account with Wundersys Capital Limited?</span>
                                <h2>At Wundersys Capital Limited, our clients are always our top priority. We strive to make the process of <span>opening and managing an account</span> as smooth and easy as possible. Our advanced technology ensures a robust and secure experience, allowing traders to fully enjoy their trading journey.</h2>
                                 
                                    
                                </div>
                                <a href="#" class="theme-btn btn-one">Open an account</a>
                                
                            </div>
                        </div>
                </div> 
                <hr>
                </div>
            </div>
        </section>
        <section class="account-style-three pt_100 pb_70">
            <div class="auto-container">
                <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column pb_70">
                        <div class="content_block_eight">
                            <div class="content-box ml_60">
                                <div class="sec-title pb_20">
                                <span class="sub-title mb_14">Our Accounts</span>
                                <h2>Benefit from our diverse account offerings, tailored for traders of all experience levels. Each account is designed to match your level of expertise and the amount you can deposit. Enjoy exceptional order execution and cutting-edge trading technology, along with powerful trading tools and expert analysis. </h2>
                               </div>
                               
                                
                            </div>
                        </div>
                </div> 
                <hr>
                </div>
            </div>
        </section>
        <section class="account-style-two account-page clear-bg centred pt_80 pb_70">
            <div class="auto-container">
                <div class="sec-title pb_50">
                    <span class="sub-title mb_14">Accounts</span>
                    <h2 class="mb_14">Choose from Standard or Premium account, each with their unique features and benefits.</h2>
                    <a href="index-3.html" class="theme-btn btn-one">Open an Account</a>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-6 col-sm-12 account-block">
                        <div class="account-block-two wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-16"></i></div>
                                <h3><a href="account-details.html">Standard Account</a></h3>
                                <ul class="feature-list list-style-one clearfix">
                                    <li>100+ tradable instruments</li>
                                    <li>Instant execution</li>
                                    <li>Multiple order types</li>
                                    <li>Denominate in USD/EUR/GBP</li>
                                    <li>Spread from 1.2 PIPs* EURUSD</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-12 account-block">
                        <div class="account-block-two wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-17"></i></div>
                                <h3><a href="account-details.html">Premium Account</a></h3>
                                <ul class="feature-list list-style-one clearfix">
                                    <li>100+ tradable instruments</li>
                                    <li>Premium execution with bank, brokerage, and client liquidity</li>
                                    <li>Denominate in USD/EUR/GBP</li>
                                    <li>Spread from 0.0 PIPs* EURUSD</li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>

        <!-- Trading platform -->
       


       
        <!-- Trading platform end -->

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
                                <a href="index-3.html" class="theme-btn btn-one">Open an Account</a>
                                
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
                    
                </div>
            </div>
        </section>
       
   


      


        

        


        @endsection