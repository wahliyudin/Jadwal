<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Design</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        body {
            background-color: #eef8ff;
        }

        .box {
            width: 250px;
            box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.2);
            border-radius: 10px;
            overflow: hidden;
            margin: 25px;
        }

        .slide-img {
            height: 300px;
            position: relative;
        }

        .slide-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            box-sizing: border-box;
        }

        .detail-box {
            width: 100%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 20px;
            box-sizing: border-box;
        }

        .type {
            display: flex;
            flex-direction: column;
        }

        .type a {
            color: #222222;
            margin: 5px 0px;
            font-weight: 700;
            letter-spacing: 0.5px;
            padding-right: 8px;
        }

        .type span {
            color: rgba(26, 26, 26, 0.5);
        }

        .price {
            color: #333333;
            font-weight: 600;
            font-size: 1.1rem;
            letter-spacing: 0.5px;
        }

        .overlay {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            width: 100%;
            height: 100%;
            background-color: rgba(92, 95, 236, 0.6);
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .buy-btn {
            width: 160px;
            height: 40px;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #ffffff;
            color: #252525;
            font-weight: 700;
            letter-spacing: 1px;
            border-radius: 20px;
            box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.2);
        }

        .buy-btn:hover {
            color: #ffffff;
            background-color: #f15fa3;
            transition: all ease 0.3s;
        }

        .overlay {
            visibility: hidden;
        }

        .slide-img:hover .overlay {
            visibility: visible;
            animation: fade 0.5s;
        }

        @keyframes fade {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        .slider {
            width: 100%;
            height: 60vh;
            justify-content: center;
            align-items: center;
        }

    </style>
    <link rel="stylesheet" href="{{ asset('css/lightslider.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
</head>

<body>
    <section class="slider">
        <ul id="lightSlider">
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 1</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 2</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 3</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 4</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 5</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 6</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 7</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 8</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <section class="slider">
        <ul id="lightSlider2">
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 1</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 2</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 3</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 4</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 5</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 6</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 7</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
            <li>
                <div class="box">
                    <div class="slide-img">
                        <img src="{{ asset('images/WhatsApp Image 2021-12-13 at 10.56.26.jpeg') }}" alt="">
                        <div class="overlay">
                            <a href="#" class="buy-btn">Buy Now</a>
                        </div>
                    </div>
                    <div class="detail-box">
                        <div class="type">
                            <a href="#">Rabbed Cardigan 8</a>
                            <span>Noe Arrival</span>
                        </div>

                        <a href="#" class="price">$24</a>
                    </div>
                </div>
            </li>
        </ul>
    </section>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#lightSlider").lightSlider({
                autoWidth: true,
                loop: false,
                keyPress: false,
                controls: true,
                prevHtml: '<span class="text-gray-300 w-10 h-10 bg-green-500 flex justify-center items-center font-bold rounded-full text-2xl"><</span>',
                nextHtml: '<span class="text-gray-300 w-10 h-10 bg-green-500 flex justify-center items-center font-bold rounded-full text-2xl">></span>',
                onSliderLoad: function() {
                    $('#lightSlider').removeClass('cS-hidden');
                }
            });
            $("#lightSlider2").lightSlider({
                autoWidth: true,
                loop: false,
                keyPress: false,
                controls: true,
                prevHtml: '<span class="text-gray-300 w-10 h-10 bg-green-500 flex justify-center items-center font-bold rounded-full text-2xl"><</span>',
                nextHtml: '<span class="text-gray-300 w-10 h-10 bg-green-500 flex justify-center items-center font-bold rounded-full text-2xl">></span>',
                onSliderLoad: function() {
                    $('#lightSlider').removeClass('cS-hidden');
                }
            });
        });
    </script>
</body>

</html>
