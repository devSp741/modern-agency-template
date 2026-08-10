<header class="nav-header">
  <div class="container nav-inner">
    <a href="{{ route('home') }}" class="logo">
      <img src="{{ asset('assets/logo.png') }}" alt="Webvire Logo" class="logo-img">
    </a>

    <nav class="nav-links">
      <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Home</a>
      <a href="{{ route('about') }}" class="{{ request()->routeIs('about') ? 'active' : '' }}">About Us</a>
      <a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Services</a>
      <a href="{{ route('portfolio') }}" class="{{ request()->routeIs('portfolio') ? 'active' : '' }}">Portfolio</a>
      <a href="{{ route('it-solutions') }}" class="{{ request()->routeIs('it-solutions') ? 'active' : '' }}">IT Solutions</a>
      <a href="{{ route('careers') }}" class="{{ request()->routeIs('careers') ? 'active' : '' }}">Careers</a>
      <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact Us</a>
    </nav>

    <div style="display: flex; gap: 10px; align-items: center;">
      <button class="sound-toggle-btn" id="sound-toggle-btn" aria-label="Toggle Sound" title="Sound Muted (Click to Enable)">
        <i class="fa-solid fa-volume-xmark"></i>
      </button>
      <a href="{{ route('contact') }}" class="btn btn-primary nav-cta-btn">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
      <button class="hamburger-btn" id="open-drawer-btn" aria-label="Open Navigation">
        <i class="fa-solid fa-bars"></i>
      </button>
    </div>
  </div>
</header>
