<form wire:submit.prevent="store" class="w-full pb-4 space-y-6 sm:px-10 sm:space-y-3" method="POST" action="">
    @csrf

    <div class="flex w-full">
        <div class="flex flex-wrap w-4/5">
            <label for="nama_tugas" class="block text-gray-700 text-sm font-bold mb-2">
                {{ __('Nama Tugas') }}:
            </label>

            <textarea wire:model="nama_tugas" id="nama_tugas"
                class="form-input w-full @error('nama_tugas') border-red-500 @enderror" name="nama_tugas" autofocus required></textarea>

            @error('nama_tugas')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
            @enderror
        </div>

        <div class="flex flex-wrap ml-4">
            <label for="pengumpulan" class="block text-gray-700 text-sm font-bold">
                {{ __('Pengumpulan') }}
            </label>

            <input wire:model="pengumpulan" id="pengumpulan" type="date"
                class="form-input @error('pengumpulan') border-red-500 @enderror w-full" name="nama_rumus"
                value="{{ old('pengumpulan') }}" required autocomplete="pengumpulan">

            @error('pengumpulan')
                <p class="text-red-500 text-xs italic mt-4">
                    {{ $message }}
                </p>
            @enderror
        </div>
    </div>

    <div class="flex flex-wrap justify-center">
        <button type="submit"
            class="w-1/2 select-none font-bold whitespace-no-wrap rounded-lg text-base leading-normal no-underline text-gray-100 bg-blue-500 hover:bg-blue-600 transform hover:shadow-md duration-500 sm:py-4 animate-spin">
            Submit
        </button>
    </div>
</form>
