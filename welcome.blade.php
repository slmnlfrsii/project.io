buat  responsive mobile 


<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Portfolio | Salman </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Portfolio Lengkap Salman Al Farisi">

<!-- Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Space+Grotesk:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<!-- Icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

<style>
/* --- 1. VARIABLES & RESET --- */
:root {
  --bg-dark: #020617;
  --bg-card: rgba(30, 41, 59, 0.4);
  --primary: #1e3a8a;
  --primary-light: #3b82f6;
  --accent: #38bdf8;
  --text-white: #f8fafc;
  --text-gray: #94a3b8;
  --glass-border: rgba(255, 255, 255, 0.1);
}

*{ margin:0; padding:0; box-sizing:border-box; scroll-behavior:smooth; }
html{ scroll-behavior: smooth; }

body{
  background-color: var(--bg-dark);
  color: var(--text-white);
  font-family: 'Outfit', sans-serif;
  overflow-x: hidden;
  line-height: 1.7;
}

/* --- 2. BACKGROUND & SCROLL BAR --- */
::-webkit-scrollbar { width: 10px; }
::-webkit-scrollbar-track { background: var(--bg-dark); }
::-webkit-scrollbar-thumb { background: var(--primary-light); border-radius: 5px; }

.scroll-progress {
  position: fixed; top: 0; left: 0; height: 4px; background: var(--accent);
  width: 0%; z-index: 2000; transition: width 0.1s;
}

.bg-gradient-orb {
  position: fixed; width: 600px; height: 600px;
  background: radial-gradient(circle, rgba(59, 130, 246, 0.15), transparent 70%);
  top: -100px; left: -100px; border-radius: 50%; z-index: -2;
  animation: floatOrb 10s ease-in-out infinite alternate;
}
.bg-gradient-orb-2 {
  position: fixed; width: 500px; height: 500px;
  background: radial-gradient(circle, rgba(56, 189, 248, 0.1), transparent 70%);
  bottom: -50px; right: -50px; border-radius: 50%; z-index: -2;
  animation: floatOrb 15s ease-in-out infinite alternate-reverse;
}
@keyframes floatOrb {
  0% { transform: translate(0, 0); }
  100% { transform: translate(50px, 50px); }
}

/* --- 3. NAVBAR --- */
nav {
  position: fixed; top: 0; left: 0; width: 100%; padding: 1.2rem 5%;
  display: flex; justify-content: space-between; align-items: center; z-index: 1000;
  background: rgba(2, 6, 23, 0.8); backdrop-filter: blur(12px);
  border-bottom: 1px solid var(--glass-border); transition: 0.3s;
}
nav .logo {
  font-family: 'Space Grotesk', sans-serif; font-size: 1.5rem; font-weight: 700;
  color: var(--text-white); text-decoration: none; letter-spacing: -0.5px;
}
nav .logo span { color: var(--primary-light); }

.nav-menu { display: flex; gap: 2.5rem; list-style: none; }
.nav-menu a {
  text-decoration: none; color: var(--text-gray); font-size: 0.95rem; font-weight: 500;
  transition: 0.3s; position: relative;
}
.nav-menu a:hover, .nav-menu a.active { color: var(--text-white); }
.nav-menu a::after {
  content: ''; position: absolute; width: 0; height: 2px; bottom: -4px; left: 0;
  background: var(--primary-light); transition: 0.3s;
}
.nav-menu a:hover::after, .nav-menu a.active::after { width: 100%; }

.hamburger { display: none; cursor: pointer; font-size: 1.5rem; color: var(--text-white); }

/* --- 4. HERO SECTION --- */
#hero { min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 0 5%; }
.hero-container {
  display: flex; align-items: center; justify-content: space-between; max-width: 1200px;
  width: 100%; flex-wrap: wrap-reverse; gap: 40px;
}
.hero-text { flex: 1; min-width: 320px; }
.hero-greeting { color: var(--primary-light); font-weight: 600; letter-spacing: 2px; margin-bottom: 15px; display: block; }
.hero-title {
  font-family: 'Space Grotesk', sans-serif; font-size: clamp(2.8rem, 5vw, 4.5rem); font-weight: 700;
  line-height: 1.1; margin-bottom: 10px; background: linear-gradient(to right, #fff, #94a3b8);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}
.hero-typing { font-family: 'Space Grotesk', sans-serif; font-size: clamp(1.2rem, 3vw, 2rem); color: var(--text-gray); margin-bottom: 25px; height: 3rem; }
.hero-desc { max-width: 550px; color: var(--text-gray); margin-bottom: 35px; font-size: 1.1rem; }

.btn-group { display: flex; gap: 15px; flex-wrap: wrap; }
.btn-main {
  padding: 14px 32px; background: linear-gradient(135deg, var(--primary), var(--primary-light));
  color: #fff; border-radius: 50px; text-decoration: none; font-weight: 600; transition: 0.3s;
  box-shadow: 0 10px 20px rgba(30, 58, 138, 0.3);
}
.btn-main:hover { transform: translateY(-3px); box-shadow: 0 15px 30px rgba(30, 58, 138, 0.5); }
.btn-outline {
  padding: 14px 32px; border: 2px solid var(--glass-border); color: #fff; border-radius: 50px;
  text-decoration: none; font-weight: 600; transition: 0.3s;
}
.btn-outline:hover { border-color: var(--primary-light); background: rgba(30,58,138,0.2); }

.hero-img-wrapper { flex: 0 0 380px; position: relative; display: flex; justify-content: center; align-items: center; }
.hero-img-bg {
  position: absolute; width: 380px; height: 380px; background: linear-gradient(135deg, var(--primary), var(--accent));
  border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%; opacity: 0.2;
  animation: morph 8s ease-in-out infinite; z-index: 1;
}
@keyframes morph { 0% { border-radius: 60% 40% 30% 70%/60% 30% 70% 40%; } 50% { border-radius: 30% 60% 70% 40%/50% 60% 30% 60%; } 100% { border-radius: 60% 40% 30% 70%/60% 30% 70% 40%; } }

.hero-img { width: 360px; height: 360px; object-fit: cover; border-radius: 50%; position: relative; z-index: 2; border: 4px solid rgba(255,255,255,0.1); box-shadow: 0 20px 50px rgba(0,0,0,0.5); }

/* --- 5. SECTIONS GENERAL --- */
section { padding: 100px 5%; position: relative; }
.section-header { text-align: center; margin-bottom: 70px; }
.section-title { font-family: 'Space Grotesk', sans-serif; font-size: 2.5rem; margin-bottom: 15px; }
.section-line { width: 60px; height: 4px; background: linear-gradient(90deg, var(--primary), var(--accent)); margin: 0 auto; border-radius: 2px; }

/* --- 6. SERVICES --- */
.services-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto; }
.service-card {
  background: var(--bg-card); border: 1px solid var(--glass-border); padding: 40px 30px;
  border-radius: 20px; text-align: center; transition: 0.3s; backdrop-filter: blur(10px);
}
.service-card:hover { transform: translateY(-10px); border-color: var(--primary-light); box-shadow: 0 20px 40px rgba(0,0,0,0.2); }
.service-icon { font-size: 3rem; color: var(--accent); margin-bottom: 20px; display: inline-block; }
.service-card h3 { font-size: 1.4rem; margin-bottom: 15px; color: var(--text-white); }
.service-card p { color: var(--text-gray); font-size: 0.95rem; }

/* --- 7. ABOUT & SKILLS --- */
.about-content { display: grid; grid-template-columns: 1fr 1fr; gap: 60px; max-width: 1200px; margin: 0 auto; align-items: start; }
.bio-card { background: var(--bg-card); border: 1px solid var(--glass-border); padding: 40px; border-radius: 24px; backdrop-filter: blur(10px); height: 100%; }
.bio-card p { margin-bottom: 20px; color: var(--text-gray); }

.skills-wrapper { background: var(--bg-card); border: 1px solid var(--glass-border); padding: 40px; border-radius: 24px; backdrop-filter: blur(10px); height: 100%; }
.skills-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(100px, 1fr)); gap: 20px; }
.skill-box { background: rgba(255, 255, 255, 0.03); border: 1px solid var(--glass-border); padding: 20px 10px; border-radius: 16px; text-align: center; transition: all 0.3s ease; }
.skill-box:hover { background: rgba(30, 58, 138, 0.2); border-color: var(--primary-light); transform: translateY(-5px); }
.skill-box i { font-size: 2.5rem; color: var(--text-gray); margin-bottom: 10px; display: block; transition: 0.3s; }
.skill-box span { font-size: 0.85rem; color: var(--text-gray); display: block; }
.skill-box:hover i { color: var(--primary-light); }

/* --- 8. EXPERIENCE --- */
.timeline { max-width: 900px; margin: 0 auto; position: relative; }
.timeline::before { content: ''; position: absolute; left: 50%; width: 2px; height: 100%; background: var(--glass-border); transform: translateX(-50%); }
.t-item { margin-bottom: 50px; width: 100%; display: flex; justify-content: center; position: relative; }
.t-content { width: 45%; background: var(--bg-card); border: 1px solid var(--glass-border); padding: 25px; border-radius: 16px; backdrop-filter: blur(10px); transition: 0.3s; position: relative; }
.t-item:nth-child(odd) { justify-content: flex-start; }
.t-item:nth-child(even) { justify-content: flex-end; }
.t-dot { position: absolute; left: 50%; top: 25px; transform: translateX(-50%); width: 16px; height: 16px; background: var(--accent); border-radius: 50%; box-shadow: 0 0 15px var(--accent); border: 3px solid var(--bg-dark); z-index: 2; }
.t-content:hover { border-color: var(--primary-light); transform: translateY(-5px); }
.t-date { color: var(--primary-light); font-size: 0.9rem; font-weight: 600; margin-bottom: 5px; display: block; }
.t-role { font-size: 1.2rem; font-weight: 700; margin-bottom: 10px; color: var(--text-white); }

/* --- 9. PORTFOLIO --- */
.portfolio-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 30px; max-width: 1200px; margin: 0 auto; }
.p-card { position: relative; border-radius: 20px; overflow: hidden; aspect-ratio: 4/3; cursor: pointer; border: 1px solid var(--glass-border); }
.p-card img { width: 100%; height: 100%; object-fit: cover; transition: 0.5s; }
.p-overlay { position: absolute; inset: 0; background: rgba(2, 6, 23, 0.85); backdrop-filter: blur(4px); display: flex; flex-direction: column; justify-content: center; align-items: center; opacity: 0; transition: 0.4s; padding: 20px; text-align: center; }
.p-card:hover img { transform: scale(1.1); }
.p-card:hover .p-overlay { opacity: 1; }
.p-tags span { font-size: 0.8rem; background: rgba(255,255,255,0.1); padding: 4px 10px; border-radius: 4px; margin: 5px; display: inline-block; color: var(--accent); }

/* --- 10. CONTACT (REVISED - RAPI) --- */
.contact-wrapper {
  max-width: 1000px;
  margin: 0 auto;
  background: var(--bg-card);
  border: 1px solid var(--glass-border);
  border-radius: 30px;
  overflow: hidden; /* Penting agar border radius terjaga di anak elemen */
  display: grid;
  grid-template-columns: 1fr 1.2fr; /* Kiri 40%, Kanan 60% */
  backdrop-filter: blur(15px);
}

/* Kolom Kiri: Info Kontak */
.contact-left {
  background: rgba(15, 23, 42, 0.6); /* Sedikit lebih gelap */
  padding: 50px 40px;
  display: flex;
  flex-direction: column;
  justify-content: center;
  border-right: 1px solid var(--glass-border);
}
.contact-left h3 {
  font-family: 'Space Grotesk';
  font-size: 1.8rem;
  margin-bottom: 10px;
  color: var(--text-white);
}
.contact-left p {
  color: var(--text-gray);
  margin-bottom: 40px;
  font-size: 0.95rem;
}

.contact-item {
  display: flex;
  align-items: flex-start;
  margin-bottom: 30px;
  gap: 15px;
}
.icon-box {
  width: 45px;
  height: 45px;
  background: rgba(56, 189, 248, 0.1);
  color: var(--accent);
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 1.2rem;
  flex-shrink: 0;
}
.item-details h5 {
  font-size: 1rem;
  color: var(--text-white);
  margin-bottom: 4px;
}
.item-details span {
  font-size: 0.9rem;
  color: var(--text-gray);
  display: block;
}

/* Kolom Kanan: Form */
.contact-right {
  padding: 50px 40px;
}
.contact-right h3 {
  font-family: 'Space Grotesk';
  font-size: 1.8rem;
  margin-bottom: 30px;
  color: var(--text-white);
}

.form-group { margin-bottom: 20px; position: relative; }
.form-group label {
  display: block;
  margin-bottom: 8px;
  font-size: 0.9rem;
  color: var(--text-gray);
}
.form-control {
  width: 100%;
  padding: 14px 18px;
  background: rgba(0, 0, 0, 0.2);
  border: 1px solid var(--glass-border);
  border-radius: 12px;
  color: #fff;
  font-family: 'Outfit', sans-serif;
  font-size: 1rem;
  transition: 0.3s;
  outline: none;
}
.form-control:focus {
  border-color: var(--accent);
  background: rgba(0, 0, 0, 0.4);
  box-shadow: 0 0 0 4px rgba(56, 189, 248, 0.1);
}
.form-control::placeholder { color: rgba(255,255,255,0.2); }

.btn-submit {
  width: 100%;
  padding: 16px;
  background: linear-gradient(135deg, var(--primary), var(--primary-light));
  color: #fff;
  border: none;
  border-radius: 12px;
  font-size: 1rem;
  font-weight: 600;
  cursor: pointer;
  transition: 0.3s;
  margin-top: 10px;
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
}
.btn-submit:hover {
  transform: translateY(-2px);
  box-shadow: 0 10px 20px rgba(59, 130, 246, 0.3);
}
.btn-submit:active { transform: translateY(0); }


/* --- TOAST --- */
#toast { visibility: hidden; min-width: 250px; background-color: #333; color: #fff; text-align: center; border-radius: 8px; padding: 16px; position: fixed; z-index: 3000; left: 50%; bottom: 30px; transform: translateX(-50%); font-size: 17px; border-left: 5px solid var(--accent); }
#toast.show { visibility: visible; animation: fadein 0.5s, fadeout 0.5s 2.5s; }
@keyframes fadein { from {bottom: 0; opacity: 0;} to {bottom: 30px; opacity: 1;} }
@keyframes fadeout { from {bottom: 30px; opacity: 1;} to {bottom: 0; opacity: 0;} }

/* --- BACK TO TOP --- */
#backToTop { position: fixed; bottom: 30px; right: 30px; background: var(--accent); color: #fff; width: 50px; height: 50px; border-radius: 50%; display: flex; align-items: center; justify-content: center; cursor: pointer; opacity: 0; pointer-events: none; transition: 0.3s; z-index: 900; box-shadow: 0 5px 15px rgba(56, 189, 248, 0.4); }
#backToTop.show { opacity: 1; pointer-events: all; }
#backToTop:hover { transform: translateY(-5px); }

/* --- FOOTER --- */
footer { text-align: center; padding: 40px; border-top: 1px solid var(--glass-border); color: var(--text-gray); font-size: 0.9rem; background: rgba(2, 6, 23, 0.95); }
.social-links { margin-top: 20px; }
.social-links a { color: var(--text-gray); font-size: 1.2rem; margin: 0 10px; transition: 0.3s; }
.social-links a:hover { color: var(--accent); }

/* --- SCROLL REVEAL --- */
.reveal { opacity: 0; transform: translateY(40px); transition: all 1s ease; }
.reveal.active { opacity: 1; transform: translateY(0); }

/* --- RESPONSIVE --- */
@media (max-width: 992px) {
  .contact-wrapper { grid-template-columns: 1fr; }
  .contact-left { border-right: none; border-bottom: 1px solid var(--glass-border); padding: 40px 20px; }
  .contact-right { padding: 40px 20px; }
  .about-content { grid-template-columns: 1fr; }
  .hero-img-wrapper { flex: 0 0 300px; }
  .hero-img-bg, .hero-img { width: 280px; height: 280px; }
}

@media (max-width: 768px) {
  .nav-menu { position: fixed; top: 70px; right: -100%; width: 100%; height: calc(100vh - 70px); background: var(--bg-dark); flex-direction: column; align-items: center; justify-content: center; transition: 0.4s; border-top: 1px solid var(--glass-border); }
  .nav-menu.active { right: 0; }
  .hamburger { display: block; }
  .timeline::before { left: 20px; }
  .t-item { justify-content: flex-start !important; margin-left: 50px; }
  .t-content { width: 100%; }
  .t-dot { left: 20px !important; }
}
</style>
</head>
<body>

<!-- Scroll Progress -->
<div class="scroll-progress" id="progressBar"></div>
<!-- Background Orbs -->
<div class="bg-gradient-orb"></div>
<div class="bg-gradient-orb-2"></div>

<!-- NAVBAR -->
<nav>
  <a href="#hero" class="logo">SALMAN<span>.COM</span></a>
  <div class="hamburger" onclick="toggleMenu()"><i class="fas fa-bars"></i></div>
  <ul class="nav-menu">
    <li><a href="#hero">Home</a></li>
    <li><a href="#services">Services</a></li>
    <li><a href="#about">About</a></li>
    <li><a href="#portfolio">Portfolio</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>
</nav>

<!-- HERO -->
<section id="hero">
  <div class="hero-container">
    <div class="hero-text">
      <span class="hero-greeting">HELLO, I'M</span>
      <h1 class="hero-title">SALMAN AL FARISI</h1>
      <div class="hero-typing" id="typing-text"></div>
      <p class="hero-desc">
        Frontend Developer spesialis website modern, responsif, dan berkinerja tinggi. Saya membantu bisnis Anda tampil profesional di dunia digital.
      </p>
      <div class="btn-group">
        <a href="#portfolio" class="btn-main">Lihat Karya</a>
        <a href="#" class="btn-outline" download><i class="fas fa-download" style="margin-right:8px;"></i> Download CV</a>
      </div>
    </div>
    <div class="hero-img-wrapper">
      <div class="hero-img-bg"></div>
      <!-- GANTI DENGAN FOTO ANDA: src="assets/img/salman.png" -->
      <img src="assets/img/salman.png" alt="Salman" class="hero-img">
    </div>
  </div>
</section>

<!-- SERVICES -->
<section id="services">
  <div class="section-header reveal">
    <h2 class="section-title">Layanan Saya</h2>
    <div class="section-line"></div>
  </div>
  <div class="services-grid">
    <div class="service-card reveal">
      <div class="service-icon"><i class="fas fa-code"></i></div>
      <h3>Web Development</h3>
      <p>Membangun website statis dan dinamis dengan kode yang bersih, cepat, dan SEO-friendly.</p>
    </div>
    <div class="service-card reveal">
      <div class="service-icon"><i class="fas fa-paint-brush"></i></div>
      <h3>UI/UX Design</h3>
      <p>Merancang antarmuka yang estetis dan memastikan pengalaman pengguna yang nyaman.</p>
    </div>
    <div class="service-card reveal">
      <div class="service-icon"><i class="fas fa-mobile-alt"></i></div>
      <h3>Responsive Design</h3>
      <p>Memastikan website Anda terlihat sempurna di semua perangkat, mulai dari HP hingga Desktop.</p>
    </div>
  </div>
</section>

<!-- ABOUT & SKILLS -->
<section id="about">
  <div class="section-header reveal">
    <h2 class="section-title">Tentang & Keahlian</h2>
    <div class="section-line"></div>
  </div>
  
  <div class="about-content reveal">
    <!-- TENTANG SAYA -->
    <div class="bio-card">
      <h3 style="margin-bottom:20px; font-family:'Space Grotesk';">Tentang Saya</h3>
      <p>Saya adalah pengembang web yang berdedikasi dengan pengalaman lebih dari 3 tahun. Saya menggabungkan logika pemrograman dengan seni desain untuk menciptakan produk digital yang berdampak.</p>
      <p>Fokus saya adalah performa, aksesibilitas, dan skalabilitas. Saya terus belajar teknologi terbaru untuk memberikan solusi terbaik.</p>
    </div>

    <!-- KEAHLIAN / TECH STACK -->
    <div class="skills-wrapper">
      <h3 style="margin-bottom:20px;"><i class="fas fa-layer-group" style="color:var(--accent)"></i> Tech Stack</h3>
      <div class="skills-grid">
        <div class="skill-box"><i class="fab fa-html5"></i><span>HTML5</span></div>
        <div class="skill-box"><i class="fab fa-css3-alt"></i><span>CSS3</span></div>
        <div class="skill-box"><i class="fab fa-js"></i><span>JavaScript</span></div>
        <div class="skill-box"><i class="fab fa-bootstrap"></i><span>Bootstrap</span></div>
        <div class="skill-box"><i class="fab fa-react"></i><span>React</span></div>
        <div class="skill-box"><i class="fab fa-git-alt"></i><span>Git</span></div>
        <div class="skill-box"><i class="fas fa-code"></i><span>VS Code</span></div>
        <div class="skill-box"><i class="fab fa-figma"></i><span>Figma</span></div>
      </div>
    </div>
  </div>
</section>

<!-- EXPERIENCE -->
<section id="experience">
  <div class="section-header reveal">
    <h2 class="section-title">Pengalaman</h2>
    <div class="section-line"></div>
  </div>
  <div class="timeline">
    <div class="t-item reveal">
      <div class="t-dot"></div>
      <div class="t-content">
        <span class="t-date">2025 - Sekarang</span>
        <h4 class="t-role">Lead Fullstack Developer @ StartupTech</h4>
        <p>Memimpin tim pengembangan produk digital, mengatur arsitektur sistem, dan memastikan kualitas kode di seluruh stack (React, Node.js, MySQL).</p>
      </div>
    </div>
    <div class="t-item reveal">
      <div class="t-dot"></div>
      <div class="t-content">
        <span class="t-date">2023 - 2024</span>
        <h4 class="t-role">UI/UX Developer @ Creative Agency</h4>
        <p>Mendesain antarmuka web dan mobile yang responsif serta melakukan prototyping untuk meningkatkan pengalaman pengguna.</p>
      </div>
    </div>
    <div class="t-item reveal">
      <div class="t-dot"></div>
      <div class="t-content">
        <span class="t-date">2022 - 2023</span>
        <h4 class="t-role">Intern Web Developer</h4>
        <p>Belajar dan mengimplementasikan front-end development dengan HTML, CSS, dan JavaScript, serta mendukung proyek internal tim IT.</p>
      </div>
    </div>
  </div>
</section>


<!-- PORTFOLIO -->
<section id="portfolio">
  <div class="section-header reveal">
    <h2 class="section-title">Portfolio Terbaru</h2>
    <div class="section-line"></div>
  </div>
  <div class="portfolio-grid">
    <!-- Project 1 -->
    <div class="p-card reveal">
      <!-- GANTI DENGAN LINK FOTO ANDA: src="assets/img/ds1.png" -->
      <img src="assets/img/ho1.png" alt="Project 1">
      <div class="p-overlay">
        <h4>E-Commerce Platform</h4>
        <div class="p-tags"><span>HTML</span><span>CSS</span><span>Js</span></div>
      </div>
    </div>
    <!-- Project 2 -->
    <div class="p-card reveal">
      <!-- GANTI DENGAN LINK FOTO ANDA: src="assets/img/ho1.png" -->
      <img src="assets/img/ho2.png" alt="Project 2">
      <div class="p-overlay">
        <h4>Dashboard Admin</h4>
        <div class="p-tags"><span>Bootstrap 5</span><span>Chart.js</span></div>
      </div>
    </div>
    <div class="p-card reveal">
      <!-- GANTI DENGAN LINK FOTO ANDA: src="assets/img/ho1.png" -->
      <img src="assets/img/g.png" alt="Project 4">
      <div class="p-overlay">
        <h4>Dashboard Admin</h4>
        <div class="p-tags"><span>Bootstrap 5</span><span>Chart.js</span></div>
      </div>
    </div>
    <!-- Project 3 -->
    <div class="p-card reveal">
      <!-- GANTI DENGAN LINK FOTO ANDA: src="assets/img/ds2.png" -->
      <img src="assets/img/lp.png" alt="Project 3">
      <div class="p-overlay">
        <h4>Company Profile</h4>
        <div class="p-tags"><span>GSAP</span><span>CSS</span></div>
      </div>
    </div>
    <!-- Project 5 -->
    <div class="p-card reveal">
      <!-- GANTI DENGAN LINK FOTO ANDA: src="assets/img/g.png" -->
      <img src="assets/img/ds1.png" alt="Project 5">
      <div class="p-overlay">
        <h4>Web Desa</h4>
        <div class="p-tags"><span>GSAP</span><span>CSS</span></div>
      </div>
    </div>
    
    <div class="p-card reveal">
      <!-- GANTI DENGAN LINK FOTO ANDA: src="assets/img/ho1.png" -->
      <img src="assets/img/ds2.png" alt="Project 4">
      <div class="p-overlay">
        <h4>Dashboard Admin</h4>
        <div class="p-tags"><span>HTML</span><span>CSS</span><span>JS</span></div>
      </div>
    </div>
  </section>
    

<!-- CONTACT (REVISED) -->
<section id="contact">
  <div class="section-header reveal">
    <h2 class="section-title">Hubungi Saya</h2>
    <div class="section-line"></div>
  </div>
  
  <div class="contact-wrapper reveal">
    <!-- Kolom Kiri: Info -->
    <div class="contact-left">
      <h3>Ayo Diskusi</h3>
      <p>Silakan isi formulir di samping atau hubungi saya melalui kontak di bawah ini untuk kolaborasi.</p>
      
      <div class="contact-item">
        <div class="icon-box"><i class="fas fa-envelope"></i></div>
        <div class="item-details">
          <h5>Email</h5>
          <span>salmanaf083@email.com</span>
        </div>
      </div>
      
      <div class="contact-item">
        <div class="icon-box"><i class="fab fa-instagram"></i></div>
        <div class="item-details">
          <h5>Instagram</h5>
          <span>@salman_af83</span>
        </div>
      </div>
      
      <div class="contact-item">
        <div class="icon-box"><i class="fas fa-map-marker-alt"></i></div>
        <div class="item-details">
          <h5>Lokasi</h5>
          <span>Tasikmalaya, Jawabarat, Indonesia</span>
        </div>
      </div>
    </div>
 <!-- Kolom Kanan: Form -->
    <div class="contact-right">
      <h3>Kirim Pesan</h3>
      <form id="contactForm">
        <div class="form-group">
          <label for="name">Nama Lengkap</label>
          <input type="text" id="name" class="form-control" placeholder="Masukkan nama Anda..." required>
        </div>
        <div class="form-group">
          <label for="email">Alamat Email</label>
          <input type="email" id="email" class="form-control" placeholder="contoh@email.com" required>
        </div>
        <div class="form-group">
          <label for="message">Pesan</label>
          <textarea id="message" rows="5" class="form-control" placeholder="Tulis pesan Anda di sini..." required></textarea>
        </div>
        <button type="submit" class="btn-submit">
          <i class="fas fa-paper-plane"></i> Kirim Sekarang
        </button>
      </form>
    </div>
  </div>
</section>
<!-- FOOTER -->
<footer>
  <p>© 2026 Salman Al Farisi. All Rights Reserved.</p>
  <div class="social-links">
    <a href="#"><i class="fab fa-github"></i></a>
    <a href="#"><i class="fab fa-linkedin"></i></a>
    <a href="#"><i class="fab fa-instagram"></i></a>
  </div>
</footer>

<!-- UTILS -->
<div id="toast">Pesan berhasil dikirim!</div>
<div id="backToTop" onclick="scrollToTop()"><i class="fas fa-arrow-up"></i></div>


<!-- SCRIPTS -->
<script>
// 1. TYPING EFFECT
const textElement = document.getElementById('typing-text');
const words = ["Frontend Developer", "UI/UX Enthusiast", "Web Designer"];
let wordIndex = 0; let charIndex = 0; let isDeleting = false;

function typeEffect() {
  const currentWord = words[wordIndex];
  if (isDeleting) { textElement.textContent = currentWord.substring(0, charIndex - 1); charIndex--; } 
  else { textElement.textContent = currentWord.substring(0, charIndex + 1); charIndex++; }
  let typeSpeed = isDeleting ? 50 : 100;
  if (!isDeleting && charIndex === currentWord.length) { typeSpeed = 2000; isDeleting = true; } 
  else if (isDeleting && charIndex === 0) { isDeleting = false; wordIndex = (wordIndex + 1) % words.length; typeSpeed = 500; }
  setTimeout(typeEffect, typeSpeed);
}
document.addEventListener('DOMContentLoaded', typeEffect);

// 2. SCROLL REVEAL & PROGRESS
const revealElements = document.querySelectorAll('.reveal');
const revealCallback = (entries, observer) => {
  entries.forEach(entry => { if(entry.isIntersecting) entry.target.classList.add('active'); });
};
const revealObserver = new IntersectionObserver(revealCallback, { threshold: 0.15 });
revealElements.forEach(el => revealObserver.observe(el));

window.onscroll = function() {
  let winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  let height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  let scrolled = (winScroll / height) * 100;
  document.getElementById("progressBar").style.width = scrolled + "%";
  
  if (winScroll > 300) document.getElementById("backToTop").classList.add("show");
  else document.getElementById("backToTop").classList.remove("show");
  
  let current = '';
  document.querySelectorAll('section').forEach(sec => {
    const sectionTop = sec.offsetTop;
    if (winScroll >= sectionTop - 150) current = sec.getAttribute('id');
  });
  document.querySelectorAll('.nav-menu a').forEach(a => {
    a.classList.remove('active');
    if (a.getAttribute('href').includes(current)) a.classList.add('active');
  });
};

// 3. NAVBAR TOGGLE
function toggleMenu() {
  document.querySelector('.nav-menu').classList.toggle('active');
  const icon = document.querySelector('.hamburger i');
  icon.classList.toggle('fa-bars'); icon.classList.toggle('fa-times');
}

function scrollToTop() { window.scrollTo({top: 0, behavior: 'smooth'}); }

// 4. TESTIMONIAL SLIDER
function showSlide(n) {
  document.getElementById('slide-1').style.display = n === 1 ? 'block' : 'none';
  document.getElementById('slide-2').style.display = n === 2 ? 'block' : 'none';
  const dots = document.querySelectorAll('.dot');
  dots.forEach(d => d.classList.remove('active'));
  dots[n-1].classList.add('active');
}

// 5. FORM HANDLING
document.getElementById('contactForm').addEventListener('submit', function(e) {
  e.preventDefault();
  const btn = document.querySelector('.btn-submit');
  const originalText = btn.innerText;
  btn.innerText = "Mengirim...";
  btn.disabled = true;

  setTimeout(() => {
    const toast = document.getElementById("toast");
    toast.className = "show";
    setTimeout(function(){ toast.className = toast.className.replace("show", ""); }, 3000);
    this.reset();
    btn.innerText = originalText;
    btn.disabled = false;
  }, 1500);
});
</script>

</body>
</html>
