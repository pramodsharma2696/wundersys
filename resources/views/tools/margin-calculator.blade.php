@extends('master')
@section('contents')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    .margin-calculator_remove {
        cursor: pointer;
        /* color: red; */
    }

    .margin-calculator_remove:hover {
        text-decoration: underline;
    }

    .responsive-table_th-wrapper {
        margin-bottom: 20px;
    }

    .instrument-btn {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-right: 8px;
        margin-bottom: 8px;
    }

    .instrument-btn i {
        margin-left: 8px;
    }

    .instrument-btn-container {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .table th,
    .table td {
        vertical-align: middle;
    }

    .table .instrument-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .table .instrument-row .col {
        padding: 0.5rem;
    }

    .instrument-btn.active {
        background-color: #007bff;
        /* Blue background for active state */
        color: white;
        /* White text for active state */
        border-color: #0056b3;
        /* Darker border when active */
    }

    .instrument-btn.active i {
        color: white;
        /* White icon for active state */
    }

    input.form-control.size-input {
        margin-bottom: 10px;
    }

    .nice-select .list {
        min-width: 100%;
    }

    /* calcs */
    @media (max-width: 767px) {
        .margin-calculator_table {
            display: none;
        }
    }
</style>
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

<section class="account-style-three pt_100 pb_70">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 content-column pb-70">
                <div class="content_block_eight">
                    <div class="container py-5">
                        <h2 class="text-center mb-5">Margin Calculator</h2>

                        <!-- Account Currency and Group Selectors -->
                        <div class="row mb-3">
                            <!-- Account Currency -->
                            <div class="col-md-3">
                                <label for="currency-selector" class="form-label">Account Currency</label>
                                <select id="currency-selector" class="form-select">
                                    <option value="USD" selected>USD</option>
                                </select>
                            </div>

                            <!-- FX Majors -->
                            <div class="col-md-3">
                                <label for="major-group-selector" class="form-label">FX Majors</label>
                                <select id="fx-majors-group-selector" class="form-select searchable-select">
                                    <option value="" selected>-- Select FX Majors --</option>
                                </select>
                            </div>

                            <!-- FX Minors -->
                            <div class="col-md-2">
                                <label for="minors-group-selector" class="form-label">FX Minors</label>
                                <select id="fx-minors-group-selector" class="form-select searchable-select">
                                    <option value="" selected>-- Select FX Minors --</option>
                                </select>
                            </div>

                            <!-- FX Exotics -->
                            <div class="col-md-2">
                                <label for="exotics-group-selector" class="form-label">FX Exotics</label>
                                <select id="fx-exotics-group-selector" class="form-select searchable-select">
                                    <option value="" selected>-- Select FX Exotics --</option>
                                </select>
                            </div>

                            <!-- Spot Metals -->
                            <div class="col-md-2">
                                <label for="spot-group-selector" class="form-label">Spot Metals</label>
                                <select id="spot-metals-group-selector" class="form-select searchable-select">
                                    <option value="" selected>-- Select Spot Metals --</option>
                                </select>
                            </div>
                        </div>

                        <!-- Instrument List -->
                        <div id="instrument-list" class="mb-4">
                            <div class="instrument-btn-container">
                                <!-- Dynamic instruments will appear here -->
                            </div>
                            <div class="margin-calculator_table">
                                <!-- Default header row -->
                                <div class="row mb-2">
                                    <div class="col-md-4"><strong>Instrument</strong></div>
                                    <div class="col-md-2"><strong>Rate</strong></div>
                                    <div class="col-md-1"><strong>Size</strong></div>
                                    <div class="col-md-2"><strong>Value</strong></div>
                                    <div class="col-md-2"><strong>Margin</strong></div>
                                    <div class="col-md-1 text-center"></div>
                                </div>
                            </div>
                            <div class="margin-calculator_table_mobile d-md-none">

                            </div>


                        </div>

                        <!-- Total Margin -->
                        <div class="row mt-3">
                            <div class="col-12 text-end">
                                <h5 style="margin-bottom: 50px;">
                                    Total: <span id="total-margin" class="text-primary">$0.00</span>
                                </h5>
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
        const data = {
            "Fx Majors": [{
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
            "Fx Minors": [{
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
                    instrument: "AUDUSD",
                    rate: 0.7430
                },
                {
                    instrument: "CADCHF",
                    rate: 87.492
                },
                {
                    instrument: "CADJPY",
                    rate: 173.171
                },
                {
                    instrument: "EURNOK",
                    rate: 173.171
                },
                {
                    instrument: "EURNZD",
                    rate: 173.171
                },
                {
                    instrument: "GBPAUD",
                    rate: 173.171
                },
                {
                    instrument: "GBPCAD",
                    rate: 173.171
                },
                {
                    instrument: "GBPCHF",
                    rate: 173.171
                },
                {
                    instrument: "GBPNZD",
                    rate: 173.171
                },
                {
                    instrument: "NZDCAD",
                    rate: 173.171
                },
                {
                    instrument: "NZDCHF",
                    rate: 173.171
                },
                {
                    instrument: "NZDJPY",
                    rate: 173.171
                },
                {
                    instrument: "USDMXN",
                    rate: 173.171
                },
                {
                    instrument: "USDZAR",
                    rate: 173.171
                },
                {
                    instrument: "CHFJPY",
                    rate: 173.171
                }
            ],
            "Fx Exotics": [{
                    instrument: "EURSEK",
                    rate: 11.476
                },
                {
                    instrument: "USDCNH",
                    rate: 11.285
                },
                {
                    instrument: "EURNOK",
                    rate: 11.285
                },
                {
                    instrument: "USDSEK",
                    rate: 1.4425
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

        const totalMargin = $("#total-margin");
        const tableContainer = $(".margin-calculator_table");
        const tableContainer2 = $(".margin-calculator_table_mobile");
        let instrumentsInTable = [];

        // Function to initialize Select2 for all select elements
        function initializeSelect2() {
            console.log("Initializing Select2...");
            $("select").select2({
                placeholder: "Select an option",
                allowClear: true,
                width: "100%"
            }).on('select2:select', function() {
                console.log("Dropdown selected:", $(this).val());

                // Extract and format the group name
                const group = toTitleCase($(this).attr("id").replace("-group-selector", "").replace("-", " ")).trim();

                // Log the group name and data
                console.log("Group derived:", group);
                console.log("data[group] =", data[group]);

                // Find instrument data
                const instrumentData = data[group]?.find(item => item.instrument === $(this).val());
                console.log("Selected instrument:", $(this).val(), "==", instrumentData);

                // Add instrument to table if found
                if (instrumentData) {
                    console.log("Instrument selected:", instrumentData.instrument);
                    addInstrumentToTable(instrumentData.instrument, instrumentData.rate);
                } else {
                    console.log("No instrument data found for group:", group);
                }
            });
        }


        // Function to convert a string to title case
        function toTitleCase(str) {
            return str.replace(/\b\w/g, function(char) {
                return char.toUpperCase();
            });
        }

        // Function to dynamically populate data into select tags
        // Function to dynamically populate data into select tags
        function populateSelectTags() {
            console.log("Populating Select Tags...");

            Object.keys(data).forEach(group => {
                // Format the group name to match the HTML element IDs
                const dropdownId = `${group.replace(" ", "-").toLowerCase()}-group-selector`;
                const dropdown = $(`#${dropdownId}`);

                dropdown.empty(); // Clear existing options
                dropdown.append(new Option(`-- Select ${group} --`, "")); // Placeholder

                // Check if the group exists in the data and populate the dropdown
                if (data[group]) {
                    data[group].forEach(item => {
                        dropdown.append(new Option(item.instrument, item.instrument));
                    });
                }
            });
        }


        // Function to add selected instrument to the table
        function addInstrumentToTable(instrument, rate) {
            console.log("Adding instrument to table:", instrument);

            // Check if the instrument is already in the table
            if (instrumentsInTable.includes(instrument)) {
                console.log("Instrument already in table:", instrument);
                alert("This instrument is already added.");
                return;
            }

            const row = $(`
                <div class="row mb-2">
                    <div class="col-md-4"><strong>${instrument}</strong></div>
                    <div class="col-md-2">${rate}</div>
                    <div class="col-md-1">
                        <input type="number" class="form-control size-input" min="0.1" step="0.01" value="1" data-rate="${rate}">
                    </div>
                    <div class="col-md-2 value-cell">$${(rate * 100000).toFixed(2)}</div>
                    <div class="col-md-2 margin-cell">$${((rate * 100000) * 0.06).toFixed(2)}</div>
                    <div class="col-md-1 text-center">
                    <button class="btn btn-danger btn-sm remove-btn">
                        <i class="fa fa-remove"></i>
                    </button>
                </div>
                </div>
            `);
            const row2 = $(`
                    <div class="row mb-2 d-md-none">
                        <div class="col-12"><strong>Instrument:</strong> ${instrument}</div>
                        <div class="col-12"><strong>Rate:</strong> ${rate}</div>
                        <div class="col-12"><strong>Size:</strong> <input type="number" class="form-control size-input" min="0.1" step="0.01" value="1" data-rate="${rate}"></div>
                        <div class="col-12"><strong>Value:</strong> $${(rate * 100000).toFixed(2)}</div>
                        <div class="col-12"><strong>Margin:</strong> $${((rate * 100000) * 0.06).toFixed(2)}</div>
                        <div class="col-12 text-center">
                            <button class="btn btn-danger btn-sm remove-btn">
                                <i class="fa fa-remove"></i>
                            </button>
                        </div>
                    </div>
                `);

            // Append the row to the correct container (tableContainer)
            tableContainer.append(row);
            tableContainer2.append(row2);
            instrumentsInTable.push(instrument);

            // Handle size input changes
            row.find(".size-input").on("input", function() {
                const size = parseFloat($(this).val()) || 1;
                const value = rate * size * 100000;
                const margin = value * 0.06;

                console.log("Size input changed. Value:", value, "Margin:", margin);

                row.find(".value-cell").text(`$${value.toFixed(2)}`);
                row.find(".margin-cell").text(`$${margin.toFixed(2)}`);
                updateTotalMargin();
            });
            row2.find(".size-input").on("input", function() {
                const size = parseFloat($(this).val()) || 1;
                const value = rate * size * 100000;
                const margin = value * 0.06;

                console.log("Size input changed. Value:", value, "Margin:", margin);

                row2.find(".value-cell").text(`$${value.toFixed(2)}`);
                row2.find(".margin-cell").text(`$${margin.toFixed(2)}`);
                updateTotalMargin();
            });

            // Handle remove button click
            row.find(".remove-btn").on("click", function() {
                row.remove();
                instrumentsInTable = instrumentsInTable.filter(item => item !== instrument);
                updateTotalMargin();
            });
            row2.find(".remove-btn").on("click", function() {
                row2.remove();
                instrumentsInTable = instrumentsInTable.filter(item => item !== instrument);
                updateTotalMargin();
            });

            updateTotalMargin();
        }

        // Function to update total margin
        function updateTotalMargin() {
            let total = 0;
            $(".margin-cell").each(function() {
                const margin = parseFloat($(this).text().replace("$", ""));
                if (!isNaN(margin)) total += margin;
            });
            console.log("Total Margin Updated: $", total.toFixed(2));
            totalMargin.text(`$${total.toFixed(2)}`);
        }

        // Initialize dropdowns and attach change event handlers
        function initialize() {
            populateSelectTags();
            initializeSelect2();
        }

        // Run initialization
        initialize();
    });
</script>

@endpush
@endsection