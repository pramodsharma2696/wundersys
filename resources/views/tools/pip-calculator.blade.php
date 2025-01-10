@extends('master')
@section('contents')
<style>
    .calculator-container {
        max-width: 600px;
    }

    /* Fix dropdown width for select fields */
    .form-select {
        width: 100%; /* Ensures the select field takes up full width */
    }

    .form-select:focus {
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); /* Adds a focus shadow for better UX */
    }

    .nice-select .list {
        min-width: 100%;
    }
</style>
<!-- page-title -->
<section class="page-title centred pt_90 pb_0">
    <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Pip Calculator</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Pip Calculator</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<section class="account-style-three pt_100 pb_70">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column">
                <div class="content_block_eight">
                    <div class="container py-5">
                        <div class="container calculator-container">
                            <!-- Deposit Currency -->
                            <div class="mb-3">
                                <label for="deposit-currency" class="form-label">Deposit Currency</label>
                                <select id="deposit-currency" class="form-select">
                                    <option value="USD" data-symbol="$" selected>USD ($)</option>
                                    <option value="EUR" data-symbol="€">EUR (€)</option>
                                    <option value="GBP" data-symbol="£">GBP (£)</option>
                                </select>
                            </div>

                            <!-- Currency Pair -->
                            <div class="mb-3">
                                <label for="currency-pair" class="form-label">Currency Pair</label>
                                <select id="currency-pair" class="form-select">
                                    <option value="AUDUSD" data-rate="0.62003">AUD/USD</option>
                                    <option value="CHFJPY" data-rate="173.482">CHF/JPY</option>
                                    <option value="EURCHF" data-rate="0.93921">EUR/CHF</option>
                                    <option value="EURGBP" data-rate="0.83729">EUR/GBP</option>
                                    <option value="EURJPY" data-rate="162.944">EUR/JPY</option>
                                    <option value="EURUSD" data-rate="1.03028" selected>EUR/USD</option>
                                    <option value="GBPCHF" data-rate="1.12161">GBP/CHF</option>
                                    <option value="GBPJPY" data-rate="194.588">GBP/JPY</option>
                                    <option value="GBPUSD" data-rate="1.23038">GBP/USD</option>
                                    <option value="USDCAD" data-rate="1.44008">USD/CAD</option>
                                    <option value="USDCHF" data-rate="0.91159">USD/CHF</option>
                                    <option value="USDJPY" data-rate="158.147">USD/JPY</option>
                                    <option value="XAGUSD" data-rate="30.166">XAG/USD</option>
                                    <option value="XAUUSD" data-rate="2670.27">XAU/USD</option>
                                </select>
                            </div>

                            <!-- Trade Size -->
                            <div class="mb-3">
                                <label for="trade-size" class="form-label">Trade Size (Lots)</label>
                                <input type="number" id="trade-size" class="form-control" value="1" min="0.01" step="0.01">
                            </div>

                            <!-- Calculate Button -->
                            <div class="d-grid gap-2">
                                <button id="calculate-pip" class="btn btn-primary">Calculate Pip Amount</button>
                            </div>

                            <!-- Result -->
                            <div class="mt-4">
                                <h5>Pip Amount: <span id="pip-amount" class="text-success">$0.00</span></h5>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
@push('scripts')
<script>
    document.getElementById('calculate-pip').addEventListener('click', () => {
        const depositCurrencySelect = document.getElementById('deposit-currency');
        const depositCurrencySymbol = depositCurrencySelect.options[depositCurrencySelect.selectedIndex].dataset.symbol;
        const currencyPairSelect = document.getElementById('currency-pair');
        const tradeSize = parseFloat(document.getElementById('trade-size').value) || 0;

        const exchangeRate = parseFloat(currencyPairSelect.options[currencyPairSelect.selectedIndex].dataset.rate) || 1;
        const isJPYPair = currencyPairSelect.value.includes('JPY');

        // Pip in decimal form
        const pip = isJPYPair ? 0.01 : 0.0001;

        // Calculate pip amount
        const pipAmount = (pip * tradeSize * 100000) / exchangeRate;

        // Display result
        document.getElementById('pip-amount').textContent = `${depositCurrencySymbol}${pipAmount.toFixed(2)}`;
    });
</script>
@endpush
@endsection
