@extends('master')
@section('contents')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    
    .select2-container .select2-selection--single {
        height: 35px !important;
    }
</style>
        <!-- page-title -->
        <section class="page-title centred pt_90 pb_0">
            <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Profit Calculator</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Profit Calculator</li>
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
                                <div class="calculator">
                                    <form id="profit-form">
                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="profitInstrument">Instrument Name:</label>
                                                <select class="form-control" id="profitInstrument" required>
                                                    <option value="">Select an instrument</option>
                                                    <option value="EUR/USD">EUR/USD</option>
                                                    <option value="GBP/USD">GBP/USD</option>
                                                    <option value="CAD/JPY">CAD/JPY</option>
                                                    <option value="AUD/USD">AUD/USD</option>
                                                    <option value="USD/CHF">USD/CHF</option>
                                                    <option value="NZD/USD">NZD/USD</option>
                                                    <option value="USD/CAD">USD/CAD</option>
                                                    <option value="EUR/GBP">EUR/GBP</option>
                                                    <option value="EUR/JPY">EUR/JPY</option>
                                                    <option value="GBP/JPY">GBP/JPY</option>
                                                    <option value="AUD/JPY">AUD/JPY</option>
                                                    <option value="XAU/USD">Gold (XAU/USD)</option>
                                                    <option value="XAG/USD">Silver (XAG/USD)</option>
                                                    <option value="WTI/USD">WTI Crude Oil</option>
                                                    <option value="BRENT/USD">Brent Crude Oil</option>
                                                    <option value="S&P 500">S&P 500 Index</option>
                                                    <option value="DAX 30">DAX 30 Index</option>
                                                    <option value="NASDAQ 100">NASDAQ 100 Index</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="profitVolume">Volume (in lots):</label>
                                                <input type="number" class="form-control" id="profitVolume" required min="0.01" step="0.01">
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="entryPrice">Open Price:</label>
                                                <input type="number" class="form-control" id="entryPrice" step="0.00001" required>
                                            </div>
                                            <div class="col">
                                                <label for="exitPrice">Close Price:</label>
                                                <input type="number" class="form-control" id="exitPrice" step="0.00001" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="positionType">Position Type (1 for Buy, -1 for Sell):</label>
                                                <select class="form-control" id="positionType" required>
                                                    <option value="">Select Position</option>
                                                    <option value="1">Buy</option>
                                                    <option value="-1">Sell</option>
                                                </select>
                                            </div>
                                            <div class="col">
                                                <label for="profit-result">Profit:</label>
                                                <input type="text" class="form-control" id="profit-result" readonly>
                                            </div>
                                        </div>

                                        <div class="col-12 offset-3">
                                            <button type="submit" class="theme-btn btn-one col-3 p-3 offset-1">Calculate Profit</button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ===============>> Service section start here <<================= -->
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
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

<script>
    $(document).ready(function() {
        $("#profitInstrument").select2({
            allowClear: true,
            width: "100%"
        })
    });

    document.getElementById("profit-form").addEventListener("submit", function (event) {
        event.preventDefault();

        // Retrieve input values
        const volume = parseFloat(document.getElementById("profitVolume").value);
        const openPrice = parseFloat(document.getElementById("entryPrice").value);
        const closePrice = parseFloat(document.getElementById("exitPrice").value);
        const positionType = parseInt(document.getElementById("positionType").value);
        const contractSize = 100000; // Standard lot size

        // Validate inputs
        if (isNaN(volume) || isNaN(openPrice) || isNaN(closePrice) || isNaN(positionType)) {
            alert("Please enter valid values.");
            return;
        }

        // Calculate profit
        let profit = 0;
        if (positionType === 1) {
            // Buy formula
            profit = (closePrice * contractSize * volume) - (openPrice * contractSize * volume);
        } else if (positionType === -1) {
            // Sell formula
            profit = (openPrice * contractSize * volume) - (closePrice * contractSize * volume);
        } else {
            alert("Invalid Position Type.");
            return;
        }

        // Display the result
        document.getElementById("profit-result").value = `$${profit.toFixed(2)}`;
    });
</script>
@endpush
@endsection
