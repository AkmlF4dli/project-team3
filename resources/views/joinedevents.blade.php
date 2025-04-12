<x-app-layout>
    <x-slot name="header">
        <div class="d-flex">
            <center><h1 class="fs-3 text-dark">Event yang Sudah Kamu Ikuti</h1></center>
        </div>
    </x-slot>

    <div class="py-5 bg-light min-vh-100">
        <div class="container">
            <!-- Workshop Cards -->
            <div class="row g-4">
                @foreach ($events as $event)
                    <div class="col-md-4">
                        <div class="card shadow-sm rounded">
                            <!-- Gambar Event (Opsional) -->
                            <img src="{{ $event->imaging }}" class="card-img-top" alt="{{ $event->title }}" style="height: 200px; object-fit: cover;">

                            <div class="card-body">
                                <h5 class="card-title">{{ $event->title }}</h5>
                                <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($event->description, 100) }}</p>
                                
                                <!-- Status Event -->
                                <div class="d-flex justify-content-between align-items-center">
                                    <span class="badge bg-green-800 text-white">
                                        {{ $event->status }}
                                    </span>
                                    
                                    <a href="/dashboard/event/{{ $event->event_id }}/{{ $event->title }}" class="btn btn-sm btn-primary">
                                        Lihat Detail event
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="footer bg-dark text-white py-3 mt-5">
        <div class="container text-center">
            <p>© 2025 Project Latihan. All Rights Reserved.</p>
            <p><a href="#" class="text-white">Privacy Policy</a> | <a href="#" class="text-white">Terms of Service</a></p>
        </div>
    </div>
</x-app-layout>
3