<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Admin - SDN CITATAH</title>

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #eef6ff, #f8fbff);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .login-wrapper {
            width: 100%;
            max-width: 950px;
            padding: 30px;
        }

        .login-card {
            width: 100%;
            min-height: 540px;
            background: white;
            border-radius: 25px;
            overflow: hidden;
            display: flex;
            box-shadow: 0 15px 45px rgba(0, 80, 180, 0.15);
        }

        /* =========================
           BAGIAN KIRI
        ========================= */

        .login-left {
            width: 48%;
            background: linear-gradient(145deg, #087cf5, #0759c9);
            color: white;
            padding: 50px 40px;

            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;

            text-align: center;
        }

        /* ICON SEKOLAH */
        .logo-box {
            width: 125px;
            height: 125px;

            background: white;
            border-radius: 25px;

            display: flex;
            align-items: center;
            justify-content: center;

            margin-bottom: 25px;

            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
        }

        .logo-box i {
            font-size: 60px;
            color: #087cf5;
        }

        .login-left h1 {
            font-size: 30px;
            margin-bottom: 10px;
            font-weight: 700;
        }

        .login-left h2 {
            font-size: 20px;
            font-weight: 400;
            margin-bottom: 20px;
        }

        .login-left p {
            font-size: 15px;
            line-height: 1.7;
            max-width: 330px;
            opacity: 0.95;
        }

        .school-info {
            margin-top: 30px;
            padding: 12px 25px;

            border: 1px solid rgba(255,255,255,0.4);
            border-radius: 30px;

            font-size: 14px;
        }

        /* =========================
           BAGIAN KANAN
        ========================= */

        .login-right {
            width: 52%;
            padding: 55px 55px;

            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .login-right h2 {
            color: #123f75;
            font-size: 30px;
            margin-bottom: 8px;
        }

        .login-right .subtitle {
            color: #777;
            font-size: 14px;
            margin-bottom: 35px;
        }

        /* ERROR */
        .error-message {
            background: #ffe8e8;
            color: #c62828;

            padding: 12px 15px;

            border-radius: 8px;
            margin-bottom: 20px;

            font-size: 14px;
        }

        /* FORM */
        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;

            color: #24476d;
            font-size: 14px;
            font-weight: 600;

            margin-bottom: 8px;
        }

        .form-group input {
            width: 100%;
            height: 48px;

            border: 1px solid #d6e0eb;
            border-radius: 10px;

            padding: 0 15px;

            font-size: 14px;
            outline: none;

            transition: 0.3s;

            background: #f9fbfd;
        }

        .form-group input:focus {
            border-color: #087cf5;

            background: white;

            box-shadow:
                0 0 0 3px rgba(8,124,245,0.10);
        }

        /* TOMBOL LOGIN */
        .login-button {
            width: 100%;
            height: 50px;

            border: none;
            border-radius: 10px;

            background: #087cf5;
            color: white;

            font-size: 16px;
            font-weight: 600;

            cursor: pointer;

            transition: 0.3s;

            margin-top: 8px;
        }

        .login-button:hover {
            background: #075fc2;
            transform: translateY(-1px);
        }

        /* LINK KEMBALI */
        .back-link {
            text-align: center;
            margin-top: 22px;
        }

        .back-link a {
            color: #087cf5;

            text-decoration: none;

            font-size: 14px;
        }

        .back-link a:hover {
            text-decoration: underline;
        }

        /* =========================
           RESPONSIVE
        ========================= */

        @media (max-width: 768px) {

            body {
                padding: 20px;
            }

            .login-wrapper {
                padding: 10px;
            }

            .login-card {
                flex-direction: column;
            }

            .login-left,
            .login-right {
                width: 100%;
            }

            .login-left {
                padding: 40px 25px;
            }

            .login-right {
                padding: 40px 25px;
            }

            .login-left h1 {
                font-size: 25px;
            }

            .login-left h2 {
                font-size: 18px;
            }

            .login-right h2 {
                font-size: 25px;
            }
        }
    </style>
</head>

<body>

<div class="login-wrapper">

    <div class="login-card">

        <!-- ==========================================
             BAGIAN KIRI
        =========================================== -->

        <div class="login-left">

            <!-- ICON SEKOLAH -->
            <div class="logo-box">
                <i class="bi bi-mortarboard-fill"></i>
            </div>

            <h1>
                SDN CITATAH
            </h1>

            <h2>
                Sistem Informasi Sekolah
            </h2>

            <p>
                Selamat datang di halaman login administrator
                Sistem Informasi SDN CITATAH.
            </p>

            <div class="school-info">
                <i class="bi bi-building me-1"></i>
                Administrasi Sekolah
            </div>

        </div>


        <!-- ==========================================
             BAGIAN KANAN
        =========================================== -->

        <div class="login-right">

            <h2>
                Selamat Datang 👋
            </h2>

            <p class="subtitle">
                Silakan login untuk masuk ke halaman admin.
            </p>


            <!-- PESAN ERROR -->

            @if ($errors->any())

                <div class="error-message">

                    <i class="bi bi-exclamation-circle me-1"></i>

                    {{ $errors->first() }}

                </div>

            @endif


            <!-- FORM LOGIN -->

            <form action="{{ route('login.process') }}" method="POST">

                @csrf


                <!-- EMAIL -->

                <div class="form-group">

                    <label for="email">
                        <i class="bi bi-envelope me-1"></i>
                        Email
                    </label>

                    <input
                        type="email"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="Masukkan email"
                        required
                    >

                </div>


                <!-- PASSWORD -->

                <div class="form-group">

                    <label for="password">
                        <i class="bi bi-lock me-1"></i>
                        Password
                    </label>

                    <input
                        type="password"
                        id="password"
                        name="password"
                        placeholder="Masukkan password"
                        required
                    >

                </div>


                <!-- TOMBOL LOGIN -->

                <button
                    type="submit"
                    class="login-button">

                    <i class="bi bi-box-arrow-in-right me-1"></i>

                    Login Admin

                </button>

            </form>


            <!-- KEMBALI -->

            <div class="back-link">

                <a href="{{ route('landing.index') }}">

                    <i class="bi bi-arrow-left me-1"></i>

                    Kembali ke Landing Page

                </a>

            </div>

        </div>

    </div>

</div>

</body>
</html>