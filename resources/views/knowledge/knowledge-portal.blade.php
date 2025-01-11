@extends('master')
@section('contents')
<style>
 /* Adjust the positioning of the title and buttons */
.news-section .row.pt_70 {
    display: flex;
    justify-content: space-between;
    align-items: center;
}
.controls {
    position: absolute;
    /* top: 43%; */
    left: 80%;
    transform: translateY(-16%);
    display: flex;
    gap: 10px;
}
/* Mobile responsiveness */
@media (max-width: 767px) {
    .slider-track4,
    .slider-track3,
    .slider-track2,
    .slider-track {
        width: 100%; /* Make the track 100% on mobile */
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
/* ---------- */
    hr.line {
        margin-left: 11%;
        margin-top: -15px;
        display: inline-block;
        width: 70%;
        vertical-align: middle;
    }
    hr.line2 {
        margin-left: 25%;
        margin-top: -15px;
        display: inline-block;
        width: 70%;
        vertical-align: middle;
    }
    hr.line3 {
        margin-left: 22%;
        margin-top: -15px;
        display: inline-block;
        width: 70%;
        vertical-align: middle;
    }
    hr.line4 {
        margin-left: 16%;
        margin-top: -15px;
        display: inline-block;
        width: 70%;
        vertical-align: middle;
    }

/* Slider styles */
.slider-container {
    display: flex;
    overflow: hidden;
    width: 100%;
    position: relative;
}

.slider-track4,
.slider-track3,
.slider-track2,
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
    }
    a.btn.btn-link {
    text-decoration: none;
    color: #333;
    font-size: 20px;
    border: 1px solid gray;
    padding: 2px 9px 2px 10px;
}
  
</style>

<!-- page-title -->
<section class="page-title centred pt_90 pb_0">
    <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Knowledge Portal</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Knowledge Portal</li>
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
        </div>
    </div>
</section>

<section class="news-section pt_0 pb_10" id="basics">
    <div class="auto-container">
        <div class="row pt_70">
            <h3>Basics</h3>
            <hr class="line">
            <div class="controls">
                <button id="prev" class="btn btn-outline-primary btn-sm">&lt;</button>
                <button id="next" class="btn btn-outline-primary btn-sm">&gt;</button>
            </div>
        </div>
        <div class="row clearfix pt_70 slider-container">
            <div class="slider-track">
                <!-- 9 Cards -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">What is margin?</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">What is a CFD?</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">How to start CFD trading?</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Lots & Leverage</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Price changing. Pips and Points</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Chart Types</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">How to Trade on Fx Markets?</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Trading Sessions</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="news-section pt_0 pb_70" id="fa">
    <div class="auto-container">
        <div class="row pt_70">
            <h3>Fundamental Analysis</h3>
            <hr class="line2">
            <div class="controls">
                <button id="prev2" class="btn btn-outline-primary btn-sm">&lt;</button>
                <button id="next2" class="btn btn-outline-primary btn-sm">&gt;</button>
            </div>
        </div>
        <div class="row clearfix pt_70 slider-container">
            <div class="slider-track2">
                <!-- 9 Cards -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60"> What is fundamental analysis? </h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60"> Leading and lagging economic indicators </h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Major economic indicators. Part 1</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Major economic indicators. Part 2</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<section class="news-section pt_0 pb_70" id="ta">
    <div class="auto-container">
        <div class="row pt_70">
            <h3>Technical analysis</h3>
            <hr class="line3">
            <div class="controls">
                <button id="prev3" class="btn btn-outline-primary btn-sm">&lt;</button>
                <button id="next3" class="btn btn-outline-primary btn-sm">&gt;</button>
            </div>
        </div>
        <div class="row clearfix pt_70 slider-container">
            <div class="slider-track3">
                <!-- 9 Cards -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60"> Trend Lines </h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Support and resistance levels</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">What are channels and how to put them on</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Major patterns</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="news-section pt_0 pb_70" id="pshyco">
    <div class="auto-container">
        <div class="row pt_70">
            <h3>Psychology</h3>
            <hr class="line4">
            <div class="controls">
                <button id="prev4" class="btn btn-outline-primary btn-sm">&lt;</button>
                <button id="next4" class="btn btn-outline-primary btn-sm">&gt;</button>
            </div>
        </div>
        <div class="row clearfix pt_70 slider-container">
            <div class="slider-track4">
                <!-- 9 Cards -->
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60"> Escalation of Commitment and the Sunk Cost Fallacy </h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60"> Blindfolded on a Mountain Range </h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Novice traders mistakes</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title pt_30 pb_60">Trading: from competency to skill</h5>
                            <a href="#" class="btn btn-link">Start <i class="bi bi-arrow-right"></i> </a>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const sliderTrack = document.querySelector('.slider-track');
    const prevButton = document.getElementById('prev');
    const nextButton = document.getElementById('next');

    let currentIndex = 0;
    const totalCards = 9;
    const getCardsToShow = () => (window.innerWidth <= 767 ? 1 : 3);  // 1 card on mobile, 3 cards on desktop
    let cardsToShow = getCardsToShow();

    // Function to update slider position
    function updateSlider() {
        const offset = -(currentIndex * (100 / cardsToShow));
        sliderTrack.style.transform = `translateX(${offset}%)`;

        // Update button states
        prevButton.disabled = currentIndex === 0;
        nextButton.disabled = currentIndex >= (totalCards / cardsToShow) - 1;
    }

    // Function for auto sliding
    function autoSlide() {
        if (currentIndex < (totalCards / cardsToShow) - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateSlider();
    }

    let autoSlideInterval = setInterval(autoSlide, 5000); // Auto slide every 5 seconds

    // Click event for prev button
    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    // Click event for next button
    nextButton.addEventListener('click', () => {
        if (currentIndex < (totalCards / cardsToShow) - 1) {
            currentIndex++;
            updateSlider();
        }
    });

    // Pause auto slide on button hover
    prevButton.addEventListener('mouseover', () => clearInterval(autoSlideInterval));
    nextButton.addEventListener('mouseover', () => clearInterval(autoSlideInterval));

    // Resume auto slide after hover
    prevButton.addEventListener('mouseout', () => autoSlideInterval = setInterval(autoSlide, 5000));
    nextButton.addEventListener('mouseout', () => autoSlideInterval = setInterval(autoSlide, 5000));

    // Adjust number of cards to show on window resize
    window.addEventListener('resize', () => {
        cardsToShow = getCardsToShow();
        currentIndex = 0; // Reset index when changing the view
        updateSlider();
    });

    // Initial slider setup
    updateSlider();
});

 // 2 --------------
 document.addEventListener('DOMContentLoaded', () => {
    const sliderTrack = document.querySelector('.slider-track2');
    const prevButton = document.getElementById('prev2');
    const nextButton = document.getElementById('next2');

    let currentIndex = 0;
    const totalCards = 9;
    const getCardsToShow = () => (window.innerWidth <= 767 ? 1 : 3);  // 1 card on mobile, 3 cards on desktop
    let cardsToShow = getCardsToShow();

    // Function to update slider position
    function updateSlider() {
        const offset = -(currentIndex * (100 / cardsToShow));
        sliderTrack.style.transform = `translateX(${offset}%)`;

        // Update button states
        prevButton.disabled = currentIndex === 0;
        nextButton.disabled = currentIndex >= (totalCards / cardsToShow) - 1;
    }

    // Function for auto sliding
    function autoSlide() {
        if (currentIndex < (totalCards / cardsToShow) - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateSlider();
    }

    let autoSlideInterval = setInterval(autoSlide, 5000); // Auto slide every 5 seconds

    // Click event for prev button
    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    // Click event for next button
    nextButton.addEventListener('click', () => {
        if (currentIndex < (totalCards / cardsToShow) - 1) {
            currentIndex++;
            updateSlider();
        }
    });

    // Pause auto slide on button hover
    prevButton.addEventListener('mouseover', () => clearInterval(autoSlideInterval));
    nextButton.addEventListener('mouseover', () => clearInterval(autoSlideInterval));

    // Resume auto slide after hover
    prevButton.addEventListener('mouseout', () => autoSlideInterval = setInterval(autoSlide, 5000));
    nextButton.addEventListener('mouseout', () => autoSlideInterval = setInterval(autoSlide, 5000));

    // Adjust number of cards to show on window resize
    window.addEventListener('resize', () => {
        cardsToShow = getCardsToShow();
        currentIndex = 0; // Reset index when changing the view
        updateSlider();
    });

    // Initial slider setup
    updateSlider();
});


 // 2 --------------
 document.addEventListener('DOMContentLoaded', () => {
    const sliderTrack = document.querySelector('.slider-track3');
    const prevButton = document.getElementById('prev3');
    const nextButton = document.getElementById('next3');

    let currentIndex = 0;
    const totalCards = 9;
    const getCardsToShow = () => (window.innerWidth <= 767 ? 1 : 3);  // 1 card on mobile, 3 cards on desktop
    let cardsToShow = getCardsToShow();

    // Function to update slider position
    function updateSlider() {
        const offset = -(currentIndex * (100 / cardsToShow));
        sliderTrack.style.transform = `translateX(${offset}%)`;

        // Update button states
        prevButton.disabled = currentIndex === 0;
        nextButton.disabled = currentIndex >= (totalCards / cardsToShow) - 1;
    }

    // Function for auto sliding
    function autoSlide() {
        if (currentIndex < (totalCards / cardsToShow) - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateSlider();
    }

    let autoSlideInterval = setInterval(autoSlide, 5000); // Auto slide every 5 seconds

    // Click event for prev button
    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    // Click event for next button
    nextButton.addEventListener('click', () => {
        if (currentIndex < (totalCards / cardsToShow) - 1) {
            currentIndex++;
            updateSlider();
        }
    });

    // Pause auto slide on button hover
    prevButton.addEventListener('mouseover', () => clearInterval(autoSlideInterval));
    nextButton.addEventListener('mouseover', () => clearInterval(autoSlideInterval));

    // Resume auto slide after hover
    prevButton.addEventListener('mouseout', () => autoSlideInterval = setInterval(autoSlide, 5000));
    nextButton.addEventListener('mouseout', () => autoSlideInterval = setInterval(autoSlide, 5000));

    // Adjust number of cards to show on window resize
    window.addEventListener('resize', () => {
        cardsToShow = getCardsToShow();
        currentIndex = 0; // Reset index when changing the view
        updateSlider();
    });

    // Initial slider setup
    updateSlider();
});
  
  
 // 2 --------------
 document.addEventListener('DOMContentLoaded', () => {
    const sliderTrack = document.querySelector('.slider-track4');
    const prevButton = document.getElementById('prev4');
    const nextButton = document.getElementById('next4');

    let currentIndex = 0;
    const totalCards = 9;
    const getCardsToShow = () => (window.innerWidth <= 767 ? 1 : 3);  // 1 card on mobile, 3 cards on desktop
    let cardsToShow = getCardsToShow();

    // Function to update slider position
    function updateSlider() {
        const offset = -(currentIndex * (100 / cardsToShow));
        sliderTrack.style.transform = `translateX(${offset}%)`;

        // Update button states
        prevButton.disabled = currentIndex === 0;
        nextButton.disabled = currentIndex >= (totalCards / cardsToShow) - 1;
    }

    // Function for auto sliding
    function autoSlide() {
        if (currentIndex < (totalCards / cardsToShow) - 1) {
            currentIndex++;
        } else {
            currentIndex = 0;
        }
        updateSlider();
    }

    let autoSlideInterval = setInterval(autoSlide, 5000); // Auto slide every 5 seconds

    // Click event for prev button
    prevButton.addEventListener('click', () => {
        if (currentIndex > 0) {
            currentIndex--;
            updateSlider();
        }
    });

    // Click event for next button
    nextButton.addEventListener('click', () => {
        if (currentIndex < (totalCards / cardsToShow) - 1) {
            currentIndex++;
            updateSlider();
        }
    });

    // Pause auto slide on button hover
    prevButton.addEventListener('mouseover', () => clearInterval(autoSlideInterval));
    nextButton.addEventListener('mouseover', () => clearInterval(autoSlideInterval));

    // Resume auto slide after hover
    prevButton.addEventListener('mouseout', () => autoSlideInterval = setInterval(autoSlide, 5000));
    nextButton.addEventListener('mouseout', () => autoSlideInterval = setInterval(autoSlide, 5000));

    // Adjust number of cards to show on window resize
    window.addEventListener('resize', () => {
        cardsToShow = getCardsToShow();
        currentIndex = 0; // Reset index when changing the view
        updateSlider();
    });

    // Initial slider setup
    updateSlider();
});

</script>
@endsection