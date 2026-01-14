<!-- Header -->
<header class="header" id="header">
    <nav class="nav">
        <div class="nav-left">
            <a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Ana
                Sayfa</a>
            <a href="{{ route('products') }}"
                class="nav-link {{ request()->routeIs('products') ? 'active' : '' }}">Ürünlerimiz</a>
            <a href="{{ route('gallery') }}"
                class="nav-link {{ request()->routeIs('gallery') ? 'active' : '' }}">Galeri</a>
            <a href="{{ route('download') }}"
                class="nav-link {{ request()->routeIs('download') ? 'active' : '' }}">İndir</a>
        </div>

        <a href="{{ route('home') }}" class="logo">
            <img src="{{ asset('images/logo.svg') }}" alt="GEC Logo">
        </a>

        <div class="nav-right">
            <a href="{{ route('news') }}" class="nav-link {{ request()->routeIs('news') ? 'active' : '' }}">Haberler</a>
            <a href="{{ route('technology') }}"
                class="nav-link {{ request()->routeIs('technology') ? 'active' : '' }}">Teknolojimiz</a>
            <a href="{{ route('contact') }}"
                class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">İletişim</a>
        </div>

        <!-- Mobile Menu Button -->
        <button class="mobile-menu-btn" id="mobileMenuBtn" aria-label="Menü">
            <span></span>
            <span></span>
            <span></span>
        </button>
    </nav>

    <!-- Mobile Menu -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="{{ route('home') }}" class="mobile-nav-link">Ana Sayfa</a>
        <a href="{{ route('products') }}" class="mobile-nav-link">Ürünlerimiz</a>
        <a href="{{ route('gallery') }}" class="mobile-nav-link">Galeri</a>
        <a href="{{ route('download') }}" class="mobile-nav-link">İndir</a>
        <a href="{{ route('news') }}" class="mobile-nav-link">Haberler</a>
        <a href="{{ route('technology') }}" class="mobile-nav-link">Teknolojimiz</a>
        <a href="{{ route('contact') }}" class="mobile-nav-link">İletişim</a>
    </div>
</header>