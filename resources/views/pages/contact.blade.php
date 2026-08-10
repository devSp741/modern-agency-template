@extends('layouts.app')

@section('title', 'Contact Us | Webvire - Request Free Consultation')
@section('meta_description', 'Get in touch with Webvire Technologies - Request a free project consultation, estimate scope & budget, or call our team directly.')
@section('meta_keywords', 'Contact Webvire, IT Agency Contact, Free Quote, Software Development Consultation')

@section('content')
  <!-- Subpage Hero -->
  <section class="subpage-hero">
    <div class="container">
      <div class="pill-badge">GET IN TOUCH</div>
      <h1>Let's Build Something <span class="gradient-text">Amazing Together</span></h1>
      <p>Have a new project idea or need custom IT consulting? Send us a message and our team will respond within 2 hours.</p>
    </div>
  </section>

  <!-- Instant Commitments Strip Bar -->
  <div class="feature-strip">
    <div class="container">
      <div class="features-grid">
        <div class="feature-card">
          <div class="feature-icon-box icon-blue"><i class="fa-solid fa-bolt"></i></div>
          <h3>2-Hour Response Time</h3>
          <p>Our team gets back to you instantly during business hours.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon-box icon-mint"><i class="fa-solid fa-handshake"></i></div>
          <h3>Free Consultation</h3>
          <p>Detailed discovery session and project estimation at zero cost.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon-box icon-purple"><i class="fa-solid fa-user-lock"></i></div>
          <h3>Strict NDA Signed</h3>
          <p>Your ideas and business data stay 100% confidential.</p>
        </div>
        <div class="feature-card">
          <div class="feature-icon-box icon-orange"><i class="fa-solid fa-file-contract"></i></div>
          <h3>Proposal in 24 Hours</h3>
          <p>Clear architecture roadmap, scope & timeline breakdown.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Contact Layout Section -->
  <section class="section section-alt">
    <div class="container contact-layout">
      
      <!-- Contact Info Box -->
      <div class="info-box">
        <div class="pill-badge">CONTACT INFORMATION</div>
        <h2 style="font-size: 24px; font-weight: 800; color: #0f172a; margin-bottom: 12px;">Reach Out Directly</h2>
        <p style="color: var(--text-muted); font-size: 14px; line-height: 1.6; margin-bottom: 28px;">
          We are available for discovery calls, architecture reviews, and instant project consultations.
        </p>

        <div class="info-item" style="align-items: flex-start; margin-bottom: 20px;">
          <div class="check-icon-circle icon-blue" style="width: 40px; height: 40px; font-size: 16px; margin-top: 2px; flex-shrink: 0;">
            <i class="fa-solid fa-location-dot"></i>
          </div>
          <div>
            <b style="font-size: 14.5px; color: #0f172a;">Office Location</b>
            <p style="color: var(--text-muted); font-size: 13px; line-height: 1.5; margin-top: 2px; word-break: break-word;">
              Kursi Road, Near Thana Gudamba, Lucknow, Uttar Pradesh, India
            </p>
          </div>
        </div>

        <div class="info-item" style="align-items: flex-start; margin-bottom: 20px;">
          <div class="check-icon-circle icon-sky" style="width: 40px; height: 40px; font-size: 16px; margin-top: 2px; flex-shrink: 0;">
            <i class="fa-solid fa-envelope"></i>
          </div>
          <div>
            <b style="font-size: 14.5px; color: #0f172a;">Email Us</b>
            <p style="color: var(--text-muted); font-size: 13px; margin-top: 2px; word-break: break-word;">info@webvire.com</p>
          </div>
        </div>

        <div class="info-item" style="align-items: flex-start; margin-bottom: 20px;">
          <div class="check-icon-circle icon-purple" style="width: 40px; height: 40px; font-size: 16px; margin-top: 2px; flex-shrink: 0;">
            <i class="fa-solid fa-phone"></i>
          </div>
          <div>
            <b style="font-size: 14.5px; color: #0f172a;">Call Us Direct</b>
            <p style="color: var(--text-muted); font-size: 13px; margin-top: 2px;">+91 7309277237</p>
          </div>
        </div>

        <div class="info-item" style="align-items: flex-start; margin-bottom: 28px;">
          <div class="check-icon-circle icon-rose" style="width: 40px; height: 40px; font-size: 16px; margin-top: 2px; flex-shrink: 0;">
            <i class="fa-solid fa-clock"></i>
          </div>
          <div>
            <b style="font-size: 14.5px; color: #0f172a;">Working Hours</b>
            <p style="color: var(--text-muted); font-size: 13px; margin-top: 2px;">Monday - Saturday: 10:00 AM - 8:00 PM IST</p>
          </div>
        </div>

        <div style="padding-top: 20px; border-top: 1px solid #e2e8f0;">
          <label style="font-size: 12px; font-weight: 700; color: #0f172a; display: block; margin-bottom: 12px; letter-spacing: 0.04em;">CONNECT ON SOCIALS</label>
          <div class="topbar-socials">
            <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
            <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
          </div>
        </div>
      </div>

      <!-- Contact Form Box -->
      <div class="form-box">
        <div class="pill-badge" style="margin-bottom: 10px;">FREE ESTIMATION</div>
        <h3 style="font-size: 22px; font-weight: 800; margin-bottom: 20px; color: #0f172a;">Request Free Consultation</h3>

        @if(session('success'))
          <div style="background: #dcfce7; color: #15803d; border: 1px solid #bbf7d0; padding: 14px; border-radius: 8px; font-size: 14px; font-weight: 600; margin-bottom: 20px;">
            <i class="fa-solid fa-circle-check"></i> {{ session('success') }}
          </div>
        @endif

        @if($errors->any())
          <div style="background: #fee2e2; color: #b91c1c; border: 1px solid #fca5a5; padding: 14px; border-radius: 8px; font-size: 14px; margin-bottom: 20px;">
            <ul style="margin: 0; padding-left: 20px;">
              @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
        @endif

        <form id="webvire-contact-form" action="{{ route('contact.submit') }}" method="POST">
          @csrf
          <div class="form-grid">
            <div class="form-group">
              <label for="name">Your Name *</label>
              <input type="text" id="name" name="name" required value="{{ old('name') }}" placeholder="e.g. Rahul Verma">
            </div>

            <div class="form-group">
              <label for="email">Email Address *</label>
              <input type="email" id="email" name="email" required value="{{ old('email') }}" placeholder="e.g. rahul@example.com">
            </div>

            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" placeholder="+91 98765 43210">
            </div>

            <div class="form-group">
              <label for="service">Required Service *</label>
              <select id="service" name="subject" required>
                <option value="">Select Service...</option>
                <option value="Web Development" {{ old('subject') == 'Web Development' ? 'selected' : '' }}>Web Development</option>
                <option value="Mobile App Development" {{ old('subject') == 'Mobile App Development' ? 'selected' : '' }}>Mobile App Development</option>
                <option value="Software Development" {{ old('subject') == 'Software Development' ? 'selected' : '' }}>Software Development</option>
                <option value="UI/UX Design" {{ old('subject') == 'UI/UX Design' ? 'selected' : '' }}>UI/UX Design</option>
                <option value="IT Consulting" {{ old('subject') == 'IT Consulting' ? 'selected' : '' }}>IT Consulting</option>
                <option value="Digital Marketing" {{ old('subject') == 'Digital Marketing' ? 'selected' : '' }}>Digital Marketing</option>
              </select>
            </div>

            <div class="form-group full">
              <label for="budget">Estimated Budget (Optional)</label>
              <select id="budget" name="budget">
                <option value="">Select Budget Range...</option>
                <option value="< $5,000">&lt; $5,000 (Basic Project)</option>
                <option value="$5,000 - $15,000">$5,000 - $15,000 (Standard Agency Project)</option>
                <option value="$15,000 - $50,000">$15,000 - $50,000 (Enterprise Solution)</option>
                <option value="$50,000+">$50,000+ (Large Custom System)</option>
              </select>
            </div>

            <div class="form-group full">
              <label for="message">Project Details / Message *</label>
              <textarea id="message" name="message" required placeholder="Tell us about your goals, features, or target timeline...">{{ old('message') }}</textarea>
            </div>

            <div class="form-group full">
              <button type="submit" class="btn btn-primary" style="width: 100%; justify-content: center; padding: 15px;">Get Free Consultation <i class="fa-solid fa-arrow-right"></i></button>
            </div>
          </div>
        </form>
      </div>

    </div>
  </section>

  <!-- Unique Component: Interactive FAQ Accordion -->
  <section class="section">
    <div class="container">
      <div class="section-head">
        <div class="pill-badge">FREQUENTLY ASKED QUESTIONS</div>
        <h2>Got Questions? We Have Answers</h2>
        <p>Everything you need to know before starting your project with Webvire.</p>
      </div>

      <div class="faq-accordion">
        <div class="faq-item active">
          <button class="faq-question">
            <span>How fast can Webvire kick off our project?</span>
            <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="faq-answer">
            After our initial discovery call and scope alignment, we usually kick off engineering within 48 to 72 hours. You get a dedicated Slack channel and bi-weekly sprint demos.
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>Do you sign a Non-Disclosure Agreement (NDA)?</span>
            <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="faq-answer">
            Yes, absolutely. We sign a standard mutual NDA before discussing any proprietary technical specs, business ideas, or codebase architectures.
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>What pricing models do you offer?</span>
            <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="faq-answer">
            We offer fixed-scope project milestones as well as dedicated monthly developer retainers depending on your product requirements and roadmap agility.
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question">
            <span>What post-launch warranty and support do you provide?</span>
            <i class="fa-solid fa-chevron-down"></i>
          </button>
          <div class="faq-answer">
            Every project includes 60 days of free post-launch bug fixing, SLA monitoring, and technical maintenance. Extended SLA support plans are also available.
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
          <h2>Need Instant Help? Call Our Team</h2>
          <p>Speak directly with our senior software architect at +91 7309277237.</p>
          
          <div style="display: flex; gap: 14px; flex-wrap: wrap;">
            <a class="btn btn-primary" href="tel:+917309277237"><i class="fa-solid fa-phone"></i> Call +91 7309277237</a>
            <a class="btn btn-outline" href="mailto:info@webvire.com"><i class="fa-solid fa-envelope"></i> Email Us Direct</a>
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
      WebvireUI.init('contact');
    });
  </script>
@endpush
