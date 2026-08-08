/* ==========================================================================
   WEBVIRE MAIN UI SCRIPT ENGINE
   Includes: Dynamic Topbar/Header/Footer, 3D Hero Scene, Testimonials Slider,
             Interactive FAQ Accordion, Project Cost Estimator, Filter Systems,
             AOS Scroll Animations & Fixed Viewport Back-To-Top Button
   ========================================================================== */

const WebvireUI = {
  init(pageName = 'home') {
    this.renderHeader(pageName);
    this.renderFooter();
    this.initMobileDrawer();
    this.initBackToTopButton();
    this.initAOS();
    
    if (pageName === 'index' || pageName === 'home') {
      this.init3DHeroCanvas();
      this.initCounters();
      this.initVideoModal();
      this.initTestimonialSlider();
    }
    
    if (pageName === 'services') {
      this.initCostEstimator();
    }

    if (pageName === 'portfolio') {
      this.initPortfolioFilters();
    }

    if (pageName === 'contact') {
      this.initContactForm();
      this.initFAQAccordion();
    }
  },

  renderHeader(activePage = 'home') {
    const topbarTarget = document.getElementById('webvire-topbar');
    const headerTarget = document.getElementById('webvire-header');

    if (topbarTarget) {
      topbarTarget.innerHTML = `
        <div class="topbar">
          <div class="container">
            <div class="topbar-info">
              <span><i class="fa-solid fa-phone"></i> +91 73027 72277</span>
              <span><i class="fa-solid fa-envelope"></i> info@webvire.com</span>
              <span><i class="fa-solid fa-location-dot"></i> Tech Hub, Gonda, Lucknow, UP</span>
            </div>
            <div class="topbar-socials">
              <label>Follow Us:</label>
              <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
              <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
              <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
              <a href="#" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
            </div>
          </div>
        </div>
      `;
    }

    if (headerTarget) {
      headerTarget.innerHTML = `
        <header class="nav-header">
          <div class="container nav-inner">
            <a href="index.html" class="logo">
              <span class="logo-mark"><i class="fa-solid fa-code"></i></span>
              Webvire
            </a>

            <nav class="nav-links">
              <a href="index.html" class="${activePage === 'index' || activePage === 'home' ? 'active' : ''}">Home</a>
              <a href="about.html" class="${activePage === 'about' ? 'active' : ''}">About Us</a>
              <a href="services.html" class="${activePage === 'services' ? 'active' : ''}">Services</a>
              <a href="portfolio.html" class="${activePage === 'portfolio' ? 'active' : ''}">Portfolio</a>
              <a href="it-solutions.html" class="${activePage === 'it-solutions' ? 'active' : ''}">IT Solutions</a>
              <a href="careers.html" class="${activePage === 'careers' ? 'active' : ''}">Careers</a>
              <a href="contact.html" class="${activePage === 'contact' ? 'active' : ''}">Contact Us</a>
            </nav>

            <div style="display: flex; gap: 12px; align-items: center;">
              <a href="contact.html" class="btn btn-primary" style="padding: 10px 20px; font-size: 13px;">Get Quote <i class="fa-solid fa-arrow-right"></i></a>
              <button class="hamburger-btn" id="open-drawer-btn" aria-label="Open Navigation"><i class="fa-solid fa-bars"></i></button>
            </div>
          </div>
        </header>
      `;
    }
  },

  renderFooter() {
    const footerTarget = document.getElementById('webvire-footer');
    if (!footerTarget) return;

    footerTarget.innerHTML = `
      <footer class="footer">
        <div class="container">
          <div class="footer-grid">
            <div>
              <a href="index.html" class="logo" style="margin-bottom: 14px;">
                <span class="logo-mark"><i class="fa-solid fa-code"></i></span>
                Webvire
              </a>
              <p>We empower businesses with cutting-edge web applications, mobile apps, enterprise software and cloud digital transformation.</p>
              <div class="topbar-socials" style="margin-top: 18px;">
                <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" aria-label="Twitter"><i class="fa-brands fa-x-twitter"></i></a>
                <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" aria-label="GitHub"><i class="fa-brands fa-github"></i></a>
              </div>
            </div>

            <div>
              <h3>Quick Links</h3>
              <div class="footer-links">
                <a href="index.html">Home</a>
                <a href="about.html">About Us</a>
                <a href="services.html">Our Services</a>
                <a href="portfolio.html">Portfolio</a>
                <a href="contact.html">Contact Us</a>
              </div>
            </div>

            <div>
              <h3>Core Services</h3>
              <div class="footer-links">
                <a href="services.html">Web Development</a>
                <a href="services.html">Mobile App Development</a>
                <a href="services.html">Custom Software</a>
                <a href="services.html">UI/UX Design</a>
                <a href="services.html">IT Consulting</a>
              </div>
            </div>

            <div>
              <h3>Get In Touch</h3>
              <div class="footer-links">
                <span><i class="fa-solid fa-location-dot" style="color: var(--cyan-glow); margin-right: 8px;"></i> Karl Road, Gonda, Lucknow, UP</span>
                <span style="display: block; margin: 10px 0;"><i class="fa-solid fa-envelope" style="color: var(--cyan-glow); margin-right: 8px;"></i> info@webvire.com</span>
                <span><i class="fa-solid fa-phone" style="color: var(--cyan-glow); margin-right: 8px;"></i> +91 73027 72277</span>
              </div>
            </div>
          </div>

          <div class="copyright-bar">
            <p>&copy; ${new Date().getFullYear()} Webvire Technologies. All Rights Reserved.</p>
            <p>Designed with <i class="fa-solid fa-heart" style="color: #ef4444;"></i> for Excellence.</p>
          </div>
        </div>
      </footer>
    `;
  },

  initMobileDrawer() {
    let overlay = document.getElementById('mobile-drawer-overlay');
    let drawer = document.getElementById('mobile-drawer');

    if (!overlay) {
      overlay = document.createElement('div');
      overlay.id = 'mobile-drawer-overlay';
      overlay.className = 'mobile-drawer-overlay';

      drawer = document.createElement('div');
      drawer.id = 'mobile-drawer';
      drawer.className = 'mobile-drawer';
      drawer.innerHTML = `
        <div>
          <div class="mobile-drawer-header">
            <a href="index.html" class="logo">
              <span class="logo-mark"><i class="fa-solid fa-code"></i></span>
              Webvire
            </a>
            <button class="close-drawer-btn" id="close-drawer-btn"><i class="fa-solid fa-xmark"></i></button>
          </div>

          <div class="mobile-nav-links">
            <a href="index.html">Home</a>
            <a href="about.html">About Us</a>
            <a href="services.html">Services</a>
            <a href="portfolio.html">Portfolio</a>
            <a href="it-solutions.html">IT Solutions</a>
            <a href="careers.html">Careers</a>
            <a href="contact.html">Contact Us</a>
          </div>
        </div>

        <div style="padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.1);">
          <a href="contact.html" class="btn btn-primary" style="width: 100%;">Get In Touch <i class="fa-solid fa-arrow-right"></i></a>
        </div>
      `;

      document.body.appendChild(overlay);
      document.body.appendChild(drawer);
    }

    document.addEventListener('click', (e) => {
      if (e.target.closest('#open-drawer-btn')) {
        overlay.classList.add('active');
        drawer.classList.add('active');
      }
      if (e.target.closest('#close-drawer-btn') || e.target === overlay) {
        overlay.classList.remove('active');
        drawer.classList.remove('active');
      }
    });
  },

  // Floating Back to Top Button Handler (Viewport Fixed)
  initBackToTopButton() {
    let btn = document.getElementById('back-to-top');
    if (!btn) {
      btn = document.createElement('button');
      btn.id = 'back-to-top';
      btn.className = 'back-to-top-btn';
      btn.setAttribute('aria-label', 'Back to Top');
      btn.innerHTML = '<i class="fa-solid fa-arrow-up"></i>';
      document.body.appendChild(btn);
    }

    const checkScroll = () => {
      if (window.scrollY > 80) {
        btn.classList.add('active');
      } else {
        btn.classList.remove('active');
      }
    };

    window.addEventListener('scroll', checkScroll, { passive: true });
    window.addEventListener('load', checkScroll);
    checkScroll();

    btn.addEventListener('click', (e) => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  },

  // Initialize AOS (Animate On Scroll Library)
  initAOS() {
    if (typeof AOS !== 'undefined') {
      AOS.init({
        duration: 800,
        easing: 'ease-out-cubic',
        once: true,
        offset: 80
      });
    }
  },

  init3DHeroCanvas() {
    const scene = document.getElementById('hero-3d-scene');
    const laptop = document.getElementById('laptop-3d');
    const badges = document.querySelectorAll('.floating-badge-3d');
    const codeFloats = document.querySelectorAll('.code-float');
    const statusBadge = document.getElementById('screen-status-badge');

    if (!scene || !laptop) return;

    let targetX = 0;
    let targetY = 0;
    let currentX = 0;
    let currentY = 0;

    let orbitAngle = 0;

    window.addEventListener('mousemove', (e) => {
      const { innerWidth, innerHeight } = window;
      targetX = (e.clientX - innerWidth / 2) / (innerWidth / 2);
      targetY = (e.clientY - innerHeight / 2) / (innerHeight / 2);
    });

    window.addEventListener('mouseleave', () => {
      targetX = 0;
      targetY = 0;
    });

    function animate3DScene() {
      currentX += (targetX - currentX) * 0.05;
      currentY += (targetY - currentY) * 0.05;

      const laptopRotY = -14 + (currentX * 18);
      const laptopRotX = 8 - (currentY * 14);
      laptop.style.transform = `rotateY(${laptopRotY}deg) rotateX(${laptopRotX}deg) translateZ(30px)`;

      orbitAngle += 0.012;

      const topBadges = Array.from(badges).slice(0, 2);
      const topRadiusX = 220;
      const topRadiusZ = 120;
      const topYOffset = -120;

      topBadges.forEach((badge, index) => {
        const badgeAngle = orbitAngle + (index * Math.PI);
        const x = Math.cos(badgeAngle) * topRadiusX + (currentX * 35);
        const z = Math.sin(badgeAngle) * topRadiusZ;
        const y = topYOffset + (Math.sin(badgeAngle * 2) * 18) - (currentY * 25);

        const normalizedZ = (z + topRadiusZ) / (2 * topRadiusZ);
        const scale = 0.85 + (normalizedZ * 0.25);
        const opacity = 0.70 + (normalizedZ * 0.30);
        const zIndex = Math.round(20 + z);

        badge.style.transform = `translate3d(${x}px, ${y}px, ${z}px) scale(${scale})`;
        badge.style.opacity = opacity;
        badge.style.zIndex = zIndex;
      });

      const bottomBadges = Array.from(badges).slice(2, 4);
      const bottomRadiusX = 240;
      const bottomRadiusZ = 130;
      const bottomYOffset = 85;

      bottomBadges.forEach((badge, index) => {
        const badgeAngle = orbitAngle + Math.PI / 2 + (index * Math.PI);
        const x = Math.cos(badgeAngle) * bottomRadiusX + (currentX * 40);
        const z = Math.sin(badgeAngle) * bottomRadiusZ;
        const y = bottomYOffset + (Math.sin(badgeAngle * 2) * 20) - (currentY * 25);

        const normalizedZ = (z + bottomRadiusZ) / (2 * bottomRadiusZ);
        const scale = 0.82 + (normalizedZ * 0.26);
        const opacity = 0.68 + (normalizedZ * 0.32);
        const zIndex = Math.round(15 + z);

        badge.style.transform = `translate3d(${x}px, ${y}px, ${z}px) scale(${scale})`;
        badge.style.opacity = opacity;
        badge.style.zIndex = zIndex;
      });

      const symRadiusX = 280;
      const symRadiusZ = 160;
      const totalSymbols = codeFloats.length;

      codeFloats.forEach((sym, index) => {
        const symPhase = orbitAngle * 0.7 + (index * (2 * Math.PI / totalSymbols));
        const x = Math.cos(symPhase) * symRadiusX + (currentX * 28);
        const z = Math.sin(symPhase) * symRadiusZ;
        const y = Math.sin(symPhase * 2) * 50 + (currentY * 22);

        const normalizedZ = (z + symRadiusZ) / (2 * symRadiusZ);
        const scale = 0.70 + (normalizedZ * 0.35);
        const opacity = 0.45 + (normalizedZ * 0.55);
        const zIndex = Math.round(5 + z);

        sym.style.transform = `translate3d(${x}px, ${y}px, ${z}px) scale(${scale})`;
        sym.style.opacity = opacity;
        sym.style.zIndex = zIndex;
      });

      requestAnimationFrame(animate3DScene);
    }

    animate3DScene();

    badges.forEach(badge => {
      badge.addEventListener('click', () => {
        const text = badge.querySelector('strong').innerText;
        if (statusBadge) {
          statusBadge.innerText = text.toUpperCase();
          statusBadge.style.background = 'rgba(32, 215, 255, 0.35)';
          statusBadge.style.color = '#20d7ff';
          statusBadge.style.borderColor = '#20d7ff';

          setTimeout(() => {
            statusBadge.innerText = 'ACTIVE';
            statusBadge.style.background = '';
            statusBadge.style.color = '';
            statusBadge.style.borderColor = '';
          }, 2500);
        }
      });
    });
  },

  initCounters() {
    const statElements = document.querySelectorAll('[data-target]');
    if (!statElements.length) return;

    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const target = parseInt(el.getAttribute('data-target'), 10);
          let current = 0;
          const step = Math.max(1, Math.ceil(target / 30));
          const timer = setInterval(() => {
            current += step;
            if (current >= target) {
              el.innerText = target + '+';
              clearInterval(timer);
            } else {
              el.innerText = current + '+';
            }
          }, 30);
          observer.unobserve(el);
        }
      });
    }, { threshold: 0.5 });

    statElements.forEach(el => observer.observe(el));
  },

  initVideoModal() {
    const videoBtns = document.querySelectorAll('.btn-video');
    if (!videoBtns.length) return;

    let modal = document.getElementById('video-modal');
    if (!modal) {
      modal = document.createElement('div');
      modal.id = 'video-modal';
      modal.className = 'video-modal-overlay';
      modal.innerHTML = `
        <div class="video-modal-container">
          <button class="close-video-btn" id="close-video-btn"><i class="fa-solid fa-xmark"></i></button>
          <iframe width="100%" height="100%" src="https://www.youtube.com/embed/dQw4w9WgXcQ?autoplay=1" title="Webvire Introduction Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      `;
      document.body.appendChild(modal);
    }

    const closeBtn = document.getElementById('close-video-btn');
    
    videoBtns.forEach(btn => {
      btn.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.add('active');
      });
    });

    if (closeBtn) {
      closeBtn.addEventListener('click', () => modal.classList.remove('active'));
    }

    modal.addEventListener('click', (e) => {
      if (e.target === modal) modal.classList.remove('active');
    });
  },

  initTestimonialSlider() {
    const wrapper = document.querySelector('.testimonial-slider-wrapper');
    if (!wrapper) return;

    const card = wrapper.querySelector('.testimonial-card');
    if (!card) return;

    const testimonials = [
      {
        quote: "“Webvire delivered an excellent solution for our business. The team was professional, skilled and always available for support. Highly recommended!”",
        name: "Rajesh Verma",
        title: "CEO, Onehouse",
        avatar: "assets/client_avatar.png"
      },
      {
        quote: "“Working with Webvire was a game changer for our real estate business. Their attention to design detail and rapid delivery surpassed all our expectations!”",
        name: "Priya Sharma",
        title: "Managing Director, Sub800",
        avatar: "assets/client_avatar_2.png"
      },
      {
        quote: "“The mobile app developed by Webvire boosted our customer engagement by 300%. Their technical expertise and proactive support are top-notch!”",
        name: "Amit Patel",
        title: "CTO, Marche Grocery",
        avatar: "assets/client_avatar_3.png"
      }
    ];

    let currentIndex = 0;
    const quoteEl = card.querySelector('.quote-text');
    const nameEl = card.querySelector('.client-info b');
    const titleEl = card.querySelector('.client-info span');
    const avatarImg = card.querySelector('.client-avatar-img');
    const dots = card.querySelectorAll('.slider-dots .dot');
    const prevBtn = wrapper.querySelector('.prev-btn');
    const nextBtn = wrapper.querySelector('.next-btn');

    function updateSlider(index) {
      currentIndex = index;
      card.style.opacity = '0';
      card.style.transform = 'translateY(10px) scale(0.98)';

      setTimeout(() => {
        const item = testimonials[currentIndex];
        if (quoteEl) quoteEl.innerText = item.quote;
        if (nameEl) nameEl.innerText = item.name;
        if (titleEl) titleEl.innerText = item.title;
        if (avatarImg) avatarImg.src = item.avatar;

        if (dots) {
          dots.forEach((dot, idx) => {
            dot.classList.toggle('active', idx === currentIndex);
          });
        }

        card.style.opacity = '1';
        card.style.transform = 'translateY(0) scale(1)';
      }, 250);
    }

    if (prevBtn) {
      prevBtn.addEventListener('click', () => {
        const newIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
        updateSlider(newIndex);
      });
    }

    if (nextBtn) {
      nextBtn.addEventListener('click', () => {
        const newIndex = (currentIndex + 1) % testimonials.length;
        updateSlider(newIndex);
      });
    }

    if (dots) {
      dots.forEach((dot, idx) => {
        dot.addEventListener('click', () => updateSlider(idx));
      });
    }

    setInterval(() => {
      const newIndex = (currentIndex + 1) % testimonials.length;
      updateSlider(newIndex);
    }, 5500);
  },

  initCostEstimator() {
    const options = document.querySelectorAll('.estimator-option');
    const totalEl = document.getElementById('estimator-total-val');
    if (!options.length || !totalEl) return;

    let baseCost = 2500;

    options.forEach(opt => {
      opt.addEventListener('click', () => {
        opt.classList.toggle('selected');
        let currentTotal = baseCost;

        options.forEach(o => {
          if (o.classList.contains('selected')) {
            currentTotal += parseInt(o.getAttribute('data-cost'), 10);
          }
        });

        totalEl.innerText = '$' + currentTotal.toLocaleString();
      });
    });
  },

  initFAQAccordion() {
    const items = document.querySelectorAll('.faq-item');
    if (!items.length) return;

    items.forEach(item => {
      const btn = item.querySelector('.faq-question');
      if (btn) {
        btn.addEventListener('click', () => {
          const isOpen = item.classList.contains('active');
          items.forEach(i => i.classList.remove('active'));
          if (!isOpen) {
            item.classList.add('active');
          }
        });
      }
    });
  },

  initPortfolioFilters() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const projects = document.querySelectorAll('.project-card');

    if (!filterBtns.length) return;

    filterBtns.forEach(btn => {
      btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.getAttribute('data-filter');
        projects.forEach(project => {
          const category = project.getAttribute('data-category');
          if (filter === 'all' || category === filter) {
            project.style.display = 'block';
          } else {
            project.style.display = 'none';
          }
        });
      });
    });
  },

  initContactForm() {
    const form = document.getElementById('webvire-contact-form');
    if (!form) return;

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const btn = form.querySelector('button[type="submit"]');
      const originalText = btn.innerHTML;
      btn.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i> Sending Request...';
      btn.disabled = true;

      setTimeout(() => {
        btn.innerHTML = '<i class="fa-solid fa-circle-check"></i> Message Sent Successfully!';
        btn.style.background = '#10b981';
        btn.style.color = '#ffffff';
        form.reset();

        setTimeout(() => {
          btn.innerHTML = originalText;
          btn.disabled = false;
          btn.style.background = '';
        }, 3000);
      }, 1200);
    });
  }
};
