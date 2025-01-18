@extends('master')
@section('contents')

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
                                                <label for="entryPrice">Entry Price:</label>
                                                <input type="number" class="form-control" id="entryPrice" step="0.00001" required>
                                            </div>
                                            <div class="col">
                                                <label for="exitPrice">Exit Price:</label>
                                                <input type="number" class="form-control" id="exitPrice" step="0.00001" required>
                                            </div>
                                        </div>

                                        <div class="row mb-3">
                                            <div class="col">
                                                <label for="positionType">Position Type (1 for Buy, -1 for Sell):</label>
                                                <input type="number" class="form-control" id="positionType" required>
                                            </div>
                                            <div class="col">
                                            <label for="positionType"></label>
                                             <input type="text" class="form-control" id="profit-result" readonly>
                                                <!-- <span class=" form-control "><p id="profit-result"> </p> </span> -->

                                            </div>

                                        </div>
                                        <div class="col-12 offset-3">
                                            <label>&nbsp;</label>
                                            <button type="submit" class="theme-btn btn-one col-3 p-3 offset-1">Calculate Profit</button>
                                        </div><br><br>
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
<script>
const instruments = {
    "EUR/USD": {
        lotSize: 100000,
        leverage: 100
    },
    "GBP/USD": {
        lotSize: 100000,
        leverage: 100
    },
    "CAD/JPY": {
        lotSize: 100000,
        leverage: 100
    },
    "AUD/USD": {
        lotSize: 100000,
        leverage: 100
    },
    "USD/CHF": {
        lotSize: 100000,
        leverage: 100
    },
    "NZD/USD": {
        lotSize: 100000,
        leverage: 100
    },
    "USD/CAD": {
        lotSize: 100000,
        leverage: 100
    },
    "EUR/GBP": {
        lotSize: 100000,
        leverage: 100
    },
    "EUR/JPY": {
        lotSize: 100000,
        leverage: 100
    },
    "GBP/JPY": {
        lotSize: 100000,
        leverage: 100
    },
    "AUD/JPY": {
        lotSize: 100000,
        leverage: 100
    },
    "XAU/USD": {  // Gold
        lotSize: 100, // Adjust based on your trading standards (1 lot = 100 ounces)
        leverage: 100
    },
    "XAG/USD": {  // Silver
        lotSize: 5000, // Adjust based on your trading standards (1 lot = 5000 ounces)
        leverage: 100
    },
    "WTI/USD": {  // WTI Crude Oil
        lotSize: 1000, // Adjust based on your trading standards (1 lot = 1000 barrels)
        leverage: 100
    },
    "BRENT/USD": {  // Brent Crude Oil
        lotSize: 1000, // Adjust based on your trading standards (1 lot = 1000 barrels)
        leverage: 100
    },
    "S&P 500": {  // S&P 500 Index
        lotSize: 50, // Commonly used in CFDs
        leverage: 100
    },
    "DAX 30": {  // DAX 30 Index
        lotSize: 25, // Commonly used in CFDs
        leverage: 100
    },
    "NASDAQ 100": {  // NASDAQ 100 Index
        lotSize: 20, // Commonly used in CFDs
        leverage: 100
    },
};




    function calculateProfit(instrumentName, volume, entryPrice, exitPrice, positionType) {

        const lotSize = instruments[instrumentName].lotSize;


        let profit;
        if (positionType === 1) {
            profit = (exitPrice - entryPrice) * volume * lotSize;
        } else if (positionType === -1) {
            profit = (entryPrice - exitPrice) * volume * lotSize;
        } else {
            return "Invalid position type!";
        }
        return `Profit : $${profit.toFixed(2)}`;
    }


    document.getElementById('profit-form').addEventListener('submit', function(e) {
        e.preventDefault();
        const instrumentName = document.getElementById('profitInstrument').value;
        const volume = parseFloat(document.getElementById('profitVolume').value);
        const entryPrice = parseFloat(document.getElementById('entryPrice').value);
        const exitPrice = parseFloat(document.getElementById('exitPrice').value);
        const positionType = parseInt(document.getElementById('positionType').value);

        const result = calculateProfit(instrumentName, volume, entryPrice, exitPrice, positionType);
        document.getElementById('profit-result').value = result;
    });
</scripT>
@endsection
