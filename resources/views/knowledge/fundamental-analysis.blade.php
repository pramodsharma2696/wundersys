@extends('master')
@section('contents')
<style>
.carousel-indicators button {
    width: auto;
    height: auto;
    padding: 5px 10px;
    font-size: 14px;
    font-weight: bold;
    color: #333;
    background-color: #007bff; /* Button background color */
    border-radius: 5px;
    border: none;
    margin: 5px;
    opacity: 0.7;
    transition: opacity 0.3s ease;
}
.carousel-indicators{
    right: -117px;
    bottom: -37px;
}

.carousel-indicators button.active {
    background-color: #0056b3; /* Active button color */
    opacity: 1;
    color: #fff;
}

.carousel-indicators button:hover {
    opacity: 1;
    cursor: pointer;
}
.carousel-indicators [data-bs-target]{
    height: 30px;
    text-indent:0% !important;
    border-radius: 50%;
}
</style>
<!-- Page Title -->
<section class="page-title centred pt_90 pb_0">
    <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Fundamental Analysis</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Fundamental Analysis</li>
            </ul>
        </div>
    </div>
</section>

<!-- Main Content -->
<section class="page-title centred pb_0">
    <div class="auto-container">
        <div class="container py-5">
            <div class="text-center mb-4">
                <h6 class="display-6">Fundamental Analysis</h6>
                <p class="lead">Understanding fundamental analysis and the impact of economic indicators.</p>
            </div>

            <div id="basicIndicatorsCarousel" class="carousel slide" data-bs-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    @foreach ($basicindicators as $index => $indicator)
                    <button type="button"
                        data-bs-target="#basicIndicatorsCarousel"
                        data-bs-slide-to="{{ $index }}"
                        class="{{ $index === 0 ? 'active' : '' }}"
                        aria-current="{{ $index === 0 ? 'true' : '' }}"
                        aria-label="Slide {{ $index + 1 }}">
                        {{ $index + 1 }}
                    </button>
                    @endforeach
                </div>

                <!-- Slides -->
                <div class="carousel-inner">
                    @foreach ($basicindicators as $index => $indicator)
                    <div class="carousel-item {{ $index === 0 ? 'active' : '' }}">
                        <fieldset class="border p-4 mb-5">
                            <div class="row mb-4">
                                <div class="col-md-6 order-md-2">
                                    <img src="{{ $indicator['image'] }}" alt="Image for {{ $indicator['title'] }}" class="img-fluid">
                                </div>
                                <div class="col-md-6 order-md-1">
                                    <h3 class="mb-4">{{ $indicator['title'] }}</h3>
                                    <p>{!! $indicator['content'] !!}</p>
                                </div>
                            </div>
                        </fieldset>
                    </div>
                    @endforeach
                </div>

                <!-- Navigation Controls -->
                <button class="carousel-control-prev" type="button" data-bs-target="#basicIndicatorsCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#basicIndicatorsCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>


        </div>
    </div>
</section>

@endsection