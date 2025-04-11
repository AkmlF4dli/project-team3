<x-app-layout>
    <x-slot name="header">
        <div class="d-flex justify-content-between align-items-center">
 
    <div class="py-5 bg-light min-vh-100">
        <div class="container">
            <!-- Bootstrap Alert -->
            {{-- <div class="alert alert-success shadow-sm" role="alert">
                ✅ Kamu berhasil login ke sistem!
            </div> --}}

            <!-- Workshop Cards -->
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-6 col-lg-4">
                    <div class="card h-100 shadow-sm">
                        <img src="https://images.unsplash.com/photo-1743126642334-ab003ce665da?q=80&w=1065&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D:w" class="card-img-top" alt="Workshop">
                        <div class="card-body">
                            <h5 class="card-title text-primary">Public Speaking Workshop</h5>
                            <p class="card-text text-muted mb-1">📅 25 April 2025</p>
                            <p class="card-text text-muted">📍 Aula SMA 1</p>
                            <a href="#" class="btn btn-outline-primary mt-2">Lihat Detail</a>
                        </div>
                    </div>
                </div>

                <!-- Tambah card lain sesuai kebutuhan -->
            </div>

            <!-- Call to Action -->
            <div class="mt-5 text-center bg-white p-4 rounded shadow-sm">
                <h4 class="fw-bold text-dark">Ingin membuat event baru?</h4>
                <p class="text-muted">Klik tombol di atas untuk mulai merancang workshop serumu!</p>
            </div>
        </div>
    </div>
</x-app-layout>
