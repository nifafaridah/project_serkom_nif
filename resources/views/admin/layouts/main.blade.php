<!DOCTYPE html>
<html lang="id">
<head>

    <title>Admin Dashboard - SDN CITATAH</title>

    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon -->
    <link rel="icon"
          href="{{ asset('assets/images/favicon.svg') }}"
          type="image/x-icon">


    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css2?family=Public+Sans:wght@300;400;500;600;700&display=swap">


    <!-- Icons -->
    <link rel="stylesheet"
          href="{{ asset('assets/fonts/tabler-icons.min.css') }}">

    <link rel="stylesheet"
          href="{{ asset('assets/fonts/feather.css') }}">

    <link rel="stylesheet"
          href="{{ asset('assets/fonts/fontawesome.css') }}">

    <link rel="stylesheet"
          href="{{ asset('assets/fonts/material.css') }}">


    <!-- Template CSS -->
    <link rel="stylesheet"
          href="{{ asset('assets/css/style.css') }}"
          id="main-style-link">

    <link rel="stylesheet"
          href="{{ asset('assets/css/style-preset.css') }}">


    <!-- CSS LAYOUT -->
    <style>

        /* =========================
           BODY
        ========================= */

        html,
        body {
            margin: 0 !important;
            padding: 0 !important;
            overflow-x: hidden !important;
        }


        /* =========================
           SIDEBAR
        ========================= */

        .pc-sidebar {

            position: fixed !important;

            top: 0 !important;
            left: 0 !important;
            bottom: 0 !important;

            width: 260px !important;
            min-width: 260px !important;
            max-width: 260px !important;

            z-index: 1025 !important;

            display: block !important;

            visibility: visible !important;

            transform: translateX(0) !important;

            background: #ffffff !important;

        }


        /* Sidebar wrapper */

        .pc-sidebar .navbar-wrapper {

            width: 260px !important;

            min-width: 260px !important;

        }


        /* Header/logo sidebar */

        .pc-sidebar .m-header {

            width: 260px !important;

            height: 70px !important;

            display: flex !important;

            align-items: center !important;

            padding: 15px 20px !important;

            box-sizing: border-box !important;

        }


        /* Menu sidebar */

        .pc-sidebar .pc-navbar {

            width: 100% !important;

        }


        /* Tulisan menu */

        .pc-sidebar .pc-mtext {

            display: inline !important;

            visibility: visible !important;

            opacity: 1 !important;

        }


        /* Icon menu */

        .pc-sidebar .pc-micon {

            display: inline-flex !important;

            visibility: visible !important;

        }


        /* Caption menu */

        .pc-sidebar .pc-caption {

            display: block !important;

            visibility: visible !important;

        }


        /* =========================
           CONTENT UTAMA
        ========================= */

        .pc-container {

            margin-left: 260px !important;

            width: calc(100% - 260px) !important;

            max-width: calc(100% - 260px) !important;

            padding: 25px !important;

            box-sizing: border-box !important;

        }


        .pc-content {

            width: 100% !important;

            max-width: 100% !important;

            margin: 0 !important;

            padding: 0 !important;

        }


        /* =========================
           PAGE HEADER
        ========================= */

        .page-header {

            width: 100% !important;

        }


        /* =========================
           CARD
        ========================= */

        .card {

            width: 100%;

        }


        /* =========================
           TABLE
        ========================= */

        .table-responsive {

            width: 100% !important;

        }


        /* =========================
           FOOTER
        ========================= */

        .pc-footer {

            margin-left: 260px !important;

        }


        /* =========================
           HEADER
        ========================= */

        .pc-header {

            margin-left: 260px !important;

        }

    </style>

</head>


<body
    data-pc-preset="preset-1"
    data-pc-direction="ltr"
    data-pc-theme="light">


    <!-- =========================
         LOADER
    ========================= -->

    <div class="loader-bg">

        <div class="loader-track">

            <div class="loader-fill"></div>

        </div>

    </div>



    <!-- =========================
         SIDEBAR
    ========================= -->

    @include('admin.layouts.sidebar')



    <!-- =========================
         HEADER
    ========================= -->

    @include('admin.layouts.header')



    <!-- =========================
         CONTENT
    ========================= -->

    <div class="pc-container">

        <div class="pc-content">

            @yield('content')

        </div>

    </div>



    <!-- =========================
         FOOTER
    ========================= -->

    @include('admin.layouts.footer')



    <!-- =========================
         JAVASCRIPT
    ========================= -->

    <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>

    <script src="{{ asset('assets/js/plugins/bootstrap.min.js') }}"></script>

    <script src="{{ asset('assets/js/fonts/custom-font.js') }}"></script>

    <script src="{{ asset('assets/js/pcoded.js') }}"></script>



    <!-- Layout -->

    <script>
        layout_change('light');
    </script>


    <script>
        change_box_container('false');
    </script>


    <script>
        layout_rtl_change('false');
    </script>


    <script>
        preset_change("preset-1");
    </script>


    <script>
        font_change("Public-Sans");
    </script>



    <!-- =========================
         PAKSA SIDEBAR TERBUKA
    ========================= -->

    <script>

        document.addEventListener('DOMContentLoaded', function () {

            const sidebar =
                document.querySelector('.pc-sidebar');

            const container =
                document.querySelector('.pc-container');

            const header =
                document.querySelector('.pc-header');

            const footer =
                document.querySelector('.pc-footer');


            /* SIDEBAR */

            if (sidebar) {

                sidebar.style.setProperty(
                    'width',
                    '260px',
                    'important'
                );

                sidebar.style.setProperty(
                    'min-width',
                    '260px',
                    'important'
                );

                sidebar.style.setProperty(
                    'max-width',
                    '260px',
                    'important'
                );

                sidebar.style.setProperty(
                    'left',
                    '0',
                    'important'
                );

                sidebar.style.setProperty(
                    'transform',
                    'translateX(0)',
                    'important'
                );

                sidebar.style.setProperty(
                    'visibility',
                    'visible',
                    'important'
                );

                sidebar.style.setProperty(
                    'display',
                    'block',
                    'important'
                );

            }


            /* MENU SIDEBAR */

            if (sidebar) {

                const texts =
                    sidebar.querySelectorAll('.pc-mtext');

                texts.forEach(function (text) {

                    text.style.setProperty(
                        'display',
                        'inline',
                        'important'
                    );

                    text.style.setProperty(
                        'visibility',
                        'visible',
                        'important'
                    );

                    text.style.setProperty(
                        'opacity',
                        '1',
                        'important'
                    );

                });


                const icons =
                    sidebar.querySelectorAll('.pc-micon');

                icons.forEach(function (icon) {

                    icon.style.setProperty(
                        'display',
                        'inline-flex',
                        'important'
                    );

                });

            }


            /* CONTENT */

            if (container) {

                container.style.setProperty(
                    'margin-left',
                    '260px',
                    'important'
                );

                container.style.setProperty(
                    'width',
                    'calc(100% - 260px)',
                    'important'
                );

                container.style.setProperty(
                    'max-width',
                    'calc(100% - 260px)',
                    'important'
                );

            }


            /* HEADER */

            if (header) {

                header.style.setProperty(
                    'margin-left',
                    '260px',
                    'important'
                );

            }


            /* FOOTER */

            if (footer) {

                footer.style.setProperty(
                    'margin-left',
                    '260px',
                    'important'
                );

            }

        });

    </script>
    


</body>

</html>
