<footer class="footer">
  <div class="container">
    <div class="footer-grid">
      <div>
        <a href="{{ route('home') }}" class="logo" style="margin-bottom: 14px;">
          <img src="{{ asset('assets/logo.png') }}" alt="Webvire Logo" class="logo-img">
        </a>
        <p>We empower businesses with cutting-edge web applications, mobile apps, enterprise software and cloud digital transformation.</p>
        <div class="topbar-socials" style="margin-top: 18px;">
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
      </div>

      <div>
        <h3>Quick Links</h3>
        <div class="footer-links">
          <a href="{{ route('home') }}">Home</a>
          <a href="{{ route('about') }}">About Us</a>
          <a href="{{ route('services') }}">Our Services</a>
          <a href="{{ route('portfolio') }}">Portfolio</a>
          <a href="{{ route('contact') }}">Contact Us</a>
        </div>
      </div>

      <div>
        <h3>Core Services</h3>
        <div class="footer-links">
          <a href="{{ route('services') }}">Web Development</a>
          <a href="{{ route('services') }}">Mobile App Development</a>
          <a href="{{ route('services') }}">Custom Software</a>
          <a href="{{ route('services') }}">UI/UX Design</a>
          <a href="{{ route('services') }}">IT Consulting</a>
        </div>
      </div>

      <div>
        <h3>Get In Touch</h3>
        <div class="footer-links">
          <span><i class="fa-solid fa-location-dot" style="color: var(--cyan-glow); margin-right: 8px;"></i> Kursi Road, Near Thana Gudamba, Lucknow, Uttar Pradesh, India</span>
          <span style="display: block; margin: 10px 0;"><i class="fa-solid fa-envelope" style="color: var(--cyan-glow); margin-right: 8px;"></i> info@webvire.com</span>
          <span><i class="fa-solid fa-phone" style="color: var(--cyan-glow); margin-right: 8px;"></i> +91 7309277237</span>
        </div>
      </div>
    </div>

    <div class="copyright-bar">
      <p>&copy; {{ date('Y') }} Webvire Technologies. All Rights Reserved.</p>
      <p>Designed with <i class="fa-solid fa-heart" style="color: #ef4444;"></i> for Excellence.</p>
    </div>
  </div>
</footer>
