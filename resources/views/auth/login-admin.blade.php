<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Masuk sebagai Admin - SIPERI</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        :root {
            --siperi-maroon: #722F37;
            --siperi-maroon-hover: #5B242B;
            --siperi-gold: #C5A880;
            --siperi-bg-right: #FAF7F2;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--siperi-bg-right);
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .font-serif {
            font-family: 'Playfair Display', serif;
        }

        .bg-maroon-brand {
            background-color: var(--siperi-maroon);
            color: #ffffff;
        }

        .text-maroon {
            color: var(--siperi-maroon) !important;
        }

        .btn-maroon {
            background-color: var(--siperi-maroon);
            border-color: var(--siperi-maroon);
            color: #ffffff;
            font-weight: 500;
            padding: 0.75rem 2rem;
            border-radius: 50rem;
            transition: all 0.15s ease;
        }
        .btn-maroon:hover {
            background-color: var(--siperi-maroon-hover);
            border-color: var(--siperi-maroon-hover);
            color: #ffffff;
        }

        .gold-divider {
            width: 50px;
            height: 3px;
            background-color: var(--siperi-gold);
            margin-bottom: 1.5rem;
        }

        .form-control:focus {
            border-color: var(--siperi-maroon);
            box-shadow: 0 0 0 0.25rem rgba(114, 47, 55, 0.15);
        }

        .form-check-input:checked {
            background-color: var(--siperi-maroon);
            border-color: var(--siperi-maroon);
        }
    </style>
</head>
<body>

<div class="container-fluid min-vh-100 p-0">
    <div class="row g-0 min-vh-100">
        
        <!-- ========================================================
             KOLOM KIRI: BRANDING & SAMBUTAN (bg-maroon-brand)
             ======================================================== -->
        <div class="col-lg-5 col-xl-5 bg-maroon-brand p-5 d-flex flex-column justify-content-between min-vh-100">
            <!-- Brand Atas -->
            <div>
                <a href="{{ route('beranda') }}" class="font-serif text-white text-decoration-none fs-2 fw-bold" style="letter-spacing: 2px;">
                    SIPERI
                </a>
            </div>

            <!-- Pesan Tengah -->
            <div class="py-5 my-auto" style="max-width: 440px;">
                <div class="gold-divider"></div>
                
                <p class="text-uppercase fw-semibold small mb-3" style="color: var(--siperi-gold); letter-spacing: 2px;">
                    MASUK ADMIN
                </p>

                <h1 class="font-serif display-4 fw-medium text-white mb-4" style="line-height: 1.15;">
                    Selamat datang kembali
                </h1>

                <p class="text-white-50 fs-6 mb-0" style="line-height: 1.7;">
                    Masuk untuk mengelola paket, akun MUA, verifikasi pembayaran, dan laporan pemesanan.
                </p>
            </div>

            <!-- Footer Kiri Bawah -->
            <div>
                <p class="small text-white-50 mb-0">
                    Sistem Pemesanan Paket Rias dan Resepsi
                </p>
            </div>
        </div>

        <!-- ========================================================
             KOLOM KANAN: FORM LOGIN ADMIN (bg-light / cream)
             ======================================================== -->
        <div class="col-lg-7 col-xl-7 d-flex align-items-center justify-content-center p-4 p-md-5">
            <div class="w-100" style="max-width: 440px;">
                
                <!-- Judul Form -->
                <div class="mb-5">
                    <h2 class="font-serif display-6 fw-medium text-dark mb-2">
                        Masuk sebagai Admin
                    </h2>
                    <p class="text-muted small">
                        Gunakan email dan kata sandi akun admin.
                    </p>
                </div>

                <!-- Form Login -->
                <form action="#" method="POST">
                    @csrf
                    <!-- Input Email -->
                    <div class="mb-4">
                        <label for="email" class="form-label small fw-medium text-dark mb-1">Email</label>
                        <input type="email" id="email" name="email" class="form-control rounded-3 py-2 px-3 border" placeholder="admin@email.com" required>
                    </div>

                    <!-- Input Kata Sandi -->
                    <div class="mb-4">
                        <label for="password" class="form-label small fw-medium text-dark mb-1">Kata sandi</label>
                        <input type="password" id="password" name="password" class="form-control rounded-3 py-2 px-3 border" placeholder="Masukkan kata sandi" required>
                    </div>

                    <!-- Checkbox Ingat Saya & Lupa Kata Sandi -->
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember" name="remember">
                            <label class="form-check-label small text-dark" for="remember">
                                Ingat saya
                            </label>
                        </div>
                        <a href="#" class="small text-maroon text-decoration-none fw-medium">
                            Lupa kata sandi?
                        </a>
                    </div>

                    <!-- Tombol Masuk -->
                    <button type="submit" class="btn btn-maroon w-100 py-2 mb-4">
                        Masuk
                    </button>

                    <!-- Link Daftar -->
                    <div class="text-center">
                        <span class="small text-muted">Belum punya akun admin? </span>
                        <a href="{{ route('register') }}" class="small text-maroon text-decoration-none fw-semibold">
                            Daftar
                        </a>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

<!-- Bootstrap 5.3.3 JS Bundle -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

