<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tokopedia</title>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />

    <link rel="stylesheet" href="{{ asset('css/lightslider.css') }}">
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
</head>

<body>
    <header style="z-index: 999;" class="py-4 px-10 shadow-md fixed top-0 w-full bg-white">
        <div class="relative w-full flex items-center justify-between">
            <a href="#" class="flex justify-center items-center">
                <img src="https://ecs7.tokopedia.net/assets-tokopedia-lite/v2/zeus/production/e5b8438b.svg" alt="">
            </a>
            <div class="flex justify-center items-center">
                <span
                    class="hover:bg-gray-200 hover:text-green-400 transition-all text-gray-400 duration-200 py-1 px-2 cursor-pointer rounded">kategori</span>
            </div>
            <div class="w-1/2">
                <form action="" class="relative group">
                    <input type="text"
                        class="border w-full border-gray-300 rounded-md px-3 py-1 text-sm focus:border-green-400 outline-none transition-all duration-200"
                        placeholder="Cari">
                    <span
                        class="text-gray-400 absolute px-2 py-1 rounded-r-md right-0 border border-l-0 border-green-400 h-full bg-gray-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path fill-rule="evenodd"
                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                clip-rule="evenodd" />
                        </svg>
                    </span>
                </form>
            </div>
            <div class="flex justify-between items-center">
                <div class="flex items-center justify-between space-x-5">
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                        </svg>
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path
                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                        </svg>
                    </a>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                            fill="currentColor">
                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                        </svg>
                    </a>
                </div>
                <div
                    class="flex justify-start items-center mx-5 text-gray-400 hover:bg-gray-200 hover:text-green-400
                    transition-all duration-200 rounded pr-10 pl-2 py-1 cursor-pointer">
                    <div class="flex justify-center items-center space-x-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-gray-600" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>Toko</span>
                    </div>
                </div>
                <div class="flex justify-center items-center space-x-2">
                    <span class="w-8 h-8 rounded-full bg-pink-500"></span>
                    <span>wahliyudin</span>
                </div>
            </div>
        </div>
        <div class="w-full flex justify-end pt-2">
            <div class="flex justify-between items-center w-4/5">
                <ul class="flex space-x-4 items-center">
                    <li>
                        <a class="text-gray-400 text-sm hover:text-green-600" href="#">Realme Gt</a>
                    </li>
                    <li>
                        <a class="text-gray-400 text-sm hover:text-green-600" href="#">Iphone 13 Pro Max</a>
                    </li>
                    <li>
                        <a class="text-gray-400 text-sm hover:text-green-600" href="#">Lemari Plastik</a>
                    </li>
                    <li>
                        <a class="text-gray-400 text-sm hover:text-green-600" href="#">Kipas Angin</a>
                    </li>
                    <li>
                        <a class="text-gray-400 text-sm hover:text-green-600" href="#">Kulkas Mini</a>
                    </li>
                    <li>
                        <a class="text-gray-400 text-sm hover:text-green-600" href="#">Kulkas 1 Pintu</a>
                    </li>
                </ul>
                <div class="flex text-gray-400 text-sm justify-center items-center space-x-2">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span>Dikirim ke <span class="text-gray-900 font-semibold">Rumah wahliyudin</span></span>
                </div>
            </div>
        </div>
    </header>
    <main class="mt-32 w-11/12 mx-auto z-0 flex flex-col space-y-5 mb-4">
        <div class="w-full h-72 relative rounded-md overflow-hidden shadow-md">
            <div id="carouselExampleIndicators" class="carousel slide relative h-72 rounded-md overflow-hidden"
                data-bs-ride="carousel">
                <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner relative w-full overflow-hidden">
                    <div class="carousel-item active float-left w-full">
                        <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="block w-full"
                            alt="Wild Landscape" />
                    </div>
                    <div class="carousel-item float-left w-full">
                        <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="block w-full"
                            alt="Camera" />
                    </div>
                    <div class="carousel-item float-left w-full">
                        <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="block w-full"
                            alt="Exotic Fruits" />
                    </div>
                </div>
                <button
                    class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                    type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button
                    class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                    type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="w-full shadow-md bg-white px-5 py-5 rounded-md">
            <div class="flex items-start w-full space-x-2">
                <div class="w-1/2">
                    <span class="text-2xl font-bold">Kategori Pilihan</span>

                    <div class="my-8 mr-5">
                        <ul id="category-slider">
                            <li>
                                <div style="height: 130px; width: 130px;"
                                    class="item bg-white rounded-md border border-gray-300">
                                </div>
                            </li>
                            <li>
                                <div style="height: 130px; width: 130px;"
                                    class="item bg-white rounded-md border border-gray-300">
                                </div>
                            </li>
                            <li>
                                <div style="height: 130px; width: 130px;"
                                    class="item bg-white rounded-md border border-gray-300">
                                </div>
                            </li>
                            <li>
                                <div style="height: 130px; width: 130px;"
                                    class="item bg-white rounded-md border border-gray-300">
                                </div>
                            </li>
                            <li>
                                <div style="height: 130px; width: 130px;"
                                    class="item bg-white rounded-md border border-gray-300">
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="w-1/2">
                    <span class="text-2xl font-bold">Kategori Pilihan <span
                            class="text-green-500 font-bold text-lg">Lihat Semua</span></span>

                    <div class="w-full rounded-md border border-gray-300 flex flex-col mt-8">
                        <ul class="flex items-center justify-between border-b border-gray-300">
                            <li>
                                <a href="" class="">
                                    Pulsa
                                </a>
                            </li>
                            <li>
                                <a href="" class="">
                                    Pulsa
                                </a>
                            </li>
                            <li>
                                <a href="" class="">
                                    Pulsa
                                </a>
                            </li>
                            <li>
                                <a href="" class="">
                                    Pulsa
                                </a>
                            </li>
                        </ul>

                        <div class="w-full p-4 flex items-center space-x-3">
                            <div class="flex flex-col space-y-3 w-1/2">
                                <span>Nomor Telepon</span>
                                <input type="text"
                                    class="rounded-md bg-white py-2 px-2 border border-gray-200 outline-none focus:border-green-400"
                                    placeholder="085693296980">
                            </div>
                            <div class="flex flex-col space-y-3 w-1/2">
                                <span>Nominal</span>
                                <div class="flex items-center space-x-3">
                                    <select name=""
                                        class="rounded-md w-full bg-gray-300 py-2 px-3 border border-gray-200 outline-none"
                                        id="">
                                    </select>
                                    <button class="px-3 py-2 rounded-md font-bold bg-gray-300">Beli</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="w-full">
                <ul id="featured-slider">
                    <li class="py-2">
                        <a href="#" class="border border-gray-300 px-3 py-2 rounded-full">
                            Kategori
                        </a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="border border-gray-300 px-3 py-2 rounded-full">
                            Handphone & Tablet
                        </a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="border border-gray-300 px-3 py-2 rounded-full">
                            Top-up & Tagihan
                        </a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="border border-gray-300 px-3 py-2 rounded-full">
                            Elektronik
                        </a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="border border-gray-300 px-3 py-2 rounded-full">
                            Travel & Entertainment
                        </a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="border border-gray-300 px-3 py-2 rounded-full">
                            Perawatan Hewan
                        </a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="border border-gray-300 px-3 py-2 rounded-full">
                            Keuangan
                        </a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="border border-gray-300 px-3 py-2 rounded-full">
                            Keuangan
                        </a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="border border-gray-300 px-3 py-2 rounded-full">
                            Keuangan
                        </a>
                    </li>
                    <li class="py-2">
                        <a href="#" class="border border-gray-300 px-3 py-2 rounded-full">
                            Keuangan
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="flex flex-col w-full divide-y-2 border-t border-gray-300">
            <div style="height: 550px;"
                class="flex flex-col justify-center space-y-20 bg-white rounded overflow-hidden">
                <div class="flex space-x-4 items-baseline">
                    <span class="text-2xl font-bold">
                        Traktiran Pengguna Baru
                    </span>

                    <span class="text-gray-400">
                        Berakhir dalam
                    </span>

                    <div class="flex items-center space-x-2">
                        <span class="py-2 px-2 bg-red-600 rounded-md text-white">
                            04
                        </span>
                        <span class="text-2xl text-red-600">:</span>
                        <span class="py-2 px-2 bg-red-600 rounded-md text-white">
                            04
                        </span>
                        <span class="text-2xl text-red-600">:</span>
                        <span class="py-2 px-2 bg-red-600 rounded-md text-white">
                            04
                        </span>
                    </div>

                    <span class="text-green-500 font-bold">Lihat Semua</span>
                </div>

                <div class="flex items-center w-full relative">
                    <div style="width: 300px;" class="rounded-md w-72 h-96 bg-green-500 absolute z-0"></div>

                    <ul id="traktiran-slider" class="z-10">
                        <ul>
                            <div class="rounded-md bg-transparent flex flex-col overflow-hidden">
                                <span class="h-72 w-48 bg-transparent"></span>
                            </div>
                        </ul>
                        <ul>
                            <div class="rounded-md bg-white flex flex-col shadow-md overflow-hidden">
                                <span class="h-72 w-48 bg-teal-500"></span>
                            </div>
                        </ul>
                        <ul>
                            <div class="rounded-md bg-white flex flex-col shadow-md overflow-hidden">
                                <span class="h-72 w-48 bg-teal-500"></span>
                            </div>
                        </ul>
                        <ul>
                            <div class="rounded-md bg-white flex flex-col shadow-md overflow-hidden">
                                <span class="h-72 w-48 bg-teal-500"></span>
                            </div>
                        </ul>
                        <ul>
                            <div class="rounded-md bg-white flex flex-col shadow-md overflow-hidden">
                                <span class="h-72 w-48 bg-teal-500"></span>
                            </div>
                        </ul>
                        <ul>
                            <div class="rounded-md bg-white flex flex-col shadow-md overflow-hidden">
                                <span class="h-72 w-48 bg-teal-500"></span>
                            </div>
                        </ul>
                        <ul>
                            <div class="rounded-md bg-white flex flex-col shadow-md overflow-hidden">
                                <span class="h-72 w-48 bg-teal-500"></span>
                            </div>
                        </ul>
                        <ul>
                            <div class="rounded-md bg-white flex flex-col shadow-md overflow-hidden">
                                <span class="h-72 w-48 bg-teal-500"></span>
                            </div>
                        </ul>
                        <ul>
                            <div class="rounded-md bg-white flex flex-col shadow-md overflow-hidden">
                                <span class="h-72 w-48 bg-teal-500"></span>
                            </div>
                        </ul>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col space-y-5 bg-white rounded overflow-hidden py-5">
                <div class="flex space-x-4 items-baseline">
                    <span class="text-2xl font-bold">
                        Kejar Diskon
                    </span>

                    <span class="text-gray-400">
                        Berakhir dalam
                    </span>

                    <div class="flex items-center space-x-2">
                        <span class="py-2 px-2 bg-red-600 rounded-md text-white">
                            04
                        </span>
                        <span class="text-2xl text-red-600">:</span>
                        <span class="py-2 px-2 bg-red-600 rounded-md text-white">
                            04
                        </span>
                        <span class="text-2xl text-red-600">:</span>
                        <span class="py-2 px-2 bg-red-600 rounded-md text-white">
                            04
                        </span>
                    </div>

                    <span class="text-green-500 font-bold">Lihat Semua</span>
                </div>

                <div class="py-8">
                    <ul id="discount-slider">
                        <li>
                            <div class="rounded-md bg-white flex flex-col shadow-md h-80 overflow-hidden">
                                <span class="h-1/2 w-52 bg-blue-500"></span>
                            </div>
                        </li>
                        <li>
                            <div class="rounded-md bg-white flex flex-col shadow-md h-80 overflow-hidden">
                                <span class="h-1/2 w-52 bg-blue-500"></span>
                            </div>
                        </li>
                        <li>
                            <div class="rounded-md bg-white flex flex-col shadow-md h-80 overflow-hidden">
                                <span class="h-1/2 w-52 bg-blue-500"></span>
                            </div>
                        </li>
                        <li>
                            <div class="rounded-md bg-white flex flex-col shadow-md h-80 overflow-hidden">
                                <span class="h-1/2 w-52 bg-blue-500"></span>
                            </div>
                        </li>
                        <li>
                            <div class="rounded-md bg-white flex flex-col shadow-md h-80 overflow-hidden">
                                <span class="h-1/2 w-52 bg-blue-500"></span>
                            </div>
                        </li>
                        <li>
                            <div class="rounded-md bg-white flex flex-col shadow-md h-80 overflow-hidden">
                                <span class="h-1/2 w-52 bg-blue-500"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="flex flex-col space-y-5 bg-white rounded overflow-hidden py-5">
                <div class="flex space-x-4 items-baseline">
                    <span class="text-2xl font-bold">
                        Berdasarkan pencarianmu
                    </span>

                    <span class="text-green-500 font-bold">Lihat Semua</span>
                </div>

                <div class="py-8">
                    <ul id="search-slider">
                        <li>
                            <div class="rounded-md bg-white flex flex-col shadow-md h-80 overflow-hidden">
                                <span class="h-1/2 w-52 bg-blue-500"></span>
                            </div>
                        </li>
                        <li>
                            <div class="rounded-md bg-white flex flex-col shadow-md h-80 overflow-hidden">
                                <span class="h-1/2 w-52 bg-blue-500"></span>
                            </div>
                        </li>
                        <li>
                            <div class="rounded-md bg-white flex flex-col shadow-md h-80 overflow-hidden">
                                <span class="h-1/2 w-52 bg-blue-500"></span>
                            </div>
                        </li>
                        <li>
                            <div class="rounded-md bg-white flex flex-col shadow-md h-80 overflow-hidden">
                                <span class="h-1/2 w-52 bg-blue-500"></span>
                            </div>
                        </li>
                        <li>
                            <div class="rounded-md bg-white flex flex-col shadow-md h-80 overflow-hidden">
                                <span class="h-1/2 w-52 bg-blue-500"></span>
                            </div>
                        </li>
                        <li>
                            <div class="rounded-md bg-white flex flex-col shadow-md h-80 overflow-hidden">
                                <span class="h-1/2 w-52 bg-blue-500"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>


        </div>
    </main>

    <script>
        $(document).ready(function() {
            $("#category-slider").lightSlider({
                autoWidth: true,
                loop: true,
                speed: 400, //ms'
                auto: true,
                slideEndAnimation: true,
                pause: 2000,
                onSliderLoad: function() {
                    $('#lightSlider').removeClass('cS-hidden');
                }
            });
            $("#discount-slider").lightSlider({
                autoWidth: true,
                loop: true,
                speed: 400, //ms'
                auto: true,
                slideEndAnimation: true,
                pause: 2000,
                keyPress: false,
                controls: true,
                prevHtml: '<span class="text-gray-300 w-10 h-10 bg-green-500 flex justify-center items-center font-bold rounded-full text-2xl"><</span>',
                nextHtml: '<span class="text-gray-300 w-10 h-10 bg-green-500 flex justify-center items-center font-bold rounded-full text-2xl">></span>',
                onSliderLoad: function() {
                    $('#lightSlider').removeClass('cS-hidden');
                }
            });
            $("#search-slider").lightSlider({
                autoWidth: true,
                loop: true,
                speed: 400, //ms'
                auto: true,
                slideEndAnimation: true,
                pause: 2000,
                keyPress: false,
                controls: true,
                prevHtml: '<span class="text-gray-300 w-10 h-10 bg-green-500 flex justify-center items-center font-bold rounded-full text-2xl"><</span>',
                nextHtml: '<span class="text-gray-300 w-10 h-10 bg-green-500 flex justify-center items-center font-bold rounded-full text-2xl">></span>',
                onSliderLoad: function() {
                    $('#lightSlider').removeClass('cS-hidden');
                }
            });
            $("#featured-slider").lightSlider({
                autoWidth: true,
                loop: false,
                keyPress: false,
                prevHtml: '<span class="text-gray-500 w-8 h-8 bg-gray-200 border border-gray-400 flex justify-center items-center font-bold rounded-full text-2xl"><</span>',
                nextHtml: '<span class="text-gray-500 w-8 h-8 bg-gray-200 border border-gray-400 flex justify-center items-center font-bold rounded-full text-2xl">></span>',
                onSliderLoad: function() {
                    $('#lightSlider').removeClass('cS-hidden');
                }
            });
            $("#traktiran-slider").lightSlider({
                autoWidth: true,
                loop: false,
                keyPress: false,
                controls: true,
                prevHtml: '<span class="text-gray-500 w-8 h-8 bg-gray-200 border border-gray-400 flex justify-center items-center font-bold rounded-full text-2xl"><</span>',
                nextHtml: '<span class="text-gray-500 w-8 h-8 bg-gray-200 border border-gray-400 flex justify-center items-center font-bold rounded-full text-2xl">></span>',
                onSliderLoad: function() {
                    $('#lightSlider').removeClass('cS-hidden');
                }
            });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
</body>

</html>
