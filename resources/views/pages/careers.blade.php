@extends('layouts.app')

@section('title', 'Careers | Webvire - Openings, Culture & Engineering Team')
@section('meta_description', 'Join Webvire Technologies - Explore open software engineering, UI/UX design, and DevOps roles, team perks, hardware allowances, and 4-step hiring process.')
@section('meta_keywords', 'Webvire Careers, Developer Jobs, Software Engineering Openings, Remote Developer Jobs, UI UX Designer Jobs')

@section('content')
  <!-- Subpage Hero -->
  <section class="subpage-hero">
    <div class="container">
      <div class="pill-badge">CAREERS AT WEBVIRE</div>
      <h1>Build Your Future With <span class="gradient-text">Webvire</span></h1>
      <p>We are always looking for passionate software engineers, UI/UX designers, and digital strategists.</p>
    </div>
  </section>

  <!-- Engineering Values Strip Bar -->
  <div class="feature-strip">
    <div class="container">
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon-box icon-blue"><i class="fa-solid fa-code-commit"></i></div>
          <h3>Ship Code Fast</h3>
          <p>Automated CI/CD pipelines & rapid iteration.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon-box icon-mint"><i class="fa-solid fa-laptop-code"></i></div>
          <h3>Modern Hardware</h3>
          <p>M3 MacBook Pro + 4K Monitor work setup.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon-box icon-purple"><i class="fa-solid fa-graduation-cap"></i></div>
          <h3>Unlimited Learning</h3>
          <p>Annual budget for Udemy, AWS & design courses.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon-box icon-orange"><i class="fa-solid fa-heart-pulse"></i></div>
          <h3>Health & Wellness</h3>
          <p>Comprehensive medical cover for family.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Open Positions Section -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">CURRENT OPENINGS</div>
        <h2>Explore Active Opportunities</h2>
        <p>Join an ambitious engineering culture dedicated to building high-impact digital products.</p>
      </div>

      <div class="portfolio-grid">
        <div class="project-card" style="padding: 30px 24px;">
          <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 14px;">
            <span class="project-tag icon-blue">Full-Time · Remote</span>
            <span style="font-size: 12px; font-weight: 700; color: var(--text-muted);">4+ Yrs Exp</span>
          </div>
          <h3 style="font-size: 19px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Senior Full Stack Developer</h3>
          <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin-bottom: 20px;">
            Lead web engineering projects using React, Node.js, Next.js, and AWS cloud microservices.
          </p>
          <a class="btn btn-primary" href="{{ route('contact') }}" style="width: 100%; justify-content: center;">Apply Now <i class="fa-solid fa-paper-plane"></i></a>
        </div>

        <div class="project-card" style="padding: 30px 24px;">
          <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 14px;">
            <span class="project-tag icon-purple">Full-Time · Hybrid</span>
            <span style="font-size: 12px; font-weight: 700; color: var(--text-muted);">3+ Yrs Exp</span>
          </div>
          <h3 style="font-size: 19px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Senior UI/UX Designer</h3>
          <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin-bottom: 20px;">
            Create high-converting web interfaces, interactive design systems, and Figma prototypes.
          </p>
          <a class="btn btn-primary" href="{{ route('contact') }}" style="width: 100%; justify-content: center;">Apply Now <i class="fa-solid fa-paper-plane"></i></a>
        </div>

        <div class="project-card" style="padding: 30px 24px;">
          <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 14px;">
            <span class="project-tag icon-mint">Full-Time · Remote</span>
            <span style="font-size: 12px; font-weight: 700; color: var(--text-muted);">4+ Yrs Exp</span>
          </div>
          <h3 style="font-size: 19px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">Lead Mobile App Engineer</h3>
          <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin-bottom: 20px;">
            Architect cross-platform Flutter & iOS/Android native mobile applications.
          </p>
          <a class="btn btn-primary" href="{{ route('contact') }}" style="width: 100%; justify-content: center;">Apply Now <i class="fa-solid fa-paper-plane"></i></a>
        </div>

        <div class="project-card" style="padding: 30px 24px;">
          <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 14px;">
            <span class="project-tag icon-rose">Full-Time · Hybrid</span>
            <span style="font-size: 12px; font-weight: 700; color: var(--text-muted);">3+ Yrs Exp</span>
          </div>
          <h3 style="font-size: 19px; font-weight: 800; color: #0f172a; margin-bottom: 8px;">DevOps & Cloud Architect</h3>
          <p style="font-size: 13px; color: var(--text-muted); line-height: 1.6; margin-bottom: 20px;">
            Automate CI/CD pipelines, Kubernetes container orchestration, and cloud infrastructure security.
          </p>
          <a class="btn btn-primary" href="{{ route('contact') }}" style="width: 100%; justify-content: center;">Apply Now <i class="fa-solid fa-paper-plane"></i></a>
        </div>
      </div>
    </div>
  </section>

  <!-- Unique Component: Team Perks & Benefits Grid -->
  <section class="section">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">PERKS & BENEFITS</div>
        <h2>Why Engineers Love Working Here</h2>
        <p>We believe happy engineers build world-class products.</p>
      </div>

      <div class="services-grid-ref">
        <div class="service-card-ref">
          <div class="service-icon-circle icon-blue"><i class="fa-solid fa-laptop"></i></div>
          <h3>MacBook Pro Setup</h3>
          <p>M3 Silicon + dual 4K monitors.</p>
        </div>

        <div class="service-card-ref">
          <div class="service-icon-circle icon-mint"><i class="fa-solid fa-house-laptop"></i></div>
          <h3>Remote Freedom</h3>
          <p>Work from home or hybrid office.</p>
        </div>

        <div class="service-card-ref">
          <div class="service-icon-circle icon-purple"><i class="fa-solid fa-graduation-cap"></i></div>
          <h3>Skill Stipends</h3>
          <p>$1,000 annual budget for courses.</p>
        </div>

        <div class="service-card-ref">
          <div class="service-icon-circle icon-rose"><i class="fa-solid fa-heart-pulse"></i></div>
          <h3>Health & Dental</h3>
          <p>100% covered health policy.</p>
        </div>

        <div class="service-card-ref">
          <div class="service-icon-circle icon-sky"><i class="fa-solid fa-umbrella-beach"></i></div>
          <h3>Paid Time Off</h3>
          <p>24 annual paid leaves + holidays.</p>
        </div>

        <div class="service-card-ref">
          <div class="service-icon-circle icon-orange"><i class="fa-solid fa-champagne-glasses"></i></div>
          <h3>Team Retreats</h3>
          <p>Annual company hackathons & retreats.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Hiring Process Section -->
  <section class="section section-alt">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">OUR HIRING PROCESS</div>
        <h2>Simple & Transparent 4-Step Hiring</h2>
        <p>A fast, respectful interview process designed to let your technical skills shine.</p>
      </div>

      <div class="process-grid">
        <div class="process-card">
          <div class="step-num-badge icon-blue">01</div>
          <h3>Application Review</h3>
          <p>Screening your resume and portfolio projects.</p>
        </div>

        <div class="process-card">
          <div class="step-num-badge icon-mint">02</div>
          <h3>Technical Assessment</h3>
          <p>Practical coding or design assignment.</p>
        </div>

        <div class="process-card">
          <div class="step-num-badge icon-purple">03</div>
          <h3>Architecture Discussion</h3>
          <p>Technical interview with our lead engineering team.</p>
        </div>

        <div class="process-card">
          <div class="step-num-badge icon-rose">04</div>
          <h3>Offer & Onboarding</h3>
          <p>Competitive offer package and welcoming team setup.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action Banner -->
  <section class="section" style="padding-top: 0;">
    <div class="container">
      <div class="cta-banner">
        <div>
          <div class="pill-badge" style="background: rgba(255,255,255,0.15); color: #fff; border-color: rgba(255,255,255,0.3);">DON'T SEE A FIT?</div>
          <h2>Send Us Your Resume Anyway!</h2>
          <p>We are always interested in meeting talented engineers and designers.</p>
          
          <div style="display: flex; gap: 14px; flex-wrap: wrap;">
            <a class="btn btn-primary" href="{{ route('contact') }}">Submit Resume <i class="fa-solid fa-arrow-right"></i></a>
            <a class="btn btn-outline" href="{{ route('contact') }}">Contact HR Team</a>
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
      WebvireUI.init('careers');
    });
  </script>
@endpush
