<section class="flex flex-col break-words bg-white sm:border-1 sm:rounded-md sm:shadow-sm w-full">

    @if (session()->has('message'))
        <div class="w-full px-4 pt-4">
            <div class="bg-green-400 rounded-md py-2 px-4 text-white italic shadow-md border border-cool-gray-700">
                {{ session('message') }}
            </div>
        </div>
    @elseif (session()->has('delete'))
        <div class="w-full px-4 pt-4">
            <div class="bg-red-400 rounded-md py-2 px-4 text-white italic shadow-md border border-cool-gray-700">
                {{ session('delete') }}
            </div>
        </div>
    @else
        <header
            class="font-semibold bg-blue-600 text-gray-200 py-5 px-6 sm:py-3 sm:px-8 sm:rounded-t-md flex justify-between items-center">
            <span>Jadwal Tugas</span>
            <div class="flex justify-between w-72">
                <div id="time"></div>
                <div>{{ Carbon\Carbon::today()->translatedFormat('l, d F Y') }}</div>
            </div>
        </header>
    @endif


    @if ($statusUpdate)
        <livewire:jadwal-update>
        @else
            <livewire:jadwal-create>
    @endif

    <div class="w-full px-4 pb-4">
        <div class="w-full mb-5">
            <div class="py-2 px-4 flex items-center justify-between">
                <input wire:model="search"
                    class="outline-none italic rounded-full px-4 py-1 w-1/2 border border-blue-400 focus:shadow-outline-teal"
                    type="search" placeholder="Search...">

                <select wire:model="optionPaginate"
                    class="border border-blue-400 outline-none py-1 px-5 rounded-md focus:shadow-outline-teal">
                    <option class="bg-blue-400" selected value="3">3</option>
                    <option class="bg-green-400" value="5">5</option>
                    <option class="bg-red-400" value="100">100</option>
                </select>

                <select wire:model="option"
                    class="border border-blue-400 outline-none py-1 px-5 rounded-md focus:shadow-outline-teal">
                    <option class="bg-blue-400" selected value="semua">Semua</option>
                    <option class="bg-green-400" value="sudah">Sudah</option>
                    <option class="bg-red-400" value="belum">Belum</option>
                </select>

                <div class="italic font-bold flex justify-between w-60">
                    <span class="text-blue-400">
                        Semua : {{ $semua }}
                    </span>
                    <span class="text-red-400">
                        Belum : {{ $belum }}
                    </span>
                    <span class="text-green-400">
                        Sudah : {{ $sudah }}
                    </span>
                </div>
            </div>
        </div>
        <table class="shadow-md table-auto w-full rounded-md bg-gray-400 border border-cool-gray-600 mb-5">
            <thead>
                <tr class="animate-bounce">
                    <th class="bg-blue-300 w-1/2 py-3 border border-cool-gray-600 rounded-md">Jadwal Tugas</th>
                    <th class="bg-teal-300 w-1/6 py-3 border border-cool-gray-600 rounded-md">Pengumpulan</th>
                    <th class="bg-red-300 w-1/6 py-3 border border-cool-gray-600 rounded-md">Status</th>
                    <th class="bg-green-300 w-1/6 py-3 border border-cool-gray-600 rounded-md">Event</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($jadwal as $no => $item)
                    <tr class="{{ ($no + 1) % 2 == 0 ? 'bg-gray-300' : '' }}">
                        <td
                            class="border border-cool-gray-600 transform hover:scale-110 duration-500 hover:shadow-outline-green hover:translate-x-1 hover:bg-green-300 rounded-md">
                            <div class="py-2 pl-2 text-sm tracking-wide leading-tight">
                                {{ $item->nama_tugas }}
                            </div>
                        </td>
                        <td
                            class="border-b border-cool-gray-600 py-2 text-center italic hover:bg-blue-600 hover:opacity-50 transform hover:scale-110 hover:shadow-md hover:text-white hover:-translate-x-6 hover:rotate-12 duration-500 cursor-default flex flex-col rounded-md">
                            {{-- {{ date('l, d F Y', strtotime($item->pengumpulan)) }} --}}
                            <span class="">
                                {{ Carbon\Carbon::parse($item->pengumpulan)->translatedFormat('l, d F Y') }}
                            </span>
                            <span class="pt-1">
                                {{ $item->pengumpulan->diffForHumans() }}
                            </span>
                            {{-- {{ $item->created_at }} --}}
                        </td>
                        <td class="py-2 border-cool-gray-600 border">
                            <div class="flex justify-center">
                                @if ($item->status == 'belum')
                                    <div wire:click="getStatus({{ $item->id }})"
                                        class="bg-red-400 w-20 flex justify-center items-center py-2 rounded-md cursor-pointer hover:bg-red-500 transform hover:scale-110 hover:shadow-md duration-500 hover:text-white">
                                        {{ $item->status }}
                                    </div>
                                @else
                                    <div wire:click="getStatusUpdate({{ $item->id }})"
                                        class="bg-green-400 w-20 hover:bg-green-500 transform hover:scale-110 hover:shadow-md duration-500 hover:text-white flex justify-center py-2 rounded-md cursor-pointer">
                                        {{ $item->status }}
                                    </div>
                                @endif
                            </div>
                        </td>
                        <td class="border py-2 border-cool-gray-600">
                            <div class="flex justify-evenly">
                                <div wire:click="getJadwal({{ $item->id }})"
                                    class="bg-blue-400 rounded-md px-4 py-2 italic hover:bg-blue-500 transform hover:scale-110 hover:text-white duration-500 hover:shadow-outline-blue cursor-pointer">
                                    Edit
                                </div>
                                <div wire:click="destroy({{ $item->id }})"
                                    class="bg-red-400 rounded-md px-4 py-2 italic hover:bg-red-500 transform hover:scale-110 hover:shadow-md duration-500 hover:text-white cursor-pointer">
                                    Delete
                                </div>
                            </div>
                        </td>
                    </tr>

                @endforeach
            </tbody>
        </table>
        {{ $jadwal->links() }}

    </div>
</section>
