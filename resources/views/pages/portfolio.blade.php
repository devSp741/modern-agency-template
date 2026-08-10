@extends('layouts.app')

@section('title', 'Portfolio | Webvire - Recent Case Studies & Projects')
@section('meta_description', 'Explore Webvire portfolio of featured projects: Onehouse E-Commerce Platform, Sub800 Real Estate Portal, and Marche Grocery App.')
@section('meta_keywords', 'Webvire Portfolio, E-Commerce Case Study, Real Estate App, Grocery Ordering Platform, Webvire Work')

@section('content')
  <!-- Subpage Hero -->
  <section class="subpage-hero">
    <div class="container">
      <div class="pill-badge">OUR PORTFOLIO</div>
      <h1>Projects That Speak <span class="gradient-text">For Us</span></h1>
      <p>Explore some of our recent work and see the difference we create.</p>
    </div>
  </section>

  <section class="section">
    <div class="container">
      
      <!-- Category Filter Bar -->
      <div class="portfolio-filter-bar">
        <button class="filter-btn active" data-filter="all">All Projects</button>
        <button class="filter-btn" data-filter="ecommerce">E-Commerce</button>
        <button class="filter-btn" data-filter="realestate">Real Estate</button>
        <button class="filter-btn" data-filter="grocery">Grocery</button>
      </div>

      <div class="portfolio-grid">
        <div class="project-card" data-category="ecommerce">
          <div class="project-img-box">
            <img src="{{ asset('assets/portfolio_onehouse.png') }}" alt="Onehouse E-Commerce Platform">
          </div>
          <div class="project-body">
            <span class="project-tag">E-Commerce</span>
            <h3>Onehouse</h3>
            <p>A stylish and responsive e-commerce platform.</p>
            <a class="card-link" href="{{ route('contact') }}">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="project-card" data-category="realestate">
          <div class="project-img-box">
            <img src="{{ asset('assets/portfolio_sub800.png') }}" alt="Sub800 Real Estate Portal">
          </div>
          <div class="project-body">
            <span class="project-tag">Real Estate</span>
            <h3>Sub800</h3>
            <p>Modern real estate platform for property listings.</p>
            <a class="card-link" href="{{ route('contact') }}">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>

        <div class="project-card" data-category="grocery">
          <div class="project-img-box">
            <img src="{{ asset('assets/portfolio_marche.png') }}" alt="Marche Online Grocery App">
          </div>
          <div class="project-body">
            <span class="project-tag">Grocery</span>
            <h3>Marche</h3>
            <p>Advanced online grocery ordering platform.</p>
            <a class="card-link" href="{{ route('contact') }}">View Case Study <i class="fa-solid fa-arrow-right"></i></a>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection

@push('scripts')
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      WebvireUI.init('portfolio');
    });
  </script>
@endpush
