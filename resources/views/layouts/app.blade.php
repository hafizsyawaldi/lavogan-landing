<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Sisfo Lavogan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    <nav class="navbar">
        <div class="nav-container">

            <a href="/" class="logo">
                <span class="logo-icon">L</span>
                <span>LAVOGAN</span>
            </a>

            <div class="nav-menu" id="navMenu">
                <a href="#tentang">Tentang</a>
                <a href="#program">Program</a>
                <a href="#statistik">Statistik</a>
                <a href="#berita">Berita</a>
                <a href="#kontak">Kontak</a>
            </div>

            <a href="#" class="nav-button">
                Masuk Sistem
            </a>

            <button class="nav-toggle" id="navToggle" type="button">
                ☰
            </button>

        </div>
    </nav>

    <main>
        @yield('content')
    </main>

    <footer class="footer" id="kontak">
        <div class="footer-container">
            <h3>SISFO LAVOGAN</h3>
            <p>
                Sistem Informasi Lavogan untuk mendukung
                pengelolaan pelatihan vokasi secara terintegrasi.
            </p>

            <p class="footer-copy">
                © 2026 Sisfo Lavogan
            </p>
        </div>
    </footer>

</body>
</html>