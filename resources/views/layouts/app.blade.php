<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'SIPERI - Sistem Pemesanan Paket Rias dan Resepsi')</title>

    <!-- Google Fonts: Playfair Display (Serif Elegan) & Plus Jakarta Sans (Modern Clean) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap 5.3.3 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        :root {
            --siperi-maroon: #722F37;
            --siperi-maroon-hover: #5B242B;
            --siperi-bg: #FAF7F2;
            --siperi-gold: #B58A55;
            --siperi-card-border: #E8E2D9;
            --siperi-placeholder-bg: #E8DDD2;
            --siperi-text-dark: #2B2523;
            --siperi-text-muted: #7A726D;
        }

        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
            background-color: var(--siperi-bg);
            color: var(--siperi-text-dark);
            min-height: 100vh;
        }

        .font-serif {
            font-family: 'Playfair Display', serif;
        }

        /* Branding Colors */
        .text-maroon {
            color: var(--siperi-maroon) !important;
        }
        .text-gold {
            color: var(--siperi-gold) !important;
        }
        .bg-maroon {
            background-color: var(--siperi-maroon) !important;
        }

        /* Custom Buttons */
        .btn-maroon {
            background-color: var(--siperi-maroon);
            border-color: var(--siperi-maroon);
            color: #ffffff;
            font-weight: 500;
            padding: 0.65rem 1.75rem;
            border-radius: 50rem;
            transition: background-color 0.15s ease, border-color 0.15s ease;
        }
        .btn-maroon:hover {
            background-color: var(--siperi-maroon-hover);
            border-color: var(--siperi-maroon-hover);
            color: #ffffff;
        }

        .btn-outline-maroon {
            background-color: transparent;
            border: 1.5px solid var(--siperi-maroon);
            color: var(--siperi-maroon);
            font-weight: 500;
            padding: 0.65rem 1.75rem;
            border-radius: 50rem;
            transition: all 0.15s ease;
        }
        .btn-outline-maroon:hover {
            background-color: var(--siperi-maroon);
            color: #ffffff;
        }

        /* Navbar */
        .navbar-siperi {
            background-color: var(--siperi-bg);
            padding-top: 1.25rem;
            padding-bottom: 1.25rem;
        }
        .navbar-brand-siperi {
            font-family: 'Playfair Display', serif;
            font-size: 1.6rem;
            font-weight: 700;
            letter-spacing: 2px;
            color: var(--siperi-maroon);
            text-decoration: none;
        }

        /* Card custom styling */
        .siperi-card {
            background-color: #ffffff;
            border: 1px solid var(--siperi-card-border);
            border-radius: 1.25rem;
        }
        .siperi-card.featured {
            border: 2px solid var(--siperi-maroon);
        }

        /* Hero Arch Window Frame */
        .hero-arch-frame {
            background-color: var(--siperi-placeholder-bg);
            border-radius: 240px 240px 20px 20px;
            border: 1.5px solid var(--siperi-gold);
            height: 480px;
            width: 100%;
            max-width: 440px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #6C5F57;
            font-weight: 500;
            letter-spacing: 1px;
            font-size: 0.9rem;
            margin: 0 auto;
        }

        /* Stepper Styling */
        .step-circle {
            width: 28px;
            height: 28px;
            border-radius: 50%;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            font-size: 0.85rem;
            font-weight: 600;
        }
        .step-active {
            background-color: var(--siperi-maroon);
            color: #ffffff;
        }
        .step-inactive {
            border: 1.5px solid #A49B95;
            color: #A49B95;
            background-color: transparent;
        }
        .step-line {
            width: 40px;
            height: 2px;
            background-color: #D3CBC3;
        }
    </style>
    @stack('styles')
</head>
<body>

    @yield('content')

    <!-- Bootstrap 5.3.3 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    @stack('scripts')
</body>
</html>

