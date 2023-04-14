<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Home</li>
            <li>
                <a class="has-arrow" href="{{route('admin.home')}}" aria-expanded="false">
                    <i class="icon-home menu-icon"></i><span class="nav-text">Beranda</span>
                </a>
            </li>

            <li>
                <a class="drpodown-menu has-arrow" href="{{route('admin.penyakit')}}" aria-expanded="false">
                        <i class="icon-globe menu-icon"></i><span class="nav-text">Daftar Penyakit</span>
                </a>
            </li>
            <li>
                <a class="drpodown-menu has-arrow" href="{{route('admin.gejala')}}" aria-expanded="false">
                        <i class="icon-globe menu-icon"></i><span class="nav-text">Daftar Gejala</span>
                </a>
            </li>
            <li>
                <a class="drpodown-menu has-arrow" href="{{route('admin.relasi')}}" aria-expanded="false">
                        <i class="icon-globe menu-icon"></i><span class="nav-text">Aturan</span>
                </a>
            </li>


            {{-- <li>
                <a class="has-arrow" href="{{route('admin.informasi')}}" aria-expanded="false">
                    <i class="icon-screen-tablet menu-icon"></i><span class="nav-text">Informasi</span>
                </a>
            </li> --}}


            <li>
                <a class="has-arrow" href="{{route('admin.log-konsultasi')}}" aria-expanded="false">
                    <i class="icon-info menu-icon"></i><span class="nav-text">Hasil Konsultasi</span>
                </a>
            </li>

            <li>
                <a class="has-arrow" href="{{route('admin.reset-password')}}" aria-expanded="false">
                        <i class="icon-key menu-icon"></i><span class="nav-text">Reset Password</span>
                    </a>
                </li>
            <li>
                <a class="has-arrow" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();" aria-expanded="false" >
                    <i class="icon-user menu-icon"></i><span class="nav-text"> {{ __('Logout') }}</span>

                </a>


             <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                 @csrf
             </form>
            </li>

        </ul>
    </div>
</div>
