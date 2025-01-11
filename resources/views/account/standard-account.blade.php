@extends('master')
@section('contents')
<style>
.account-block-one .inner-box{
    height: 200px !important;
}
</style>
        <!-- page-title -->
        <section class="page-title centred pt_90 pb_0">
            <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Standard Account</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Standard Account</li>
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
                                <span class="sub-title mb_14">Why a Standard Account is the Most Popular Choice for Traders?</span>
                                    <h2>It offers a comprehensive <span>trading experience</span> for both <span>new-entry</span> and seasoned traders. It’s the most common account to open and grants access to global markets and to some of the most popular <span>financial instruments</span>.</h2>
                                    
                                </div>
                                <a href="#" class="theme-btn btn-one">Open an account</a>
                                
                            </div>
                        </div>
                </div> 
                <hr>
                </div>
            </div>
        </section>
        

        <!-- Trading platform -->
        <section class="account-style-three pt_100 pb_70">
            <div class="auto-container">
                <div class="row align-items-center">
                <div class="col-lg-6 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="row clearfix">
                                <div class="col-lg-6 col-md-6 col-sm-12 account-block">
                                    <div class="account-block-one pb_1 wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                    <figure class="image-box">
                                                <img src="{{ asset('')}}assets/image/std.png" alt="meta5" style="width:640px !important;max-width: none;">
                                    </figure>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                    </div>
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_eight">
                            <div class="content-box ml_60">
                                <div class="sec-title pb_20">
                                   
                                    <h2>Why choose a <span>Standard account?</span></h2>
                                </div>
                                <div class="text-box">
                                     <ul class="list-style-one mb_40 clearfix">
                                        <li>100+ Tradable Instruments: Gain Access To A Diverse Range Of Assets To Expand Your Trading Opportunities.</li>
                                        <li>Instant Execution: Experience Swift And Reliable Trade Execution To Capitalize On Market Movements.</li>
                                        <li>Multiple Order Types: Utilize Various Order Types To Implement Your Trading Strategies Effectively.</li>
                                        <li>Flexible Currency Denominations: Choose from USD, EUR, Or GBP For Your Account To Suit Your Preferences.</li>
                                        <li>Competitive Spreads: Enjoy Spreads Starting From 1.2 PIPs* On EURUSD, Offering You Better Trading Conditions.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </section>



        <section class="account-style-three pb_70">
            <div class="auto-container">
                <div class="row align-items-center">
                <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                        <div class="content_block_eight">
                            <div class="content-box ml_60">
                                <div class="sec-title pb_20">
                                <span class="sub-title mb_14">Open your Standard Account with Wundersys Capital Limited</span>
                                    <h2>We prioritise providing a superior <span>trading environment</span> equipped with the latest technology and a wide array of <span>trading instruments</span>. Our standard account is designed to ensure seamless execution and <span>competitive spreads.</span></h2><br>
                                    </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </section>
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
                                <!-- <a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Open an Account</a> -->
                                
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
                    <a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one" style="width:200px;margin-left: 50%;">Open an Account</a>
                </div>
            </div>
        </section>
       
   


      


        

        


        @endsection