@extends('master')
@section('contents')

        <!-- page-title -->
        <section class="page-title centred pt_90 pb_0">
            <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Margin Calculator</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Margin Calculator</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


<!-- ===============>> Service section start here <<================= -->
<div class="service-details padding-bottom section-bg-color" style="margin-top:30px;">
    <div class="container">
        <div class="service-details__wrapper">
            <div class="row flex-lg-row-reverse g-5">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                                <h3 class="mb-15"> <a class="stretched-link" href="javascript:void(0);">Margin Calculator</a></h3>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <div class="row flex-lg-row-reverse g-5">
                <div class="col-lg-12">
                    <div class="service-details__item">
                        <div class="service-details__item-inner ">

                            <div class="service-details__content" data-aos="fade-up" data-aos-duration="900">
                            <p class="text-center">
                            <h1>Loading..</h1>
                                <!-- <iframe  id="calculator" width="60%" height="350" src="https://figaro.fxbluelabs.com/iframe-axi/widget?type=margin-calculator"></iframe> -->
                            </p>
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- ===============>> Service section start here <<================= -->

@endsection
