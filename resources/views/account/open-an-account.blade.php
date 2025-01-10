@extends('master')
@section('contents')
<style>

.account-block-one .inner-box{
    height: 600px !important;
}
</style>
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


        <section class="account-section pt_100 pb_100">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
    <div class="auto-container" style="max-width: 1600px !important;">
        <div class="sec-title pb_60 centred">
            <span class="sub-title mb_14">Accounts</span>
            <h2>Account Types</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                <div class="account-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <!-- <div class="icon-box" style="background: none;"><img src="{{ asset('')}}assets/image/a1.png" alt="Standard Account"></div> -->
                        <h3><a href="{{ url('/standard-account') }}">Standard Account</a></h3><br>
                        <div class="content-box">
                            <ul class="list-item clearfix">
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <th>Initial Deposit</th>
                                            <td>Minimum $100</td>
                                        </tr>
                                        <tr>
                                            <th>Leverage</th>
                                            <td>to 1:100</td>
                                        </tr>
                                        <tr>
                                            <th>Lot Size</th>
                                            <td>Trade Size of 0.01 Lot</td>
                                        </tr>
                                        <tr>
                                            <th>Spread</th>
                                            <td>Start from 2 pips</td>
                                        </tr>
                                        <tr>
                                            <th>Scalping & Hedging</th>
                                            <td>Permitted</td>
                                        </tr>
                                        <tr>
                                            <th>Commission</th>
                                            <td>No commission</td>
                                        </tr>
                                        <tr>
                                            <th>Margin Call & Stop out</th>
                                            <td>Set at 100% &
                                            30% Respectively</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                <div class="account-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <!-- <div class="icon-box" style="background: none;"><img src="{{ asset('')}}assets/image/a2.png" alt="ECN Account"></div> -->
                        <h3><a href="{{ url('/standard-account') }}">ECN Account</a></h3><br>
                        <div class="content-box">
                            <ul class="list-item clearfix">
                                <table class="table table-striped">
                                <tbody>
                                        <tr>
                                            <th>Initial Deposit</th>
                                            <td>Minimum $500</td>
                                        </tr>
                                        <tr>
                                            <th>Leverage</th>
                                            <td>to 1:100</td>
                                        </tr>
                                        <tr>
                                            <th>Lot Size</th>
                                            <td>Trade Size of 0.01 Lot</td>
                                        </tr>
                                        <tr>
                                            <th>Spread</th>
                                            <td>Start from 1 pips</td>
                                        </tr>
                                        <tr>
                                            <th>Scalping & Hedging</th>
                                            <td>Permitted</td>
                                        </tr>
                                        <tr>
                                            <th>Commission</th>
                                            <td>No commission</td>
                                        </tr>
                                        <tr>
                                            <th>Margin Call & Stop out</th>
                                            <td>Set at 100% &
                                            30% Respectively</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                <div class="account-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <!-- <div class="icon-box" style="background: none;"><img src="{{ asset('')}}assets/image/a2.png" alt="VIP Account"></div> -->
                        <h3><a href="{{ url('/standard-account') }}">VIP Account</a></h3><br>
                        <div class="content-box">
                            <ul class="list-item clearfix">
                                <table class="table table-striped">
                                <tbody>
                                        <tr>
                                            <th>Initial Deposit</th>
                                            <td>Minimum $5000</td>
                                        </tr>
                                        <tr>
                                            <th>Leverage</th>
                                            <td>to 1:100</td>
                                        </tr>
                                        <tr>
                                            <th>Lot Size</th>
                                            <td>Trade Size of 0.01 Lot</td>
                                        </tr>
                                        <tr>
                                            <th>Spread</th>
                                            <td>Start from 0.2 pips</td>
                                        </tr>
                                        <tr>
                                            <th>Scalping & Hedging</th>
                                            <td>Permitted</td>
                                        </tr>
                                        <tr>
                                            <th>Commission</th>
                                            <td>7$ per lot</td>
                                        </tr>
                                        <tr>
                                            <th>Margin Call & Stop out</th>
                                            <td>Set at 100% &
                                            30% Respectively</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                </table>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 account-block">
                <div class="account-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="inner-box">
                        <!-- <div class="icon-box" style="background: none;"><img src="{{ asset('')}}assets/image/a2.png" alt="VIP Account"></div> -->
                        <h3><a href="{{ url('/standard-account') }}">ELITE Account</a></h3><br>
                        <div class="content-box">
                            <ul class="list-item clearfix">
                                <table class="table table-striped">
                                <tbody>
                                        <tr>
                                            <th>Initial Deposit</th>
                                            <td>Minimum $25000</td>
                                        </tr>
                                        <tr>
                                            <th>Leverage</th>
                                            <td>to 1:100</td>
                                        </tr>
                                        <tr>
                                            <th>Lot Size</th>
                                            <td>Trade Size of 0.01 Lot</td>
                                        </tr>
                                        <tr>
                                            <th>Spread</th>
                                            <td>Start from 0.2 pips</td>
                                        </tr>
                                        <tr>
                                            <th>Swap</th>
                                            <td>Free</td>
                                        </tr>
                                        <tr>
                                            <th>Scalping & Hedging</th>
                                            <td>Permitted</td>
                                        </tr>
                                        <tr>
                                            <th>Commission</th>
                                            <td>No</td>
                                        </tr>
                                        <tr>
                                            <th>Margin Call & Stop out</th>
                                            <td>Set at 100% &
                                            30% Respectively</td>
                                        </tr>
                                        
                                    </tbody>
                                </table>
                                </table>
                            </ul>
                        </div>
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
                                <!-- <a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one">Open an Account</a> -->
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 pt_100 col-md-12 col-sm-12 inner-column">
                        <div class="inner-content">
                            <div class="row clearfix">
                                <div class="col-lg-4 col-md-6 col-sm-12 account-block">
                                    <div class="account-block-one pb_1 wow fadeInUp animated animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                                        <div class="inner-box" style="height: 200px !important;">
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
                                        <div class="inner-box" style="height: 200px !important;">
                                            <div class="icon-box"><img src="{{ asset('')}}assets/image/t2.svg" alt="Fund"></div>
                                            <h3><a href="#">Fund</a></h3>
                                            <p>Fund your trading account depending on the account you choose. Pick out our deposit methods of your choice.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12 account-block">
                                    <div class="account-block-one pb_1 wow fadeInUp animated animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                                        <div class="inner-box" style="height: 200px !important;">
                                            <div class="icon-box"><img src="{{ asset('')}}assets/image/t3.svg" alt="Start Trading"></div>
                                            <h3><a href="#">Start Trading</a></h3>
                                            <p>Trade 100+ CFD instruments with tight spreads on the industry's most trusted platforms MT5.</p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <a href="https://my.wundersyscapital.com/en/auth/sign-up" class="theme-btn btn-one" style="width:200px;">Open an Account</a>
                    
                </div>
            </div>
        </section>
       
   


      


        

        


        @endsection