@extends('layouts.app')

@section('title', 'About Us | Webvire - Smart IT Solutions & Software Agency')
@section('meta_description', 'Learn about Webvire Technologies - We build innovative web solutions that help businesses grow, scale and succeed in the digital world.')
@section('meta_keywords', 'About Webvire, Web Development Agency, IT Solutions, PHP, Laravel, React, Mobile Apps')

@push('styles')
  <link rel="stylesheet" href="{{ asset('css/about.css') }}">
@endpush

@section('content')

  <!-- ================================================================
       HERO — Three.js canvas fills ENTIRE hero as background
       Text overlays on top via z-index
       ================================================================ -->
  <section class="about-hero">
    {{-- Canvas injected here by about-hero.js --}}

    <div class="about-hero-content">
      <div class="container">
        <div class="about-hero-grid">

          <!-- LEFT: Text -->
          <div class="about-hero-text">
            <div class="pill-badge">ABOUT WEBVIRE</div>
            <h1>Innovative Web Solutions That Drive <span class="gradient-text">Real Growth</span></h1>
            <p class="hero-subtitle">At Webvire, we combine creativity, technology, and strategy to build solutions that drive long-term business transformation and help brands succeed in the digital world.</p>

            <div class="feature-pills-bar">
              <div class="hero-pill-item">
                <span class="hero-pill-icon"><i class="fa-solid fa-user-shield"></i></span>
                Client-Centric Approach
              </div>
              <div class="hero-pill-item">
                <span class="hero-pill-icon"><i class="fa-solid fa-award"></i></span>
                Quality &amp; Reliability
              </div>
              <div class="hero-pill-item">
                <span class="hero-pill-icon"><i class="fa-solid fa-lightbulb"></i></span>
                Innovation at Core
              </div>
              <div class="hero-pill-item">
                <span class="hero-pill-icon"><i class="fa-solid fa-chart-line"></i></span>
                Results That Matter
              </div>
            </div>
          </div>

          <!-- RIGHT: empty — 3D scene renders in canvas behind this area -->
          <div class="about-hero-right">
            {{-- The 4 floating orbit cards are injected by about-hero.js as DOM overlays --}}
          </div>

        </div>
      </div>
    </div>
  </section>

  <!-- ================================================================
       SECTION 2: Overview & Accordion (Ultra-Premium Theme Aligned)
       ================================================================ -->
  <section class="overview-section section">
    <div class="container">
      <div class="about-overview-grid">

        <!-- LEFT: Story & Experience Card -->
        <div class="overview-left-card">
          <div class="pill-badge" style="margin-bottom:16px;">WHO WE ARE</div>

          <div class="experience-gradient-card">
            <div class="exp-badge-top">
              <span class="exp-big-number">7+</span>
              <div class="exp-card-label">
                <strong>YEARS OF EXCELLENCE</strong>
                <span>IN IT SOLUTIONS &amp; SOFTWARE DEVELOPMENT</span>
              </div>
            </div>
          </div>

          <h2 class="overview-heading">Delivering High-Impact Digital Products <span class="gradient-text">Since 2019</span></h2>
          <p class="overview-desc">
            At <strong>Webvire</strong>, we combine engineering excellence, strategic design, and battle-tested technology stack to build enterprise-grade web applications, custom software, and scalable cloud solutions that drive real business transformation.
          </p>
          <a href="{{ route('contact') }}" class="btn btn-primary overview-cta-btn">Start Your Project <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <!-- RIGHT: Smooth Interactive Accordion -->
        <div>
          <div class="about-accordion">

            <div class="accordion-box active">
              <button class="accordion-btn" type="button">
                <span class="acc-title">
                  <span class="acc-icon-box"><i class="fa-solid fa-bullseye"></i></span>
                  Our Mission
                </span>
                <i class="fa-solid fa-chevron-down acc-chevron"></i>
              </button>
              <div class="accordion-content-wrapper">
                <div class="accordion-content-inner">
                  To empower global businesses with innovative, secure, and scalable digital products that drive long-term growth, operational efficiency, and a lasting competitive advantage.
                </div>
              </div>
            </div>

            <div class="accordion-box">
              <button class="accordion-btn" type="button">
                <span class="acc-title">
                  <span class="acc-icon-box"><i class="fa-solid fa-eye"></i></span>
                  Our Vision
                </span>
                <i class="fa-solid fa-chevron-down acc-chevron"></i>
              </button>
              <div class="accordion-content-wrapper">
                <div class="accordion-content-inner">
                  To be the premier digital transformation partner for forward-thinking enterprises, building smart tech ecosystems that allow businesses to scale infinitely with speed and confidence.
                </div>
              </div>
            </div>

            <div class="accordion-box">
              <button class="accordion-btn" type="button">
                <span class="acc-title">
                  <span class="acc-icon-box"><i class="fa-solid fa-award"></i></span>
                  Why Choose Webvire?
                </span>
                <i class="fa-solid fa-chevron-down acc-chevron"></i>
              </button>
              <div class="accordion-content-wrapper">
                <div class="accordion-content-inner">
                  End-to-end fullstack expertise, agile delivery sprints, 24/7 dedicated post-launch support, zero-compromise security architecture, and complete transparent communication at every milestone.
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
  <!-- Brand Logo Slider Marquee Showcase -->
  @include('partials.brand-slider')

  <!-- ================================================================
       SECTION 3: Why Choose Webvire
       ================================================================ -->
  <section class="dark-excellence-section">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge" style="background:rgba(255,255,255,0.12);color:#20d7ff;border-color:rgba(32,215,255,0.3);">WHY CHOOSE WEBVIRE?</div>
        <h2>How We Deliver <span class="gradient-text">Excellence</span></h2>
        <p>We combine modern frameworks, strict quality control, and agile workflows to build future-ready solutions.</p>
      </div>
      <div class="dark-excellence-grid">
        <div class="dark-excellence-card">
          <div class="dark-icon-circle"><i class="fa-solid fa-code"></i></div>
          <h3>Custom Web Development</h3>
          <p>We build modern, responsive, and scalable web solutions tailored for your business needs using the latest technologies and best practices.</p>
        </div>
        <div class="dark-excellence-card">
          <div class="dark-icon-circle"><i class="fa-solid fa-shield-halved"></i></div>
          <h3>Secure &amp; Reliable Systems</h3>
          <p>We ensure strong security, data protection, and stable performance with modern coding standards and strict vulnerability testing.</p>
        </div>
        <div class="dark-excellence-card">
          <div class="dark-icon-circle"><i class="fa-solid fa-rocket"></i></div>
          <h3>Innovative Technology</h3>
          <p>We leverage latest tools and technologies to create fast, efficient, and future-ready digital solutions that keep you ahead of competitors.</p>
        </div>
      </div>
      <div style="text-align:center;margin-top:40px;font-size:15.5px;font-weight:700;color:#ffffff;">
        Turning challenges into opportunities.
        <a href="{{ route('contact') }}" style="color:#20d7ff;text-decoration:underline;">Start your project with Webvire!</a>
      </div>
    </div>
  </section>

  <!-- ================================================================
       SECTION 4: Core Capabilities
       ================================================================ -->
  <section class="section">
    <div class="container">
      <div class="core-capabilities-grid">
        <div class="capability-card">
          <div class="capability-icon"><i class="fa-solid fa-circle-check"></i></div>
          <h3>Quality Development Process</h3>
          <p>Structured development process to ensure high-quality, scalable, and reliable solutions.</p>
        </div>
        <div class="capability-card">
          <div class="capability-icon"><i class="fa-solid fa-lock"></i></div>
          <h3>Secure &amp; Reliable Systems</h3>
          <p>Advanced security protocols to protect data and build safe, high-performance applications.</p>
        </div>
        <div class="capability-card">
          <div class="capability-icon"><i class="fa-solid fa-network-wired"></i></div>
          <h3>Smart API Generation</h3>
          <p>Powerful APIs and seamless integrations to ensure smooth communication between systems.</p>
        </div>
        <div class="capability-card">
          <div class="capability-icon"><i class="fa-solid fa-microchip"></i></div>
          <h3>Modern Technology Solutions</h3>
          <p>Leveraging latest technologies to deliver innovative, efficient, and future-ready digital solutions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ================================================================
       SECTION 5: Metrics
       ================================================================ -->
  <div class="container">
    <div class="metrics-strip-container">
      <div class="metrics-strip-grid">
        <div class="metric-strip-item">
          <div class="metric-strip-icon"><i class="fa-solid fa-face-smile"></i></div>
          <strong>120+</strong>
          <span>HAPPY CLIENTS</span>
        </div>
        <div class="metric-strip-item">
          <div class="metric-strip-icon"><i class="fa-solid fa-briefcase"></i></div>
          <strong>200+</strong>
          <span>PROJECTS COMPLETED</span>
        </div>
        <div class="metric-strip-item">
          <div class="metric-strip-icon"><i class="fa-solid fa-award"></i></div>
          <strong>7+</strong>
          <span>YEARS EXPERIENCE</span>
        </div>
        <div class="metric-strip-item">
          <div class="metric-strip-icon"><i class="fa-solid fa-users"></i></div>
          <strong>25+</strong>
          <span>SKILLED EXPERTS</span>
        </div>
      </div>
    </div>
  </div>

  <!-- ================================================================
       SECTION 6: Tech Matrix
       ================================================================ -->
  <section class="section tech-matrix-section">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">TECH MATRIX</div>
        <h2>Technologies We Excel In</h2>
        <p>We work with battle-tested frameworks, cloud infrastructure, and modern developer tools.</p>
      </div>
      <div class="about-tech-matrix">
        <div class="about-tech-card"><i class="fa-brands fa-php" style="color:#777bb4;"></i><span>PHP 8</span></div>
        <div class="about-tech-card"><i class="fa-brands fa-laravel" style="color:#ff2d20;"></i><span>Laravel</span></div>
        <div class="about-tech-card"><i class="fa-brands fa-react" style="color:#61dafb;"></i><span>React.js</span></div>
        <div class="about-tech-card"><i class="fa-brands fa-node-js" style="color:#68a063;"></i><span>Node.js</span></div>
        <div class="about-tech-card"><i class="fa-brands fa-vuejs" style="color:#42b883;"></i><span>Vue.js</span></div>
        <div class="about-tech-card"><i class="fa-brands fa-python" style="color:#3776ab;"></i><span>Python</span></div>
        <div class="about-tech-card"><i class="fa-solid fa-database" style="color:#00758f;"></i><span>MySQL / PgSQL</span></div>
        <div class="about-tech-card"><i class="fa-brands fa-aws" style="color:#ff9900;"></i><span>AWS Cloud</span></div>
        <div class="about-tech-card"><i class="fa-brands fa-docker" style="color:#2496ed;"></i><span>Docker / DevOps</span></div>
        <div class="about-tech-card"><i class="fa-solid fa-mobile-screen-button" style="color:#02569b;"></i><span>Flutter</span></div>
        <div class="about-tech-card"><i class="fa-brands fa-figma" style="color:#f24e1e;"></i><span>Figma UI/UX</span></div>
        <div class="about-tech-card"><i class="fa-brands fa-git-alt" style="color:#f05032;"></i><span>Git &amp; CI/CD</span></div>
      </div>
    </div>
  </section>

  <!-- ================================================================
       SECTION 7: CTA
       ================================================================ -->
  <section class="section" style="padding-top:0;">
    <div class="container">
      <div class="cta-banner">
        <div>
          <div class="pill-badge" style="background:rgba(255,255,255,0.15);color:#fff;border-color:rgba(255,255,255,0.3);">LET'S BUILD SOMETHING GREAT</div>
          <h2>Ready To Build Something Exceptional?</h2>
          <p>Get in touch with Webvire for reliable and professional software development solutions.</p>
          <div style="display:flex;gap:14px;flex-wrap:wrap;">
            <a class="btn btn-primary" href="{{ route('contact') }}">Get Free Consultation <i class="fa-solid fa-arrow-right"></i></a>
            <a class="btn btn-outline" href="{{ route('contact') }}">Contact Us</a>
          </div>
        </div>
        <div class="cta-img-box">
          <img src="{{ asset('assets/cta_rocket_3d.png') }}" alt="Webvire CTA">
        </div>
      </div>
    </div>
  </section>

@endsection

@push('scripts')
  <!-- Three.js r128 + GSAP 3 CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>

  <!-- Page-specific 3D Engine -->
  <script src="{{ asset('js/about-hero.js') }}"></script>

  <script>
    document.addEventListener('DOMContentLoaded', () => {
      WebvireUI.init('about');

      // Accordion
      document.querySelectorAll('.accordion-btn').forEach(btn => {
        btn.addEventListener('click', () => {
          const box = btn.parentElement;
          const active = box.classList.contains('active');
          document.querySelectorAll('.accordion-box').forEach(b => b.classList.remove('active'));
          if (!active) box.classList.add('active');
        });
      });
    });
  </script>
@endpush
