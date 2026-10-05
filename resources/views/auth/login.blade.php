<!DOCTYPE html>

<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - SDN CITATAH</title>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: Arial, Helvetica, sans-serif;
    }

    body {
        min-height: 100vh;
        background: #f3f7fc;
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

    /* BAGIAN KIRI */
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

    .logo-box {
        width: 125px;
        height: 125px;
        background: white;
        border-radius: 25px;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 15px;
        margin-bottom: 25px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.12);
    }

    .logo-box img {
        width: 100%;
        height: 100%;
        object-fit: contain;
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

    /* BAGIAN KANAN */
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
        box-shadow: 0 0 0 3px rgba(8,124,245,0.10);
    }

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

    .error-message {
        background: #ffe8e8;
        color: #c62828;
        padding: 12px 15px;
        border-radius: 8px;
        margin-bottom: 20px;
        font-size: 14px;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        body {
            padding: 20px;
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
    }
</style>


</head>

<body>

<div class="login-wrapper">

<div class="login-card">

    <!-- BAGIAN KIRI -->
    <div class="login-left">

        <div class="logo-box">
            <img src="{{ asset('uploads/logo sekolah.png') }}"
                 alt="Logo SDN CITATAH">
        </div>

        <h1>SDN CITATAH</h1>

        <h2>Sistem Informasi Sekolah</h2>

        <p>
            Selamat datang di halaman login administrator
            Sistem Informasi SDN CITATAH.
        </p>

        <div class="school-info">
            Administrasi Sekolah
        </div>

    </div>


    <!-- BAGIAN KANAN -->
    <div class="login-right">

        <h2>Selamat Datang 👋</h2>

        <p class="subtitle">
            Silakan login untuk masuk ke halaman admin.
        </p>

        @if ($errors->any())
            <div class="error-message">
                {{ $errors->first() }}
            </div>
        @endif

        <form action="{{ route('login.process') }}" method="POST">

            @csrf

            <div class="form-group">
                <label for="email">Email</label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    value="{{ old('email') }}"
                    placeholder="Masukkan email"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Password</label>

                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Masukkan password"
                    required
                >
            </div>

            <button type="submit" class="login-button">
                Login Admin
            </button>

        </form>

        <div class="back-link">
            <a href="{{ route('landing.index') }}">
                ← Kembali ke Landing Page
            </a>
        </div>

    </div>

</div>


</div>

</body>
</html>
