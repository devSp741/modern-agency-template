@extends('layouts.app')

@section('title', 'Webvire | Smart IT Solutions & Software Development Agency')

@section('content')
  <!-- Hero Section with Pure 3D Component Canvas & Parallax Interaction -->
  <section class="hero">
    <div class="hero-glow-bg"></div>
    <div class="container hero-grid">
      <div>
        <div class="pill-badge">
          <span class="pill-badge-dot"></span> build · innovate · grow
        </div>
        <h1>Transforming Ideas Into <span class="gradient-text">Digital Success</span></h1>
        <p>We design, develop and deliver smart digital solutions that help businesses grow faster in the modern world.</p>
        
        <div class="actions">
          <a class="btn btn-primary" href="{{ route('contact') }}">Start Your Project <i class="fa-solid fa-arrow-right"></i></a>
          <a class="btn btn-outline" href="{{ route('services') }}">Explore Services</a>
          <a class="btn btn-video" href="#">
            <span class="play-icon"><i class="fa-solid fa-play"></i></span> Watch Video
          </a>
        </div>

        <div class="hero-stats">
          <div class="stat-item">
            <strong data-target="5">0+</strong>
            <span>Years Experience</span>
          </div>
          <div class="stat-item">
            <strong data-target="100">0+</strong>
            <span>Projects Delivered</span>
          </div>
          <div class="stat-item">
            <strong data-target="32">0+</strong>
            <span>Happy Clients</span>
          </div>
        </div>
      </div>

      <!-- Pure HTML/CSS/JS 3D Interactive Component Canvas -->
      <div class="hero-art-wrapper">
        <div class="hero-3d-scene" id="hero-3d-scene">
          
          <!-- 3D Pedestal Stage Ring -->
          <div class="stage-3d">
            <div class="stage-ring ring-1"></div>
            <div class="stage-ring ring-2"></div>
            <div class="stage-ring ring-3"></div>
            <div class="stage-disc"></div>
          </div>

          <!-- 3D Pure HTML/CSS Laptop Component -->
          <div class="laptop-3d" id="laptop-3d">
            <div class="laptop-screen-frame">
              <div class="laptop-screen-inner">
                <div class="window-bar">
                  <span class="dot red"></span>
                  <span class="dot yellow"></span>
                  <span class="dot green"></span>
                  <span class="window-title"><i class="fa-solid fa-code"></i> webvire_core.js</span>
                </div>
                <div class="code-viewport">
                  <div class="code-line"><span class="c-keyword">import</span> <span class="c-obj">{ WebvireEngine }</span> <span class="c-keyword">from</span> <span class="c-str">'@@webvire/3d'</span>;</div>
                  <div class="code-line"><span class="c-keyword">const</span> <span class="c-var">app</span> = <span class="c-keyword">new</span> <span class="c-func">WebvireEngine</span>({</div>
                  <div class="code-line tab"><span class="c-attr">theme:</span> <span class="c-str">'cyber-navy'</span>,</div>
                  <div class="code-line tab"><span class="c-attr">mode:</span> <span class="c-str">'interactive-3d'</span>,</div>
                  <div class="code-line tab"><span class="c-attr">status:</span> <span class="c-status" id="screen-status-badge">ACTIVE</span></div>
                  <div class="code-line">});</div>
                  <div class="code-line"><span class="c-var">app</span>.<span class="c-func">launchSuccess</span>();</div>
                </div>
                <div class="screen-chart-box">
                  <div class="chart-bar b1"></div>
                  <div class="chart-bar b2"></div>
                  <div class="chart-bar b3"></div>
                  <div class="chart-bar b4"></div>
                  <div class="chart-bar b5"></div>
                </div>
              </div>
            </div>

            <div class="laptop-base-frame">
              <div class="trackpad"></div>
            </div>
          </div>

          <!-- 3D Dual-Ring Orbit Floating Badges -->
          <div class="floating-badge-3d fb-cloud" data-depth="1.6">
            <div class="badge-icon"><i class="fa-solid fa-cloud"></i></div>
            <div class="badge-text">
              <strong>Cloud Solutions</strong>
              <span>99.9% Uptime</span>
            </div>
          </div>

          <div class="floating-badge-3d fb-devops" data-depth="1.8">
            <div class="badge-icon"><i class="fa-solid fa-code"></i></div>
            <div class="badge-text">
              <strong>Full Stack & AI</strong>
              <span>Fast Execution</span>
            </div>
          </div>

          <div class="floating-badge-3d fb-design" data-depth="2.1">
            <div class="badge-icon"><i class="fa-solid fa-pen-ruler"></i></div>
            <div class="badge-text">
              <strong>UI/UX Design</strong>
              <span>Interactive 3D</span>
            </div>
          </div>

          <div class="floating-badge-3d fb-analytics" data-depth="1.3">
            <div class="badge-icon"><i class="fa-solid fa-chart-line"></i></div>
            <div class="badge-text">
              <strong>Analytics</strong>
              <span>Real-Time Growth</span>
            </div>
          </div>

          <!-- Floating Code Symbols -->
          <div class="code-float sym-1" data-depth="2.5">&lt;/&gt;</div>
          <div class="code-float sym-2" data-depth="2.2">{ }</div>
          <div class="code-float sym-3" data-depth="1.7">#</div>
          <div class="code-float sym-4" data-depth="2.8">⚛</div>
        </div>
      </div>
    </div>
  </section>

  <!-- Feature Strip Bar -->
  <div class="feature-strip" data-aos="fade-up">
    <div class="container">
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon-box icon-blue"><i class="fa-solid fa-cubes"></i></div>
          <h3>Future Ready Solutions</h3>
          <p>Smart, scalable and secure solutions built with modern technology.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon-box icon-sky"><i class="fa-solid fa-chart-line"></i></div>
          <h3>Performance Driven</h3>
          <p>Focused on speed, performance and measurable results.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon-box icon-indigo"><i class="fa-solid fa-shield-halved"></i></div>
          <h3>Secure & Reliable</h3>
          <p>Robust systems built around your business needs.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon-box icon-cyan"><i class="fa-solid fa-headset"></i></div>
          <h3>Dedicated Support</h3>
          <p>Expert support to keep your digital products moving.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Core Services -->
  <section class="section section-alt" data-aos="fade-up">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">OUR CORE SERVICES</div>
        <h2>Smart IT Solutions for Every Business</h2>
        <p>From idea to execution, we provide end-to-end digital solutions that create real value for your business.</p>
      </div>

      <div class="services-grid-ref">
        <div class="service-card-ref">
          <div class="service-icon-circle icon-blue"><i class="fa-solid fa-globe"></i></div>
          <h3>Web Development</h3>
          <p>Modern, fast & scalable web solutions.</p>
          <a class="card-link" href="{{ route('services') }}">Know More <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="service-card-ref">
          <div class="service-icon-circle icon-mint"><i class="fa-solid fa-mobile-screen-button"></i></div>
          <h3>Mobile App Development</h3>
          <p>Powerful apps for Android & iOS.</p>
          <a class="card-link" href="{{ route('services') }}">Know More <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="service-card-ref">
          <div class="service-icon-circle icon-purple"><i class="fa-solid fa-code"></i></div>
          <h3>Software Development</h3>
          <p>Custom software for unique needs.</p>
          <a class="card-link" href="{{ route('services') }}">Know More <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="service-card-ref">
          <div class="service-icon-circle icon-rose"><i class="fa-solid fa-pen-ruler"></i></div>
          <h3>UI/UX Design</h3>
          <p>Creative designs that users love.</p>
          <a class="card-link" href="{{ route('services') }}">Know More <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="service-card-ref">
          <div class="service-icon-circle icon-sky"><i class="fa-solid fa-display"></i></div>
          <h3>IT Consulting</h3>
          <p>Right technology for better growth.</p>
          <a class="card-link" href="{{ route('services') }}">Know More <i class="fa-solid fa-arrow-right"></i></a>
        </div>

        <div class="service-card-ref">
          <div class="service-icon-circle icon-orange"><i class="fa-solid fa-rocket"></i></div>
          <h3>Digital Marketing</h3>
          <p>Boost your brand's online presence.</p>
          <a class="card-link" href="{{ route('services') }}">Know More <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Trusted Partner Section -->
  <section class="section" data-aos="fade-up">
    <div class="container partner-grid">
      <div class="partner-img-wrapper" data-aos="zoom-in">
        <img src="{{ asset('assets/partner_workspace_3d.png') }}" alt="Webvire Technology Partner Workspace">
        <div class="floating-growth-card">
          <div class="growth-title">
            <span>Growth Together</span>
          </div>
          <div class="growth-chart-bars">
            <div class="gb b1"></div>
            <div class="gb b2"></div>
            <div class="gb b3"></div>
            <div class="gb b4"></div>
            <div class="gb b5"></div>
          </div>
        </div>
      </div>

      <div>
        <div class="pill-badge">WHY CHOOSE WEBVIRE</div>
        <h2>Your Trusted Technology Partner</h2>
        <p style="color: var(--text-muted); margin-top: 14px; font-size: 16px;">We combine creativity, technology and strategy to deliver solutions that help you achieve long-term success.</p>

        <div class="partner-checklist">
          <div class="check-item">
            <div class="check-icon-circle icon-blue"><i class="fa-solid fa-clock"></i></div>
            <span>On-Time Delivery</span>
          </div>
          <div class="check-item">
            <div class="check-icon-circle icon-sky"><i class="fa-solid fa-headset"></i></div>
            <span>Dedicated Support</span>
          </div>
          <div class="check-item">
            <div class="check-icon-circle icon-purple"><i class="fa-solid fa-user-check"></i></div>
            <span>Skilled & Certified Team</span>
          </div>
          <div class="check-item">
            <div class="check-icon-circle icon-rose"><i class="fa-solid fa-handshake"></i></div>
            <span>Client-Centric Approach</span>
          </div>
          <div class="check-item">
            <div class="check-icon-circle icon-mint"><i class="fa-solid fa-gears"></i></div>
            <span>Latest Technologies</span>
          </div>
          <div class="check-item">
            <div class="check-icon-circle icon-orange"><i class="fa-solid fa-shield-halved"></i></div>
            <span>100% Transparency</span>
          </div>
        </div>

        <a class="btn btn-primary" href="{{ route('contact') }}">Let's Build Something Amazing <i class="fa-solid fa-arrow-right"></i></a>
      </div>
    </div>
  </section>

  <!-- Work Process Section -->
  <section class="section section-alt" data-aos="fade-up">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">OUR WORK PROCESS</div>
        <h2>How We Turn Your Vision Into Reality</h2>
        <p>A simple, clear and result-driven process to deliver the best solutions.</p>
      </div>

      <div class="process-grid">
        <div class="process-card">
          <div class="step-num-badge icon-blue">01</div>
          <h3>Discovery & Planning</h3>
          <p>Understanding your goals and business needs.</p>
        </div>

        <div class="process-card">
          <div class="step-num-badge icon-mint">02</div>
          <h3>Design & Prototyping</h3>
          <p>Creating stunning designs and user experience.</p>
        </div>

        <div class="process-card">
          <div class="step-num-badge icon-purple">03</div>
          <h3>Development</h3>
          <p>Writing clean, secure and scalable code.</p>
        </div>

        <div class="process-card">
          <div class="step-num-badge icon-rose">04</div>
          <h3>Launch & Support</h3>
          <p>Go live with confidence and continuous support.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Industries We Serve -->
  <section class="section">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">INDUSTRIES WE SERVE</div>
        <h2>Solutions for Every Industry</h2>
        <p>We build digital solutions for businesses of all sizes and sectors.</p>
      </div>

      <div class="industries-grid">
        <div class="industry-pill">
          <div class="industry-icon icon-blue"><i class="fa-solid fa-cart-shopping"></i></div>
          <span>E-Commerce</span>
        </div>
        <div class="industry-pill">
          <div class="industry-icon icon-rose"><i class="fa-solid fa-heart-pulse"></i></div>
          <span>Healthcare</span>
        </div>
        <div class="industry-pill">
          <div class="industry-icon icon-indigo"><i class="fa-solid fa-graduation-cap"></i></div>
          <span>Education</span>
        </div>
        <div class="industry-pill">
          <div class="industry-icon icon-orange"><i class="fa-solid fa-building"></i></div>
          <span>Real Estate</span>
        </div>
        <div class="industry-pill">
          <div class="industry-icon icon-mint"><i class="fa-solid fa-building-columns"></i></div>
          <span>Finance</span>
        </div>
        <div class="industry-pill">
          <div class="industry-icon icon-purple"><i class="fa-solid fa-truck-fast"></i></div>
          <span>Logistics</span>
        </div>
        <div class="industry-pill">
          <div class="industry-icon icon-sky"><i class="fa-solid fa-plane"></i></div>
          <span>Travel & Tourism</span>
        </div>
        <div class="industry-pill">
          <div class="industry-icon icon-amber"><i class="fa-solid fa-utensils"></i></div>
          <span>Food & Restaurant</span>
        </div>
        <div class="industry-pill">
          <div class="industry-icon icon-violet"><i class="fa-solid fa-rocket"></i></div>
          <span>Startup</span>
        </div>
        <div class="industry-pill">
          <div class="industry-icon icon-cyan"><i class="fa-solid fa-border-all"></i></div>
          <span>& Many More</span>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Section -->
  <section class="section section-alt">
    <div class="container">
      <div class="portfolio-header">
        <div>
          <div class="pill-badge">OUR PORTFOLIO</div>
          <h2>Projects That Speak For Us</h2>
          <p style="color: var(--text-muted); margin-top: 8px;">Explore some of our recent work and see the difference we create.</p>
        </div>
        <a class="btn btn-primary" href="{{ route('portfolio') }}">View All Projects <i class="fa-solid fa-arrow-right"></i></a>
      </div>

      <div class="portfolio-grid">
        <div class="project-card">
          <div class="project-img-box">
            <img src="{{ asset('assets/portfolio_onehouse.png') }}" alt="Onehouse E-Commerce Platform">
          </div>
          <div class="project-body">
            <span class="project-tag icon-blue">E-Commerce</span>
            <h3>Onehouse</h3>
            <p>A stylish and responsive e-commerce platform.</p>
            <a class="card-link" href="{{ route('portfolio') }}">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="project-card">
          <div class="project-img-box">
            <img src="{{ asset('assets/portfolio_sub800.png') }}" alt="Sub800 Real Estate Portal">
          </div>
          <div class="project-body">
            <span class="project-tag icon-orange">Real Estate</span>
            <h3>Sub800</h3>
            <p>Modern real estate platform for property listings.</p>
            <a class="card-link" href="{{ route('portfolio') }}">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="project-card">
          <div class="project-img-box">
            <img src="{{ asset('assets/portfolio_marche.png') }}" alt="Marche Online Grocery App">
          </div>
          <div class="project-body">
            <span class="project-tag icon-mint">Grocery</span>
            <h3>Marche</h3>
            <p>Advanced online grocery ordering platform.</p>
            <a class="card-link" href="{{ route('portfolio') }}">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Testimonials Section -->
  <section class="section">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">CLIENT TESTIMONIALS</div>
        <h2>What Our Clients Say</h2>
        <p>Trusted by businesses worldwide for digital innovation.</p>
      </div>

      <div class="testimonial-slider-wrapper">
        <button class="slider-btn prev-btn" aria-label="Previous Testimonial">
          <i class="fa-solid fa-chevron-left"></i>
        </button>

        <div class="testimonial-card">
          <div class="stars">
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
            <i class="fa-solid fa-star"></i>
          </div>

          <p class="quote-text">“Webvire delivered an excellent solution for our business. The team was professional, skilled and always available for support. Highly recommended!”</p>

          <div class="client-avatar-wrapper">
            <img src="{{ asset('assets/client_avatar.png') }}" class="client-avatar-img" alt="Rajesh Verma">
          </div>

          <div class="client-info">
            <b>Rajesh Verma</b>
            <span>CEO, Onehouse</span>
          </div>

          <div class="slider-dots">
            <span class="dot active" data-index="0"></span>
            <span class="dot" data-index="1"></span>
            <span class="dot" data-index="2"></span>
          </div>
        </div>

        <button class="slider-btn next-btn" aria-label="Next Testimonial">
          <i class="fa-solid fa-chevron-right"></i>
        </button>
      </div>
    </div>
  </section>

  <!-- Call to Action Banner -->
  <section class="section" style="padding-top: 0;">
    <div class="container">
      <div class="cta-banner">
        <div>
          <div class="pill-badge" style="background: rgba(255,255,255,0.15); color: #fff; border-color: rgba(255,255,255,0.3);">READY TO GROW?</div>
          <h2>Ready to Grow Your Business?</h2>
          <p>Let's build powerful digital solutions together.</p>
          
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
      WebvireUI.init('index');
    });
  </script>
@endpush
