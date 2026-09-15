<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - Sisfo Lavogan</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="login-page">

    <main class="login-container">

        <section class="login-brand">
            <div class="brand-content">

                <div class="brand-logo">
                    <span>L</span>
                </div>

                <p class="brand-label">
                    SISTEM INFORMASI
                </p>

                <h1>
                    LAVOGAN<span>.</span>
                </h1>

                <p class="brand-description">
                    Platform informasi terintegrasi untuk mendukung
                    pengelolaan pelatihan vokasi secara efektif,
                    terstruktur, dan terpusat.
                </p>

                <div class="brand-footer">
                    Direktorat Bina Pelatihan Vokasi dan Pemagangan
                </div>

            </div>
        </section>


        <section class="login-form-section">

            <div class="login-form-wrapper">

                <div class="login-header">
                    <p class="login-label">SISFO LAVOGAN</p>

                    <h2>
                        Selamat Datang
                    </h2>

                    <p>
                        Silakan masuk untuk melanjutkan ke sistem.
                    </p>
                </div>


                <form>

                    <div class="form-group">
                        <label for="email">
                            Email
                        </label>

                        <input
                            type="email"
                            id="email"
                            name="email"
                            placeholder="Masukkan email"
                        >
                    </div>


                    <div class="form-group">
                        <label for="password">
                            Password
                        </label>

                        <input
                            type="password"
                            id="password"
                            name="password"
                            placeholder="Masukkan password"
                        >
                    </div>


                    <div class="login-options">

                        <label class="remember-me">
                            <input
                                type="checkbox"
                                name="remember"
                            >

                            <span>Remember Me</span>
                        </label>

                        <a href="#">
                            Lupa password?
                        </a>

                    </div>


                    <button
                        type="submit"
                        class="login-button"
                    >
                        Masuk ke Sistem
                        <span>→</span>
                    </button>

                </form>


                <div class="login-divider">
                    <span></span>
                    <p>Sisfo Lavogan</p>
                    <span></span>
                </div>


                <p class="login-note">
                    Sistem Informasi Lavogan untuk mendukung
                    pengelolaan pelatihan vokasi.
                </p>

            </div>

        </section>

    </main>

</body>
</html>