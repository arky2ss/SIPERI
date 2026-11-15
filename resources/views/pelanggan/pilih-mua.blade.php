@extends('layouts.app')

@section('title', 'Pilih MUA - SIPERI')

@section('content')
<!-- Header & Stepper -->
<nav class="navbar navbar-expand navbar-siperi border-bottom" style="border-color: #E8E2D9 !important;">
    <div class="container py-1">
        <a class="navbar-brand navbar-brand-siperi" href="{{ route('beranda') }}">
            SIPERI
        </a>

        <!-- Stepper (Langkah Pemesanan) -->
        <div class="d-none d-md-flex align-items-center gap-3 ms-auto small">
            <!-- Step 1: Selesai -->
            <div class="d-flex align-items-center gap-2">
                <span class="step-circle step-active"><i class="bi bi-check-lg"></i></span>
                <span class="text-dark fw-medium">Pilih Paket</span>
            </div>
            <div class="step-line"></div>

            <!-- Step 2: Aktif -->
            <div class="d-flex align-items-center gap-2">
                <span class="step-circle step-active">2</span>
                <span class="text-dark fw-bold">Pilih MUA</span>
            </div>
            <div class="step-line"></div>

            <!-- Step 3: Belum Aktif -->
            <div class="d-flex align-items-center gap-2">
                <span class="step-circle step-inactive">3</span>
                <span class="text-muted">Atur Jadwal</span>
            </div>
        </div>
    </div>
</nav>

<div class="container py-5">
    <!-- Header Section + Ringkasan Paket Terpilih -->
    <div class="row align-items-start justify-content-between mb-5 g-4">
        <div class="col-lg-8">
            <p class="text-uppercase text-gold fw-semibold small mb-2" style="letter-spacing: 2px;">
                LANGKAH 2
            </p>
            <h1 class="font-serif display-5 fw-medium text-dark mb-2">
                Pilih MUA favoritmu
            </h1>
            <p class="text-muted">
                Pilih satu dari tiga make up artist yang tersedia.
            </p>
        </div>

        <!-- Box Paket Dipilih -->
        <div class="col-lg-4 col-xl-3 text-lg-end">
            <div class="p-3 rounded-4 d-inline-block text-start shadow-sm" style="background-color: #F3EAE0; min-width: 200px;">
                <span class="d-block text-muted small" style="font-size: 0.78rem;">Paket dipilih</span>
                <strong class="d-block text-dark small fw-bold">Paket 1 · Rias saja</strong>
                <a href="{{ route('beranda') }}#paket" class="small text-maroon text-decoration-none fw-medium">
                    Ganti paket
                </a>
            </div>
        </div>
    </div>

    <!-- Daftar Card MUA (3 Kolom) -->
    <div class="row g-4 justify-content-center">
        @foreach([1, 2, 3] as $mua)
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card siperi-card h-100 p-4 d-flex flex-column justify-content-between">
                <div>
                    <!-- Foto Placeholder MUA -->
                    <div class="rounded-4 mb-4 d-flex align-items-center justify-content-center text-muted small fw-medium" 
                         style="background-color: #E8DDD2; height: 230px; width: 100%;">
                        <span>[FOTO MUA {{ $mua }}]</span>
                    </div>

                    <h3 class="font-serif fs-3 fw-medium text-dark mb-2">
                        [NAMA MUA {{ $mua }}]
                    </h3>
                    <p class="text-muted small mb-3">
                        [Deskripsi singkat dan keahlian MUA]
                    </p>
                    <div class="mb-4">
                        <a href="#" class="small text-maroon text-decoration-none fw-medium">
                            Lihat portofolio
                        </a>
                    </div>
                </div>

                <div>
                    <a href="{{ route('atur-jadwal', ['mua' => $mua]) }}" class="btn btn-maroon w-100">
                        Pilih MUA {{ $mua }}
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

