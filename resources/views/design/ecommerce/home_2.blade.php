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

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/tokopedia/home-2.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
</head>

<body class="overflow-x-hidden">

    <header class="w-screen">
        <div class="flex justify-between items-center py-2 px-32 border-b text-xs">
            <span class="text-md">Welcome to Bigshop ecommerce template</span>
            <div class="flex items-center justify-between divide-x-2 divide-gray-500 space-x-2">
                <div class="flex space-x-1 items-center relative cursor-pointer btn-nav-one">
                    <span class="text-xs">ENGLISH</span>
                    <i class='bx bxs-down-arrow text-xs'></i>
                    <ul style="transform: translateY(10px);"
                        class="absolute shadow-md py-2 mt-24 right-0 bg-gray-50 rounded-md space-y-1 divide-y opacity-0 transform transition-all duration-500 item-nav-one z-20 invisible">
                        <li class="px-4">
                            <a href="#" class="text-sm hover:text-blue-500">Indonesia</a>
                        </li>
                        <li class="px-4">
                            <a href="#" class="text-sm hover:text-blue-500">Inggris</a>
                        </li>
                    </ul>
                </div>
                <div class="flex space-x-1 px-2 items-center relative cursor-pointer btn-nav-tuo">
                    <span class="text-xs">$ USD</span>
                    <i class="bx bxs-down-arrow text-xs"></i>
                    <ul style="transform: translateY(10px);"
                        class="absolute shadow-md py-2 mt-24 left-0 bg-gray-50 rounded-md space-y-1 divide-y opacity-0 transform transition-all duration-500 item-nav-tuo z-20 invisible">
                        <li class="px-4">
                            <a href="#" class="text-xs hover:text-blue-500 whitespace-no-wrap">Rp IDN</a>
                        </li>
                        <li class="px-4">
                            <a href="#" class="text-sm hover:text-blue-500">Inggris</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="shadow-sm w-full px-32 z-0">
            <div class="flex justify-between items-center">
                <div class="flex items-center w-2/3 justify-between">
                    <span class="text-2xl font-bold py-4">LOGO</span>
                    <ul class="flex justify-center items-center space-x-6 text-sm">
                        <li class="relative cursor-pointer btn-nav-home py-4">
                            <a href="#" class="flex justify-center items-center hover:text-blue-500">
                                <span>HOME</span>
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </a>
                            <ul style="transform: translateY(10px); z-index: 99;"
                                class="absolute bg-white shadow-md mt-6 py-2 w-44 rounded-md space-y-2 divide-y opacity-0 transform transition-all duration-500 item-nav-home z-50 invisible">
                                <li class="px-4 py-2 hover:text-blue-500">
                                    <a href="#">
                                        <span class="text-sm">HOME - 1</span>
                                    </a>
                                </li>
                                <li class="px-4 py-2 hover:text-blue-500">
                                    <a href="#">
                                        <span class="text-sm">HOME - 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="relative cursor-pointer btn-nav-shop py-4">
                            <a href="#" class="flex justify-center items-center hover:text-blue-500">
                                <span>SHOP</span>
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </a>
                            <ul style="transform: translateY(10px); z-index: 99;"
                                class="absolute bg-white mt-6 shadow-md py-2 w-44 rounded-md space-y-2 divide-y opacity-0 transform transition-all duration-500 item-nav-shop z-50 invisible">
                                <li class="px-4 py-2 relative btn-nav-sub-shop">
                                    <a href="#" class="flex justify-between hover:text-blue-500 items-center">
                                        <span class="text-sm">HOME - 1</span>
                                        <i class='bx bx-chevron-right text-xl'></i>
                                    </a>
                                    <ul style="transform: translateY(10px); z-index: 99;"
                                        class="item-nav-sub-shop absolute bg-white top-0 left-44 shadow-md py-2 w-56 rounded-md space-y-2 divide-y opacity-0 transform transition-all duration-500 item-nav-sub-shop z-50 invisible">
                                        <li class="px-4 py-2 hover:text-blue-500">
                                            <a href="#">
                                                <span class="text-sm">SHOP GRID LEFT SIDEBAR</span>
                                            </a>
                                        </li>
                                        <li class="px-4 py-2 hover:text-blue-500">
                                            <a href="#">
                                                <span class="text-sm">SHOP GRID LEFT SIDEBAR</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="px-4 py-2 hover:text-blue-500">
                                    <a href="#">
                                        <span class="text-sm">HOME - 2</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="py-4 btn-nav-pages">
                            <a href="#" class="flex justify-center items-center hover:text-blue-500">
                                <span>PAGES</span>
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </a>
                            <div style="width: 1120px;transform: translateY(10px); z-index: 99;"
                                class="shadow-md rounded-md bg-white px-8 py-5 absolute mt-6 left-1/12 opacity-0 transform transition-all duration-500 item-nav-pages z-50 invisible">
                                <div class="flex justify-between">
                                    <ul class="flex flex-col space-y-2">
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                    </ul>
                                    <ul class="flex flex-col space-y-2">
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                    </ul>
                                    <div class="w-1/2 bg-blue-500 rounded-md overflow-hidden">
                                        <div id="carouselExampleControls" class="carousel slide relative"
                                            data-bs-ride="carousel">
                                            <div class="carousel-inner relative w-full overflow-hidden">
                                                <div class="carousel-item active relative float-left w-full">
                                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"
                                                        class="block w-full" alt="Wild Landscape" />
                                                </div>
                                                <div class="carousel-item relative float-left w-full">
                                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
                                                        class="block w-full" alt="Camera" />
                                                </div>
                                                <div class="carousel-item relative float-left w-full">
                                                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
                                                        class="block w-full" alt="Exotic Fruits" />
                                                </div>
                                            </div>
                                            <button
                                                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                                                type="button" data-bs-target="#carouselExampleControls"
                                                data-bs-slide="prev">
                                                <span class="carousel-control-prev-icon inline-block bg-no-repeat"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <button
                                                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                                                type="button" data-bs-target="#carouselExampleControls"
                                                data-bs-slide="next">
                                                <span class="carousel-control-next-icon inline-block bg-no-repeat"
                                                    aria-hidden="true"></span>
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="relative btn-nav-blog py-4">
                            <a href="#" class="flex justify-center items-center hover:text-blue-500">
                                <span>BLOG</span>
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </a>
                            <ul style="transform: translateY(10px); z-index: 99;"
                                class="absolute bg-white shadow-md mt-6 py-2 w-44 rounded-md space-y-2 divide-y opacity-0 transform transition-all duration-500 item-nav-blog z-50 invisible">
                                <li class="px-4 py-2 hover:text-blue-500">
                                    <a href="#">
                                        <span class="text-sm">BLOG LEFT SIDEBAR</span>
                                    </a>
                                </li>
                                <li class="px-4 py-2 hover:text-blue-500">
                                    <a href="#">
                                        <span class="text-sm whitespace-no-wrap">BLOG RIGHT SIDEBAR</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="btn-nav-elements py-4">
                            <a href="#" class="flex justify-center items-center hover:text-blue-500">
                                <span>ELEMENTS</span>
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </a>
                            <div style="width: 1120px;transform: translateY(10px); z-index: 99;"
                                class="shadow-md rounded-md bg-white px-8 py-5 absolute mt-6 left-1/12 opacity-0 transform transition-all duration-500 item-nav-elements z-50 invisible">
                                <div class="flex justify-between">
                                    <ul class="flex flex-col space-y-2">
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                    </ul>
                                    <ul class="flex flex-col space-y-2">
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                        <li class="hover:text-blue-500">
                                            <a href="#">ABOUT US</a>
                                        </li>
                                    </ul>
                                    <div class="w-1/2 h-52 bg-blue-500 rounded-md"></div>
                                </div>
                            </div>
                        </li>
                        <li class="relative py-4">
                            <a href="#" class="flex justify-center items-center hover:text-blue-500">
                                <span>CONTACT</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <ul class="flex justify-end items-center space-x-3 w-1/3 py-4">
                    <li>
                        <a href="#" class="py-2 px-2 bg-blue-50 group rounded-full flex justify-center items-center">
                            <i class='bx bx-search text-xl text-gray-500 group-hover:text-blue-500'></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-2 bg-blue-50 group rounded-full flex justify-center items-center">
                            <i class='bx bxs-heart text-xl text-gray-500 group-hover:text-blue-500'></i>
                        </a>
                    </li>
                    <li class="relative btn-nav-cart">
                        <a href="#"
                            class="py-2 px-2 bg-blue-50 group rounded-full flex justify-center items-center relative">
                            <i class='bx bxs-cart text-2xl text-gray-500 group-hover:text-blue-500'></i>
                            <span style="top: -8px; right: -4px;"
                                class="absolute py-0.5 px-1.5 rounded-full bg-blue-500 text-xs text-white">2</span>
                        </a>
                        <div style="transform: translateY(10px); z-index: 99;right: -50px;"
                            class="absolute bg-white shadow-md px-5 py-5 rounded-md w-72 opacity-0 transform transition-all duration-500 item-nav-cart z-50 invisible">
                            <div class="flex flex-col space-y-5">
                                <div class="flex flex-col space-y-2">
                                    <div class="flex justify-between items-center py-2 border-b">
                                        <div class="flex w-2/3 space-x-2 items-center">
                                            <span class="bg-blue-500 h-10 w-10"></span>
                                            <div class="flex flex-col space-y">
                                                <span class="text-indigo-600 font-semibold">Kid's Fashion</span>
                                                <span class="text-gray-400">1 x - $32.99</span>
                                            </div>
                                        </div>
                                        <div
                                            class="flex px-2 py-2 cursor-pointer group justify-center items-center border border-gray-400 rounded-full">
                                            <i class='bx bxs-trash group-hover:text-blue-500'></i>
                                        </div>
                                    </div>
                                    <div class="flex justify-between items-center py-2 border-b">
                                        <div class="flex w-2/3 space-x-2 items-center">
                                            <span class="bg-blue-500 h-10 w-10"></span>
                                            <div class="flex flex-col space-y">
                                                <span class="text-indigo-600 font-semibold">Kid's Fashion</span>
                                                <span class="text-gray-400">1 x - $32.99</span>
                                            </div>
                                        </div>
                                        <div
                                            class="flex px-2 py-2 cursor-pointer group justify-center items-center border border-gray-300 rounded-full">
                                            <i class='bx bxs-trash group-hover:text-blue-500'></i>
                                        </div>
                                    </div>
                                </div>

                                <div class="flex flex-col space-y-4 w-full">
                                    <table>
                                        <tr class="flex justify-between items-center">
                                            <td>Sub Total: </td>
                                            <td>$822.96</td>
                                        </tr>
                                        <tr class="flex justify-between items-center">
                                            <td>Shipping: </td>
                                            <td>$30.00</td>
                                        </tr>
                                        <tr class="flex justify-between items-center">
                                            <td>Total: </td>
                                            <td>$856.63</td>
                                        </tr>
                                    </table>

                                    <button
                                        class="w-full py-2 text-center text-white font-bold bg-blue-500 rounded-xl">CHECKOUT</button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <a href="#" class="py-2 px-2 bg-blue-50 rounded-full flex justify-center items-center">
                            <span class="w-6 h-6"></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </header>
    <main class="h-screen w-screen">
        <section class="w-screen h-screen relative">
            <div class="owl-carousel owl-theme banner">
                <div class="item">
                    <div style="width: 665px; height: 600px;" class="relative">
                        <img class="h-full w-full object-cover opacity-50" src="{{ asset('images/banner-1.jpg') }}">
                        <div
                            class="desc flex flex-col justify-center items-center space-y-5 absolute top-0 w-full h-full">
                            <span class="text-xl text-white uppercase">todays deals</span>
                            <h1 class="text-5xl text-white font-bold">Woden Shoes</h1>
                            <button class="uppercase bg-blue-500 px-4 py-2 rounded-md text-white">buy now</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div style="width: 665px; height: 600px;" class="relative">
                        <img class="h-full w-full object-cover opacity-50" src="{{ asset('images/banner-2.jpg') }}">
                        <div
                            class="desc flex flex-col justify-center items-center space-y-5 absolute top-0 w-full h-full">
                            <span class="text-xl text-white uppercase">todays deals</span>
                            <h1 class="text-5xl text-white font-bold">Woden Shoes</h1>
                            <button class="uppercase bg-blue-500 px-4 py-2 rounded-md text-white">buy now</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div style="width: 665px; height: 600px;" class="relative">
                        <img class="h-full w-full object-cover opacity-50" src="{{ asset('images/banner-3.jpg') }}">
                        <div
                            class="desc flex flex-col justify-center items-center space-y-5 absolute top-0 w-full h-full">
                            <span class="text-xl text-white uppercase">todays deals</span>
                            <h1 class="text-5xl text-white font-bold">Woden Shoes</h1>
                            <button class="uppercase bg-blue-500 px-4 py-2 rounded-md text-white">buy now</button>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div style="width: 665px; height: 600px;" class="relative">
                        <img class="h-full w-full object-cover opacity-50" src="{{ asset('images/banner-4.jpg') }}">
                        <div
                            class="desc flex flex-col justify-center items-center space-y-5 absolute top-0 w-full h-full">
                            <span class="text-xl text-white uppercase">todays deals</span>
                            <h1 class="text-5xl text-white font-bold">Woden Shoes</h1>
                            <button class="uppercase bg-blue-500 px-4 py-2 rounded-md text-white">buy now</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-screen h-1/2 flex flex-col space-y-10 px-32">
            <span class="text-xl">Shop By Category</span>
            <div id="categories" class="owl-carousel owl-theme">
                <div class="item">
                    <div class="flex flex-col space-y-3 items-center">
                        <img style="width: 8rem; height: 8rem;" class="border-2 rounded-full border-blue-200"
                            src="{{ asset('images/top-1.png') }}" alt="">
                        <span>Speaker</span>
                    </div>
                </div>
                <div class="item">
                    <div class="flex flex-col space-y-3 items-center">
                        <img style="width: 8rem; height: 8rem;" class="border-2 rounded-full border-blue-200"
                            src="{{ asset('images/top-2.png') }}" alt="">
                        <span>Speaker</span>
                    </div>
                </div>
                <div class="item">
                    <div class="flex flex-col space-y-3 items-center">
                        <img style="width: 8rem; height: 8rem;" class="border-2 rounded-full border-blue-200"
                            src="{{ asset('images/top-3.png') }}" alt="">
                        <span>Speaker</span>
                    </div>
                </div>
                <div class="item">
                    <div class="flex flex-col space-y-3 items-center">
                        <img style="width: 8rem; height: 8rem;" class="border-2 rounded-full border-blue-200"
                            src="{{ asset('images/top-4.png') }}" alt="">
                        <span>Speaker</span>
                    </div>
                </div>
                <div class="item">
                    <div class="flex flex-col space-y-3 items-center">
                        <img style="width: 8rem; height: 8rem;" class="border-2 rounded-full border-blue-200"
                            src="{{ asset('images/top-5.png') }}" alt="">
                        <span>Speaker</span>
                    </div>
                </div>
                <div class="item">
                    <div class="flex flex-col space-y-3 items-center">
                        <img style="width: 8rem; height: 8rem;" class="border-2 rounded-full border-blue-200"
                            src="{{ asset('images/top-6.png') }}" alt="">
                        <span>Speaker</span>
                    </div>
                </div>
                <div class="item">
                    <div class="flex flex-col space-y-3 items-center">
                        <img style="width: 8rem; height: 8rem;" class="border-2 rounded-full border-blue-200"
                            src="{{ asset('images/top-1.png') }}" alt="">
                        <span>Speaker</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-screen px-32 flex flex-col space-y-5">
            <span class="text-xl">Best Selling Products</span>
            <div class="grid grid-cols-4 grid-rows-2 gap-7">
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-1.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-2.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-3.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-4.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-5.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-6.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-7.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-8.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="px-32 w-screen h-screen flex items-center space-x-5">
            <div class="bg-blue-500 rounded-md overflow-hidden">
                <img src="{{ asset('images/beach.png') }}">
            </div>
            <div class="grid grid-cols-2 grid-rows-2 gap-5">
                <div class="relative rounded-md overflow-hidden hover-zoom">
                    <img class="img-zoom scale-150" src="{{ asset('images/apparels.jpg') }}" alt="">
                </div>
                <div class="relative rounded-md overflow-hidden">
                    <img src="{{ asset('images/elect.jpg') }}" alt="">
                </div>
                <div class="relative rounded-md overflow-hidden">
                    <img src="{{ asset('images/weekly-offer.jpg') }}" alt="">
                </div>
                <div class="relative rounded-md overflow-hidden">
                    <img src="{{ asset('images/backpack.jpg') }}" alt="">
                </div>
            </div>
        </section>

        <section class="w-screen px-32 pb-10 flex flex-col space-y-5">
            <span class="text-xl">On Sale Products</span>
            <div class="grid grid-cols-4 grid-rows-2 gap-7">
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-9.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-10.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-11.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-12.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-13.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-14.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-15.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
                <div class="flex flex-col rounded-md overflow-hidden bg-blue-50 product-content">
                    <div class="relative">
                        <img src="{{ asset('images/product-home2-16.jpg') }}">
                        <div class="flex flex-col space-y-3 absolute top-5 right-0">
                            <button class="flex justify-center bg-red-500 items-center p-1 heart">
                                <i class='bx bxs-heart text-white text-xl'></i>
                            </button>
                            <button class="flex justify-center bg-blue-500 items-center p-1 transfer">
                                <i class='bx bx-transfer text-white text-xl'></i>
                            </button>
                        </div>
                        <div class="flex absolute bottom-0 justify-center items-center w-full product-btn">
                            <div class="flex space-x-1 items-center w-1/2 bg-blue-500 py-2 justify-center">
                                <i class='bx bxs-cart-alt text-white'></i>
                                <span class="text-white text-sm">Add to Cart</span>
                            </div>
                            <div class="flex space-x-1 items-center w-1/2 bg-gray-500 py-2 justify-center">
                                <i class='bx bxs-show text-white'></i>
                                <span class="text-white text-sm">View</span>
                            </div>
                        </div>
                    </div>
                    <div class="py-5 flex flex-col space-y-2 justify-center items-center">
                        <span class="text-lg">Boutique Silk Dress</span>
                        <span>$69.99</span>
                    </div>
                </div>
            </div>
        </section>

        <section style="height: 507px; background-color: #1d2536;" class="w-screen px-32">

        </section>
    </main>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.owl-carousel.banner').owlCarousel({
                loop: true,
                center: true,
                nav: true,
                autoplay: true,
                smartSpeed: 1000,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1000: {
                        items: 2
                    }
                }
            });
            $('#categories').owlCarousel({
                loop: true,
                nav: true,
                autoplay: true,
                smartSpeed: 1000,
                autoplayTimeout: 5000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 5
                    },
                    1000: {
                        items: 7
                    }
                }
            });
        });
    </script>
</body>

</html>
