@extends('layouts.app')

@section('title', 'About Us | Webvire - Our Story, Timeline & Team')
@section('meta_description', 'Learn about Webvire Technologies - Our history, 2019-2026 evolution timeline, leadership engineering team, and core technology stack matrix.')
@section('meta_keywords', 'About Webvire, IT Agency Team, Engineering Leadership, Technology Stack, Software History')

@section('content')
  <!-- Subpage Hero -->
  <section class="subpage-hero">
    <div class="container">
      <div class="pill-badge">ABOUT WEBVIRE</div>
      <h1>Empowering Businesses Through <span class="gradient-text">Digital Innovation</span></h1>
      <p>We combine creativity, technology, and strategy to build solutions that drive long-term business transformation.</p>
    </div>
  </section>

  <!-- Global Milestones & Stats Bar -->
  <div class="feature-strip">
    <div class="container">
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon-box icon-blue"><i class="fa-solid fa-calendar-check"></i></div>
          <h3>5+ Years Active</h3>
          <p>Delivering high-end software since 2019.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon-box icon-sky"><i class="fa-solid fa-cubes"></i></div>
          <h3>100+ Projects</h3>
          <p>Shipped across 10+ global industries.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon-box icon-indigo"><i class="fa-solid fa-server"></i></div>
          <h3>99.9% Cloud Uptime</h3>
          <p>Enterprise reliability & zero downtime.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon-box icon-cyan"><i class="fa-solid fa-face-smile"></i></div>
          <h3>32+ Happy Clients</h3>
          <p>Long-term retainer & technology partnerships.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Unique Component 1: Interactive Company Evolution Timeline -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">OUR JOURNEY</div>
        <h2>Webvire Growth Timeline</h2>
        <p>From a small web engineering studio to a multi-disciplinary technology agency.</p>
      </div>

      <div class="timeline-grid">
        <div class="timeline-card">
          <span class="timeline-year-badge">2019</span>
          <h3 style="font-size: 17px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Webvire Founded</h3>
          <p style="font-size: 13px; color: var(--text-muted); line-height: 1.5;">
            Started as a specialized full-stack web development agency focusing on custom JavaScript architectures.
          </p>
        </div>

        <div class="timeline-card">
          <span class="timeline-year-badge">2021</span>
          <h3 style="font-size: 17px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Mobile & UI/UX Wing</h3>
          <p style="font-size: 13px; color: var(--text-muted); line-height: 1.5;">
            Expanded into native iOS/Android mobile apps and dedicated UI/UX design systems.
          </p>
        </div>

        <div class="timeline-card">
          <span class="timeline-year-badge">2023</span>
          <h3 style="font-size: 17px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Cloud & DevOps Hub</h3>
          <p style="font-size: 13px; color: var(--text-muted); line-height: 1.5;">
            Launched enterprise cloud architecture, AWS/Azure migration, and 24/7 server monitoring services.
          </p>
        </div>

        <div class="timeline-card">
          <span class="timeline-year-badge">2026</span>
          <h3 style="font-size: 17px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">AI & 3D Interactive</h3>
          <p style="font-size: 13px; color: var(--text-muted); line-height: 1.5;">
            Pioneering AI model integrations, microservices, and interactive 3D WebGL user interfaces.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Unique Component 2: Interactive Technology Stack Matrix -->
  <section class="section">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">TECH MATRIX</div>
        <h2>Technologies We Excel In</h2>
        <p>We work with battle-tested frameworks, cloud infrastructure, and modern developer tools.</p>
      </div>

      <div class="tech-matrix-grid">
        <div class="tech-item-card">
          <i class="fa-brands fa-react" style="color: #61dafb;"></i>
          <span>React.js</span>
        </div>
        <div class="tech-item-card">
          <i class="fa-brands fa-node-js" style="color: #68a063;"></i>
          <span>Node.js</span>
        </div>
        <div class="tech-item-card">
          <i class="fa-brands fa-python" style="color: #3776ab;"></i>
          <span>Python</span>
        </div>
        <div class="tech-item-card">
          <i class="fa-brands fa-aws" style="color: #ff9900;"></i>
          <span>AWS Cloud</span>
        </div>
        <div class="tech-item-card">
          <i class="fa-brands fa-docker" style="color: #2496ed;"></i>
          <span>Docker</span>
        </div>
        <div class="tech-item-card">
          <i class="fa-brands fa-figma" style="color: #f24e1e;"></i>
          <span>Figma UI/UX</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Mission, Vision & Core Values Section -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">MISSION & VISION</div>
        <h2>What Drives Webvire Forward</h2>
        <p>Our core values center on technology craftsmanship, integrity, and long-term client growth.</p>
      </div>

      <div class="portfolio-grid">
        <div class="project-card" style="padding: 34px 26px; text-align: center;">
          <div class="service-icon-circle icon-blue" style="margin-bottom: 20px;">
            <i class="fa-solid fa-bullseye"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: #0f172a;">Our Mission</h3>
          <p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">
            To engineer high-performance digital products that help businesses automate workflows, scale operations, and outperform competition.
          </p>
        </div>

        <div class="project-card" style="padding: 34px 26px; text-align: center;">
          <div class="service-icon-circle icon-purple" style="margin-bottom: 20px;">
            <i class="fa-solid fa-eye"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: #0f172a;">Our Vision</h3>
          <p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">
            To become a globally recognized technology partner known for interactive digital experiences, robust architecture, and engineering quality.
          </p>
        </div>

        <div class="project-card" style="padding: 34px 26px; text-align: center;">
          <div class="service-icon-circle icon-rose" style="margin-bottom: 20px;">
            <i class="fa-solid fa-heart"></i>
          </div>
          <h3 style="font-size: 20px; font-weight: 800; margin-bottom: 12px; color: #0f172a;">Core Values</h3>
          <p style="color: var(--text-muted); font-size: 14px; line-height: 1.6;">
            Integrity, complete transparency, relentless innovation, and an unwavering commitment to achieving client satisfaction.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Our Leadership & Team Section -->
  <section class="section">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">OUR EXPERT TEAM</div>
        <h2>Meet The Minds Behind Webvire</h2>
        <p>A dedicated team of passionate engineers, designers, and digital strategists.</p>
      </div>

      <div class="process-grid">
        <div class="process-card" style="padding: 28px 20px;">
          <div class="client-avatar-wrapper" style="width: 80px; height: 80px; margin-bottom: 16px;">
            <img src="{{ asset('assets/client_avatar.png') }}" class="client-avatar-img" alt="Rajesh Verma">
          </div>
          <h3>Rajesh Verma</h3>
          <p style="color: var(--blue-vibrant); font-weight: 700; font-size: 12px; margin-bottom: 10px; text-transform: uppercase;">CEO & Founder</p>
          <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 16px;">10+ years experience in tech strategy and enterprise software architecture.</p>
          <div class="topbar-socials" style="justify-content: center;">
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
          </div>
        </div>

        <div class="process-card" style="padding: 28px 20px;">
          <div class="client-avatar-wrapper" style="width: 80px; height: 80px; margin-bottom: 16px;">
            <img src="{{ asset('assets/client_avatar_2.png') }}" class="client-avatar-img" alt="Priya Sharma">
          </div>
          <h3>Priya Sharma</h3>
          <p style="color: var(--purple-accent); font-weight: 700; font-size: 12px; margin-bottom: 10px; text-transform: uppercase;">Head of Product & Design</p>
          <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 16px;">Specialist in human-centered UI/UX design and interactive web experiences.</p>
          <div class="topbar-socials" style="justify-content: center;">
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
          </div>
        </div>

        <div class="process-card" style="padding: 28px 20px;">
          <div class="client-avatar-wrapper" style="width: 80px; height: 80px; margin-bottom: 16px;">
            <img src="{{ asset('assets/client_avatar_3.png') }}" class="client-avatar-img" alt="Amit Patel">
          </div>
          <h3>Amit Patel</h3>
          <p style="color: #0d9488; font-weight: 700; font-size: 12px; margin-bottom: 10px; text-transform: uppercase;">Lead Solutions Architect</p>
          <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 16px;">Expert in full-stack cloud systems, Microservices, and DevOps infrastructure.</p>
          <div class="topbar-socials" style="justify-content: center;">
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
          </div>
        </div>

        <div class="process-card" style="padding: 28px 20px;">
          <div class="client-avatar-wrapper" style="width: 80px; height: 80px; margin-bottom: 16px;">
            <img src="{{ asset('assets/client_avatar_4.png') }}" class="client-avatar-img" alt="Sneha Gupta">
          </div>
          <h3>Sneha Gupta</h3>
          <p style="color: #e11d48; font-weight: 700; font-size: 12px; margin-bottom: 10px; text-transform: uppercase;">Head of Mobile & AI</p>
          <p style="font-size: 13px; color: var(--text-muted); margin-bottom: 16px;">Building native iOS/Android apps and intelligent AI model integrations.</p>
          <div class="topbar-socials" style="justify-content: center;">
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
            <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Banner -->
  <section class="section" style="padding-top: 0;">
    <div class="container">
      <div class="cta-banner">
        <div>
          <div class="pill-badge" style="background: rgba(255,255,255,0.15); color: #fff; border-color: rgba(255,255,255,0.3);">READY TO GROW?</div>
          <h2>Ready to Build Something Exceptional?</h2>
          <p>Partner with Webvire to turn your digital vision into reality.</p>
          
          <div style="display: flex; gap: 14px; flex-wrap: wrap;">
            <a class="btn btn-primary" href="{{ route('contact') }}">Get Free Consultation <i class="fa-solid fa-arrow-right"></i></a>
            <a class="btn btn-outline" href="{{ route('contact') }}">Contact Us</a>
          </div>
        </div>

        <div class="cta-img-box">
          <img src="{{ asset('assets/cta_rocket_3d.png') }}" alt="Webvire Rocket Launch 3D Graphic">
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      WebvireUI.init('about');
    });
  </script>
@endpush
