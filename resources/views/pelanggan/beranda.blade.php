@extends('layouts.app')

@section('title', 'SIPERI - Selamat Datang')

@section('content')
<!-- ========================================================
     1. NAVBAR (Komponen: Navbar, Container, Nav, Nav-Link)
     ======================================================== -->
<nav class="navbar navbar-expand-lg navbar-siperi">
    <div class="container">
        <!-- Logo / Brand -->
        <a class="navbar-brand navbar-brand-siperi">
            SIPERI
        </a>

        <!-- Tombol Toggler untuk layar Mobile -->
        <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu" aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navigasi Kanan -->
        <div class="collapse navbar-collapse justify-content-end" id="navbarMenu">
            <ul class="navbar-nav align-items-lg-center gap-lg-4 pt-3 pt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-dark fw-medium px-0 active" href="{{ route('beranda') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-medium px-0" href="#paket">Paket</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-dark fw-medium px-0" href="{{ route('login') }}">Masuk</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- ========================================================
     2. HERO SECTION (Komponen: Container, Row, Col-lg-6, Button)
     ======================================================== -->
<section class="py-5">
    <div class="container py-lg-4">
        <div class="row align-items-center g-5">
            <!-- Kolom Teks Hero (Kiri) -->
            <div class="col-lg-6 order-2 order-lg-1">
                <p class="text-uppercase text-gold fw-semibold small mb-3" style="letter-spacing: 2px;">
                    SISTEM PEMESANAN PAKET RIAS DAN RESEPSI
                </p>
                <h1 class="font-serif display-4 fw-medium text-dark mb-4" style="line-height: 1.15;">
                    Selamat Datang di<br>SIPERI
                </h1>
                <p class="text-muted fs-6 mb-4 pe-lg-4" style="line-height: 1.7;">
                    Pesan jasa rias, busana, hingga dekorasi pelaminan dalam satu tempat. Pilih paket, pilih MUA favoritmu, lalu tentukan tanggal dan jam yang kamu inginkan.
                </p>
                <div>
                    <a href="#paket" class="btn btn-maroon px-4 py-2">
                        Lihat Pilihan Paket
                    </a>
                </div>
            </div>

            <!-- Kolom Gambar Hero Model Lengkung / Arch (Kanan) -->
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="hero-arch-frame shadow-sm">
                    <span>[FOTO HASIL RIAS / PORTOFOLIO]</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ========================================================
     3. PILIHAN PAKET SECTION (Komponen: Card, Row, Col-lg-4, Badge)
     ======================================================== -->
<section id="paket" class="py-5 my-3">
    <div class="container">
        <!-- Header Judul Section -->
        <div class="text-center mb-5">
            <p class="text-uppercase text-gold fw-semibold small mb-2" style="letter-spacing: 2px;">
                PILIHAN PAKET
            </p>
            <h2 class="font-serif display-6 fw-medium text-dark">
                Pilih paket yang sesuai acaramu
            </h2>
        </div>

        <!-- Baris Kartu Paket -->
        <div class="row g-4 align-items-stretch justify-content-center">

            <!-- Paket 1 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card siperi-card h-100 p-4 p-xl-5 d-flex flex-column justify-content-between">
                    <div>
                        <h3 class="font-serif fs-2 fw-medium text-dark mb-1">Paket 1</h3>
                        <p class="text-muted small mb-4">Rias saja</p>
                        
                        <div class="font-serif fs-3 fw-bold text-maroon mb-4">
                            [HARGA]
                        </div>

                        <ul class="list-unstyled text-dark mb-5 small" style="line-height: 2;">
                            <li class="d-flex align-items-center gap-2">
                                <span class="fs-5 text-muted">•</span>
                                <span>Makeup oleh MUA pilihan</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <a href="{{ route('pilih-mua', ['paket' => 1]) }}" class="btn btn-outline-maroon w-100">
                            Pilih Paket 1
                        </a>
                    </div>
                </div>
            </div>

            <!-- Paket 2 -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card siperi-card h-100 p-4 p-xl-5 d-flex flex-column justify-content-between">
                    <div>
                        <h3 class="font-serif fs-2 fw-medium text-dark mb-1">Paket 2</h3>
                        <p class="text-muted small mb-4">Rias dan penataan rambut</p>
                        
                        <div class="font-serif fs-3 fw-bold text-maroon mb-4">
                            [HARGA]
                        </div>

                        <ul class="list-unstyled text-dark mb-5 small" style="line-height: 2;">
                            <li class="d-flex align-items-center gap-2">
                                <span class="fs-5 text-muted">•</span>
                                <span>Makeup oleh MUA pilihan</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <span class="fs-5 text-muted">•</span>
                                <span>Hairdo atau hijab stylist</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <a href="{{ route('pilih-mua', ['paket' => 2]) }}" class="btn btn-outline-maroon w-100">
                            Pilih Paket 2
                        </a>
                    </div>
                </div>
            </div>

            <!-- Paket Komplit (Featured Card) -->
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card siperi-card featured h-100 p-4 p-xl-5 d-flex flex-column justify-content-between position-relative shadow-sm">
                    <div>
                        <!-- Badge "PALING LENGKAP" -->
                        <div class="mb-3">
                            <span class="badge bg-maroon text-white text-uppercase px-3 py-2 rounded-pill fw-semibold" style="letter-spacing: 1px; font-size: 0.72rem;">
                                PALING LENGKAP
                            </span>
                        </div>

                        <h3 class="font-serif fs-2 fw-medium text-dark mb-1">Paket Komplit</h3>
                        <p class="text-muted small mb-4">Semua kebutuhan hari pernikahan</p>
                        
                        <div class="font-serif fs-3 fw-bold text-maroon mb-4">
                            [HARGA]
                        </div>

                        <ul class="list-unstyled text-dark mb-5 small" style="line-height: 2;">
                            <li class="d-flex align-items-center gap-2">
                                <span class="fs-5 text-muted">•</span>
                                <span>Makeup oleh MUA pilihan</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <span class="fs-5 text-muted">•</span>
                                <span>Gaun pengantin</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <span class="fs-5 text-muted">•</span>
                                <span>Hairdo atau hijab stylist</span>
                            </li>
                            <li class="d-flex align-items-center gap-2">
                                <span class="fs-5 text-muted">•</span>
                                <span>Dekorasi panggung pernikahan</span>
                            </li>
                        </ul>
                    </div>

                    <div>
                        <a href="{{ route('pilih-mua', ['paket' => 3]) }}" class="btn btn-maroon w-100">
                            Pilih Paket Komplit
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- ========================================================
     4. FOOTER (Komponen: Container, Row, Col, Border-top)
     ======================================================== -->
<footer class="border-top mt-5 py-4" style="border-color: #E8E2D9 !important;">
    <div class="container">
        <div class="row align-items-center gy-2">
            <div class="col-md-6 text-center text-md-start">
                <span class="small text-muted">
                    SIPERI, Sistem Pemesanan Paket Rias dan Resepsi
                </span>
            </div>
            <div class="col-md-6 text-center text-md-end">
                <span class="small text-muted">
                    [KONTAK / MEDIA SOSIAL]
                </span>
            </div>
        </div>
    </div>
</footer>
@endsection

