@extends('layouts.app')

@section('title', 'Atur Jadwal - SIPERI')

@push('styles')
<style>
    .calendar-cell {
        aspect-ratio: 1;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 0.65rem;
        font-size: 0.9rem;
        cursor: pointer;
        border: 1px solid transparent;
        transition: all 0.15s ease;
    }
    .calendar-cell.available {
        border-color: #E8E2D9;
        background-color: #ffffff;
    }
    .calendar-cell.available:hover {
        border-color: var(--siperi-maroon);
    }
    .calendar-cell.selected {
        background-color: var(--siperi-maroon);
        color: #ffffff;
        font-weight: 600;
    }
    .calendar-cell.booked {
        background-color: #F0EAE1;
        color: #A89F97;
        text-decoration: line-through;
        cursor: not-allowed;
    }

    .time-slot {
        border: 1px solid #E8E2D9;
        border-radius: 0.75rem;
        padding: 0.85rem 1.25rem;
        display: flex;
        align-items: center;
        justify-content: space-between;
        cursor: pointer;
        background-color: #ffffff;
    }
    .time-slot.selected {
        background-color: var(--siperi-maroon);
        border-color: var(--siperi-maroon);
        color: #ffffff;
    }
    .time-slot.booked {
        background-color: #F0EAE1;
        border-color: #E8E2D9;
        color: #A89F97;
        cursor: not-allowed;
    }
</style>
@endpush

@section('content')
<!-- Header & Stepper -->
<nav class="navbar navbar-expand navbar-siperi border-bottom" style="border-color: #E8E2D9 !important;">
    <div class="container py-1">
        <a class="navbar-brand navbar-brand-siperi" href="{{ route('beranda') }}">
            SIPERI
        </a>

        <!-- Stepper (Langkah Pemesanan) -->
        <div class="d-none d-md-flex align-items-center gap-3 ms-auto small">
            <!-- Step 1 -->
            <div class="d-flex align-items-center gap-2">
                <span class="step-circle step-active"><i class="bi bi-check-lg"></i></span>
                <span class="text-dark fw-medium">Pilih Paket</span>
            </div>
            <div class="step-line"></div>

            <!-- Step 2 -->
            <div class="d-flex align-items-center gap-2">
                <span class="step-circle step-active"><i class="bi bi-check-lg"></i></span>
                <span class="text-dark fw-medium">Pilih MUA</span>
            </div>
            <div class="step-line"></div>

            <!-- Step 3: Aktif -->
            <div class="d-flex align-items-center gap-2">
                <span class="step-circle step-active">3</span>
                <span class="text-dark fw-bold">Atur Jadwal</span>
            </div>
        </div>
    </div>
</nav>

<div class="container py-5">
    <div class="row g-5">
        <!-- Kolom Kiri: Kalender & Pilihan Jam -->
        <div class="col-lg-7">
            <p class="text-uppercase text-gold fw-semibold small mb-2" style="letter-spacing: 2px;">
                LANGKAH 3
            </p>
            <h1 class="font-serif display-5 fw-medium text-dark mb-2">
                Atur jadwalmu
            </h1>
            <p class="text-muted small mb-4">
                Pilih tanggal dan jam. Slot yang sudah dibooking tidak bisa dipilih.
            </p>

            <!-- Card Kalender -->
            <div class="card siperi-card p-4 p-md-5 mb-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h3 class="font-serif fs-4 fw-medium text-dark mb-0">November 2026</h3>
                    <span class="text-muted small">Jadwal [NAMA MUA 1]</span>
                </div>

                <!-- Grid Kalender Hari -->
                <div class="row row-cols-7 g-2 text-center small fw-semibold text-muted mb-3">
                    <div class="col">Sen</div>
                    <div class="col">Sel</div>
                    <div class="col">Rab</div>
                    <div class="col">Kam</div>
                    <div class="col">Jum</div>
                    <div class="col">Sab</div>
                    <div class="col">Min</div>
                </div>

                <!-- Tanggal -->
                <div class="row row-cols-7 g-2 text-center">
                    <!-- Minggu 1 -->
                    <div class="col"></div><div class="col"></div><div class="col"></div><div class="col"></div><div class="col"></div><div class="col"></div>
                    <div class="col"><div class="calendar-cell text-muted">1</div></div>

                    <!-- Minggu 2 -->
                    <div class="col"><div class="calendar-cell text-muted">2</div></div>
                    <div class="col"><div class="calendar-cell text-muted">3</div></div>
                    <div class="col"><div class="calendar-cell text-muted">4</div></div>
                    <div class="col"><div class="calendar-cell text-muted">5</div></div>
                    <div class="col"><div class="calendar-cell text-muted">6</div></div>
                    <div class="col"><div class="calendar-cell text-muted">7</div></div>
                    <div class="col"><div class="calendar-cell text-muted">8</div></div>

                    <!-- Minggu 3 -->
                    <div class="col"><div class="calendar-cell text-muted">9</div></div>
                    <div class="col"><div class="calendar-cell text-muted">10</div></div>
                    <div class="col"><div class="calendar-cell text-muted">11</div></div>
                    <div class="col"><div class="calendar-cell text-muted">12</div></div>
                    <div class="col"><div class="calendar-cell text-muted">13</div></div>
                    <div class="col"><div class="calendar-cell available">14</div></div>
                    <div class="col"><div class="calendar-cell available">15</div></div>

                    <!-- Minggu 4 -->
                    <div class="col"><div class="calendar-cell available">16</div></div>
                    <div class="col"><div class="calendar-cell available">17</div></div>
                    <div class="col"><div class="calendar-cell available">18</div></div>
                    <div class="col"><div class="calendar-cell available">19</div></div>
                    <div class="col"><div class="calendar-cell selected">20</div></div>
                    <div class="col"><div class="calendar-cell booked">21</div></div>
                    <div class="col"><div class="calendar-cell booked">22</div></div>

                    <!-- Minggu 5 -->
                    <div class="col"><div class="calendar-cell available">23</div></div>
                    <div class="col"><div class="calendar-cell available">24</div></div>
                    <div class="col"><div class="calendar-cell available">25</div></div>
                    <div class="col"><div class="calendar-cell available">26</div></div>
                    <div class="col"><div class="calendar-cell available">27</div></div>
                    <div class="col"><div class="calendar-cell available">28</div></div>
                    <div class="col"><div class="calendar-cell available">29</div></div>

                    <!-- Minggu 6 -->
                    <div class="col"><div class="calendar-cell available">30</div></div>
                </div>

                <!-- Legend Keterangan -->
                <div class="d-flex align-items-center gap-4 mt-4 pt-2 small text-muted">
                    <div>Dipilih: <strong class="text-dark">tanggal 20</strong></div>
                    <div>Penuh: <span class="text-muted">tanggal 21 dan 22</span></div>
                </div>
            </div>

            <!-- Card Pilih Jam -->
            <div class="card siperi-card p-4 p-md-5">
                <h3 class="font-serif fs-4 fw-medium text-dark mb-4">
                    Pilih jam · Jumat, 20 November
                </h3>

                <div class="row g-3">
                    <div class="col-md-6">
                        <div class="time-slot booked">
                            <span class="text-decoration-line-through">08.00 – 10.00</span>
                            <span class="small">Terisi</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="time-slot">
                            <span>10.00 – 12.00</span>
                            <span class="text-success small fw-medium">Tersedia</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="time-slot selected">
                            <span class="fw-bold">13.00 – 15.00</span>
                            <span class="small">Dipilih</span>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="time-slot">
                            <span>15.00 – 17.00</span>
                            <span class="text-success small fw-medium">Tersedia</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kolom Kanan: Ringkasan Pesanan -->
        <div class="col-lg-5">
            <div class="card rounded-4 p-4 p-xl-5 border-0 shadow-sm" style="background-color: #F3EAE0;">
                <h3 class="font-serif fs-3 fw-medium text-dark mb-4">
                    Ringkasan pesanan
                </h3>

                <div class="d-flex justify-content-between mb-3 small">
                    <span class="text-muted">Paket</span>
                    <strong class="text-dark">Paket 1 · Rias saja</strong>
                </div>

                <div class="d-flex justify-content-between mb-3 small">
                    <span class="text-muted">MUA</span>
                    <strong class="text-dark">[NAMA MUA 1]</strong>
                </div>

                <div class="d-flex justify-content-between mb-3 small">
                    <span class="text-muted">Tanggal</span>
                    <strong class="text-dark">Jumat, 20 November 2026</strong>
                </div>

                <div class="d-flex justify-content-between mb-4 pb-2 small border-bottom" style="border-color: #E2D6CA !important;">
                    <span class="text-muted">Jam</span>
                    <strong class="text-dark">13.00 – 15.00</strong>
                </div>

                <!-- Input Form -->
                <div class="mb-3">
                    <label class="form-label small fw-medium text-dark mb-1">Lokasi acara</label>
                    <input type="text" class="form-control rounded-3 border-0 py-2 px-3 bg-white" placeholder="Alamat lokasi rias">
                </div>

                <div class="mb-4">
                    <label class="form-label small fw-medium text-dark mb-1">Catatan (opsional)</label>
                    <input type="text" class="form-control rounded-3 border-0 py-2 px-3 bg-white" placeholder="Permintaan khusus">
                </div>

                <!-- Total -->
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <span class="text-dark fw-medium">Total</span>
                    <span class="font-serif fs-3 fw-bold text-maroon">[HARGA]</span>
                </div>

                <!-- Tombol CTA -->
                <button type="button" class="btn btn-maroon w-100 py-3 mb-3">
                    Lanjut ke Konfirmasi
                </button>

                <div class="text-center">
                    <a href="{{ route('pilih-mua') }}" class="small text-maroon text-decoration-none fw-medium">
                        Kembali pilih MUA
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

