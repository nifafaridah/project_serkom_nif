<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login - SDN CITATAH</title>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            min-height: 100vh;
            font-family: Arial, Helvetica, sans-serif;
            background: #f4f7fb;

            display: flex;
            align-items: center;
            justify-content: center;

            padding: 20px;
        }

        .login-box {
            width: 420px;
            max-width: 100%;

            background: white;

            padding: 40px;

            border-radius: 14px;

            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);

            text-align: center;
        }

        /* LOGO */

        .logo {
            width: 110px;
            height: 110px;

            object-fit: contain;

            display: block;

            margin: 0 auto 18px;
        }

        /* NAMA SEKOLAH */

        .school-name {
            font-size: 24px;
            font-weight: 700;

            color: #1769ff;

            margin-bottom: 6px;
        }

        .school-description {
            font-size: 13px;

            color: #64748b;

            margin-bottom: 30px;
        }

        /* JUDUL LOGIN */

        .login-title {
            text-align: left;

            font-size: 22px;

            color: #1e293b;

            margin-bottom: 6px;
        }

        .login-subtitle {
            text-align: left;

            font-size: 13px;

            color: #94a3b8;

            margin-bottom: 25px;
        }

        /* ERROR */

        .error-message {
            text-align: left;

            background: #fee2e2;

            color: #b91c1c;

            border: 1px solid #fecaca;

            border-radius: 7px;

            padding: 10px 12px;

            font-size: 13px;

            margin-bottom: 18px;
        }

        /* FORM */

        .form-group {
            text-align: left;

            margin-bottom: 18px;
        }

        .form-group label {
            display: block;

            font-size: 13px;

            font-weight: 600;

            color: #334155;

            margin-bottom: 7px;
        }

        .form-control {
            width: 100%;

            height: 45px;

            padding: 0 13px;

            border: 1px solid #dbe2ea;

            border-radius: 7px;

            outline: none;

            font-size: 14px;

            color: #334155;
        }

        .form-control:focus {
            border-color: #1769ff;

            box-shadow: 0 0 0 3px rgba(23, 105, 255, 0.08);
        }

        .form-control::placeholder {
            color: #a0aec0;
        }

        /* PASSWORD */

        .password-wrapper {
            position: relative;
        }

        .password-wrapper .form-control {
            padding-right: 70px;
        }

        .show-password {
            position: absolute;

            right: 12px;
            top: 50%;

            transform: translateY(-50%);

            border: none;

            background: transparent;

            color: #64748b;

            font-size: 12px;

            cursor: pointer;
        }

        .show-password:hover {
            color: #1769ff;
        }

        /* BUTTON */

        .login-button {
            width: 100%;

            height: 45px;

            border: none;

            border-radius: 7px;

            background: #1769ff;

            color: white;

            font-size: 14px;

            font-weight: 600;

            cursor: pointer;

            margin-top: 5px;
        }

        .login-button:hover {
            background: #1257d6;
        }

        /* FOOTER */

        .footer {
            margin-top: 25px;

            font-size: 12px;

            color: #94a3b8;
        }

        /* MOBILE */

        @media (max-width: 480px) {

            .login-box {
                padding: 30px 25px;
            }

            .logo {
                width: 90px;
                height: 90px;
            }

            .school-name {
                font-size: 21px;
            }
        }
    </style>
</head>

<body>

    <div class="login-box">

        <!-- LOGO SEKOLAH -->

        <img
            src="{{ asset('uploads/logo.png') }}"
            alt="Logo SDN CITATAH"
            class="logo"
        >


        <!-- NAMA SEKOLAH -->

        <h1 class="school-name">
            SDN CITATAH
        </h1>

        <p class="school-description">
            Sistem Informasi Sekolah
        </p>


        <!-- LOGIN -->

        <h2 class="login-title">
            Login
        </h2>

        <p class="login-subtitle">
            Silakan masuk untuk melanjutkan
        </p>


        <!-- ERROR -->

        @if ($errors->any())

            <div class="error-message">
                {{ $errors->first() }}
            </div>

        @endif


        <!-- FORM -->

        <form
            action="{{ route('login.process') }}"
            method="POST"
        >

            @csrf


            <!-- EMAIL -->

            <div class="form-group">

                <label for="email">
                    Email
                </label>

                <input
                    type="email"
                    id="email"
                    name="email"
                    class="form-control"
                    placeholder="Masukkan email"
                    value="{{ old('email') }}"
                    required
                >

            </div>


            <!-- PASSWORD -->

            <div class="form-group">

                <label for="password">
                    Password
                </label>

                <div class="password-wrapper">

                    <input
                        type="password"
                        id="password"
                        name="password"
                        class="form-control"
                        placeholder="Masukkan password"
                        required
                    >

                    <button
                        type="button"
                        class="show-password"
                        id="showPassword"
                        onclick="togglePassword()"
                    >
                        Lihat
                    </button>

                </div>

            </div>


            <!-- TOMBOL -->

            <button
                type="submit"
                class="login-button"
            >
                Masuk
            </button>

        </form>


        <!-- FOOTER -->

        <div class="footer">
            © {{ date('Y') }} SDN CITATAH
        </div>

    </div>


    <script>

        function togglePassword() {

            const password =
                document.getElementById('password');

            const button =
                document.getElementById('showPassword');


            if (password.type === 'password') {

                password.type = 'text';

                button.innerText = 'Sembunyikan';

            } else {

                password.type = 'password';

                button.innerText = 'Lihat';

            }

        }

    </script>

</body>
</html>