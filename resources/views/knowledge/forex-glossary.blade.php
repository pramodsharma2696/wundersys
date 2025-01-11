@extends('master')
@section('contents')
<style>
    .page div.block>div.content {
    display: block !important;
    width: auto;
    /* max-width: 1200px; */
    margin: 0 auto;
    padding: 25px 25px 10px;
}
</style>
<script src="{{ asset('') }}assets/forexdata/jquery-2.1.4.min.js"></script>
<script src="{{ asset('') }}assets/forexdata/angular/1.5.8/angular.min.js"></script>
<script src="{{ asset('') }}assets/forexdata/angular-sanitize.js"></script>
<link rel="stylesheet" href="{{ asset('') }}assets/forexdata/grossary.css">
<!-- <link rel="stylesheet" href="{{ asset('') }}assets/forexdata/all-main_38.css"> -->
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function() {
            $('#loading').hide();
            $('#content').show();
        }, 2000);

        $(document).on('click', '.alphabetic', function() {
            $('.alphabetic').removeClass('active');
            $(this).addClass('active');
        });
        $("#search-by-word").keyup(function() {
            $('.alphabetic').removeClass('active');
            $('.alphabetic.all').addClass('active');
        });

        $(document).on('click', '.glossary_block_item .term_item', function() {
            $(this).closest(".glossary_block_item").find('.term_desc').slideToggle();
            $(this).closest(".glossary_block_item").find('img').toggleClass('rotate');
        });
    });
</script>
<script type="text/javascript" src="{{ asset('') }}assets/forexdata/glossary_new_v2.js"></script>

             <!-- page-title -->
             <section class="page-title centred pt_90 pb_0">
            <div class="pattern-layer rotate-me" style="background-image: url(assets/images/shape/shape-34.png);"></div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>Forex Glossary</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li>Forex Glossary</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->

<div class="page">
    <div class="block sections">
        <div class="content glossary">
            <link rel="stylesheet" type="text/css" href="{{ asset('') }}assets/forexdata/additional_page_header_v14.css" />

            <div class="additional_page_header_aph">

                <div class="mf_header" style="background: url({{ asset('') }}assets/forexdata/forex_glossary_new.jpg)">
                    <div class="mfh_darken"></div>
                    <div class="mfh_text">
                        <h1 class="mfh_title" style="
               color: #fff;
               ">Forex Glossary</h1>
                        <div class="mfh_desc" style="
               color: #fff;
               ">Within the Trader’s Glossary section, you can find concepts and terms related to Forex that are used in the currency market. The Forex dictionary is organized in alphabetical order, making it easier to search for the required word with a detailed definition presented in an accessible and understandable form. We continuously add new Forex terms to the glossary as they emerge.</div>
                    </div>
                </div>
                <div ng-app="Glossary" ng-controller="glossaryController">
                    <div class="input_search_group">
                        <div class="input_search_block">
                            <img src="{{ asset('') }}assets/forexdata/search.png" alt>
                            <input type="text" id="search-by-word" placeholder="enter word..." ng-change="search('word')" ng-model="query" />
                            <div class="input_search_btn">
                                Search
                            </div>
                        </div>
                    </div>
                    <div class="glossary_letters_container">
                        <div class="glossary_letters">
                            <a href="javascript:void(0)" ng-click="search('')" class="all alphabetic active">All</a>
                            <a href="javascript:void(0)" ng-click="search('A')" class="alphabetic">A</a>
                            <a href="javascript:void(0)" ng-click="search('B')" class="alphabetic">B</a>
                            <a href="javascript:void(0)" ng-click="search('C')" class="alphabetic">C</a>
                            <a href="javascript:void(0)" ng-click="search('D')" class="alphabetic">D</a>
                            <a href="javascript:void(0)" ng-click="search('E')" class="alphabetic">E</a>
                            <a href="javascript:void(0)" ng-click="search('F')" class="alphabetic">F</a>
                            <a href="javascript:void(0)" ng-click="search('G')" class="alphabetic">G</a>
                            <a href="javascript:void(0)" ng-click="search('H')" class="alphabetic">H</a>
                            <a href="javascript:void(0)" ng-click="search('I')" class="alphabetic">I</a>
                            <a href="javascript:void(0)" ng-click="search('J')" class="alphabetic">J</a>
                            <a href="javascript:void(0)" ng-click="search('K')" class="alphabetic">K</a>
                            <a href="javascript:void(0)" ng-click="search('L')" class="alphabetic">L</a>
                            <a href="javascript:void(0)" ng-click="search('M')" class="alphabetic">M</a>
                            <a href="javascript:void(0)" ng-click="search('N')" class="alphabetic">N</a>
                            <a href="javascript:void(0)" ng-click="search('O')" class="alphabetic">O</a>
                            <a href="javascript:void(0)" ng-click="search('P')" class="alphabetic">P</a>
                            <a href="javascript:void(0)" ng-click="search('Q')" class="alphabetic">Q</a>
                            <a href="javascript:void(0)" ng-click="search('R')" class="alphabetic">R</a>
                            <a href="javascript:void(0)" ng-click="search('S')" class="alphabetic">S</a>
                            <a href="javascript:void(0)" ng-click="search('T')" class="alphabetic">T</a>
                            <a href="javascript:void(0)" ng-click="search('U')" class="alphabetic">U</a>
                            <a href="javascript:void(0)" ng-click="search('V')" class="alphabetic">V</a>
                            <a href="javascript:void(0)" ng-click="search('W')" class="alphabetic">W</a>
                            <a href="javascript:void(0)" ng-click="search('X')" class="alphabetic">X</a>
                            <a href="javascript:void(0)" ng-click="search('Y')" class="alphabetic">Y</a>
                            <a href="javascript:void(0)" ng-click="search('Z')" class="alphabetic">Z</a>
                        </div>
                    </div>
                    <div id="content">
                        <div class="glossary_items_container">
                            <div class="glossary_items" ng-repeat="term in pagedItems | filter : {'hide' : 0}">
                                <div class="glossary_letter"><% term.name %></div>
                                <div class="glossary_block">
                                    <div class="glossary_block_side">
                                        <div class="glossary_block_item" ng-repeat="item in term.data | filter : {'hide' : 0}" ng-if="$even">
                                            <div class="term_item"><span><% item.name %></span><img src="{{ asset('forex/chevron-down.png') }}" alt></div>
                                            <div class="term_desc"><% item.description %></div>
                                        </div>
                                    </div>
                                    <div class="glossary_block_side">
                                        <div class="glossary_block_item" ng-repeat="item in term.data | filter : {'hide' : 0}" ng-if="$odd">
                                            <div class="term_item"><span><% item.name %></span><img src="{{ asset('forex/chevron-down.png') }}" alt></div>
                                            <div class="term_desc"><% item.description %></div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="nothing_found" ng-if="pagedItems.length == 0">
                            <div>Sorry, no results were found for your search</div>
                            <img src="{{ asset('') }}assets/forexdata/404_img_2.gif" alt="icon">
                        </div>
                    </div>
                    <div id="loading" class="text-center"><img src="{{ asset('') }}assets/forexdata/loader.gif" alt="loading"></div>
                </div>



                <script src="{{ asset('') }}assets/forexdata/particles.min.js"></script>
                <div id="particles-js"></div>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        particlesJS('particles-js', {
                            "particles": {
                                "number": {
                                    "value": 80,
                                    "density": {
                                        "enable": true,
                                        "value_area": 800
                                    }
                                },
                                "color": {
                                    "value": "#ffffff"
                                },
                                "shape": {
                                    "type": "circle",
                                    "stroke": {
                                        "width": 0,
                                        "color": "#000000"
                                    },
                                    "polygon": {
                                        "nb_sides": 5
                                    }
                                },
                                "opacity": {
                                    "value": 0.5,
                                    "random": false,
                                    "anim": {
                                        "enable": false,
                                        "speed": 1,
                                        "opacity_min": 0.1,
                                        "sync": false
                                    }
                                },
                                "size": {
                                    "value": 3,
                                    "random": true,
                                    "anim": {
                                        "enable": false,
                                        "speed": 40,
                                        "size_min": 0.1,
                                        "sync": false
                                    }
                                },
                                "line_linked": {
                                    "enable": true,
                                    "distance": 150,
                                    "color": "#ffffff",
                                    "opacity": 0.4,
                                    "width": 1
                                },
                                "move": {
                                    "enable": true,
                                    "speed": 6,
                                    "direction": "none",
                                    "random": false,
                                    "straight": false,
                                    "out_mode": "out",
                                    "bounce": false,
                                    " attract": {
                                        "enable": false,
                                        "rotateX": 600,
                                        "rotateY": 1200
                                    }
                                }
                            },
                            "interactivity": {
                                "detect_on": "canvas",
                                "events": {
                                    "onhover": {
                                        "enable": true,
                                        "mode": "repulse"
                                    },
                                    "onclick": {
                                        "enable": true,
                                        "mode": "push"
                                    },
                                    "resize": true
                                }
                            },
                            "retina_detect": true
                        });
                    });
                </script>


                @endsection