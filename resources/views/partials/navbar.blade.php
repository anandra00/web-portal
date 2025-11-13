<nav class="navbar navbar-expand-lg shadow-sm fixed-top navbar-custom">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
    {{-- Logo TPL --}}
    <img src="{{ asset('images/logotpl.png') }}" alt="Logo TPL" style="height: 60px;">
    
    {{-- TEKS BARU --}}
    <div class="ms-2 d-none d-sm-block text-white" style="line-height: 1.1; font-size: 0.9rem;">
        <strong style="font-size: 1.2em; display: block;">TPL SV IPB</strong>
        <small style="opacity: 0.8; display: block; font-weight: 500;">Teknologi Rekayasa Perangkat Lunak</small>
    </div>
</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                {{-- KOREKSI: Tambahkan kelas 'nav-tpl-link' --}}
                <li class="nav-item">
                    <a class="nav-link nav-tpl-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-tpl-link {{ request()->routeIs('tentang') ? 'active' : '' }}" href="{{ route('tentang') }}">Tentang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-tpl-link {{ request()->routeIs('dosen') ? 'active' : '' }}" href="{{ route('dosen') }}">Dosen</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-tpl-link {{ request()->routeIs('matkul') ? 'active' : '' }}" href="{{ route('matkul') }}">Mata Kuliah</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link nav-tpl-link {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a>
                </li>
            </ul>
        </div>
    </div>
</nav>