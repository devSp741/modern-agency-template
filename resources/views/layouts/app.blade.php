<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="@yield('meta_description', 'Webvire Technologies - Premier Smart IT Solutions Agency. We deliver Custom Web Development, Mobile Apps, Enterprise Software & Cloud Digital Transformation.')">
  <meta name="keywords" content="@yield('meta_keywords', 'Web Development Agency, Mobile App Development, Custom Software Solutions, UI UX Design, IT Consulting, Webvire Technologies')">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="@yield('canonical', url()->current())">
  <title>@yield('title', 'Webvire | Smart IT Solutions & Software Development Agency')</title>

  <!-- Favicons -->
  <link rel="icon" type="image/png" href="{{ asset('assets/logo.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('assets/logo.png') }}">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:url" content="{{ url()->current() }}">
  <meta property="og:title" content="@yield('title', 'Webvire | Smart IT Solutions & Software Development')">
  <meta property="og:description" content="@yield('meta_description', 'Empowering businesses with custom web applications, mobile apps, enterprise software and cloud digital transformation.')">
  <meta property="og:image" content="{{ asset('assets/cta_rocket_3d.png') }}">
  <meta property="og:site_name" content="Webvire Technologies">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:url" content="{{ url()->current() }}">
  <meta name="twitter:title" content="@yield('title', 'Webvire | Smart IT Solutions & Software Development')">
  <meta name="twitter:description" content="@yield('meta_description', 'Empowering businesses with custom web applications, mobile apps, enterprise software and cloud digital transformation.')">
  <meta name="twitter:image" content="{{ asset('assets/cta_rocket_3d.png') }}">

  <!-- Schema.org Structured Data (JSON-LD) -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "ProfessionalService",
    "name": "Webvire Technologies",
    "image": "{{ asset('assets/partner_workspace_3d.png') }}",
    "@id": "https://webvire.com",
    "url": "https://webvire.com",
    "telephone": "+91-7309277237",
    "email": "info@webvire.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Kursi Road, Near Thana Gudamba",
      "addressLocality": "Lucknow",
      "addressRegion": "Uttar Pradesh",
      "postalCode": "226021",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 26.9234,
      "longitude": 80.9612
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": [
        "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"
      ],
      "opens": "10:00",
      "closes": "20:00"
    },
    "sameAs": [
      "https://www.linkedin.com",
      "https://twitter.com",
      "https://github.com"
    ],
    "priceRange": "$$$"
  }
  </script>

  <!-- Font Awesome 6 Icons Library & AOS Animations -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
  @stack('styles')
</head>
<body>

  <!-- Topbar -->
  <div id="webvire-topbar">
    @include('partials.topbar')
  </div>

  <!-- Header Navbar -->
  <div id="webvire-header">
    @include('partials.header')
  </div>

  <!-- Main Content Body -->
  <main>
    @yield('content')
  </main>

  <!-- Footer -->
  <div id="webvire-footer">
    @include('partials.footer')
  </div>

  <!-- Floating Back to Top Button -->
  <button id="back-to-top" class="back-to-top-btn" aria-label="Back to Top">
    <i class="fa-solid fa-arrow-up"></i>
  </button>

  <!-- Scripts -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script src="{{ asset('js/script.js') }}"></script>
  @stack('scripts')
</body>
</html>
