/**
 * Webvire About Hero — Cinematic Three.js 3D Engine
 * Dedicated Responsive Composition for Desktop, Tablet, and Mobile.
 * Preserves all 3D W Extrusion, Multi-ring Platform, Glowing Lights, GSAP Timeline & Orbit Cards.
 */

(function () {
  'use strict';

  /* ── Guards ── */
  if (typeof THREE === 'undefined') { console.warn('[Webvire] Three.js not loaded'); return; }
  const heroSection = document.querySelector('.about-hero');
  if (!heroSection) return;

  /* ── Responsive Viewport Detection ── */
  const REDUCED   = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  const IS_MOBILE = window.innerWidth < 768;
  const IS_TABLET = window.innerWidth >= 768 && window.innerWidth < 992;
  const isTouch   = ('ontouchstart' in window);

  /* ── Reusable Scene Offsets (Desktop right-shifted, Mobile vertical below text) ── */
  const SCENE_OFFSET_X = IS_MOBILE ? 0 : (IS_TABLET ? 2.4 : 4.6);
  const SCENE_OFFSET_Y = IS_MOBILE ? -3.0 : 0;

  /* ====================================================================
     RENDERER — fills the whole hero section
     ==================================================================== */
  const renderer = new THREE.WebGLRenderer({
    antialias: true,
    alpha: false,
    powerPreference: 'high-performance'
  });
  renderer.setPixelRatio(Math.min(window.devicePixelRatio, 2));
  renderer.toneMapping = THREE.ACESFilmicToneMapping;
  renderer.toneMappingExposure = 1.15;

  const canvas = renderer.domElement;
  canvas.id = 'about-hero-canvas';
  heroSection.prepend(canvas);

  /* ====================================================================
     SCENE & CAMERA
     ==================================================================== */
  const scene = new THREE.Scene();
  scene.background = new THREE.Color(0x030717);
  scene.fog = new THREE.FogExp2(0x030717, 0.025);

  const camera = new THREE.PerspectiveCamera(42, 1, 0.1, 200);

  if (IS_MOBILE) {
    camera.position.set(0, -2.0, 16);
    camera.lookAt(0, -3.6, 0);
  } else {
    camera.position.set(0, 1.8, 16);
    camera.lookAt(0, -0.2, 0);
  }

  /* ====================================================================
     RESIZE HANDLER
     ==================================================================== */
  function resize() {
    const W = heroSection.clientWidth;
    const H = heroSection.clientHeight || 560;
    renderer.setSize(W, H);
    camera.aspect = W / H;
    camera.updateProjectionMatrix();
  }
  resize();
  window.addEventListener('resize', resize, { passive: true });

  /* ====================================================================
     BACKGROUND: Subtle grid dot plane
     ==================================================================== */
  (function buildGrid() {
    const size = 80, div = 80;
    const grid = new THREE.GridHelper(size, div,
      new THREE.Color(0x0d2060),
      new THREE.Color(0x0d2060)
    );
    grid.position.y = IS_MOBILE ? -6.5 : -4;
    grid.material.transparent = true;
    grid.material.opacity = 0.35;
    scene.add(grid);
  })();

  /* ====================================================================
     AMBIENT LIGHT BLOBS (volumetric background glow)
     ==================================================================== */
  (function buildLightBlobs() {
    const positions = [
      { x: SCENE_OFFSET_X + 4, y: SCENE_OFFSET_Y + 3, z: -10, col: 0x1769ff, intensity: 3.5, dist: 40 },
      { x: -4, y: SCENE_OFFSET_Y + 2, z: -8, col: 0x7048ff, intensity: 2.5, dist: 35 },
      { x: SCENE_OFFSET_X + 2, y: SCENE_OFFSET_Y - 2, z: 5, col: 0x20d7ff, intensity: 1.5, dist: 25 }
    ];
    positions.forEach(p => {
      const light = new THREE.PointLight(p.col, p.intensity, p.dist);
      light.position.set(p.x, p.y, p.z);
      scene.add(light);
    });
  })();

  /* Key lights for the W model */
  const keyLight = new THREE.DirectionalLight(0x20d7ff, 3.5);
  keyLight.position.set(SCENE_OFFSET_X + 3, 8, 10);
  scene.add(keyLight);

  const fillLight = new THREE.PointLight(0x7048ff, 4, 30);
  fillLight.position.set(-8, -3, 6);
  scene.add(fillLight);

  const rimLight = new THREE.DirectionalLight(0x38bdf8, 2);
  rimLight.position.set(-6, 4, -8);
  scene.add(rimLight);

  const ambientLight = new THREE.AmbientLight(0x0a1640, 1.2);
  scene.add(ambientLight);

  /* ====================================================================
     PARTICLE SYSTEM — ambient glowing dots
     ==================================================================== */
  let particles;
  (function buildParticles() {
    const count = IS_MOBILE ? 80 : 200;
    const geo = new THREE.BufferGeometry();
    const pos = new Float32Array(count * 3);

    for (let i = 0; i < count; i++) {
      pos[i * 3] = (Math.random() - 0.5) * 50;
      pos[i * 3 + 1] = (Math.random() - 0.5) * 30;
      pos[i * 3 + 2] = (Math.random() - 0.5) * 30;
    }
    geo.setAttribute('position', new THREE.BufferAttribute(pos, 3));

    const mat = new THREE.PointsMaterial({
      color: 0x20d7ff,
      size: 0.12,
      transparent: true,
      opacity: 0.75,
      blending: THREE.AdditiveBlending,
      depthWrite: false
    });
    particles = new THREE.Points(geo, mat);
    scene.add(particles);
  })();

  /* ====================================================================
     FUTURISTIC MULTI-TIER PEDESTAL STAGE (Scaled & Positioned)
     ==================================================================== */
  const platformGroup = new THREE.Group();
  platformGroup.position.set(SCENE_OFFSET_X, SCENE_OFFSET_Y - 3.2, 0);

  if (IS_MOBILE) {
    platformGroup.scale.set(0.65, 0.65, 0.65);
  } else if (IS_TABLET) {
    platformGroup.scale.set(0.85, 0.85, 0.85);
  }
  scene.add(platformGroup);

  function makeRing(radius, tube, col, opacity = 1) {
    const geo = new THREE.TorusGeometry(radius, tube, 16, 120);
    const mat = new THREE.MeshBasicMaterial({ color: col, transparent: opacity < 1, opacity });
    const mesh = new THREE.Mesh(geo, mat);
    mesh.rotation.x = Math.PI / 2;
    return mesh;
  }

  function makeDisc(rTop, rBot, height, col, metalness = 0.9, roughness = 0.2) {
    const geo = new THREE.CylinderGeometry(rTop, rBot, height, 80);
    const mat = new THREE.MeshStandardMaterial({
      color: col,
      metalness,
      roughness,
      envMapIntensity: 1.2
    });
    return new THREE.Mesh(geo, mat);
  }

  // Tier 1 — wide base
  const base1 = makeDisc(4.2, 4.7, 0.35, 0x05102e);
  platformGroup.add(base1);

  // Tier 2 — middle
  const base2 = makeDisc(3.0, 3.3, 0.32, 0x071440);
  base2.position.y = 0.33;
  platformGroup.add(base2);

  // Tier 3 — top cap
  const base3 = makeDisc(2.1, 2.3, 0.28, 0x0a1c55);
  base3.position.y = 0.62;
  platformGroup.add(base3);

  // Glowing center disc
  const glowDiscGeo = new THREE.CylinderGeometry(1.8, 1.8, 0.06, 80);
  const glowDiscMat = new THREE.MeshBasicMaterial({ color: 0x20d7ff, transparent: true, opacity: 0.5 });
  const glowDisc = new THREE.Mesh(glowDiscGeo, glowDiscMat);
  glowDisc.position.y = 0.85;
  platformGroup.add(glowDisc);

  // Rings
  const ring1 = makeRing(4.5, 0.055, 0x20d7ff);
  platformGroup.add(ring1);

  const ring2 = makeRing(3.2, 0.045, 0x7048ff);
  ring2.position.y = 0.35;
  platformGroup.add(ring2);

  const ring3 = makeRing(2.2, 0.04, 0x38bdf8, 0.9);
  ring3.position.y = 0.65;
  platformGroup.add(ring3);

  /* ====================================================================
     EXTRUDED 3D "W" MONOGRAM (Scaled & Positioned)
     ==================================================================== */
  const wGroup = new THREE.Group();
  wGroup.position.set(SCENE_OFFSET_X, SCENE_OFFSET_Y - 1.2, 0);

  if (IS_MOBILE) {
    wGroup.scale.set(0.65, 0.65, 0.65);
  } else if (IS_TABLET) {
    wGroup.scale.set(0.85, 0.85, 0.85);
  }
  scene.add(wGroup);

  let wMesh;
  (function buildW() {
    const s = new THREE.Shape();

    // Outer W boundary (clockwise)
    s.moveTo(-2.0, 2.6);
    s.lineTo(-1.2, 2.6);
    s.lineTo(-0.62, -1.0);
    s.lineTo(-0.18, 1.15);
    s.lineTo(0.18, 1.15);
    s.lineTo(0.62, -1.0);
    s.lineTo(1.2, 2.6);
    s.lineTo(2.0, 2.6);
    s.lineTo(1.4, -2.5);
    s.lineTo(0.95, -2.5);
    s.lineTo(0.0, 0.3);
    s.lineTo(-0.95, -2.5);
    s.lineTo(-1.4, -2.5);
    s.closePath();

    const extSettings = {
      depth: 0.55,
      bevelEnabled: true,
      bevelThickness: 0.12,
      bevelSize: 0.1,
      bevelOffset: 0,
      bevelSegments: 6,
      steps: 2
    };

    const geo = new THREE.ExtrudeGeometry(s, extSettings);
    geo.center();

    const mat = new THREE.MeshStandardMaterial({
      color: new THREE.Color(0x1355d4),
      emissive: new THREE.Color(0x0a2e88),
      emissiveIntensity: 0.6,
      metalness: 0.8,
      roughness: 0.12
    });

    wMesh = new THREE.Mesh(geo, mat);
    wGroup.add(wMesh);

    // Glowing cyan wireframe edges
    const edges = new THREE.EdgesGeometry(geo);
    const edgeMat = new THREE.LineBasicMaterial({
      color: 0x20d7ff,
      transparent: true,
      opacity: 0.85,
      blending: THREE.AdditiveBlending,
      depthWrite: false
    });
    const wireframe = new THREE.LineSegments(edges, edgeMat);
    wMesh.add(wireframe);

    // Purple secondary wireframe offset
    const purpleEdges = new THREE.LineSegments(
      new THREE.EdgesGeometry(geo),
      new THREE.LineBasicMaterial({
        color: 0x9f6fff,
        transparent: true,
        opacity: 0.4,
        blending: THREE.AdditiveBlending,
        depthWrite: false
      })
    );
    purpleEdges.scale.set(1.02, 1.02, 1.02);
    wMesh.add(purpleEdges);
  })();

  /* ====================================================================
     DOM FLOATING CARDS — Mobile vs Desktop Anchors
     ==================================================================== */
  const cardDefs = IS_MOBILE ? [
    { id: 'afc-web',   icon: 'fa-code',    label: 'Web Development', ox:  0.0, oy: -0.2, oz: 1.5 },
    { id: 'afc-cloud', icon: 'fa-cloud',   label: 'Cloud Solutions', ox: -1.25, oy: -2.4, oz: 2.0 },
    { id: 'afc-uiux',  icon: 'fa-palette', label: 'UI/UX Design',    ox:  1.25, oy: -2.4, oz: 1.0 },
    { id: 'afc-it',    icon: 'fa-headset', label: 'IT Consulting',   ox:  0.0, oy: -4.4, oz: 1.5 }
  ] : [
    { id: 'afc-web',   icon: 'fa-code',    label: 'Web Development', ox:  0.2, oy:  2.8, oz: 1.5 },
    { id: 'afc-cloud', icon: 'fa-cloud',   label: 'Cloud Solutions', ox: -2.2, oy:  1.0, oz: 2.0 },
    { id: 'afc-uiux',  icon: 'fa-palette', label: 'UI/UX Design',    ox:  3.2, oy:  1.0, oz: 1.0 },
    { id: 'afc-it',    icon: 'fa-headset', label: 'IT Consulting',   ox:  0.8, oy: -2.0, oz: 1.5 }
  ];

  // Create DOM cards
  cardDefs.forEach(c => {
    if (document.getElementById(c.id)) return;
    const el = document.createElement('div');
    el.id = c.id;
    el.className = 'about-orbit-card';
    el.innerHTML = `
      <div class="about-card-icon"><i class="fa-solid ${c.icon}"></i></div>
      <span>${c.label}</span>
    `;
    heroSection.appendChild(el);
  });

  // Orbit offsets
  const cardOffsets = cardDefs.map((_, i) => ({
    phase: (i / cardDefs.length) * Math.PI * 2,
    rx: IS_MOBILE ? 1.0 + i * 0.2 : 1.5 + i * 0.3,
    ry: IS_MOBILE ? 0.3 + i * 0.1 : 0.5 + i * 0.15
  }));

  function updateCardPositions(t) {
    const W = heroSection.clientWidth;
    const H = heroSection.clientHeight || 560;
    const orbitSpeed = IS_MOBILE ? 0.18 : 0.35;

    cardDefs.forEach((def, i) => {
      const el = document.getElementById(def.id);
      if (!el) return;

      const off = cardOffsets[i];
      const angle = t * orbitSpeed + off.phase;
      const worldPos = new THREE.Vector3(
        (SCENE_OFFSET_X + def.ox) + Math.cos(angle) * off.rx * 0.35,
        (SCENE_OFFSET_Y + def.oy) + Math.sin(angle * 0.7) * off.ry * 0.35,
        def.oz
      );

      // Project world → screen
      const projected = worldPos.clone().project(camera);

      const sx = ((projected.x + 1) / 2) * W;
      const sy = ((-projected.y + 1) / 2) * H;

      // Depth cues
      const depth = (projected.z + 1) / 2;
      const scale = IS_MOBILE ? (0.75 + depth * 0.25) : (0.78 + depth * 0.38);
      const op    = 0.60 + depth * 0.40;
      const zi    = Math.round(4 + depth * 6);

      el.style.left      = sx + 'px';
      el.style.top       = sy + 'px';
      el.style.transform = `translate(-50%, -50%) scale(${scale})`;
      el.style.opacity   = op;
      el.style.zIndex    = zi;
    });
  }

  /* ====================================================================
     MOUSE PARALLAX (Desktop only)
     ==================================================================== */
  let targetMX = 0, targetMY = 0;
  let currentMX = 0, currentMY = 0;

  if (!isTouch && !IS_MOBILE) {
    heroSection.addEventListener('mousemove', e => {
      const r = heroSection.getBoundingClientRect();
      targetMX = ((e.clientX - r.left) / r.width - 0.5) * 2;
      targetMY = ((e.clientY - r.top) / r.height - 0.5) * 2;
    }, { passive: true });

    heroSection.addEventListener('mouseleave', () => {
      targetMX = 0;
      targetMY = 0;
    });
  }

  /* ====================================================================
     ANIMATION LOOP
     ==================================================================== */
  const clock = new THREE.Clock();

  function animate() {
    requestAnimationFrame(animate);
    const t = clock.getElapsedTime();

    /* Mouse lerp */
    currentMX += (targetMX - currentMX) * 0.05;
    currentMY += (targetMY - currentMY) * 0.05;

    if (!REDUCED) {
      /* W — smooth Y rotation + subtle float */
      wMesh.rotation.y = t * (IS_MOBILE ? 0.3 : 0.45);
      wMesh.rotation.x = Math.sin(t * 0.55) * 0.05 + currentMY * 0.15;
      wMesh.rotation.z = currentMX * 0.1;

      /* W group gentle bob */
      wGroup.position.y = (SCENE_OFFSET_Y - 1.2) + Math.sin(t * 0.7) * 0.1;
      wGroup.rotation.y = currentMX * 0.2;
      wGroup.rotation.x = -currentMY * 0.12;

      /* Platform rings counter-rotate */
      ring1.rotation.z += 0.005;
      ring2.rotation.z -= 0.008;
      ring3.rotation.z += 0.004;

      /* Glow disc pulse via opacity */
      glowDiscMat.opacity = 0.35 + Math.sin(t * 2.0) * 0.18;

      /* Platform group subtle tilt */
      platformGroup.rotation.y = currentMX * 0.18;
      platformGroup.rotation.x = -currentMY * 0.08;

      /* Particles drift */
      particles.rotation.y += 0.0005;
      particles.rotation.x += 0.0002;

      /* Camera subtle parallax */
      if (IS_MOBILE) {
        camera.position.x = 0;
        camera.position.y = -2.0;
        camera.lookAt(0, -3.6, 0);
      } else {
        camera.position.x = 0 + currentMX * 0.5;
        camera.position.y = 1.8 - currentMY * 0.3;
        camera.lookAt(0 + currentMX * 0.15, -0.2 + currentMY * 0.08, 0);
      }
    }

    /* Update DOM card positions every frame */
    updateCardPositions(t);

    renderer.render(scene, camera);
  }

  animate();

  /* ====================================================================
     GSAP ENTRANCE ANIMATION
     ==================================================================== */
  if (typeof gsap !== 'undefined') {
    gsap.set(['.pill-badge', '.about-hero h1', '.hero-subtitle', '.feature-pills-bar', '.about-orbit-card'], {
      opacity: 0, y: 24
    });

    const tl = gsap.timeline({ delay: 0.3 });
    tl.to('.pill-badge', { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' })
      .to('.about-hero h1', { opacity: 1, y: 0, duration: 0.8, ease: 'power3.out' }, '-=0.4')
      .to('.hero-subtitle', { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' }, '-=0.5')
      .to('.feature-pills-bar', { opacity: 1, y: 0, duration: 0.7, ease: 'power3.out' }, '-=0.4')
      .to('.about-orbit-card', { opacity: 1, y: 0, duration: 0.6, ease: 'power3.out', stagger: 0.12 }, '-=0.3');
  }

  /* ====================================================================
     VISIBILITY HANDLER
     ==================================================================== */
  document.addEventListener('visibilitychange', () => {
    if (document.hidden) clock.stop();
    else clock.start();
  });

})();
