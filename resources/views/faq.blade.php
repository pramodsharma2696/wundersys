@extends('master')
@section('contents')

        <!-- page-title -->
        <section class="page-title centred pt_90 pb_0">
            <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Frequently asked question</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Frequently asked question</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- faq-section -->
        <section class="faq-section pt_90 pb_100">
            <div class="auto-container">
                <div class="sec-title pb_60 centred">
                    <span class="sub-title mb_14">FAQS</span>
                    <h2>General FAQ’s</h2>
                </div>
                <div class="inner-box">
                    <ul class="accordion-box">
                        <li class="accordion block active-block">
                            <div class="acc-btn active">
                                <div class="icon-box"><i class="icon-29"></i></div>
                                <h5>What is Forex?</h5>
                            </div>
                            <div class="acc-content current">
                                <div class="content">
                                <p>Forex, short for foreign exchange, refers to the global marketplace for buying and selling currencies. It's the largest and most liquid financial market in the world.</p>

                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="icon-29"></i></div>
                                <h5>How does Forex trading work?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                <p>Forex trading involves exchanging one currency for another at an agreed-upon exchange rate. Traders speculate on the price movements of currency pairs, trying to profit from the fluctuations in exchange rates.</p>

                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="icon-29"></i></div>
                                <h5> What are Commodities?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                <p>Commodities are raw materials or primary agricultural products that can be bought and sold. Common commodities include gold, oil, natural gas, agricultural products like wheat and coffee, and metals like silver.</p>

                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="icon-29"></i></div>
                                <h5>How do Commodities trading work?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                <p>Commodities trading involves buying and selling contracts for future delivery of goods like oil, gold, and agricultural products. Traders can speculate on the price movements in commodity markets.</p>

                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="icon-29"></i></div>
                                <h5> What are the types of commodities to trade?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                <p>The main categories of commodities include hard commodities like metals and energy resources (e.g., oil, gold, natural gas) and soft commodities like agricultural products (e.g., wheat, coffee, sugar).</p>

                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="icon-29"></i></div>
                                <h5>  What are Indices?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                <p>Indices are a measurement of a group of stocks that represent a particular sector or the overall market. Examples include the S&P 500, Dow Jones, and NASDAQ indices.</p>


                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="icon-29"></i></div>
                                <h5> How do Indices trading work?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                <p>Indices trading involves buying or selling contracts based on the price movements of indices. Traders speculate on the movement of the index as a whole rather than individual stocks within the index.</p>
                                

                                </div>
                            </div>
                        </li>
                        <li class="accordion block">
                            <div class="acc-btn">
                                <div class="icon-box"><i class="icon-29"></i></div>
                                <h5> What are the major global indices?</h5>
                            </div>
                            <div class="acc-content">
                                <div class="content">
                                <p>Major global indices include the S&P 500 (USA), the FTSE 100 (UK), the DAX (Germany), and the Nikkei 225 (Japan). These indices track the performance of the largest companies in their respective countries or regions.</p>


                                </div>
                            </div>
                        </li>
                       
                    </ul>
                </div>
            </div>
        </section>
        <!-- faq-section end -->

        @endsection