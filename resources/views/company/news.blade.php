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
                                <span class="post-date">20TH April, 2024</span>
                                <h3><a href="blog-details.html">USD/JPY Stages the more upsides can Bulls Aim for 160x Bonus?</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curaitur in euismod odio gravida gravida. Discovery of the text's origin is attributed</p>
                                <div class="link"><a href="blog-details.html">Read More</a></div>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{ asset('') }}assets/images/resource/testimonial-1.png" alt=""></figure>
                                <span>Daniel Marcon</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <span class="post-date">19TH April, 2024</span>
                                <h3><a href="blog-details.html">Nemo's Eurovision win fires up Swiss advocates for non-binary rights</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curaitur in euismod odio gravida gravida. Discovery of the text's origin is attributed</p>
                                <div class="link"><a href="blog-details.html">Read More</a></div>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{ asset('') }}assets/images/resource/testimonial-2.png" alt=""></figure>
                                <span>Robert Henry</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                        <div class="news-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <span class="post-date">18TH April, 2024</span>
                                <h3><a href="blog-details.html">Wall St Week Ahead-Earnings bolster US stocks but crucial inflation report looms</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit. Curaitur in euismod odio gravida gravida. Discovery of the text's origin is attributed</p>
                                <div class="link"><a href="blog-details.html">Read More</a></div>
                            </div>
                            <div class="author-box">
                                <figure class="author-thumb"><img src="{{ asset('') }}assets/images/resource/testimonial-3.png" alt=""></figure>
                                <span>Victor Classic</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- news-section end -->


       


        @endsection