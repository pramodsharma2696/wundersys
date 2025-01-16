@extends('master')
@section('contents')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .calculator-wrap {
        max-width: 1320px;
        margin: 2rem auto;
        padding: 1.5rem;
        /* background-color: #fff; */
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .calculator-body h3 {
        font-size: 1.5rem;
        color: #333;
    }

    .calculator-body p {
        font-size: 1rem;
        color: #666;
        margin-bottom: 1rem;
    }

    .d-flex {
        display: flex;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .calc-dropdown-wrap {
        flex: 1;
        min-width: 180px;
    }

    .calc-dropdown-wrap p {
        margin: 0 0 0.5rem;
        font-weight: bold;
    }

    .asset-dropdown {
        position: relative;
        border: 1px solid #ccc;
        border-radius: 4px;
        padding: 0.5rem;
        cursor: pointer;
        background-color: #f9f9f9;
    }

    .asset-dropdown-list {
        display: none;
        position: absolute;
        z-index: 10;
        width: 100%;
        background-color: #fff;
        border: 1px solid #ccc;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        border-radius: 4px;
    }

    .asset-dropdown:hover .asset-dropdown-list {
        display: block;
    }

    .asset-dropdown-list-item {
        padding: 0.5rem;
        cursor: pointer;
    }

    .asset-dropdown-list-item:hover {
        background-color: #f1f1f1;
    }

    .toggle-wrap {
        flex: 1;
        min-width: 200px;
    }

    .toggle-box {
        display: flex;
        gap: 0.5rem;
    }

    .toggle-box button {
        padding: 0.5rem 1rem;
        border: 1px solid #ccc;
        background-color: #f9f9f9;
        cursor: pointer;
        border-radius: 4px;
    }

    .toggle-box .toggle-active {
        background-color: #007bff;
        color: #fff;
    }

    .quantity-input {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .quantity-input input {
        width: 80px;
        text-align: center;
    }

    .quantity-input button {
        background: none;
        border: 1px solid #ccc;
        border-radius: 50%;
        width: 30px;
        height: 30px;
        cursor: pointer;
    }

    .cta {
        padding: 0.8rem 1.5rem;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .cta:hover {
        background-color: #0056b3;
    }

    .calculator-values {
        margin-top: 2rem;
    }

    .value-grid {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 1rem;
    }

    .value-tile {
        background-color: #f1f1f1;
        padding: 1rem;
        border-radius: 4px;
        text-align: center;
    }

    .value-tile p {
        margin: 0 0 0.5rem;
        font-weight: bold;
    }

    .value-tile .value {
        font-size: 1.2rem;
        font-weight: bold;
        color: #007bff;
    }

    .select2-container .select2-selection--single {
        height: 35px !important;
    }
</style>
<!-- page-title -->
<section class="page-title centred pb_0">
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

<section class="account-style-three pt_100 pb_70">
    <div class="auto-container">
    <div class="row">
    <div class="col-12">
        <div class="calculator-wrap">
            <div class="calculator-body">
                <div class="row">
                    <!-- Left Column -->
                    <div class="col-12 col-md-6 mb-4">
                        <h3 class="text-center text-md-start">Calculate your forex margin</h3>
                        <p class="text-center text-md-start">
                            Calculate your estimated required margin for the forex position if you just opened it.
                        </p>
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-3">
                                <div class="calc-dropdown-wrap">
                                    <p>Instrument</p>
                                    <select class="list-instruments form-select" id="instruments">
                                    <option value="eursek">EUR/SEK</option>
                                    <option value="eurusd">EUR/USD</option>
                                    <option value="gbpaud">GBP/AUD</option>
                                    <option value="gbpcad">GBP/CAD</option>
                                    <option value="gbpchf">GBP/CHF</option>
                                    <option value="gbpjpy">GBP/JPY</option>
                                    <option value="gbpnzd">GBP/NZD</option>
                                    <option value="gbpusd">GBP/USD</option>
                                    <option value="nzdcad">NZD/CAD</option>
                                    <option value="nzdchf">NZD/CHF</option>
                                    <option value="nzdjpy">NZD/JPY</option>
                                    <option value="nzdusd">NZD/USD</option>
                                    <option value="usdcad">USD/CAD</option>
                                    <option value="usdchf">USD/CHF</option>
                                    <option value="usdcnh">USD/CNH</option>
                                    <option value="usdhkd">USD/HKD</option>
                                    <option value="usdjpy">USD/JPY</option>
                                    <option value="usdmxn">USD/MXN</option>
                                    <option value="usdnok">USD/NOK</option>
                                    <option value="usdsek">USD/SEK</option>
                                    <option value="usdzar">USD/ZAR</option>
                                    <option value="wtiusd">WTI/USD</option>
                                    <option value="xagusd">XAG/USD</option>
                                    <option value="xauusd">XAU/USD</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <div class="calc-dropdown-wrap">
                                    <p>Contract Size</p>
                                    <input type="text" name="contract-size" id="contract-size" value="100"
                                        class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-3">
                                <div class="calc-dropdown-wrap">
                                    <p>Bid</p>
                                    <input type="text" id="bid" class="form-control" value="1.02799" readonly>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <div class="calc-dropdown-wrap">
                                    <p>Ask</p>
                                    <input type="text" id="ask" class="form-control" value="1.02008" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-6 mb-3">
                                <div class="toggle-wrap">
                                    <p>Amount</p>
                                    <div class="quantity-input d-flex justify-content-center justify-content-sm-start">
                                        <button class="minus btn btn-light">-</button>
                                        <input type="number" class="form-control mx-2 text-center" min="1000" max="1000000"
                                            value="1000" style="max-width: 80px;">
                                        <button class="plus btn btn-light">+</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6 mb-3">
                                <div class="calc-dropdown-wrap mt-3">
                                    <button class="cta btn btn-primary w-100" style="background:green">Calculate</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right Column -->
                    <div class="col-12 col-md-6 mb-4" style="background-color: #fff; padding: 20px;">
                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <p>Leverage</p>
                                <input type="text" name="leverage" id="leverage" value="100" class="form-control">
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="calc-dropdown-wrap mt-3">
                                    <select class="form-select" id="currency">
                                        <option value="usd" selected>USD</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 mt-4">
                                <div class="value-tile text-center">
                                    <p>Required Margin</p>
                                    <div class="value display-6">$00.00</div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6 offset-2 mt-4">
                                <div class="calc-dropdown-wrap mt-3">
                                    <button class="cta btn btn-primary w-100">Start Trading  &nbsp;&nbsp;<i class='fas fa-arrow-right'></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    </div>
</section>
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $("#categories").select2({
            allowClear: true,
            width: "100%"
        })
        $("#instruments").select2({
            allowClear: true,
            width: "100%"
        })
        $("#currency").select2({
            allowClear: true,
            width: "100%"
        })
    });

    $(document).ready(function() {
        // Function to calculate margin
        function calculateMargin() {
            const amount = parseFloat($(".quantity-input input").val());
            const contractSize = parseFloat($("#contract-size").val());
            const ask = parseFloat($("#ask").val());
            const leverage = parseFloat($("#leverage").val());

            // Ensure all values are valid
            if (isNaN(amount) || isNaN(contractSize) || isNaN(ask) || isNaN(leverage) || leverage <= 0) {
                alert("Please enter valid values.");
                return;
            }

            // Calculate margin
            const margin = (amount * contractSize * ask) / leverage;

            // Update the required margin value in the UI
            $(".value-tile .value").text(`$${margin.toFixed(2)}`);
        }

        // Event listener for the Calculate button
        $(".cta").on("click", function(e) {
            e.preventDefault();
            calculateMargin();
        });

        // Increment and decrement amount
        $(".plus").on("click", function() {
            const input = $(".quantity-input input");
            let currentValue = parseInt(input.val(), 10);
            if (currentValue < 1000000) {
                input.val(currentValue + 1000);
            }
        });

        $(".minus").on("click", function() {
            const input = $(".quantity-input input");
            let currentValue = parseInt(input.val(), 10);
            if (currentValue > 1000) {
                input.val(currentValue - 1000);
            }
        });
    });
</script>
@endpush
@endsection