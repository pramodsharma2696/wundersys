@extends('master')
@section('contents')

        <!-- page-title -->
        <section class="page-title centred pt_90 pb_60">
            <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>News Details</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>News Details</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->

     <!-- sidebar-page-container -->
     <section class="sidebar-page-container pt_90 pb_100">
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-12 col-md-12 col-sm-12 content-side">
                        <div class="blog-details-content">
                            <div class="news-block-two pb_20">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <figure class="image"><img src="assets/images/news/news-11.jpg" alt=""></figure>
                                    </div>
                                    <div class="lower-content">
                                        <div class="author-box mb_15">
                                            <span class="category">JPY</span>
                                            <figure class="author-thumb"><img src="assets/images/resource/testimonial-1.png" alt=""></figure>
                                            <span>Robert Henry &nbsp; &nbsp;10 May 2024</span>
                                        </div>
                                        <h2>Traders capitalize on market movements triggered by specific events</h2>
                                        <div class="text-box">
                                            <p>We closed out what was a strong week for equity indices large number of trades within a short timeframe, aiming to profit from small price movements Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into Letraset sheets containing.</p>
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                                            <p>Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                                            <blockquote>
                                                <div class="icon-box"><i class="icon-43"></i></div>
                                                <p>That's why we adhere to strict quality standards and regulations to ensure that all our products meet the highest levels of safety and efficacy.</p>
                                                <h4>Brooklyn Simmons</h4>
                                            </blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="video_block_one">
                                <div class="video-box z_1 p_relative centred">
                                    <div class="video-inner" style="background-image: url(assets/images/resource/video-3.jpg);">
                                        <div class="video-content">
                                            <div class="curve-text">
                                                <span class="curved-circle">watch&nbsp;&nbsp;the&nbsp;&nbsp;video&nbsp;&nbsp;right&nbsp;&nbsp;now&nbsp;&nbsp;</span>
                                            </div>
                                            <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image video-btn" data-caption=""><i class="icon-11"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="content-one mt_30 mb_60">
                                <h2>Emerging Trends and Technologies Shaping the Industry</h2>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing.</p>
                                <h3>Your Gateway to Trading Success</h3>
                                <ul class="list-item clearfix">
                                    <li>Risk management features such as stop-loss orders</li>
                                    <li>Trading platforms provide account management features for depositing</li>
                                    <li> Mobile trading apps offer the flexibility to trade on-the-go using smartphones and tablets</li>
                                    <li>Some platforms offer tools for backtesting trading strategies using historical data</li>
                                </ul>
                            </div>
                            
                            <div class="comment-box">
                                <div class="group-title mb_25"><h3>Write Comment</h3></div>
                                <div class="form-inner">
                                    <form method="post" action="https://azim.hostlin.com/Fortradex/blog-details.html">
                                        <div class="row clearfix">
                                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                <div class="form-group">
                                                    <label>Name <span>*</span></label>
                                                    <input type="text" name="name">
                                                </div>
                                            </div>
                                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                                <div class="form-group">
                                                    <label>Email <span>*</span></label>
                                                    <input type="email" name="email">
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                                <div class="form-group">
                                                    <label>Message <span>*</span></label>
                                                    <textarea name="message"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                                <div class="check-box mb_35">
                                                    <input class="check" type="checkbox" id="checkbox9">
                                                    <label for="checkbox9">Save my name, email, and website in this browser for the next time I comment.</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-md-12 col-sm-12 single-column">
                                                <div class="message-btn">
                                                    <button type="submit" class="theme-btn btn-one">Submit Review</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- sidebar-page-container end -->


        <!-- subscribe-section -->
        <section class="subscribe-section">
            <div class="bg-color"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape" style="background-image: url(assets/images/shape/shape-5.png);"></div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                            <div class="text-box">
                                <h2>Subscribe for latest update</h2>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                            <div class="form-inner">
                                <form method="post" action="https://azim.hostlin.com/Fortradex/contact.html">
                                    <div class="form-group">
                                        <input type="email" name="email" placeholder="Email Address" required>
                                        <button type="submit" class="theme-btn btn-one">Subscribe<i class="icon-26"></i></button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->
      


  


        @endsection