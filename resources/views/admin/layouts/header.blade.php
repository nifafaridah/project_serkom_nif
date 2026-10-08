<style>
/* =====================================================
   HEADER SDN CITATAH
===================================================== */

.pc-header {
    background: #ffffff !important;
    height: 72px !important;
    min-height: 72px !important;

    position: relative !important;
    top: 0 !important;
    left: 0 !important;

    margin-left: 0 !important;
    width: 100% !important;

    border-bottom: 1px solid #e9ecef !important;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.05) !important;

    z-index: 1025 !important;
}

.pc-header .header-wrapper {
    width: 100% !important;
    max-width: none !important;
    height: 72px !important;
    min-height: 72px !important;

    display: flex !important;
    align-items: center !important;

    padding: 0 24px !important;
    margin: 0 !important;

    box-sizing: border-box !important;
}


/* =====================================================
   BAGIAN KIRI
===================================================== */

.pc-header .pc-mob-drp {
    display: flex !important;
    align-items: center !important;

    width: auto !important;
    height: 72px !important;

    margin: 0 !important;
    padding: 0 !important;
}

.pc-header .pc-mob-drp > ul {
    display: flex !important;
    align-items: center !important;

    width: auto !important;
    height: 72px !important;

    margin: 0 !important;
    padding: 0 !important;

    gap: 12px !important;

    list-style: none !important;
}


/* =====================================================
   TOMBOL MENU ☰
===================================================== */

.pc-header .pc-sidebar-collapse {
    display: flex !important;
    align-items: center !important;

    width: auto !important;
    height: 72px !important;

    margin: 0 !important;
    padding: 0 !important;
}

.pc-header .pc-sidebar-collapse .pc-head-link {
    width: 42px !important;
    height: 42px !important;
    min-width: 42px !important;

    display: flex !important;
    align-items: center !important;
    justify-content: center !important;

    margin: 0 !important;
    padding: 0 !important;

    border-radius: 10px !important;

    color: #495057 !important;

    text-decoration: none !important;

    cursor: pointer !important;
}

.pc-header .pc-sidebar-collapse .pc-head-link:hover {
    background: #f1f5f9 !important;
    color: #1683ff !important;
}

.pc-header .pc-sidebar-collapse .pc-head-link i {
    font-size: 21px !important;
}


/* =====================================================
   BAGIAN KANAN
===================================================== */

.pc-header .ms-auto {
    position: absolute !important;

    right: 24px !important;
    top: 0 !important;

    height: 72px !important;

    display: flex !important;
    align-items: center !important;

    margin: 0 !important;
    padding: 0 !important;

    z-index: 9999 !important;
}

.pc-header .ms-auto > ul {
    display: flex !important;
    align-items: center !important;

    width: auto !important;
    height: 72px !important;

    margin: 0 !important;
    padding: 0 !important;

    gap: 8px !important;

    list-style: none !important;
}

.pc-header .ms-auto .pc-h-item {
    display: flex !important;
    align-items: center !important;

    width: auto !important;
    height: 72px !important;

    margin: 0 !important;
    padding: 0 !important;
}


/* =====================================================
   PROFILE
===================================================== */

.pc-header .profile-link {
    width: auto !important;
    min-width: 120px !important;

    height: 46px !important;

    display: flex !important;
    align-items: center !important;

    gap: 9px !important;

    margin: 0 !important;
    padding: 4px 12px 4px 6px !important;

    border-radius: 12px !important;

    color: #212529 !important;

    text-decoration: none !important;
}

.pc-header .profile-link:hover {
    background: #f1f5f9 !important;
}


/* =====================================================
   FOTO PROFILE
===================================================== */

.pc-header .profile-icon {
    width: 36px !important;
    height: 36px !important;
    min-width: 36px !important;

    display: flex !important;
    align-items: center !important;
    justify-content: center !important;

    border-radius: 50% !important;

    background: #e8f3ff !important;

    color: #1683ff !important;

    overflow: hidden !important;
}

.pc-header .profile-icon i {
    font-size: 19px !important;
}


/* =====================================================
   NAMA + ROLE
===================================================== */

.pc-header .profile-info {
    display: flex !important;
    flex-direction: column !important;
    justify-content: center !important;

    line-height: 1.2 !important;

    white-space: nowrap !important;
}

.pc-header .profile-name {
    display: block !important;

    font-size: 14px !important;
    font-weight: 600 !important;

    color: #212529 !important;
}

.pc-header .profile-role {
    display: block !important;

    margin-top: 2px !important;

    font-size: 11px !important;

    color: #8c8c8c !important;
}


/* =====================================================
   DROPDOWN
===================================================== */

.pc-header .dropdown-menu {
    border: none !important;

    border-radius: 12px !important;

    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.12) !important;

    margin-top: 8px !important;
}

.pc-header .pc-h-dropdown .dropdown-item {
    padding: 11px 18px !important;
}


/* =====================================================
   RESPONSIVE
===================================================== */

@media (max-width: 768px) {

    .pc-header .header-wrapper {
        padding: 0 12px !important;
    }

    .pc-header .profile-info {
        display: none !important;
    }

    .pc-header .profile-link {
        min-width: auto !important;
        padding: 4px !important;
    }

    .pc-header .ms-auto {
        right: 12px !important;
    }
}


@media (max-width: 500px) {

    .pc-header .header-wrapper {
        padding: 0 8px !important;
    }

    .pc-header .pc-sidebar-collapse .pc-head-link {
        width: 38px !important;
        height: 38px !important;
        min-width: 38px !important;
    }

    .pc-header .profile-icon {
        width: 34px !important;
        height: 34px !important;
        min-width: 34px !important;
    }

    .pc-header .ms-auto {
        right: 8px !important;
    }
}
</style>


<header class="pc-header">

    <div class="header-wrapper">


        <!-- =================================================
             BAGIAN KIRI
        ================================================== -->

        <div class="me-auto pc-mob-drp">

            <ul class="list-unstyled">

                <!-- MENU -->
                <li class="pc-h-item pc-sidebar-collapse">

                    <a
                        href="#"
                        class="pc-head-link ms-0"
                        id="collapse-menu">

                        <i class="ti ti-menu-2"></i>

                    </a>

                </li>

            </ul>

        </div>


        <!-- =================================================
             BAGIAN KANAN
        ================================================== -->

        <div class="ms-auto">

            <ul class="list-unstyled">


                <!-- =================================================
                     PROFILE
                ================================================== -->

                <li class="dropdown pc-h-item">

                    <a
                        class="profile-link dropdown-toggle arrow-none"
                        data-bs-toggle="dropdown"
                        href="#"
                        role="button"
                        aria-haspopup="false"
                        aria-expanded="false">


                        <!-- FOTO PROFILE -->

                        <span class="profile-icon">

                            <img
                                src="{{ asset('uploads/profil/nifa.jpg') }}"
                                alt="Foto Profile"
                                class="rounded-circle"
                                style="width: 100%; height: 100%; object-fit: cover;">

                        </span>


                        <!-- NAMA + ROLE -->

                        <span class="profile-info">

                            <span class="profile-name">

                                {{ Auth::user()->name ?? 'Administrator' }}

                            </span>

                            <span class="profile-role">

                                {{ ucfirst(Auth::user()->role ?? 'Operator') }}

                            </span>

                        </span>

                    </a>


                    <!-- =================================================
                         DROPDOWN PROFILE
                    ================================================== -->

                    <div class="dropdown-menu dropdown-menu-end pc-h-dropdown">


                        <div class="dropdown-header">

                            <h5 class="mb-0">

                                {{ Auth::user()->name ?? 'Administrator' }}

                            </h5>

                            <small class="text-muted">

                                {{ ucfirst(Auth::user()->role ?? 'Operator') }}

                            </small>

                        </div>


                        <div class="dropdown-divider"></div>


                        <!-- PROFIL PENGGUNA -->

                        <a
                            href="{{ route('profil.index') }}"
                            class="dropdown-item">

                            <i class="ti ti-user me-2"></i>

                            Profil

                        </a>


                        <div class="dropdown-divider"></div>


                        <!-- LOGOUT -->

                        <a
                            href="{{ route('logout') }}"
                            class="dropdown-item"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">

                            <i class="ti ti-power me-2"></i>

                            Logout

                        </a>


                        <form
                            id="logout-form"
                            action="{{ route('logout') }}"
                            method="POST"
                            class="d-none">

                            @csrf

                        </form>


                    </div>

                </li>

            </ul>

        </div>

    </div>

</header>


<!-- =====================================================
     FUNGSI TOMBOL MENU
     SIDEBAR HILANG / MUNCUL
===================================================== -->

<style>

/* SIDEBAR NORMAL */

.pc-sidebar {
    transition:
        margin-left 0.3s ease,
        width 0.3s ease !important;
}


/* SIDEBAR HILANG */

body.nifa-sidebar-hidden .pc-sidebar {

    margin-left: -260px !important;

    width: 260px !important;
    min-width: 260px !important;
    max-width: 260px !important;

}


/* CONTENT NORMAL */

.pc-container {

    transition:
        margin-left 0.3s ease,
        width 0.3s ease,
        max-width 0.3s ease !important;

}


/* CONTENT MELEBAR */

body.nifa-sidebar-hidden .pc-container {

    margin-left: 0 !important;

    width: 100% !important;

    max-width: 100% !important;

}


/* HEADER NORMAL */

.pc-header {

    transition:
        margin-left 0.3s ease,
        width 0.3s ease,
        max-width 0.3s ease !important;

}


/* HEADER MELEBAR */

body.nifa-sidebar-hidden .pc-header {

    margin-left: 0 !important;

    width: 100% !important;

    max-width: 100% !important;

}


/* FOOTER MELEBAR */

body.nifa-sidebar-hidden .pc-footer {

    margin-left: 0 !important;

    width: 100% !important;

    max-width: 100% !important;

}

</style>


<script>

document.addEventListener('DOMContentLoaded', function () {

    const tombolMenu = document.getElementById('collapse-menu');

    if (!tombolMenu) {
        return;
    }


    tombolMenu.addEventListener('click', function (event) {

        event.preventDefault();

        event.stopImmediatePropagation();

        document.body.classList.toggle('nifa-sidebar-hidden');

    });

});

</script>