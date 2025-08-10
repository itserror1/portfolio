<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ETTI JOHN - Portfolio</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --primary: #4f46e5;
      --secondary: #0ea5e9;
      --bg: #0a0f1a;
      --text: #f3f4f6;
      --light-text: #a1a1aa;
      --card: #181e29;
      --accent: #f472b6;
      --border: #23293a;
      --shadow: 0 4px 32px rgba(30,41,59,0.18);
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #0a0f1a 0%, #181e29 100%);
      color: var(--text);
      min-height: 100vh;
      scroll-behavior: smooth;
      overflow-x: hidden;
    }

    header {
      position: sticky;
      top: 0;
      z-index: 10;
      background: rgba(24,30,41,0.98);
      box-shadow: var(--shadow);
      padding: 1.2rem 0 1rem;
      animation: slideDown 1s cubic-bezier(.68,-0.55,.27,1.55);
      display: flex;
      align-items: center;
      justify-content: space-between;
      max-width: 1100px;
      margin: 0 auto;
      border-bottom: 1.5px solid var(--border);
    }

    @keyframes slideDown {
      from { transform: translateY(-100px); opacity: 0; }
      to { transform: translateY(0); opacity: 1; }
    }

    header h1 {
      font-size: 2.1rem;
      letter-spacing: 2px;
      font-weight: 700;
      background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-left: 2rem;
      text-shadow: 0 2px 8px rgba(79,70,229,0.08);
    }

    nav {
      margin-top: 0;
      margin-right: 2rem;
      display: flex;
      align-items: center;
      gap: 0.5rem;
    }

    nav a {
      margin: 0 0.8rem;
      text-decoration: none;
      color: var(--text);
      font-weight: 600;
      font-size: 1.08rem;
      position: relative;
      padding: 0.3rem 0.8rem;
      border-radius: 6px;
      transition: background 0.2s, color 0.2s;
    }

    nav a:hover, nav a.active {
      background: linear-gradient(90deg, var(--primary) 60%, var(--secondary));
      color: #fff;
    }

    .hero {
      min-height: 68vh;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      padding: 6rem 1rem 3rem;
      position: relative;
      overflow: hidden;
    }

    .hero-bg {
      position: absolute;
      top: -100px;
      left: 50%;
      transform: translateX(-50%);
      width: 900px;
      height: 900px;
      background: radial-gradient(circle at 50% 30%, var(--primary) 0%, transparent 70%);
      opacity: 0.13;
      z-index: 0;
      animation: pulseBg 6s infinite alternate;
      filter: blur(2px);
    }

    @keyframes pulseBg {
      0% { opacity: 0.13; }
      100% { opacity: 0.22; }
    }

    .hero-content {
      position: relative;
      z-index: 1;
      animation: fadeInUp 1.2s cubic-bezier(.68,-0.55,.27,1.55);
    }

    @keyframes fadeInUp {
      from { opacity: 0; transform: translateY(40px);}
      to { opacity: 1; transform: translateY(0);}
    }

    .hero h1 {
      font-size: 2.7rem;
      font-weight: 800;
      background: linear-gradient(90deg, var(--primary), var(--secondary), var(--accent));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      margin-bottom: 1.1rem;
      letter-spacing: 1px;
      text-shadow: 0 2px 8px rgba(79,70,229,0.08);
    }

    .hero p {
      color: var(--light-text);
      font-size: 1.18rem;
      margin-bottom: 2.5rem;
      max-width: 480px;
      margin-left: auto;
      margin-right: auto;
      animation: fadeIn 2s;
      line-height: 1.7;
    }

    .btn {
      padding: 0.85rem 2.1rem;
      border-radius: 999px;
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      color: white;
      font-weight: 700;
      font-size: 1.08rem;
      text-decoration: none;
      border: none;
      box-shadow: 0 4px 16px rgba(79,70,229,0.13);
      transition: background 0.3s, transform 0.2s;
      cursor: pointer;
      position: relative;
      overflow: hidden;
      letter-spacing: 0.5px;
    }

    .btn:hover {
      background: linear-gradient(90deg, var(--secondary), var(--primary));
      transform: translateY(-2px) scale(1.04);
    }

    section {
      padding: 4.5rem 1rem 3rem;
      text-align: center;
      position: relative;
      z-index: 1;
    }

    h2 {
      font-size: 2rem;
      margin-bottom: 2.2rem;
      font-weight: 700;
      letter-spacing: 1px;
      background: linear-gradient(90deg, var(--primary), var(--accent));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      background-clip: text;
      text-shadow: 0 2px 8px rgba(79,70,229,0.08);
    }

    .about-box {
      background: linear-gradient(120deg, rgba(24,30,41,0.98) 80%, rgba(14,165,233,0.07));
      padding: 2.2rem 2rem 2rem;
      border-radius: 18px;
      box-shadow: var(--shadow);
      margin: 1rem auto;
      max-width: 600px;
      animation: popIn 1.2s cubic-bezier(.68,-0.55,.27,1.55);
      border: 1.5px solid var(--border);
      position: relative;
    }

    .profile-pic, .logo {
      width: 160px;
      height: 160px;
      border-radius: 50%;
      margin: 0 auto 1.2rem;
      object-fit: cover;
      border: 3px solid var(--secondary);
      box-shadow: 0 4px 24px rgba(14,165,233,0.13);
      animation: floatPic 3s infinite alternate;
      background: #181e29;
      display: block;
    }

    @keyframes floatPic {
      from { transform: translateY(0);}
      to { transform: translateY(-12px);}
    }

    .about-box p {
      font-size: 1.09rem;
      color: var(--light-text);
      margin-bottom: 1.5rem;
      line-height: 1.7;
    }

    .skills {
      margin-top: 1rem;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 0.7rem;
    }

    .skill {
      background: linear-gradient(90deg, var(--primary), var(--secondary));
      color: #fff;
      padding: 0.45rem 1.05rem;
      border-radius: 999px;
      font-size: 0.98rem;
      font-weight: 600;
      box-shadow: 0 2px 8px rgba(79,70,229,0.08);
      animation: popIn 0.8s cubic-bezier(.68,-0.55,.27,1.55);
      border: none;
      letter-spacing: 0.2px;
    }

    .project-list {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 2rem;
      margin-top: 2rem;
    }

    .project {
      background: linear-gradient(120deg, rgba(24,30,41,0.98) 80%, rgba(99,102,241,0.07));
      padding: 2rem 1.5rem;
      border-radius: 16px;
      box-shadow: var(--shadow);
      max-width: 340px;
      min-width: 260px;
      margin: 0 auto;
      animation: popIn 1.2s cubic-bezier(.68,-0.55,.27,1.55);
      border-top: 2.5px solid var(--primary);
      border-bottom: 1.5px solid var(--border);
      transition: transform 0.2s, box-shadow 0.2s;
      position: relative;
      overflow: hidden;
    }

    .project:hover {
      transform: translateY(-8px) scale(1.03);
      box-shadow: 0 12px 32px rgba(14,165,233,0.18);
      border-top: 2.5px solid var(--secondary);
    }

    .project h3 {
      font-size: 1.18rem;
      color: var(--primary);
      margin-bottom: 0.7rem;
      font-weight: 700;
      letter-spacing: 0.5px;
    }

    .project p {
      color: var(--light-text);
      font-size: 1.01rem;
      line-height: 1.5;
    }

    /* Contact links styling */
    .contact-links {
      display: flex;
      flex-direction: column;
      align-items: center;
      gap: 1.2rem;
      margin: 0 auto;
      max-width: 400px;
      background: linear-gradient(120deg, rgba(24,30,41,0.98) 80%, rgba(99,102,241,0.07));
      border-radius: 16px;
      border: 1.5px solid var(--secondary);
      box-shadow: var(--shadow);
      padding: 2rem 1.5rem;
      animation: popIn 1.2s cubic-bezier(.68,-0.55,.27,1.55);
    }
    .contact-link {
      display: flex;
      align-items: center;
      gap: 0.7rem;
      justify-content: center;
      text-decoration: none;
      font-weight: 600;
      font-size: 1.08rem;
      transition: color 0.2s, background 0.2s;
      padding: 0.5rem 1.2rem;
      border-radius: 8px;
    }
    .contact-link.gmail {
      color: var(--primary);
      background: rgba(99,102,241,0.07);
    }
    .contact-link.gmail:hover {
      color: #fff;
      background: linear-gradient(90deg, var(--primary), var(--accent));
    }
    .contact-link.linkedin {
      color: var(--secondary);
      background: rgba(14,165,233,0.07);
    }
    .contact-link.linkedin:hover {
      color: #fff;
      background: linear-gradient(90deg, var(--secondary), var(--primary));
    }

    footer {
      text-align: center;
      padding: 1.5rem 0 1rem;
      background: rgba(24,30,41,0.98);
      box-shadow: 0 -2px 16px rgba(0,0,0,0.10);
      font-size: 1rem;
      color: var(--light-text);
      margin-top: 3rem;
      letter-spacing: 0.5px;
      animation: fadeIn 2s;
      border-top: 1.5px solid var(--border);
    }

    /* Animations */
    @keyframes fadeIn {
      from { opacity: 0; }
      to { opacity: 1; }
    }
    @keyframes popIn {
      from { opacity: 0; transform: scale(0.95);}
      to { opacity: 1; transform: scale(1);}
    }

    /* Responsive */
    @media (max-width: 900px) {
      .project-list {
        flex-direction: column;
        gap: 1.5rem;
      }
      .about-box, .contact-links {
        max-width: 95vw;
      }
      header {
        flex-direction: column;
        align-items: flex-start;
        padding: 1rem 0.5rem;
      }
      header h1 {
        margin-left: 0;
        margin-bottom: 0.5rem;
      }
      nav {
        margin-right: 0;
        width: 100%;
        justify-content: flex-end;
      }
    }
    @media (max-width: 600px) {
      .hero h1 { font-size: 2.1rem; }
      h2 { font-size: 1.4rem; }
      .about-box, .contact-links { padding: 1.2rem 0.5rem; }
      .project { padding: 1.2rem 0.7rem; }
      .profile-pic, .logo { width: 70px; height: 70px; }
    }
  </style>
</head>
<body>
  <header>
    <h1>ETTI JOHN</h1>
    <nav>
      <a href="#about">About</a>
      <a href="#projects">Projects</a>
      <a href="#contact">Contact</a>
    </nav>
  </header>

  <section class="hero">
    <div class="hero-bg"></div>
    <div class="hero-content">
      <h1>Hello, I'm Etti <span style="font-size:1.7rem;">👋</span></h1>
      <p>
        I create <span style="color:var(--primary);font-weight:600;">clean</span>,
        <span style="color:var(--secondary);font-weight:600;">modern</span> web applications using
        <span style="color:var(--accent);font-weight:600;">Laravel</span>, PHP, and JavaScript.
      </p>
      <a href="#projects" class="btn">See My Work</a>
    </div>
  </section>

  <section id="about">
    <h2>About Me</h2>
    <div class="about-box">
      <img src="{{ url('logo/john.JPG') }}" alt="Logo" class="logo">
      <p>
        I'm a dedicated developer with a passion for creating beautiful, functional, and user-friendly applications. With experience in modern web technologies, I love turning complex problems into simple, elegant solutions.<br><br>
        When I'm not coding, you can find me exploring new technologies, contributing to open source projects, or enjoying a good cup of coffee while brainstorming my next project.<br><br>
        I believe in writing clean, maintainable code and creating experiences that users love.<br>
        I focus on <span style="color:var(--primary);font-weight:600;">Laravel</span>, clean UI, and scalable backend systems.<br>
        <span style="color:var(--secondary);">Let's build something amazing together!</span>
      </p>
      <div class="skills">
        <span class="skill">Laravel</span>
        <span class="skill">PHP</span>
        <span class="skill">JavaScript</span>
        <span class="skill">Tailwind CSS</span>
        <span class="skill">MySQL</span>
      </div>
    </div>
  </section>

  <section id="projects">
    <h2>Projects</h2>
    <div class="project-list">
      <div class="project">
        <h3>Student Portal</h3>
        <p>
          A student information management system built with Laravel and MySQL.<br>
          <span style="color:var(--secondary);font-size:0.95rem;">Role: Full-stack Developer</span>
        </p>
      </div>
      <div class="project">
        <h3>University Hostel Management</h3>
        <p>
          An interactive web application where students are able to book rooms or make compliants about rooms<br>
          <span style="color:var(--secondary);font-size:0.95rem;">Role: FULL-stack Developer</span>
        </p>
      </div>
      <div class="project">
        <h3>Performance Dashboard</h3>
        <p>
          Interactive dashboard to visualize student performance using charts and filters.<br>
          <span style="color:var(--secondary);font-size:0.95rem;">Role: UI/UX & Backend</span>
        </p>
      </div>
    </div>
  </section>

  <section id="contact">
    <h2>Contact Me</h2>
    <div class="contact-links">
      <a href="mailto:ettijohn2555@gmail.com" target="_blank" class="contact-link gmail">
        <svg width="22" height="22" fill="currentColor" style="vertical-align:middle;" viewBox="0 0 24 24"><path d="M12 13.065 2 6.5V18a1 1 0 0 0 1 1h18a1 1 0 0 0 1-1V6.5l-10 6.565zm9-8.065H3a1 1 0 0 0-1 1v.217l10 6.565 10-6.565V6a1 1 0 0 0-1-1z"/></svg>
        Gmail
      </a>
      <a href="https://www.linkedin.com/in/etti-john-712367284" target="_blank" class="contact-link linkedin">
        <svg width="22" height="22" fill="currentColor" style="vertical-align:middle;" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.761 0 5-2.239 5-5v-14c0-2.761-2.239-5-5-5zm-11 19h-3v-10h3v10zm-1.5-11.268c-.966 0-1.75-.784-1.75-1.75s.784-1.75 1.75-1.75 1.75.784 1.75 1.75-.784 1.75-1.75 1.75zm15.5 11.268h-3v-5.604c0-1.337-.026-3.063-1.868-3.063-1.868 0-2.154 1.459-2.154 2.967v5.7h-3v-10h2.881v1.367h.041c.401-.761 1.381-1.563 2.844-1.563 3.042 0 3.604 2.003 3.604 4.605v5.591z"/></svg>
        LinkedIn
      </a>
    </div>
  </section>

  <footer>
    &copy; 2025 Etti John. All rights reserved.
  </footer>
</body>
</html>
