<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Add any header content you need here -->
        </div>
    </x-slot>

    @foreach ($event as $e)
        
    <div class="py-5 bg-light min-vh-100">
        <div class="container flex flex-wrap justify-around">
            <img src="{{ $e->imaging }}">

            <div>
                <h1>{{ $e->title }}</h1>
                <p>
                    {{ $e->description }}
                </p>
                <p class="card-text text-muted mb-1">kuota: {{ $kuota }}/{{ $e->kuota }}</p>
                <p class="card-text text-muted">status:<b class="text-lime-600"> {{ $e->status }}</b></p>
                <p class="card-text text-muted mb-1">Pembawa acara:  {{ $e->author }}</p>
                <p class="card-text text-muted mb-1">📅 {{ $e->dated }}</p>
                <p class="card-text text-muted">📍 {{ $e->place }}</p>
                @if (Auth::user()->role != "admin")
                <a href="/join?name={{ Auth::user()->name }}&id={{ $e->id }}&title={{ $e->title }}&desc={{ $e->description }}&date={{ $e->dated }}&place={{ $e->place }}&image={{ $e->imaging }}&author={{ $e->author }}&kuota={{ $e->kuota }}" class="btn btn-outline-primary mt-2">Join</a>                    
                @endif
            </div>
    </div>

    @endforeach


</x-app-layout>
