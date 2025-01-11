<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class HomeController extends Controller
{
    public function __construct()
    {
        //
    }

    public function BasicTrading()
    {
        $baseurl = URL::to('/');
        $basicindicators = [
            [
                'title' => 'What is the financial market?',
                'content' => 'A financial market forms part of a global ecosystem and refers in general to any marketplace where financial assets are bought and sold.<br> There are physical stock exchanges in major financial centres, such as London, New York, Chicago, Tokyo, Sydney, Moscow, etc.<br><br> The trading sessions take place within the local business hours of these cities between Monday and Friday. <br> Trading can be a physical purchase of assets or through derivatives, both exchange and OTC traded, allowing traders from all over the world to buy and sell a variety of currencies and commodities via online platforms.',
                'image' => $baseurl . '/assets/image/kp/1.webp',
            ],
            [
                'title' => 'Trading Sessions',
                'content' => '
                        <p>A day on the financial market is divided into global trading sessions: the opening hours of the largest stock exchanges in the world. They open during daytime hours in the respective time zone of each exchange.</p><br>
                        <p>A Trading day begins with the Pacific session, then the Asian one overlaps it; the London session takes over and finally the American one.</p><br>
                        <p>In the hours when sessions overlap, the quotes change particularly rapidly, due to increased volatility (i.e. more market participants).</p>
                        ',
                'image' => $baseurl . '/assets/image/kp/2.webp',
            ],
            [
                'title' => 'How to trade on the FX markets?',
                'content' => 'FX is priced and available to trade 24/5, covering all exchange opening hours. The price of national currencies on the Forex market (for example, the US Dollar) reflects how the market perceives the current and future position of the national economy.<br>
                    If positive news is published, currency quotes will generally start to rise, whereas news that is perceived to be negative, will generally cause prices to fall.<br>
                    If you manage to open a ‘‘buy’’ trade via your online platform and wait until the price increases, you can make a profit, which will be added to your balance once the trade is closed. In cases where the forecast is not right and the chart goes down, your trade will be closed in the red.',
                'image' => $baseurl . '/assets/image/kp/3.webp',
            ],
            [
                'title' => 'Chart types',
                'content' => 'The prices of financial market assets are constantly changing. As soon as a new quote arrives at the trading platform, it forms the chart of which there are three main types: <br>

                    - Line chart<br>
                    - Bar chart<br>
                    - Japanese candlesticks <br>
                    
                    It is important to note, that on all FxPro trading platforms, charts are built from ‘’bid’’ prices only. The ‘’ask’’ price can be viewed as a horizontal line on the chart.',
                'image' => $baseurl . '/assets/image/kp/4.webp',
            ],
            [
                'title' => 'Price changing. Pips and Points',
                'content' => 'A ‘pip’ (point in percentage) is the smallest standard increment in which a currency pair can move. For almost all pairs, a pip is the fourth digit after the decimal point. A popular exception is the Japanese yen, where a pip is a change in the second digit after the decimal point.<br>
                This is an example of how pair quotes are displayed, and the pip for each pair is highlighted:<br>
                EUR/USD = 1.13422<br>GBP/CAD = 1.71791<br>USD/JPY = 110.771',
                'image' => $baseurl . '/assets/image/kp/5.webp',
            ],
            [
                'title' => 'Lots & Leverage',
                'content' => 'Leverage multiplies traders’ buying power, allowing investors to control a larger investment than their capital, potentially increasing their returns while only investing a percentage of the overall value of the asset in question.<br>
                <br>However, if you don’t use leverage wisely, it is possible to lose the entire Equity in a very short space of time– and you may not even notice it!<br><br>
                Therefore, leverage is a double-edged sword, and you need to consider how much risk you are willing to take.<br>The leverage available to you may vary depending on your Jurisdiction, please refer the FxPro ‘’Leverage Information’’ for details.',
                'image' => $baseurl . '/assets/image/kp/6.webp',
            ],
            [
                'title' => 'What is margin?',
                'content' => '‘Margin’ (or used margin) represents the amount of funds required to secure positions. When you place a trade, the ‘margin’ is locked in until the trade is closed.<br><br>
                The exact required margin amount depends on the instrument, the size of the position and the leverage.<br><br>To calculate it you can use the formula:
Trade size in units / Leverage = Margin in base currency
Trade size in units / Leverage X Exchange rate = Margin in quote currency <br><br>Note that the ‘Margin’ figure displayed in your account details represents the total used margin for all open trades<br>',
                'image' => $baseurl . '/assets/image/kp/7.webp',
            ],
            [
                'title' => 'What is a CFD?',
                'content' => '"CFD" stands for "contract for difference" and consists of an agreement (contract) to exchange the difference in the value of a currency, commodity, share or index between the time at which a contract is opened and the time at which it is closed. If the asset rises or falls in price, the buyer receives or earns cash from the seller.<br><br>
                CFD pricing is based on the movements of the underlying asset.<br><br>As a very simple example: if you buy a ‘contract for difference’ at $14 and sell at $16 then you will receive the $2 difference. If you buy a CFD at $10 and sell at $8 then you pay the $2 difference.
                <br><br>Basically, a CFD contract means that you are not physically exchanging currencies, nor purchasing any assets, but you are simply making profit or loss based on your speculation of the price movement.',
                'image' => $baseurl . '/assets/image/kp/8.webp',
            ],
            [
                'title' => 'How to start CFD trading?',
                'content' => '<h5>STEP 1. Register & choose a platform</h5><br>
                 Open an account for the platform you prefer (we recommend a ‘demo’ account if you are new to trading) and specify your leverage and base currency.<br><br>
                 <h5>STEP 2: Choose your asset type or instrument</h5><br>
                 Consider which instrument(s) you wish to trade on and make sure you understand the specifications and trading conditions.<br><br>
                <h5> STEP 3. Decide on your trading direction</h5><br>
                In simple terms:
                -Buy if you think the price will go up.<br>
                -Sell if you think that quotes will decrease.<br>

                It is important to make your decision based on your trading strategy, i.e. by using Fundamental or Technical Analysis, technical indicators or EAs etc
',
                'image' => $baseurl . '/assets/image/kp/9.webp',
            ],
        ];

        return view('knowledge.basics-trading', compact('basicindicators'));
    }
    public function FundamentalAnalysis()
    {
        $baseurl = URL::to('/');
        $basicindicators = [
            [
                'title' => 'What is fundamental analysis?',
                'content' => 'Every trader wants to know where the price will go. However, in order to get the most realistic answer to this question, it is necessary not only to observe the chart on the trading platform but also to constantly monitor what is happening in the world. In this, fundamental analysis helps traders.<br><br>
                A key referendum, the president’s commentary or a negative statistics publication can have a dramatic effect on the national currency rate.<br><br>
                You may have heard phrases like: “The pound fell on the news ... The euro against the dollar jumped up due to the news ...”. Such statements are used by the experts in their daily fundamental market analysis and reviews..',
                'image' => $baseurl . '/assets/image/kp/f1.webp',
            ],
            [
                'title' => 'Leading and lagging economic indicators',
                'content' => "Leading indicators <br>
                Indicators of this type help to make a forecast about future country's economy changes. Any shifts in their values warn that we will soon see a similar negative (or positive) effect in other national sectors.<br><br>
                So you can predict, for example, the impending recession, as Central Banks representatives usually do: they determine in advance the vector of development and adjust the monetary policy by raising or lowering rates. The same data is used by private traders to adjust their strategies.",
                'image' => $baseurl . '/assets/image/kp/f2.webp',
            ],
            [
                'title' => 'Major economic indicators. Part 1',
                'content' => 'Open the economic calendar at fxpro.com and find major economic indicators with two or three exclamation marks. These are publications of statistical data that have the strongest influence on the currencies of the related countries.<br><br>
                Typically, traders pay attention to the difference between the actual value and the forecast. The more this difference the more volatility could occur on the price chart of a dependent asset. Most often, it is the national currency of that country the news is published.',
                'image' => $baseurl . '/assets/image/kp/f3.webp',
            ],
            [
                'title' => 'Major economic indicators. Part 2',
                'content' => 'Interest rate decision <br>
                 What is it?: Central banks regulate the rate at which they issue loans to the rest of the national commercial banks. It depends on the rate level how profitable it will be for foreign investors to invest in the national currency.<br><br>
                 When is the data published: each quarter by the eight major central banks (US Federal Reserve, European Central Bank, Bank of England, Japan, Switzerland, England, Australia and New Zealand).',

                'image' => $baseurl . '/assets/image/kp/f4.webp',
            ],
           
        ];

        return view('knowledge.fundamental-analysis', compact('basicindicators'));
    }

    public function TechnicalAnalysis()
    {
        $baseurl = URL::to('/');
        $basicindicators = [
            [
                'title' => 'Trend lines',
                'content' => 'Trend line is a basic indicator of technical analysis. Its main purpose is to determine (and emphasize) the present price direction.<br><br>
                To put this indicator on the chart, define at least two highest and two lowest points, then connect them with the Trend Line tool on the FxPro platform.',
                'image' => $baseurl . '/assets/image/kp/t1.webp',
            ],
            [
                'title' => 'Support and resistance levels',
                'content' => "Look here, we put two levels on the chart. Unlike the trend line, support (below) and resistance (above) are always horizontal.<br><br>
                To build these levels by yourself, you need to determine the points where the constant price stop is regularly taking place.<br><br>
                The chart on the right displays the resistance level is an upper limit of the price channel, and the support level is its lower border.",
                'image' => $baseurl . '/assets/image/kp/t2.webp',
            ],
            [
                'title' => 'What are channels and how to put them on',
                'content' => 'In technical analysis, trading channels are another tool by which to determine the exact right moment to open a trade. Mainly, they appear on the chart due to the Trend lines.<br><br>
                Mostly, it is an area between two parallel lines within an uptrend/downtrend.',
                'image' => $baseurl . '/assets/image/kp/t3.webp',
            ],
            [
                'title' => 'Major patterns',
                'content' => "You'd be surprised, but price charts often draw certain shapes, which are called graphic models (or patterns).<br><br>
                At first glance, finding such models on a live chart may seem rather difficult. However, with days of practice, you will learn to determine which figure is being formed right now and make trading decisions based on this information.<br>",

                'image' => $baseurl . '/assets/image/kp/t4.webp',
            ],
           
        ];

        return view('knowledge.technical-analysis', compact('basicindicators'));
    }
    public function Psychology()
    {
        $baseurl = URL::to('/');
        $basicindicators = [
            [
                'title' => 'Blindfolded on a Mountain Range',
                'content' => 'Open your trading platform to an asset that you normally trade. Look at the last candlestick. Do you think the next one will close higher or lower than the current one? How about the one after? If you use any analytical tools what are they telling you? Do you have an idea of where the next few candles will take the price of this asset?<br><br>
                Perhaps your various methods of analysis, such as technical indicators, trend lines or candlestick patterns, are telling you something about how high or low the current price is, relative to recent price action. Maybe this information is not directly related to the forex trading psychology, but it could provide you with an insight of what is likely to happen to the price in the forthcoming minutes/hours/days.',
                'image' => $baseurl . '/assets/image/kp/p1.webp',
            ],
            [
                'title' => 'Novice traders mistakes',
                'content' => "Mistake 1: You trade practically non-stop, trying to open as many positions as possible. You constantly sit in front of the platform and try to catch even the slightest price changes.<br><br>
                What it leads to: Your action begin to become more chaotic, leading to negative results. This is due a potentially large number of rushed trades and irresponsible money management.<br><br>
                How to avoid: Remember that the financial market is the place where the number of open trades does not matter. It is better to practise quality over quantity.<br>
                ",
                'image' => $baseurl . '/assets/image/kp/p2.webp',
            ],
            [
                'title' => 'Trading: from competency to skill',
                'content' => 'To be competent means to have the necessary theoretical and practical knowledge in order to engage in stable and effective trading. However, this is not enough for a real breakthrough: you need to become a master – i.e. gain an understanding of the connection between "knowledge" and "action".<br><br>
                Competence is necessary but not enough to be considered a master.<br
                In practice, basic knowledge helps you to stay “afloat” until the moment when trading begins to bring the desired results.<br>>',
                'image' => $baseurl . '/assets/image/kp/p3.webp',
            ],
            [
                'title' => 'Escalation of Commitment and the Sunk Cost Fallacy',
                'content' => "The more you research into human cognition, the more questionable you become about what you take for granted. Features of your mind that you may have regarded as utterly rational, are demonstrated as huge cognitive blind spots that we're actually all afflicted with to some degree. Once you realise that your decision-making faculties, your ability to categorise incoming data, and even the veracity of your own memories can be compromised, it becomes clear just what a monumental project becoming a trader is.<br>",

                'image' => $baseurl . '/assets/image/kp/p4.webp',
            ],
           
        ];

        return view('knowledge.psychology', compact('basicindicators'));
    }
}
