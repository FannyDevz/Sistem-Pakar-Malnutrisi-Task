<div class="nk-sidebar">
    <div class="nk-nav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label">Home</li>
            <li>
                <a class="has-arrow" href="{{route('user.home')}}" aria-expanded="false">
                    <i class="icon-home menu-icon"></i><span id="user-name" class="nav-text">Beranda {{ $userName }}</span>
                </a>
            </li>
            <li>
                <a class="has-arrow" href="{{route('user.log-konsultasi')}}" aria-expanded="false">
                    <i class="icon-info menu-icon"></i><span class="nav-text">Hasil Diagnosa</span>
                </a>
            </li>

            <li>
                <a class="has-arrow" href="{{route('user.balita')}}" aria-expanded="false">
                    <i class="icon-globe menu-icon"></i><span class="nav-text">Data Balita</span>
                </a>
            </li>

            <li>
                <a class="has-arrow" href="{{route('user.reset-password')}}" aria-expanded="false">
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
