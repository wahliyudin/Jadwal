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
    <link rel="stylesheet" href="{{ asset('css/tokopedia/shop-list-no-sidebar.css') }}">
    <link rel="stylesheet" href="{{ asset('css/tokopedia/cart.css') }}">

</head>

<body class="overflow-x-hidden">


    <header class="w-screen">
        <div class="flex justify-between items-center px-32 border-b">
            <span class="text-sm text-gray-500 py-2">Welcome to Bigshop ecommerce template</span>
            <div class="flex items-center justify-between space-x-2">
                <div
                    class="flex space-x-1 items-center relative cursor-pointer btn-nav border-r border-gray-300 py-2 pr-2">
                    <span class="text-sm">ENGLISH</span>
                    <i class='bx bxs-down-arrow text-xs'></i>
                    <ul style="transform: translateY(10px);"
                        class="absolute shadow-md py-2 mt-24 right-0 bg-gray-50 rounded-md space-y-1 divide-y opacity-0 transform transition-all duration-500 item-nav z-20 invisible">
                        <li class="px-4">
                            <a href="#" class="text-sm hover:text-blue-500">Indonesia</a>
                        </li>
                        <li class="px-4">
                            <a href="#" class="text-sm hover:text-blue-500">Inggris</a>
                        </li>
                    </ul>
                </div>
                <div class="flex space-x-1 px-2 items-center relative cursor-pointer btn-nav py-2">
                    <span class="text-sm">$ USD</span>
                    <i class="bx bxs-down-arrow text-xs"></i>
                    <ul style="transform: translateY(10px);"
                        class="absolute shadow-md py-2 mt-24 left-0 bg-gray-50 rounded-md space-y-1 divide-y opacity-0 transform transition-all duration-500 item-nav z-20 invisible">
                        <li class="px-4">
                            <a href="#" class="text-sm hover:text-blue-500 whitespace-no-wrap">Rp IDN</a>
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
                        <li class="relative cursor-pointer btn-nav py-4">
                            <a href="#" class="flex justify-center items-center hover:text-blue-500">
                                <span>HOME</span>
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </a>
                            <ul style="transform: translateY(10px); z-index: 99;"
                                class="absolute bg-white shadow-md mt-6 py-2 w-44 rounded-md space-y-2 divide-y opacity-0 transform transition-all duration-500 item-nav z-50 invisible">
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
                        <li class="relative cursor-pointer btn-nav py-4">
                            <a href="#" class="flex justify-center items-center hover:text-blue-500">
                                <span>SHOP</span>
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </a>
                            <ul style="transform: translateY(10px); z-index: 99;"
                                class="absolute bg-white mt-6 shadow-md py-2 w-44 rounded-md space-y-2 divide-y opacity-0 transform transition-all duration-500 item-nav z-50 invisible">
                                <li class="px-4 py-2 relative btn-nav">
                                    <a href="#" class="flex justify-between hover:text-blue-500 items-center">
                                        <span class="text-sm">HOME - 1</span>
                                        <i class='bx bx-chevron-right text-xl'></i>
                                    </a>
                                    <ul style="transform: translateY(10px); z-index: 99;"
                                        class="absolute bg-white top-0 left-44 shadow-md py-2 w-56 rounded-md space-y-2 divide-y opacity-0 transform transition-all duration-500 item-nav z-50 invisible">
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
                        <li class="py-4 btn-nav">
                            <a href="#" class="flex justify-center items-center hover:text-blue-500">
                                <span>PAGES</span>
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </a>
                            <div style="width: 1120px;transform: translateY(10px); z-index: 99;"
                                class="shadow-md rounded-md bg-white px-8 py-5 absolute mt-6 left-1/12 opacity-0 transform transition-all duration-500 item-nav z-50 invisible">
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
                        <li class="relative btn-nav py-4">
                            <a href="#" class="flex justify-center items-center hover:text-blue-500">
                                <span>BLOG</span>
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </a>
                            <ul style="transform: translateY(10px); z-index: 99;"
                                class="absolute bg-white shadow-md mt-6 py-2 w-44 rounded-md space-y-2 divide-y opacity-0 transform transition-all duration-500 item-nav z-50 invisible">
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
                        <li class="btn-nav py-4">
                            <a href="#" class="flex justify-center items-center hover:text-blue-500">
                                <span>ELEMENTS</span>
                                <i class='bx bx-chevron-down text-2xl'></i>
                            </a>
                            <div style="width: 1120px;transform: translateY(10px); z-index: 99;"
                                class="shadow-md rounded-md bg-white px-8 py-5 absolute mt-6 left-1/12 opacity-0 transform transition-all duration-500 item-nav z-50 invisible">
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
                    <li class="relative btn-nav">
                        <a href="#"
                            class="py-2 px-2 bg-blue-50 group rounded-full flex justify-center items-center relative">
                            <i class='bx bxs-cart text-2xl text-gray-500 group-hover:text-blue-500'></i>
                            <span style="top: -8px; right: -4px;"
                                class="absolute py-0.5 px-1.5 rounded-full bg-blue-500 text-xs text-white">2</span>
                        </a>
                        <div style="transform: translateY(10px); z-index: 99;right: -50px;"
                            class="absolute bg-white shadow-md px-5 py-5 rounded-md w-72 opacity-0 transform transition-all duration-500 item-nav z-50 invisible">
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
            <h2 class="text-xl">Checkout</h2>
            <div class="flex items-center space-x-2">
                <span>Home</span>
                <span>/</span>
                <span>Checkout</span>
            </div>
        </section>

        <section class="flex flex-col w-screen">
            <ul class="grid grid-cols-5 grid-rows-1">
                <li>
                    <span style="background-color: #0f99f3;"
                        class="py-6 text-white font-semibold flex justify-center items-center uppercase">login</span>
                </li>
                <li>
                    <a href="#" style="background-color: #070a57;"
                        class="py-6 text-white font-semibold flex justify-center items-center uppercase">billing</a>
                </li>
                <li>
                    <a href="#" style="background-color: #070a57;"
                        class="py-6 text-white font-semibold flex justify-center items-center uppercase">shipping</a>
                </li>
                <li>
                    <a href="#" style="background-color: #070a57;"
                        class="py-6 text-white font-semibold flex justify-center items-center uppercase">payment</a>
                </li>
                <li>
                    <a href="#" style="background-color: #070a57;"
                        class="py-6 text-white font-semibold flex justify-center items-center uppercase">review</a>
                </li>
            </ul>
            <div class="px-32 w-full py-20 flex">
                <div class="flex flex-col w-1/2 space-y-5">
                    <div class="flex flex-col space-y-2">
                        <span class="text-xl">Checkout as a Guest or Register</span>
                        <span class="text-gray-5">Register with us for future convenience:</span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <div class="flex space-x-2 items-center">
                            <input type="radio" name="" id="">
                            <span>Checkout as Guest</span>
                        </div>
                        <div class="flex space-x-2 items-center">
                            <input type="radio" name="" id="">
                            <span>Register</span>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <span class="text-xl">Register and save time!</span>
                        <span class="text-gray-5">Register with us for future convenience:</span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <div class="flex space-x-2 items-center">
                            <i class='bx bx-radio-circle-marked text-2xl'></i>
                            <span>Fast and easy check out</span>
                        </div>
                        <div class="flex space-x-2 items-center">
                            <i class='bx bx-radio-circle-marked text-2xl'></i>
                            <span>Easy access to your order history and status</span>
                        </div>
                    </div>
                    <div class="flex justify-start">
                        <a href="#" class="bg-blue-500 rounded-md text-white text-sm uppercase px-6 py-3">continue</a>
                    </div>
                </div>
                <div class="flex flex-col w-1/2 space-y-3">
                    <div class="flex flex-col space-y-2">
                        <span class="text-xl">Login</span>
                        <span class="text-gray-5">Already registered? Please log in below:</span>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <span class="font-semibold">Email address</span>
                        <div class="flex flex-col space-y-1">
                            <input type="text" placeholder="Enter email" class="text-sm placeholder-gray-500 w-full rounded-md border-2 border-blue-200 px-4 py-2 outline-none">
                            <div class="text-gray-500 text-sm">
                                <i class='bx bxs-lock'></i>
                                <span>We'll never share your email with anyone else.</span>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col space-y-2">
                        <span class="font-semibold">Password</span>
                        <input type="password" placeholder="Password" class="text-sm placeholder-gray-500 w-full rounded-md border-2 border-blue-200 px-4 py-2 outline-none">
                    </div>
                    <div class="flex space-x-2 items-center">
                        <input type="radio" name="" id="">
                        <span class="font-semibold">Remember me for this computer.</span>
                    </div>
                    <div class="flex justify-start">
                        <a href="#" class="bg-blue-500 rounded-md text-white text-sm uppercase px-6 py-3">login</a>
                    </div>
                    <span class="text-sm">Forgot Password?</span>
                    <div class="flex justify-end space-x-2">
                        <a href="#" class="bg-blue-500 rounded-md text-white text-sm uppercase px-6 py-3">go to cart</a>
                        <a href="#" class="bg-blue-500 rounded-md text-white text-sm uppercase px-6 py-3">continue</a>
                    </div>
                </div>
            </div>
        </section>

        <section style="height: 507px; background-color: #1d2536;" class="w-screen px-32"></section>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
    <script>
        const btns = document.querySelectorAll('.btn-nav'),
            items = document.querySelectorAll('.item-nav')

        for (let index = 0; index < btns.length; index++) {
            btns[index].onmouseover = () => {
                items[index].classList.replace('opacity-0', 'opacity-1');
                items[index].style.transform = "translateY(0px)";
                items[index].classList.replace('invisible', 'visible');
            }
            btns[index].onmouseout = () => {
                items[index].classList.replace('opacity-1', 'opacity-0');
                items[index].style.transform = "translateY(10px)";
                items[index].classList.replace('visible', 'invisible');
            }
        }
    </script>
</body>

</html>
