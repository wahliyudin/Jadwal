<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body class="">
    <nav class="flex justify-between items-center py-4 px-7 border-b shadow-sm">
        <div class="flex space-x-4 items-center">
            <div class="text-2xl text-gray-500">
                <i class='bx bx-menu'></i>
            </div>
            <div class="flex space-x-1 items-center">
                <img src="./images/googlelogo_clr_74x24px.svg" alt="" srcset="">
                <span class="text-2xl text-gray-500">Terjemahan</span>
            </div>
        </div>
        <div class="flex space-x-4">
            <div class="text-2xl text-gray-500">
                <i class='bx bxs-grid'></i>
            </div>
            <span class="bg-blue-500 rounded-full h-8 w-8"></span>
        </div>
    </nav>

    <section class="px-13 bg-gray-100 flex justify-start py-4 items-start h-24 border-b">
        <div class="flex items-center space-x-2">
            <a href=""
                class="flex border border-gray-300 space-x-2 items-center py-2 px-4 bg-blue-100 rounded-md text-blue-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                </svg>
                <span class="text-sm font-semibold">Teks</span>
            </a>
            <a href=""
                class="flex border border-gray-300 space-x-2 items-center py-2 px-4 hover:bg-blue-50 rounded-md text-blue-500">
                <i class='bx bxs-file-doc text-xl'></i>
                <span class="text-sm font-semibold">Document</span>
            </a>
        </div>
    </section>

    <section style="height: 70vh;" class="px-13 flex flex-col justify-center items-center w-full">
        <div class="flex flex-col shadow-md rounded-lg w-full -mt-8 bg-white">
            <div class="flex items-center border-b">
                <ul class="flex w-1/2 justify-start relative">
                    <li class="py-1 px-4 hover:bg-gray-100 cursor-pointer flex justify-center items-center">
                        <span class="uppercase font-semibold text-gray-500 text-sm">deteksi bahasa</span>
                    </li>
                    <li class="py-1 px-4 hover:bg-blue-50 cursor-pointer border-b-2 border-blue-500 flex justify-center items-center">
                        <span class="uppercase font-semibold text-blue-500 text-sm">inggris</span>
                    </li>
                    <li class="py-1 px-4 hover:bg-gray-100 cursor-pointer flex justify-center items-center">
                        <span class="uppercase font-semibold text-gray-500 text-sm">indonesia</span>
                    </li>
                    <li class="py-1 px-4 hover:bg-gray-100 cursor-pointer flex justify-center items-center">
                        <span class="uppercase font-semibold text-gray-500 text-sm">jepang</span>
                    </li>
                    <li class="py-1 px-5 cursor-pointer">
                        <span class="text-gray-500 hover:bg-gray-100 rounded-full px-2 py-2 flex justify-center items-center">
                            <i class='bx bx-chevron-down text-2xl'></i>
                        </span>
                    </li>
                    <div style="right: -18px;" class="absolute top-2">
                        <div class="py-2 px-2 rounded-full flex justify-center items-center hover:bg-gray-100 cursor-pointer">
                            <i class='bx bx-transfer text-xl font-bold text-gray-500'></i>
                        </div>
                    </div>
                </ul>
                <ul class="flex w-1/2 justify-start pl-6">
                    <li class="py-3 px-4 hover:bg-blue-50 cursor-pointer border-b-2 border-blue-500 flex justify-center items-center">
                        <span class="uppercase font-semibold text-blue-500 text-sm">indonesia</span>
                    </li>
                    <li class="py-3 px-4 hover:bg-gray-100 cursor-pointer flex justify-center items-center">
                        <span class="uppercase font-semibold text-gray-500 text-sm">inggris</span>
                    </li>
                    <li class="py-3 px-4 hover:bg-gray-100 cursor-pointer flex justify-center items-center">
                        <span class="uppercase font-semibold text-gray-500 text-sm">arab</span>
                    </li>
                </ul>
            </div>
            <div class="flex w-full divide-x">
                <div class="flex flex-col w-1/2">
                    <div class="py-5 w-full px-5">
                        <textarea class="outline-none w-full" id="" rows="3"></textarea>
                    </div>
                    <div class="flex justify-between items-center py-2 px-5">
                        <div class="rounded-full px-2 py-2 hover:bg-gray-100 cursor-pointer flex justify-center items-center">
                            <i class='bx bxs-microphone text-2xl text-gray-500'></i>
                        </div>
                        <div class="flex space-x-4 text-gray-500">
                            <span class="text-sm">0 / 5.000</span>
                            <div class="flex space-x-2">
                                <i class='bx bxs-pencil text-xl' ></i>
                                <i class='bx bxs-down-arrow text-xs'></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col px-5 py-5 w-1/2">
                    <span class="text-3xl text-gray-500">Terjemahan</span>
                </div>
            </div>
        </div>
        <div class="flex justify-end w-full py-1">
            <span class="text-gray-500 italic text-sm cursor-pointer">kirim masukan</span>
        </div>
        <div class="w-full flex justify-center items-center h-full">
            <ul class="flex items-center space-x-15">
                <li class="flex flex-col space-y-2 items-center cursor-pointer">
                    <div class="border rounded-full py-5 px-5 flex justify-center items-center">
                        <i class='bx bx-time-five text-4xl text-gray-500'></i>
                    </div>
                    <span class="text-gray-500">Histori</span>
                </li>
                <li class="flex flex-col space-y-2 items-center cursor-pointer">
                    <div class="border rounded-full py-5 px-5 flex justify-center items-center">
                        <i class='bx bxs-star text-4xl text-gray-500'></i>
                    </div>
                    <span class="text-gray-500">Disimpan</span>
                </li>
                <li class="flex flex-col space-y-2 items-center cursor-pointer">
                    <div class="border rounded-full py-5 px-5 flex justify-center items-center">
                        <i class='bx bxs-group text-4xl text-gray-500'></i>
                    </div>
                    <span class="text-gray-500">Beri Kontribusi</span>
                </li>
            </ul>
        </div>
    </section>
</body>

</html>
