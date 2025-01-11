@extends('master')
@section('contents')
<style>
    .account-block-one .inner-box {
        height: 600px !important;
    }
</style>
        <!-- page-title -->
        <section class="page-title centred pt_90 pb_0">
            <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Account</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>Account</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- account-style-two -->
      
<section class="account-section pt_100 pb_100">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-1.png);"></div>
    <div class="auto-container" style="max-width: 1774px !important;">
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
                                            <td>100% & 30%</td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <td colspan="2" class="text-center">
                                                <a href="#" class="theme-btn btn-one mr_10">Open An Account <i class="bi bi-arrow-right"></i></a>
                                            </td>
                                        </tr>
                                    </tfoot>
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
                                            <td>100% & 30%</td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                        <td colspan="2" class="text-center">
                                                <a href="#" class="theme-btn btn-one mr_10">Open An Account <i class="bi bi-arrow-right"></i></a>
                                            </td>
                                        </tr>
                                    </tfoot>
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
                                            <td>100% & 30%</td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" class="text-center">
                                                <a href="#" class="theme-btn btn-one mr_10">Open An Account <i class="bi bi-arrow-right"></i></a>
                                            </td>
                                        </tr>
                                    </tfoot>
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
                                            <td>100% & 30%</td>
                                        </tr>

                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" class="text-center">
                                                <a href="#" class="theme-btn btn-one mr_10">Open An Account <i class="bi bi-arrow-right"></i></a>
                                            </td>
                                        </tr>
                                    </tfoot>
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
        <!-- account-style-two end -->


        <!-- trading-style-four -->
       
        <!-- trading-style-four end -->


        <!-- apps-style-two -->
      
        <!-- apps-style-two end -->


        <!-- process-section -->
        <section class="process-section pt_100 pb_70">
            <div class="auto-container">
                <div class="sec-title centred pb_60">
                    <span class="sub-title mb_14">The Process</span>
                    <h2>How It Works</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content-box">
                            <div class="process-block-one">
                                <div class="inner-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <span class="count-text">1</span>
                                    <h3>Sign up, It's Free!</h3>
                                    <p>Our team will set up your account and help you build job to  easy-to-use web dashboard.</p>
                                </div>
                            </div>
                            <div class="process-block-one">
                                <div class="inner-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <span class="count-text">2</span>
                                    <h3>Find best Deals and Invest</h3>
                                    <p>Create and Trade anywhere from 1-100% openings with just a few clicks. customize your own.</p>
                                </div>
                            </div>
                            <div class="process-block-one">
                                <div class="inner-box">
                                    <div class="shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                    <span class="count-text">3</span>
                                    <h3>Get you profit back</h3>
                                    <p>View market, reviews, and rosters before forex arrive on the site, and post reviews and pay, effortlessly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image-box">
                            <figure class="image image-hov-two"><img src="assets/images/resource/process-1.jpg" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- process-section end -->
@endsection