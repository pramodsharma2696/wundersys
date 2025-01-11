@extends('master')
@section('contents')

<!-- page-title -->
<section class="page-title centred pt_90 pb_0">
    <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Forex Economic Calendar</h1>
            <ul class="bread-crumb clearfix">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Forex Economic Calendar</li>
            </ul>
        </div>
    </div>
</section>
<!-- page-title end -->

<section class="account-style-three pt_100 pb_70">
    <div class="auto-container">
    <h2 class="text-center mb-5">Forex Economic Calendar</h2>
    <p class="text-center mb-5">International economic events have a significant impact on the financial markets. When trading commodities, indices, cryptocurrencies or forex pairs, a thorough understanding of economic calendar events is crucial to limiting risk while maximizing profitability. </p>
    <div class="row my-4">
			<div class="col-lg-12">
				<iframe src="https://widget.myfxbook.com/widget/calendar.html?lang=en&amp;impacts=0,1,2,3&amp;symbols=AUD,CAD,CHF,CNY,EUR,GBP,JPY,NZD,USD " style="border: 0; width:100%; height:750px;"></iframe>
			</div>
		</div>
    </div>
</section>
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const data = {
            "FX Majors": [{
                    instrument: "AUDUSD",
                    rate: 0.61959
                },
                {
                    instrument: "EURUSD",
                    rate: 1.03063
                },
                {
                    instrument: "GBPUSD",
                    rate: 1.23085
                },
                {
                    instrument: "NZDUSD",
                    rate: 0.61543
                },
                {
                    instrument: "USDCAD",
                    rate: 1.44036
                },
                {
                    instrument: "USDCHF",
                    rate: 0.91141
                },
                {
                    instrument: "USDJPY",
                    rate: 157.823
                }
            ],
            "FX Minors": [{
                    instrument: "AUDCAD",
                    rate: 0.8723
                },
                {
                    instrument: "AUDCHF",
                    rate: 0.6550
                },
                {
                    instrument: "AUDJPY",
                    rate: 84.501
                },
                {
                    instrument: "AUDNZD",
                    rate: 1.0602
                },
                {
                    instrument: "CADCHF",
                    rate: 0.7430
                },
                {
                    instrument: "CADJPY",
                    rate: 87.492
                },
                {
                    instrument: "CHFJPY",
                    rate: 173.171
                }
            ],
            "FX Exotics": [{
                    instrument: "USDTHB",
                    rate: 35.062
                },
                {
                    instrument: "EURNOK",
                    rate: 11.285
                },
                {
                    instrument: "EURSEK",
                    rate: 11.476
                },
                {
                    instrument: "EURSGD",
                    rate: 1.4425
                },
                {
                    instrument: "EURTRY",
                    rate: 26.768
                },
                {
                    instrument: "GBPSGD",
                    rate: 1.8241
                },
                {
                    instrument: "NZDSGD",
                    rate: 0.8763
                }
            ],
            "Spot Metals": [{
                    instrument: "XAGUSD",
                    rate: 30.364
                },
                {
                    instrument: "XAUEUR",
                    rate: 2674.04
                },
                {
                    instrument: "XAUUSD",
                    rate: 2674.04
                }
            ]
        };

        const instrumentListContainer = document.querySelector('.instrument-btn-container');
        const totalMargin = document.getElementById('total-margin');
        const groupSelector = document.getElementById('group-selector');
        let instrumentsInTable = []; // Track instruments added to the table

        // Function to update the total margin
        function updateTotalMargin() {
            let total = 0;
            const marginCells = document.querySelectorAll('.margin-cell');
            marginCells.forEach(cell => {
                const margin = parseFloat(cell.textContent.replace('$', ''));
                if (!isNaN(margin)) {
                    total += margin;
                }
            });
            totalMargin.textContent = `$${total.toFixed(2)}`;
        }

        // Populate instrument list dynamically based on selected group
        function populateInstrumentList(group) {
            instrumentListContainer.innerHTML = ''; // Clear existing instruments
            const instruments = data[group];

            instruments.forEach(item => {
                const instrumentButton = document.createElement('button');
                instrumentButton.classList.add('btn', 'btn-outline-primary', 'instrument-btn');
                instrumentButton.textContent = item.instrument;
                instrumentButton.setAttribute('data-instrument', item.instrument);
                instrumentButton.setAttribute('data-rate', item.rate);

                const plusIcon = document.createElement('i');
                plusIcon.classList.add('bi', 'bi-plus-circle');
                instrumentButton.appendChild(plusIcon);

                instrumentListContainer.appendChild(instrumentButton);
            });
        }

        // Add instrument row to the table dynamically
        function addInstrumentToTable(instrument, rate) {
            const tableWrapper = document.createElement('div');
            tableWrapper.classList.add('margin-calculator_table');

            // Check if the header has already been added, if not, add it
            if (!document.querySelector('.margin-calculator_table .table-header')) {
                const headerRow = document.createElement('div');
                headerRow.classList.add('row', 'mb-3', 'table-header');
                headerRow.innerHTML = `
      <div class="col-md-4"><strong>Instrument</strong></div>
      <div class="col-md-2"><strong>Rate</strong></div>
      <div class="col-md-2"><strong>Size</strong></div>
      <div class="col-md-2"><strong>Value</strong></div>
      <div class="col-md-2"><strong>Margin</strong></div>
    `;
                tableWrapper.appendChild(headerRow);
            }

            // Define the structure of the table row for the instrument
            const row = document.createElement('div');
            row.classList.add('row');

            row.innerHTML = `
    <div class="col-md-4">
      <button type="button" class="btn btn-danger btn-sm margin-calculator_remove">X</button>
      <span>${instrument}</span>
    </div>
    <div class="col-md-2">
      <span>${rate}</span>
    </div>
    <div class="col-md-2">
      <input type="number" class="form-control size-input" min="0.1" step="0.01" value="1" data-rate="${rate}">
    </div>
    <div class="col-md-2 value-cell">
      $${(rate * 100000).toFixed(2)}
    </div>
    <div class="col-md-2 margin-cell">
      $${((rate * 100000) * 0.06).toFixed(2)}
    </div>
  `;

            // Append the row to the table (which is inside the container)
            tableWrapper.appendChild(row);
            document.querySelector('.container').appendChild(tableWrapper);

            instrumentsInTable.push({
                instrument: instrument,
                rate: rate,
                rowElement: row
            });

            const removeButton = row.querySelector('.margin-calculator_remove');
            removeButton.addEventListener('click', () => {
                // Remove the row from the table and the list of instruments
                tableWrapper.remove();
                instrumentsInTable = instrumentsInTable.filter(item => item.rowElement !== row);

                // Recalculate the margin after removal
                updateTotalMargin();
            });

            const sizeInput = row.querySelector('.size-input');
            sizeInput.addEventListener('input', () => {
                const size = parseFloat(sizeInput.value) || 1;
                const value = rate * size * 100000;
                const margin = value * 0.06;

                row.querySelector('.value-cell').textContent = `$${value.toFixed(2)}`;
                row.querySelector('.margin-cell').textContent = `$${margin.toFixed(2)}`;

                updateTotalMargin();
            });

            updateTotalMargin();
        }



        // Group selection change handler
        groupSelector.addEventListener('change', (event) => {
            populateInstrumentList(event.target.value);
        });

        // Instrument button click handler
        instrumentListContainer.addEventListener('click', (event) => {
            if (event.target.classList.contains('instrument-btn') || event.target.tagName.toLowerCase() === 'i') {
                const instrument = event.target.closest('button').getAttribute('data-instrument');
                const rate = parseFloat(event.target.closest('button').getAttribute('data-rate'));
                const button = event.target.closest('button');

                // Check if the instrument is already added to the table
                const instrumentIndex = instrumentsInTable.findIndex(item => item.instrument === instrument);

                if (instrumentIndex === -1) {
                    // If not already added, add it
                    addInstrumentToTable(instrument, rate);
                    button.classList.add('active'); // Mark button as active
                } else {
                    // If already added, remove it
                    instrumentsInTable[instrumentIndex].rowElement.remove();
                    instrumentsInTable.splice(instrumentIndex, 1);
                    button.classList.remove('active'); // Mark button as inactive
                }

                updateTotalMargin();
            }
        });

        // Initial population of instrument list based on default group
        populateInstrumentList(groupSelector.value);
    });
</script>
@endpush
@endsection