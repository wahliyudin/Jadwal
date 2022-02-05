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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/tokopedia/shop-list-no-sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tokopedia/single-product.css') }}">

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

    <main>
        <section class="flex flex-col px-32 py-15 bg-blue-50 space-y-2 w-screen">
            <h2 class="text-xl">Product Details</h2>
            <div class="flex items-center space-x-2">
                <span>Home</span>
                <span>/</span>
                <span>Shop</span>
                <span>/</span>
                <span>Product Details</span>
            </div>
        </section>

        <section class="flex space-x-10 px-32 py-14 w-screen h-screen">
            <div class="relative w-1/3 gallery">
                <div class="clearfix">
                    <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                        <li data-thumb="{{ asset('images/product_1.png') }}">
                            <img class="w-full" src="{{ asset('images/product_1.png') }}" />
                        </li>
                        <li data-thumb="{{ asset('images/product_2.png') }}">
                            <img class="w-full" src="{{ asset('images/product_2.png') }}" />
                        </li>
                        <li data-thumb="{{ asset('images/product_3.png') }}">
                            <img class="w-full" src="{{ asset('images/product_3.png') }}" />
                        </li>
                        <li data-thumb="{{ asset('images/product_4.png') }}">
                            <img class="w-full" src="{{ asset('images/product_4.png') }}" />
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-2/3 rounded-md border border-blue-200 bg-blue-50 px-6 py-6 flex flex-col space-y-5">
                <span class="text-xl">Floral V-Neck Dress</span>
                <div class="flex space-x-1 items-center">
                    <i class='bx bxs-star text-yellow-300'></i>
                    <i class='bx bxs-star text-yellow-300'></i>
                    <i class='bx bxs-star text-yellow-300'></i>
                    <i class='bx bxs-star text-yellow-300'></i>
                    <i class='bx bxs-star text-yellow-300'></i>
                    <span>(8 Reviews)</span>
                </div>
                <span>$120.99</span>
                <div class="flex flex-col space-y-2">
                    <span>Overview</span>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro, unde culpa! Atque ex iure
                        corporis, in, laborum voluptatum excepturi incidunt modi numquam minima ut sunt nihil. Dolorum
                        sed ex quos?</p>
                </div>
                <div class="flex flex-col space-y-3">
                    <span>Color</span>
                    <div class="flex space-x-2">
                        <input type="radio" name="color" class="rounded-full" id="">
                        <input type="radio" name="color" class="rounded-full" id="">
                        <input type="radio" name="color" class="rounded-full" id="">
                        <input type="radio" name="color" class="rounded-full" id="">
                        <input type="radio" name="color" class="rounded-full" id="">
                    </div>
                    <span>Size</span>
                    <div class="flex space-x-1">
                        <span
                            class="px-2 py-1 bg-blue-500 text-xs flex justify-center items-center uppercase rounded-md text-white">xs</span>
                        <span
                            class="px-2 py-1 bg-blue-500 text-xs flex justify-center items-center uppercase rounded-md text-white">s</span>
                        <span
                            class="px-2 py-1 bg-blue-500 text-xs flex justify-center items-center uppercase rounded-md text-white">m</span>
                        <span
                            class="px-2 py-1 bg-blue-500 text-xs flex justify-center items-center uppercase rounded-md text-white">l</span>
                        <span
                            class="px-2 py-1 bg-blue-500 text-xs flex justify-center items-center uppercase rounded-md text-white">xl</span>
                    </div>
                </div>
                <div class="flex space-x-4">
                    <input type="number" class="outline-none w-20 px-2 rounded-md">
                    <span
                        class="px-4 py-2 cursor-pointer rounded-md text-white uppercase text-lg font-bold flex justify-center items-center bg-blue-500">add
                        to cart</span>
                </div>
                <div class="flex space-x-3 items-center">
                    <div class="flex items-center">
                        <i class='bx bxs-heart'></i>
                        <span class="uppercase text-sm">wishlist</span>
                    </div>
                    <div class="flex items-center">
                        <i class='bx bxs-grid'></i>
                        <span class="uppercase text-sm">compare</span>
                    </div>
                    <div class="flex items-center">
                        <i class='bx bxs-share'></i>
                        <span class="uppercase text-sm">share with friend</span>
                    </div>
                </div>
            </div>
        </section>

        <section class="w-screen px-32 py-10">
            <ul class="nav nav-tabs flex flex-col md:flex-row flex-wrap list-none border-b-0 pl-0" id="tabs-tab"
                role="tablist">
                <li class="nav-item" role="presentation">
                    <a href="#tabs-home"
                        class="nav-link rounded-t-md bg-white block font-bold text-sm leading-tight uppercase border-x-0 border-t-0 border-transparent px-6 py-3 hover:border-transparent focus:border-transparent active"
                        id="tabs-home-tab" data-bs-toggle="pill" data-bs-target="#tabs-home" role="tab"
                        aria-controls="tabs-home" aria-selected="true">Description</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#tabs-profile"
                        class="nav-link rounded-t-md bg-white block font-bold text-sm leading-tight uppercase border-x-0 border-t-0 border-transparent px-6 py-3 hover:border-transparent focus:border-transparent"
                        id="tabs-profile-tab" data-bs-toggle="pill" data-bs-target="#tabs-profile" role="tab"
                        aria-controls="tabs-profile" aria-selected="false">Reviews</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a href="#tabs-messages"
                        class="nav-link rounded-t-md bg-white block font-bold text-sm leading-tight uppercase border-x-0 border-t-0 border-transparent px-6 py-3 hover:border-transparent focus:border-transparent"
                        id="tabs-messages-tab" data-bs-toggle="pill" data-bs-target="#tabs-messages" role="tab"
                        aria-controls="tabs-messages" aria-selected="false">Additional Information</a>
                </li>
            </ul>
            <div class="tab-content" id="tabs-tabContent">
                <div class="tab-pane show active" id="tabs-home" role="tabpanel" aria-labelledby="tabs-home-tab">
                    <div class="w-full border-2 px-6 py-3 rounded-tr-md rounded-b-md border-gray-300 h-screen">
                        a
                    </div>
                </div>
                <div class="tab-pane" id="tabs-profile" role="tabpanel" aria-labelledby="tabs-profile-tab">
                    <div class="w-full border-2 px-6 py-6 rounded-md border-gray-300 flex flex-col space-y-10">
                        <div class="flex flex-col justify-start space-y-3">
                            <div class="flex flex-col space-y-2">
                                <div class="flex space-x-1 items-center text-sm">
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <span class="font-semibold">for Quality</span>
                                </div>
                                <span class="text-sm">by <span class="text-blue-500">Designing World</span> on
                                    12 Sep 2021</span>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <div class="flex space-x-1 items-center text-sm">
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <span class="font-semibold">for Quality</span>
                                </div>
                                <span class="text-sm">by <span class="text-blue-500">Designing World</span> on
                                    12 Sep 2021</span>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <div class="flex space-x-1 items-center text-sm">
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <i class='bx bxs-star text-yellow-300'></i>
                                    <span class="font-semibold">for Quality</span>
                                </div>
                                <span class="text-sm">by <span class="text-blue-500">Designing World</span> on
                                    12 Sep 2021</span>
                            </div>
                        </div>
                        <div class="flex flex-col space-y-3">
                            <div class="flex flex-col space-y-2">
                                <span class="text-xl">Submit A Review</span>
                                <div class="flex flex-col space-y-1">
                                    <span class="text-sm">Your Ratings</span>
                                    <div class="flex space-x-1 text-gray-400 text-xl">
                                        <i class='bx bxs-star text-yellow-300'></i>
                                        <i class='bx bxs-star text-yellow-300'></i>
                                        <i class='bx bxs-star text-yellow-300'></i>
                                        <i class='bx bxs-star text-yellow-300'></i>
                                        <i class='bx bxs-star text-yellow-300'></i>
                                    </div>
                                </div>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <label for="">Nickname</label>
                                <input type="text"
                                    class="w-full rounded-md px-4 py-2 border border-gray-300 placeholder-gray-500 outline-none"
                                    placeholder="Wahli">
                            </div>
                            <div class="flex flex-col space-y-2">
                                <label for="">Reason for your rating</label>
                                <select
                                    class="w-full rounded-md px-4 py-2 border border-gray-300 outline-none text-gray-500"
                                    name="" id="">
                                    <option class="" value="">Quality</option>
                                    <option class="" value="">Value</option>
                                    <option class="" value="">Design</option>
                                    <option class="" value="">Price</option>
                                    <option class="" value="">Others</option>
                                </select>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <label for="">Nickname</label>
                                <textarea name=""
                                    class="w-full rounded-md px-4 py-2 border border-gray-300 outline-none" id=""
                                    rows="4"></textarea>
                            </div>
                            <div class="flex justify-start">
                                <span
                                    class="px-6 py-3 bg-blue-500 rounded-md text-white uppercase font-bold text-sm flex justify-center items-center">submit
                                    review</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="tabs-messages" role="tabpanel" aria-labelledby="tabs-profile-tab">
                    <div class="w-full border-2 px-6 py-6 rounded-md border-gray-300 flex flex-col space-y-3">
                        <span class="text-xl">Additional Info</span>
                        <div class="flex flex-col space-y-4">
                            <div class="flex flex-col space-y-2">
                                <span class="text-gray-500">What should I do if I receive a damaged parcel?</span>
                                <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Deleniti ducimus repudiandae, dolore dolorem quasi modi soluta consectetur esse
                                    animi, eius similique ullam itaque inventore. Impedit blanditiis doloremque earum
                                    doloribus provident!</p>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <span class="text-gray-500">What should I do if I receive a damaged parcel?</span>
                                <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Deleniti ducimus repudiandae, dolore dolorem quasi modi soluta consectetur esse
                                    animi, eius similique ullam itaque inventore. Impedit blanditiis doloremque earum
                                    doloribus provident!</p>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <span class="text-gray-500">What should I do if I receive a damaged parcel?</span>
                                <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Deleniti ducimus repudiandae, dolore dolorem quasi modi soluta consectetur esse
                                    animi, eius similique ullam itaque inventore. Impedit blanditiis doloremque earum
                                    doloribus provident!</p>
                            </div>
                            <div class="flex flex-col space-y-2">
                                <span class="text-gray-500">What should I do if I receive a damaged parcel?</span>
                                <p class="text-gray-500">Lorem ipsum dolor sit amet consectetur, adipisicing elit.
                                    Deleniti ducimus repudiandae, dolore dolorem quasi modi soluta consectetur esse
                                    animi, eius similique ullam itaque inventore. Impedit blanditiis doloremque earum
                                    doloribus provident!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="h-screen w-screen flex flex-col justify-between py-10">
            <span class="uppercase w-96 bg-blue-500 py-2 text-lg text-white text-center">YOU MAY ALSO LIKE</span>
            <div class="px-32 w-full product-new">
                <ul id="content-product-new">
                    <li>
                        <div id="product" class="flex flex-col bg-blue-100 rounded-md overflow-hidden">
                            <div class="relative">
                                <img id="normal_img" src="{{ asset('images/product_1.png') }}" alt="">
                                <img id="hover_img" class="absolute top-0" src="{{ asset('images/product_2.png') }}"
                                    alt="">

                                <div class="absolute right-0 top-5 flex flex-col space-y-3">
                                    <a id="product_heart"
                                        class="h-8 bg-red-500 w-8 flex justify-center items-center text-xl text-white"
                                        href="#"><i class='bx bxs-heart'></i></a>
                                    <a id="product_compare"
                                        class="h-8 bg-blue-500 w-8 flex justify-center items-center text-xl text-white"
                                        href="#"><i class='bx bx-transfer'></i></a>
                                </div>
                                <div id="btn-cart-view"
                                    class="absolute bottom-0 bg-red-500 w-full flex justify-between items-center h-10">
                                    <a class="bg-blue-500 h-full w-1/2 flex justify-center items-center text-white space-x-2"
                                        href="#">
                                        <i class='bx bxs-cart-alt'></i>
                                        <span class="text-sm">Add to Cart</span>
                                    </a>
                                    <a class="bg-green-500 h-full w-1/2 flex justify-center items-center text-white space-x-2"
                                        href="#">
                                        <i class='bx bx-show'></i>
                                        <span class="text-sm">View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-center flex-col items-center py-5">
                                <span>LIM</span>
                                <span class="text-blue-500">Gracia Plaid Dress</span>
                                <div class="flex space-x-2">
                                    <span>$34</span>
                                    <span class="text-indigo-500">$46</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div id="product" class="flex flex-col bg-blue-100 rounded-md overflow-hidden">
                            <div class="relative">
                                <img id="normal_img" src="{{ asset('images/product_3.png') }}" alt="">
                                <img id="hover_img" class="absolute top-0" src="{{ asset('images/product_4.png') }}"
                                    alt="">

                                <div class="absolute right-0 top-5 flex flex-col space-y-3">
                                    <a id="product_heart"
                                        class="h-8 bg-red-500 w-8 flex justify-center items-center text-xl text-white"
                                        href="#"><i class='bx bxs-heart'></i></a>
                                    <a id="product_compare"
                                        class="h-8 bg-blue-500 w-8 flex justify-center items-center text-xl text-white"
                                        href="#"><i class='bx bx-transfer'></i></a>
                                </div>
                                <div id="btn-cart-view"
                                    class="absolute bottom-0 bg-red-500 w-full flex justify-between items-center h-10">
                                    <a class="bg-blue-500 h-full w-1/2 flex justify-center items-center text-white space-x-2"
                                        href="#">
                                        <i class='bx bxs-cart-alt'></i>
                                        <span class="text-sm">Add to Cart</span>
                                    </a>
                                    <a class="bg-green-500 h-full w-1/2 flex justify-center items-center text-white space-x-2"
                                        href="#">
                                        <i class='bx bx-show'></i>
                                        <span class="text-sm">View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-center flex-col items-center py-5">
                                <span>LIM</span>
                                <span class="text-blue-500">Gracia Plaid Dress</span>
                                <div class="flex space-x-2">
                                    <span>$34</span>
                                    <span class="text-indigo-500">$46</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div id="product" class="flex flex-col bg-blue-100 rounded-md overflow-hidden">
                            <div class="relative">
                                <img id="normal_img" src="{{ asset('images/product_5.png') }}" alt="">
                                <img id="hover_img" class="absolute top-0" src="{{ asset('images/product_6.png') }}"
                                    alt="">

                                <div class="absolute right-0 top-5 flex flex-col space-y-3">
                                    <a id="product_heart"
                                        class="h-8 bg-red-500 w-8 flex justify-center items-center text-xl text-white"
                                        href="#"><i class='bx bxs-heart'></i></a>
                                    <a id="product_compare"
                                        class="h-8 bg-blue-500 w-8 flex justify-center items-center text-xl text-white"
                                        href="#"><i class='bx bx-transfer'></i></a>
                                </div>
                                <div id="btn-cart-view"
                                    class="absolute bottom-0 bg-red-500 w-full flex justify-between items-center h-10">
                                    <a class="bg-blue-500 h-full w-1/2 flex justify-center items-center text-white space-x-2"
                                        href="#">
                                        <i class='bx bxs-cart-alt'></i>
                                        <span class="text-sm">Add to Cart</span>
                                    </a>
                                    <a class="bg-green-500 h-full w-1/2 flex justify-center items-center text-white space-x-2"
                                        href="#">
                                        <i class='bx bx-show'></i>
                                        <span class="text-sm">View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-center flex-col items-center py-5">
                                <span>LIM</span>
                                <span class="text-blue-500">Gracia Plaid Dress</span>
                                <div class="flex space-x-2">
                                    <span>$34</span>
                                    <span class="text-indigo-500">$46</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div id="product" class="flex flex-col bg-blue-100 rounded-md overflow-hidden">
                            <div class="relative">
                                <img id="normal_img" src="{{ asset('images/product_7.png') }}" alt="">
                                <img id="hover_img" class="absolute top-0" src="{{ asset('images/product_8.png') }}"
                                    alt="">

                                <div class="absolute right-0 top-5 flex flex-col space-y-3">
                                    <a id="product_heart"
                                        class="h-8 bg-red-500 w-8 flex justify-center items-center text-xl text-white"
                                        href="#"><i class='bx bxs-heart'></i></a>
                                    <a id="product_compare"
                                        class="h-8 bg-blue-500 w-8 flex justify-center items-center text-xl text-white"
                                        href="#"><i class='bx bx-transfer'></i></a>
                                </div>
                                <div id="btn-cart-view"
                                    class="absolute bottom-0 bg-red-500 w-full flex justify-between items-center h-10">
                                    <a class="bg-blue-500 h-full w-1/2 flex justify-center items-center text-white space-x-2"
                                        href="#">
                                        <i class='bx bxs-cart-alt'></i>
                                        <span class="text-sm">Add to Cart</span>
                                    </a>
                                    <a class="bg-green-500 h-full w-1/2 flex justify-center items-center text-white space-x-2"
                                        href="#">
                                        <i class='bx bx-show'></i>
                                        <span class="text-sm">View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-center flex-col items-center py-5">
                                <span>LIM</span>
                                <span class="text-blue-500">Gracia Plaid Dress</span>
                                <div class="flex space-x-2">
                                    <span>$34</span>
                                    <span class="text-indigo-500">$46</span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div id="product" class="flex flex-col bg-blue-100 rounded-md overflow-hidden">
                            <div class="relative">
                                <img id="normal_img" src="{{ asset('images/product_9.png') }}" alt="">
                                <img id="hover_img" class="absolute top-0"
                                    src="{{ asset('images/product_10.png') }}" alt="">

                                <div class="absolute right-0 top-5 flex flex-col space-y-3">
                                    <a id="product_heart"
                                        class="h-8 bg-red-500 w-8 flex justify-center items-center text-xl text-white"
                                        href="#"><i class='bx bxs-heart'></i></a>
                                    <a id="product_compare"
                                        class="h-8 bg-blue-500 w-8 flex justify-center items-center text-xl text-white"
                                        href="#"><i class='bx bx-transfer'></i></a>
                                </div>
                                <div id="btn-cart-view"
                                    class="absolute bottom-0 bg-red-500 w-full flex justify-between items-center h-10">
                                    <a class="bg-blue-500 h-full w-1/2 flex justify-center items-center text-white space-x-2"
                                        href="#">
                                        <i class='bx bxs-cart-alt'></i>
                                        <span class="text-sm">Add to Cart</span>
                                    </a>
                                    <a class="bg-green-500 h-full w-1/2 flex justify-center items-center text-white space-x-2"
                                        href="#">
                                        <i class='bx bx-show'></i>
                                        <span class="text-sm">View</span>
                                    </a>
                                </div>
                            </div>
                            <div class="flex justify-center flex-col items-center py-5">
                                <span>LIM</span>
                                <span class="text-blue-500">Gracia Plaid Dress</span>
                                <div class="flex space-x-2">
                                    <span>$34</span>
                                    <span class="text-indigo-500">$46</span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>

        <section style="height: 507px; background-color: #1d2536;" class="w-screen px-32"></section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#image-gallery').lightSlider({
                gallery: true,
                item: 1,
                thumbItem: 4,
                slideMargin: 0,
                speed: 500,
                auto: true,
                loop: true,
                onSliderLoad: function() {
                    $('#image-gallery').removeClass('cS-hidden');
                }
            });
            $("#content-product-new").lightSlider({
                loop: true,
                item: 4,
                speed: 1000,
                auto: true,
                pause: 5000,
                pager: false,
                keyPress: false,
                controls: true,
                prevHtml: "<i class='bx bx-chevron-left'></i>",
                nextHtml: "<i class='bx bx-chevron-right'></i>",
            });
        });
    </script>
</body>

</html>
