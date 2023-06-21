<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Home</li>
            <li>
                <a class="has-arrow" href="{{route('user.home')}}" aria-expanded="false">
                    <i class="icon-home menu-icon"></i><span id="user-name" class="nav-text">Beranda</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="{{route('user.info-penyakit')}}" aria-expanded="false">
                    <i class="icon-info menu-icon"></i><span class="nav-text">Info Penyakit</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="{{route('user.log-konsultasi')}}" aria-expanded="false">
                    <i class="icon-list menu-icon"></i><span class="nav-text">Riwayat Diagnosa</span>
                </a>
            </li>

            <li>
                <a class="has-arrow" href="{{route('user.balita')}}" aria-expanded="false">
                    <i class="icon-user menu-icon"></i><span class="nav-text">Data Balita</span>
                </a>
            </li>

            {{-- <li>
                <a class="has-arrow " href="{{route('user.data-user')}}" aria-expanded="false">
                        <i class="icon-key menu-icon"></i><span class="nav-text">Data Pengguna</span>
                    </a>
                </li> --}}


        </ul>
    </div>
</div>
