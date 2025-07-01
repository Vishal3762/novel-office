<?php
/*
  Template Name: Home
*/
?>

<?php get_header(); ?>

<section class="hero">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 position-relative">
        <div class="top-badge">🌐 India's Trusted Software & Web Development Company</div>
        <h1>
          Empower Your Business with <span class="highlight-blue">Custom Software</span> & <span
            class="highlight-green">Web Solutions</span>
        </h1>
        <p>
          Accelerate your digital growth with our expert-driven web and software development services. From responsive
          websites to scalable enterprise apps — we build solutions that drive results for startups and enterprises
          alike.
        </p>

        <div class="d-flex gap-3 flex-wrap mt-3">
          <a href="#" class="btn btn-primary-custom">Explore Courses</a>
          <a href="#" class="btn btn-outline-custom">Watch Demo</a>
        </div>


      </div>
      <div class="col-lg-6">

        <div class="blue-card w-100"></div>
      </div>
    </div>
  </div>
</section>


<!-- Counter card -->
<section class="counter-section text-white py-5">
  <div class="container">
    <div class="row g-4 text-center justify-content-center">
      <!-- Card 1 -->
      <div class="col-md-3 col-sm-6">
        <div class="count-card-new p-4">
          <h2 class="count fw-bold mb-1">
            <span class="counter" data-target="400">0</span>+
          </h2>
          <p class="mb-0">Hiring Companies</p>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-3 col-sm-6">
        <div class="count-card-new p-4">
          <h2 class="count fw-bold mb-1">
            <span class="counter" data-target="600">0</span>+
          </h2>
          <p class="mb-0">Students Trained</p>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-3 col-sm-6">
        <div class="count-card-new p-4">
          <h2 class="count fw-bold mb-1">
            <span class="counter" data-target="10">0</span>+
          </h2>
          <p class="mb-0">Expert Instructors</p>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-3 col-sm-6">
        <div class="count-card-new p-4">
          <h2 class="count fw-bold mb-1">
            <span class="counter" data-target="3">0</span>+
          </h2>
          <p class="mb-0">Centers</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- About Us Section -->
<section class="about-section py-5">
  <div class="container">
    <!-- <div class="about-label mb-3">
      <span>About Us</span>
    </div> -->
    <div class="row align-items-center">
      <div class="col-lg-5">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/traning-3.png" alt="Medical Team"
          class="img-fluid" style="max-width: 100%;">
      </div>
      <div class="col-lg-7">
        <h2 class="about-heading">
          Why <span class="labskill-highlight">Novel Office</span> the Top Choice for student ?
        </h2>

        <p class="about-text">
          Novel Office is a trusted software and web development company, delivering innovative, result-driven solutions
          for startups, SMEs, and enterprises. Our expert team specializes in crafting custom web applications, scalable
          software platforms, and responsive websites tailored to each client’s unique business goals.

          With a strong focus on quality, performance, and client success, we ensure end-to-end development, technical
          support, and seamless digital transformation — making us the preferred technology partner for busin


        </p>
      </div>
    </div>
  </div>
</section>
<!-- services section -->
<section class="container-fluid py-5 about-us-hiring">
   <h2 class="text-center mb-5 fw-bold text-white">Steps to Hiring Qualified Pharmacy Technicians with Ease</h2>
   <div class="row g-4">
      <div class="col-md-6 col-lg-3">
         <div class="text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon12.png" class="img-fluid mb-3"
               alt="Tailored Pharmacy Hiring Solutions">
            <h5 class="fw-semibold">Tailored Hiring Solutions</h5>
            <p class="section-description1">We understand your pharmacy’s specific staffing needs and provide trained
               technicians who are ready
               to meet industry demands from day one.</p>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon4.png" class="img-fluid mb-3"
               alt="Job-Ready Pharmacy Technicians">
            <h5 class="fw-semibold">Job-Ready Technicians</h5>
            <p class="section-description1">Our graduates are equipped with real-world pharmacy skills through hands-on
               training and up-to-date
               curriculum focused only on pharmacy practice.</p>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon2.png" class="img-fluid mb-3"
               alt="Reliable Recruitment Process">
            <h5 class="fw-semibold">Streamlined Recruitment</h5>
            <p class="section-description1">LabSkillPro simplifies your hiring process by connecting you with certified
               pharmacy technicians who
               are ready to perform from day one.</p>
         </div>
      </div>
      <div class="col-md-6 col-lg-3">
         <div class="text-center">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/icon12.png" class="img-fluid mb-3"
               alt="Ongoing Support & Optimization">
            <h5 class="fw-semibold">Ongoing Support & Growth</h5>
            <p class="section-description1">We ensure long-term success by offering continuous support and development
               opportunities to help
               your team grow in a competitive market.</p>
         </div>
      </div>
   </div>

</section>


<!-- Course cards section -->


<section class="courses-section" id="courses">
  <div class="container">
    <h2 class="service-title">Explore Our Courses</h2>
    <p class="course-text">Choose from our expertly designed courses to boost your career and skills.</p>

    <div class="row g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon"><i class="bi bi-code-slash"></i></div>
          <div class="course-title">Web Development</div>
          <div class="course-desc">HTML, CSS, JS & frameworks to build modern websites.</div>
          <a href="#" class="enroll-btn">Enroll Now</a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon"><i class="bi bi-phone"></i></div>
          <div class="course-title">App Development</div>
          <div class="course-desc">Learn to create Android & iOS apps with real projects.</div>
          <a href="#" class="enroll-btn">Enroll Now</a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon"><i class="bi bi-pc-display"></i></div>
          <div class="course-title">UI/UX Design</div>
          <div class="course-desc">Design beautiful and user-friendly interfaces.</div>
          <a href="#" class="enroll-btn">Enroll Now</a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon"><i class="bi bi-bar-chart-line"></i></div>
          <div class="course-title">Data Science</div>
          <div class="course-desc">Master Python, ML, and data visualization.</div>
          <a href="#" class="enroll-btn">Enroll Now</a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon"><i class="bi bi-lock"></i></div>
          <div class="course-title">Cyber Security</div>
          <div class="course-desc">Protect systems and networks from attacks.</div>
          <a href="#" class="enroll-btn">Enroll Now</a>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-md-4">
        <div class="course-card">
          <div class="course-icon"><i class="bi bi-globe"></i></div>
          <div class="course-title">Digital Marketing</div>
          <div class="course-desc">Grow brands online with SEO, Ads, and SMM.</div>
          <a href="#" class="enroll-btn">Enroll Now</a>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="training-cta-section text-white d-flex align-items-center" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/Group 541.png'); background-size: cover; background-position: center; padding: 60px 20px;">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-md-8">
        <h2 class="mb-0">Explore Our Training Courses</h2>
        <p class="mb-0">Get job-ready with industry-endorsed curriculum and hands-on pharmaceutical training.</p>
      </div>
      <div class="col-md-4 text-md-end mt-3 mt-md-0">
        <a href="<?php echo site_url('/Quality Assurance'); ?>" class="btn btn-light  text-black">Go to Courses</a>
      </div>
    </div>
  </div>
</section>





<!-- Testimonial card section  -->
<section class="mt-5">
  <div class="container py-5 user-review">
    <h1 class="background-text1 mb-0">testimonial</h1>
    <h2 class="service-title  text-center mb-4">
      <span class="service-title">▲</span> What people say's about us
    </h2>


    <div id="testimonialCarousel" class="carousel slide mt-2" data-bs-ride="carousel" data-bs-interval="3000">
      <div class="carousel-inner">

        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row align-items-center justify-content-center">

            <!-- Left side image (previous) -->
            <div class="col-md-2 d-none d-md-block">
              <img
                src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                class="profile-img side" alt="Prev">
            </div>

            <!-- Testimonial card -->
            <div class="col-md-8">
              <div class="testimonial-card">
                <div class="row align-items-center">
                  <!-- Left profile image inside card -->
                  <div class="col-md-3 text-center">
                    <img
                      src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80"
                      class="testimonial-img" alt="Main">
                  </div>

                  <!-- Right content -->
                  <div class="col-md-9">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">
                      The very first spark of my love for yoga started with you and I am so devoted and in awe of your
                      teaching style. The way you explain each pose makes it so easy to understand and implement. My
                      flexibility and strength have improved tremendously since I started your classes.
                    </p>
                    <div class="testimonial-name">PATRICIE FUXOVA</div>
                    <div class="star-rating">★ ★ ★ ★ ★</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right side image (next) -->
            <div class="col-md-2 d-none d-md-block">
              <img
                src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                class="profile-img side" alt="Next">
            </div>

          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row align-items-center justify-content-center">

            <!-- Left side image (previous) -->
            <div class="col-md-2 d-none d-md-block">
              <img
                src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                class="profile-img side" alt="Prev">
            </div>

            <!-- Testimonial card -->
            <div class="col-md-8">
              <div class="testimonial-card">
                <div class="row align-items-center">
                  <!-- Left profile image inside card -->
                  <div class="col-md-3 text-center">
                    <img
                      src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80"
                      class="testimonial-img" alt="Main">
                  </div>

                  <!-- Right content -->
                  <div class="col-md-9">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">
                      I've been practicing yoga for years but never experienced such transformative sessions before. The
                      instructor's attention to detail and personalized approach helped me correct my alignment and
                      deepen my practice. The meditation techniques have brought so much peace to my daily life.
                    </p>
                    <div class="testimonial-name">JOHN SMITH</div>
                    <div class="star-rating">★ ★ ★ ★ ★</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right side image (next) -->
            <div class="col-md-2 d-none d-md-block">
              <img
                src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                class="profile-img side" alt="Next" loading="lazy">
            </div>

          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row align-items-center justify-content-center">

            <!-- Left side image (previous) -->
            <div class="col-md-2 d-none d-md-block">
              <img
                src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                class="profile-img side" alt="Prev" loading="lazy">
            </div>

            <!-- Testimonial card -->
            <div class="col-md-8">
              <div class="testimonial-card">
                <div class="row align-items-center">
                  <!-- Left profile image inside card -->
                  <div class="col-md-3 text-center">
                    <img
                      src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&auto=format&fit=crop&w=150&q=80"
                      class="testimonial-img" alt="Main" loading="lazy">
                  </div>

                  <!-- Right content -->
                  <div class="col-md-9">
                    <div class="quote-icon">"</div>
                    <p class="testimonial-text">
                      As a beginner, I was nervous about joining yoga classes, but the welcoming environment and clear
                      instructions made me feel comfortable immediately. After just a month, I've noticed significant
                      improvements in my posture and stress levels. Highly recommend to anyone looking to start their
                      yoga journey.
                    </p>
                    <div class="testimonial-name">EMILY JOHNSON</div>
                    <div class="star-rating">★ ★ ★ ★ ★</div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Right side image (next) -->
            <div class="col-md-2 d-none d-md-block">
              <img
                src="https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?ixlib=rb-1.2.1&auto=format&fit=crop&w=200&q=80"
                class="profile-img side" alt="Next">
            </div>

          </div>
        </div>

      </div>

      <!-- Controls -->
      <button class="carousel-control-prev" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon p-3" aria-hidden="true"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#testimonialCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon p-3" aria-hidden="true"></span>
      </button>
    </div>
  </div>

</section>



<section class="why-title">
   <h1 class="service-title  text-center mb-4">
      <span class="service-title">▲</span> why choose us
    </h1> <!-- You can customize the title -->
</section>
<section class="skill-section">

  <div class="skill-box" data-desc="Proven Track Record: Our history shows consistent student success.">
    <h1 class="skill-letter">S</h1>
    <h3>Proven Track Record</h3>
  </div>
  <div class="skill-box" data-desc="Industry-Expert Instructors: Learn from professionals with real-world experience.">
    <h1 class="skill-letter">K</h1>
    <h3>Industry-Expert Instructors</h3>
  </div>
  <div class="skill-box" data-desc="Comprehensive Curriculum: Structured to cover all essential topics in depth.">
    <h1 class="skill-letter">I</h1>
    <h3>Comprehensive Curriculum</h3>
  </div>
  <div class="skill-box" data-desc="Learning-Focused Environment: Practical knowledge for real-world application.">
    <h1 class="skill-letter">L</h1>
    <h3>Learning Focused</h3>
  </div>
  <div class="skill-box" data-desc="Personalized Approach: Tailored support for every learner's growth.">
    <h1 class="skill-letter">L</h1>
    <h3>Personalized Approach</h3>
  </div>
</section>


<!-- Get In Touch Section -->
<section class="get-in-touch-section py-5">
  <div class="container">
    <div class="row mb-4">
      <div class="col-12 text-center" data-aos="fade-up">
        <h2 class="section-title fw-bold text-dark">Get In Touch</h2>
        <p class="text-muted">We’re here to help. Fill out the form and explore our contact details.</p>
      </div>
    </div>

    <div class="row">

      <div class="col-md-4 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="100">
        <div class="d-flex flex-column justify-content-between h-100">
          <!-- Card 1 -->
          <div class="info-card p-4 mb-3 bg-white shadow-sm rounded">
            <h5 class="fw-bold text-dark mb-1">Phone</h5>
            <p class="mb-0 text-muted">+91 98765 43210</p>
          </div>
          <!-- Card 2 -->
          <div class="info-card p-4 mb-3 bg-white shadow-sm rounded">
            <h5 class="fw-bold text-dark mb-1">Email</h5>
            <p class="mb-0 text-muted">support@labskillpro.com</p>
          </div>
          <!-- Card 3 -->
          <div class="info-card p-4 bg-white shadow-sm rounded">
            <h5 class="fw-bold text-dark mb-1">Address</h5>
            <p class="mb-0 text-muted">123 Pharma Street, Edu City, India</p>
          </div>
        </div>
      </div>
      <!-- Left: Contact Form -->
      <div class="col-md-8" data-aos="fade-up">
        <div class="card p-4 h-100 shadow-sm border-0">
          <form>
            <div class="row g-3">
              <div class="col-md-6">
                <input type="text" class="form-control custom-input" placeholder="Your Name" required>
              </div>
              <div class="col-md-6">
                <input type="email" class="form-control custom-input" placeholder="Your Email" required>
              </div>
              <div class="col-md-12">
                <input type="text" class="form-control custom-input" placeholder="Subject" required>
              </div>
              <div class="col-md-12">
                <textarea class="form-control custom-input" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary custom-btn mt-3">Send Message</button>
              </div>
            </div>
          </form>
        </div>
      </div>

      <!-- Right: Info Cards -->

    </div>
  </div>
</section>






<!-- Skill blog section -->







<?php get_footer(); ?>