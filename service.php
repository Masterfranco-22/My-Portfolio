<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Franco Lee | Services</title>
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
    <button
      class="theme-toggle"
      id="theme-toggle"
      type="button"
      aria-label="Switch to dark theme"
      aria-pressed="false">
      ☾
    </button>
    <a href="contact.php" class="btn-1">Hire Me</a>
  </header>

  <section class="services reveal">
    <div class="service-container">
      <h2 class="ser">My Services</h2>

      <div class="service">
        <div class="service-card">
          <h3>Frontend Development</h3>
          <p>
            I design and build clean, responsive interfaces that look polished
            on every screen size.
          </p>
          <ul>
            <li>HTML</li>
            <li>CSS</li>
            <li>JavaScript</li>
            <li>React</li>
          </ul>
          <div class="amount">
            <a href="contact.php">Starting: $15.00</a>
          </div>
        </div>

        <div class="service-card">
          <h3>Full-Stack Development</h3>
          <p>
            I create complete digital products with both frontend and backend
            logic for a smooth user experience.
          </p>
          <ul>
            <li>Node.js</li>
            <li>Express</li>
            <li>MongoDB</li>
          </ul>
          <div class="amount">
            <a href="contact.php">Starting: $25.00</a>
          </div>
        </div>

        <div class="service-card">
          <h3>UI/UX Design</h3>
          <p>
            I focus on usability, clarity, and a better overall customer
            journey through thoughtful design decisions.
          </p>
          <ul>
            <li>Wireframes</li>
            <li>Prototypes</li>
            <li>User Flow</li>
          </ul>
          <div class="amount">
            <a href="contact.php">Starting: $10.00</a>
          </div>
        </div>

        <div class="service-card">
          <h3>Responsive Design</h3>
          <p>
            I make sure your site works well on mobile, tablet, laptop, and
            large screens without sacrificing clarity or performance.
          </p>
          <ul>
            <li>Mobile-first</li>
            <li>Cross-browser</li>
            <li>Optimization</li>
          </ul>
          <div class="amount">
            <a href="contact.php">Starting: $15.00</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="skills-showcase reveal">
    <div class="skills-panel">
      <div class="skills-header">
        <h2>What I Do</h2>
        <p>
          I build modern websites and digital experiences that are visually
          strong, technically solid, and centered on real user needs.
        </p>
      </div>

      <div class="skills-grid">
        <article class="skill-card">
          <div class="skill-icon html-icon">
            <img src="assests/img/icons8-html-50.png" alt="HTML" />
          </div>
          <span>HTML</span>
        </article>
        <article class="skill-card">
          <div class="skill-icon css-icon">
            <img src="assests/img/icons8-css-50.png" alt="CSS" />
          </div>
          <span>CSS</span>
        </article>
        <article class="skill-card">
          <div class="skill-icon js-icon">JS</div>
          <span>JavaScript</span>
        </article>
        <article class="skill-card">
          <div class="skill-icon react-icon">
            <img src="assests/img/icons8-react-96.png" alt="React" />
          </div>
          <span>React</span>
        </article>
        <article class="skill-card">
          <div class="skill-icon github-icon">Git</div>
          <span>GitHub</span>
        </article>
        <article class="skill-card">
          <div class="skill-icon node-icon">
            <img src="assests/img/icons8-nodejs-64.png" alt="Node.js" />
          </div>
          <span>Node.js</span>
        </article>
        <article class="skill-card">
          <div class="skill-icon php-icon">
            <img src="assests/img/icons8-php-64.png" alt="PHP" />
          </div>
          <span>PHP</span>
        </article>
        <article class="skill-card">
          <div class="skill-icon mongo-icon">
            <img src="assests/img/icons8-mongo-db-96.png" alt="MongoDB" />
          </div>
          <span>MongoDB</span>
        </article>
        <article class="skill-card">
          <div class="skill-icon bootstrap-icon">
            <img src="assests/img/icons8-bootstrap-50.png" alt="Bootstrap" />
          </div>
          <span>Bootstrap</span>
        </article>
        <article class="skill-card">
          <div class="skill-icon mysql-icon">
            <img src="assests/img/icons8-mysql-logo-50.png" alt="MySQL" />
          </div>
          <span>MySQL</span>
        </article>
      </div>
    </div>
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