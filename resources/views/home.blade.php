@extends('layouts.app')

@section('content')
    <main class="sm:mx-auto sm:mt-5">
        <div class="w-full sm:px-6 flex">

            @if (session('status'))
                <div class="text-sm border border-t-8 rounded text-green-700 border-green-600 bg-green-100 px-3 py-4 mb-4"
                    role="alert">
                    {{ session('status') }}
                </div>
            @endif

            <livewire:jadwal>
            
        </div>
    </main>
@endsection

