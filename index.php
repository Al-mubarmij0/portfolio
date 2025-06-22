<?php include 'includes/header.php'; ?>

<!-- Home -->
<section class="hero animate" id="home">
    <div class="hero-content">
        <img src="assets/images/profile_pic.png" alt="mubarak" class="profile-pic">
        <div class="hero-text">
            <h2>Hello, I’m <span>Mohammed Mubarak Sani</span></h2>
            <p>A passionate Full Stack Developer.</p>
            <a href="#contact" class="btn-download">Hire Me</a>
        </div>
    </div>
</section>

<!-- Counters -->
<section class="stats animate" id="stats">
    <h2>Quick Stats</h2>
    <div class="stats-grid">
        <div class="stat-box">
            <h3 class="counter" data-target="5">3+</h3>
            <p>Years of Experience</p>
        </div>
        <div class="stat-box">
            <h3 class="counter" data-target="20">15+</h3>
            <p>Projects Completed</p>
        </div>
        <div class="stat-box">
            <h3 class="counter" data-target="10">100+</h3>
            <p>Clients</p>
        </div>
        <div class="stat-box">
            <h3 class="counter" data-target="3">5+</h3>
            <p>Hackathons Won</p>
        </div>
    </div>
</section>


<!-- About -->
<section class="about animate" id="about">
    <h2>About Me</h2>
    <div class="about-content">
        <p>
            I'm a developer focused on building clean, responsive websites and applications using PHP, JavaScript, and MySQL.
        </p>
        <h3>Skills</h3>
        <div class="skill-bar">
            <label>PHP</label>
            <div class="bar"><div class="progress" style="width: 90%;"></div></div>

            <label>Laravel</label>
            <div class="bar"><div class="progress" style="width: 85%;"></div></div>

            <label>JavaScript</label>
            <div class="bar"><div class="progress" style="width: 75%;"></div></div>

            <label>MySQL</label>
            <div class="bar"><div class="progress" style="width: 80%;"></div></div>

            <label>HTML/CSS</label>
            <div class="bar"><div class="progress" style="width: 95%;"></div></div>
        </div>


        <a href="assets/resume.pdf" class="btn-download" download>📄 Download Resume</a>
    </div>
</section>

<!-- Projects -->
<section class="projects animate" id="projects">
    <h2>Projects</h2>
    <div class="project-grid">
 

        <div class="project-grid">
        <div class="project-item php">
            <img src="assets/images/about-hero.jpeg" alt="Project Screenshot" class="lightbox">
            <h4>Inventory App</h4>
            <p>PHP-based inventory tracking system</p>
        </div>
        <div class="project-item laravel">
            <img src="assets/images/about-hero.jpeg" alt="Project Screenshot" class="lightbox">
            <h4>Loan Management System</h4>
            <p>Built with Laravel & MySQL</p>
        </div>
        <div class="project-item js">
            <img src="assets/images/about-hero.jpeg" alt="Project Screenshot" class="lightbox">
            <h4>QR Code Scanner</h4>
            <p>JS-based attendance tool</p>
        </div>
        <div class="project-item php laravel">
            <img src="assets/images/about-hero.jpeg" alt="Project Screenshot" class="lightbox">
            <h4>Student Portal</h4>
            <p>Laravel + PHP backend app</p>
        </div>
    </div>
</section>

<!-- Blog -->
<section class="blog animate" id="blog">
    <h2>Latest Blog Posts</h2>
    <div class="blog-grid">
        <div class="blog-item">
            <h4>Mastering PHP for Beginners</h4>
            <p>A step-by-step guide for those starting their journey in PHP development.</p>
            <a href="#">Read More →</a>
        </div>
        <div class="blog-item">
            <h4>Building a Responsive Portfolio</h4>
            <p>Learn how I structured and styled this portfolio using plain PHP and CSS.</p>
            <a href="#">Read More →</a>
        </div>
    </div>
</section>   

<!-- Testimonials -->
<section class="testimonials animate" id="testimonials">
    <h2>What People Say</h2>
    <div class="testimonial-grid">
        <div class="testimonial-item">
            <p>"Mubarak delivered exceptional work on time and exceeded expectations!"</p>
            <h5>– Jane Doe, Product Manager</h5>
        </div>
        <div class="testimonial-item">
            <p>"Professional, responsive, and highly skilled in PHP & Laravel."</p>
            <h5>– John Smith, Tech Lead</h5>
        </div>
    </div>
</section>

<!-- Contact -->
<section class="contact animate" id="contact">
    <h2>Contact Me</h2>
    <form action="contact_process.php" method="POST" class="contact-form">
        <input type="text" name="name" placeholder="Your name" required>
        <input type="email" name="email" placeholder="Your email" required>
        <textarea name="message" placeholder="Your message..." required></textarea>
        <button type="submit">Send</button>
    </form>
</section>

<?php include 'includes/footer.php'; ?>
