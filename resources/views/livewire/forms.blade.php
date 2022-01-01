<div>
    <form wire:submit.prevent="submit">
        Name : <br><input type="text" name='name' wire:model='name'></br>
        @error('name')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br>
        Email : <br><input type="text" name="email" wire:model='email'></br>
        @error('email')
            <span style="color: red">{{ $message }}</span>
        @enderror
        <br>
        
        {{-- <div x-data="{ isUploading: false, progress: 0 }"                   x-on:livewire-upload-start="isUploading = true"
            x-on:livewire-upload-finish="isUploading = false" x-on:livewire-upload-error="isUploading = false"
            x-on:livewire-upload-progress="progress = $event.detail.progress">
            <!-- File Input -->
            <input type="file" wire:model="photo">

            <!-- Progress Bar -->
            <div x-show="isUploading">
                <progress max="100" x-bind:value="progress"></progress>
            </div>
        </div>
        <br>
        @if ($photo)
            <img src="{{ $photo->temporaryUrl() }}" alt="">
        @endif --}}
        <button type="submit">Save</button>
    </form>
</div>
