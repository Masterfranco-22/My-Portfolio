<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Franco Lee | Portfolio</title>
  <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
  <header>
    <a href="Landing.php" class="logo">Franco Lee</a>
    <nav>
      <ul>
        <li><a href="Landing.php">Home</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="service.php">Services</a></li>
        <li><a href="project.php">Project</a></li>
      </ul>
    </nav>
    <div class="header-button">
      <button
        class="theme-toggle"
        id="theme-toggle"
        type="button"
        aria-label="Switch to dark theme"
        aria-pressed="false">
        ☾
      </button>
      <a href="contact.php" class="btn-1">Hire Me</a>
    </div>
  </header>

  <section>
    <div class="hero reveal">
      <div class="hero-img" aria-label="Franco Lee portrait"></div>
      <div class="hero-box">
        <div class="hero-content">
          <!--   -->
          <h4>Hi there, I'm Franco!</h4>
          <h1>Frontend & Web Developer</h1>
          <h3>
            Computer Science student at Adekunle Ajasin University, building
            modern, responsive, and user-friendly web experiences.
          </h3>
          <blockquote>
            I turn ideas into functional digital products with clean code,
            thoughtful design, and strong user experience.
          </blockquote>
        </div>
        <div class="btn">
          <a href="project.php" class="btn1">View project</a>
          <a href="contact.php" class="btn2">Hire Me</a>
        </div>
      </div>
    </div>
  </section>

  <section class="brand-section reveal">
    <div class="section-heading">
      <span class="section-tag">Why clients choose me</span>
      <h2>Building polished experiences that feel premium.</h2>
    </div>

    <div class="brand-grid">
      <article class="brand-card">
        <span class="brand-icon">01</span>
        <h3>Design with clarity</h3>
        <p>
          I focus on clean structure, strong visual hierarchy, and a refined
          user experience that feels modern and trustworthy.
        </p>
      </article>

      <article class="brand-card">
        <span class="brand-icon">02</span>
        <h3>Build for performance</h3>
        <p>
          Every page is designed to be responsive, accessible, and easy to use
          on every device without sacrificing style.
        </p>
      </article>

      <article class="brand-card">
        <span class="brand-icon">03</span>
        <h3>Think like a problem solver</h3>
        <p>
          I approach projects with a practical mindset — turning business
          goals into functional, conversion-focused digital experiences.
        </p>
      </article>
    </div>

    <div class="brand-metrics">
      <div class="metric-box">
        <strong>6+</strong>
        <span>Month of learning</span>
      </div>
      <div class="metric-box">
        <strong>5+</strong>
        <span>Projects explored</span>
      </div>
      <div class="metric-box">
        <strong>100%</strong>
        <span>Dedication to quality</span>
      </div>
    </div>
  </section>

  <section id="projects" class="card reveal">
    <h2>Selected Projects</h2>
    <div class="card-child">
      <div class="cards">
        <img
          src="./assests/img/jab.png"
          alt="Jahbless Fashion Culture project" />
        <div class="cards-child">
          <h2>Jahbless Fashion Culture</h2>
          <small>
            A storefront-style website designed to help customers browse and
            contact the brand with ease.
          </small>
          <div class="cards-child-2">
            <a href="project.php">View Demo</a>
          </div>
        </div>
      </div>

      <div class="cards">
        <img src="./assests/img/portfolio 2.png" alt="Portfolio project" />
        <div class="cards-child">
          <h2>Portfolio Website</h2>
          <small>
            A personal brand portfolio built to showcase skills, projects, and
            services in a clean, modern layout.
          </small>
          <div class="cards-child-2">
            <a href="https://my-portfolio-titan-coder.vercel.app/">View Demo</a>
          </div>
        </div>
      </div>

      <div class="cards">
        <img
          src="./assests/img/Screenshot 2026-05-06 003840.png"
          alt="Business website" />
        <div class="cards-child">
          <h2>Business Landing Page</h2>
          <small>
            A responsive landing page created to highlight a business offer
            and convert visitors into leads.
          </small>
          <div class="cards-child-2">
            <a href="project.php">View Demo</a>
          </div>
        </div>
      </div>

      <div class="cards">
        <img
          src="./assests/img/Screenshot 2026-05-06 004447.png"
          alt="App style project" />
        <div class="cards-child">
          <h2>UI Concept Project</h2>
          <small>
            A concept landing page that focuses on clean layout, strong visual
            hierarchy, and smooth user interaction.
          </small>
          <div class="cards-child-2">
            <a href="project.php">View Demo</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="auth reveal">
    <div class="auth-content">
      <div>
        <h1><a href="contact.php">Let’s build something great.</a></h1>
        <p>Have a project in mind? I’d love to hear about it.</p>
      </div>
    </div>
    <form action="hire.php" method="POST">
      <h3>Contact Me</h3>
      <div class="wrappar">
        <input id="name" type="text" placeholder="E.g John Doe" required />
        <label for="name">Name:</label>
      </div>
      <div class="wrappar">
        <input
          id="email"
          type="email"
          placeholder="E.g john.doe@example.com"
          required />
        <label for="email">Email:</label>
      </div>
      <div class="wrappar">
        <textarea
          id="message"
          name="message"
          placeholder="Your message here..."
          required></textarea>
        <label for="message" class="message">Message:</label>
      </div>
      <div>
        <button type="submit">Submit</button>
      </div>
    </form>
  </section>

  <footer class="site-footer reveal">
    <div class="footer-content">
      <a href="Landing.php" class="footer-logo">Franco Lee</a>
      <p>Frontend and Web Developer building modern digital experiences.</p>

      <nav class="footer-links" aria-label="Footer navigation">
        <a href="Landing.php">Home</a>
        <a href="about.php">About</a>
        <a href="service.php">Services</a>
        <a href="project.php">Project</a>
      </nav>

      <div class="footer-socials">
        <a
          href="https://github.com/"
          target="_blank"
          rel="noopener noreferrer">GitHub</a>
        <a
          href="https://www.linkedin.com/"
          target="_blank"
          rel="noopener noreferrer">LinkedIn</a>
      </div>
    </div>

    <p class="copyright">&copy; 2026 Franco Lee. All rights reserved.</p>
  </footer>

  <script src="./js/theme-toggle.js" defer></script>
  <script src="./js/scroll-reveal.js" defer></script>
</body>

</html>