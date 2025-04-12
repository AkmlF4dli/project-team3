<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
            <!-- Add any header content you need here -->
        </div>
    </x-slot>

    <div class="py-5 bg-light min-vh-100">
        <div class="container">
            <!-- Workshop Cards -->
            <div class="row g-4">
                @foreach ($events as $event)
                    <!-- Card 1 -->
                    <div class="col-md-6 col-lg-4">
                        <div class="card h-100 shadow-sm">
                            <!-- Add a custom class to the image -->
                            <img src="{{ $event->imaging }}" class="card-img-top img-fluid custom-img" alt="Workshop">
                            <div class="card-body">
                                <h5 class="card-title text-primary">{{ $event->title }}</h5>
                                <p class="card-text text-muted mb-1">📅 {{ $event->dated }}</p>
                                <p class="card-text text-muted">📍 {{ $event->place }}</p>
                                <p class="card-text text-muted">status:<b class="text-lime-600"> {{ $event->status }}</b></p>
                                <a href="/dashboard/event/{{ $event->id }}/{{ $event->title }}" class="btn btn-outline-primary mt-2">Lihat Detail</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer bg-dark text-white py-3 mt-5">
        <div class="container text-center">
            <p>© 2025 Project Latihan. All Rights Reserved.</p>
            <p><a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Terms of Service</a></p>
        </div>
    </div>
</x-app-layout>
