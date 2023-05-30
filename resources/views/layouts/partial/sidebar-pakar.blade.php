<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Home</li>
            <li>
                <a class="has-arrow" href="{{route('admin.home')}}" aria-expanded="false">
                    <i class="icon-home menu-icon"></i><span id="user-name" class="nav-text">Beranda</span>
                </a>
            </li>

            <li>
                <a class="drpodown-menu has-arrow" href="{{route('admin.penyakit')}}" aria-expanded="false">
                        <i class="icon-globe menu-icon"></i><span class="nav-text">Data Penyakit</span>
                </a>
            </li>
            <li>
                <a class="drpodown-menu has-arrow" href="{{route('admin.gejala')}}" aria-expanded="false">
                        <i class="icon-globe menu-icon"></i><span class="nav-text">Data Gejala</span>
                </a>
            </li>
            <li>
                <a class="drpodown-menu has-arrow" href="{{route('admin.relasi')}}" aria-expanded="false">
                        <i class="icon-globe menu-icon"></i><span class="nav-text">Rules</span>
                </a>
            </li>

            <li>
                <a class="drpodown-menu has-arrow" href="{{route('admin.pengguna')}}" aria-expanded="false">
                        <i class="icon-globe menu-icon"></i><span class="nav-text">Data Pengguna</span>
                </a>
            </li>
            {{-- <li>
                <a class="has-arrow" href="{{route('admin.informasi')}}" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Informasi</span>
                </a>
            </li> --}}


            <li>
                <a class="has-arrow" href="{{route('admin.log-konsultasi')}}" aria-expanded="false">
                    <i class="icon-info menu-icon"></i><span class="nav-text">Riwayat Diagnosa</span>
                </a>
            </li>




        </ul>
    </div>
</div>
