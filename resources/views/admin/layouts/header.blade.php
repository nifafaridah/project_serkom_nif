<div class="ms-auto position-relative" style="width: 100%;">

    {{-- SEARCH DI TENGAH --}}
    <div
        style="
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        ">

        <form action="#" method="GET">
            <div class="input-group">

                <span class="input-group-text bg-white">
                    <i class="ti ti-search"></i>
                </span>

                <input
                    type="text"
                    name="search"
                    class="form-control"
                    placeholder="Search..."
                    style="width: 600px;"
                >

            </div>
        </form>

    </div>


    {{-- BAGIAN KANAN --}}
    <ul class="list-unstyled d-flex align-items-center justify-content-end mb-0">

        {{-- NOTIFIKASI --}}
        <li class="pc-h-item dropdown me-2">

            <a
                class="pc-head-link dropdown-toggle arrow-none"
                data-bs-toggle="dropdown"
                href="#"
                role="button">

                <i class="ti ti-bell"></i>

            </a>

            <div class="dropdown-menu dropdown-menu-end">

                <div class="dropdown-header">
                    <h5 class="m-0">Notifikasi</h5>
                </div>

                <div class="dropdown-divider"></div>

                <div class="p-3 text-center text-muted">
                    Belum ada notifikasi
                </div>

            </div>

        </li>


        {{-- ADMIN --}}
        <li class="pc-h-item dropdown">

            <a
                class="pc-head-link dropdown-toggle arrow-none"
                data-bs-toggle="dropdown"
                href="#"
                role="button">

                <img
                    src="{{ asset('assets/images/user/avatar-2.jpg') }}"
                    alt="Admin"
                    class="user-avtar">

                <span class="ms-2">
                    {{ auth()->user()->name ?? 'Admin' }}
                </span>

                <i class="ti ti-chevron-down ms-1"></i>

            </a>

            <div class="dropdown-menu dropdown-menu-end">

                <a href="#" class="dropdown-item">
                    <i class="ti ti-user me-2"></i>
                    Profil
                </a>

                <a href="#" class="dropdown-item">
                    <i class="ti ti-settings me-2"></i>
                    Pengaturan
                </a>

                <div class="dropdown-divider"></div>

                <form action="{{ route('logout') }}" method="POST">
                    @csrf

                    <button
                        type="submit"
                        class="dropdown-item text-danger">

                        <i class="ti ti-logout me-2"></i>
                        Logout

                    </button>

                </form>

            </div>

        </li>

    </ul>

</div>

</div>
</header>
    <div class="ms-auto">
      <ul class="list-unstyled">
        <li class="dropdown pc-h-item">
          <a
            class="pc-head-link dropdown-toggle arrow-none me-0"
            data-bs-toggle="dropdown"
            href="#"
            role="button"
            aria-haspopup="false"
            aria-expanded="false">
            <i class="ti ti-mail"></i>
          </a>
          <div class="dropdown-menu dropdown-notification dropdown-menu-end pc-h-dropdown">

            <div class="dropdown-header d-flex align-items-center justify-content-between">
              <h5 class="m-0">Message</h5>
              <a href="#!" class="pc-head-link bg-transparent">
                <i class="ti ti-x text-danger"></i>
              </a>
            </div>

            <div class="dropdown-divider"></div>

            <div
              class="dropdown-header px-0 text-wrap header-notification-scroll position-relative"
              style="max-height: calc(100vh - 215px)">

              <div class="list-group list-group-flush w-100">

                <a class="list-group-item list-group-item-action">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="../assets/images/user/avatar-2.jpg"
                        alt="user-image"
                        class="user-avtar">
                    </div>

                    <div class="flex-grow-1 ms-1">
                      <span class="float-end text-muted">3:00 AM</span>
                      <p class="text-body mb-1">
                        It's <b>Cristina danny's</b> birthday today.
                      </p>
                      <span class="text-muted">2 min ago</span>
                    </div>
                  </div>
                </a>

                <a class="list-group-item list-group-item-action">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="../assets/images/user/avatar-1.jpg"
                        alt="user-image"
                        class="user-avtar">
                    </div>

                    <div class="flex-grow-1 ms-1">
                      <span class="float-end text-muted">6:00 PM</span>
                      <p class="text-body mb-1">
                        <b>Aida Burg</b> commented your post.
                      </p>
                      <span class="text-muted">5 August</span>
                    </div>
                  </div>
                </a>

                <a class="list-group-item list-group-item-action">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="../assets/images/user/avatar-3.jpg"
                        alt="user-image"
                        class="user-avtar">
                    </div>

                    <div class="flex-grow-1 ms-1">
                      <span class="float-end text-muted">2:45 PM</span>
                      <p class="text-body mb-1">
                        <b>There was a failure to your setup.</b>
                      </p>
                      <span class="text-muted">7 hours ago</span>
                    </div>
                  </div>
                </a>

                <a class="list-group-item list-group-item-action">
                  <div class="d-flex">
                    <div class="flex-shrink-0">
                      <img
                        src="../assets/images/user/avatar-4.jpg"
                        alt="user-image"
                        class="user-avtar">
                    </div>

                    <div class="flex-grow-1 ms-1">
                      <span class="float-end text-muted">9:10 PM</span>
                      <p class="text-body mb-1">
                        <b>Cristina Danny</b> invited to join <b>Meeting.</b>
                      </p>
                      <span class="text-muted">
                        Daily scrum meeting time
                      </span>
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="text-center py-2">
              <a href="#!" class="link-primary">View all</a>
            </div>
          </div>
        </li>
      </ul>
    </div>

  </div>
</header>
