<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex, nofollow" />
    <title>The Camford International School</title>

    <meta
      property="og:title"
      content="The Camford International School"
    />
       <meta
      property="og:description"
      content="Looking for the best schools in Coimbatore? TCIS - Coimbatore's leading CBSE school, nurturing leaders, critical thinkers, and champions since 2010. Contact us today to learn more!"
    />

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
    />

    <script
      defer
      src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
    ></script>
    <link rel="stylesheet" href="assests/style.css" />
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KW2SXG5G');</script>
<!-- End Google Tag Manager -->

  </head>
  <body>
    <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KW2SXG5G"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <div class="navigation">
      <div class="navigation-wrap">
        <a
          class="logo-link w--current w-nav-brand"
          href="#"
          aria-current="page"
        >
          <img alt="mainlogo" class="logo-image" src="images/logo.webp" />
        </a>
        <div class="hide-mobile">
          <div class="align-items-center d-flex">
            <a id="EnquiryNow" class="primary-btn open-popup" > Enquire Now</a>
          </div>
        </div>
      </div>
    </div>

    <section class="hero">
      <!-- ── TOP ROW ── -->
      <div class="hero-top">
        <!-- LEFT TEXT -->
        <div class="hero-left">
          <div class="badge">Admission Open 2026-27</div>
          <h1>Where Inspired Learning Meets World-Class Education</h1>
          <p class="sub">
            Coimbatore's leading CBSE school, nurturing leaders, critical
            thinkers, and champions since 2010.
          </p>
        </div>

        <!-- RIGHT FORM -->
        <div class="hero-right">
          <div class="form-card">
            <div class="form-wrap contactForm">
              <h2>Admission Enquiry</h2>
              <form method="post" class="form" action="gsheetinsert.php">
                <div class="row">
                  <div class="field" id="f-student">
                    <input
                      type="text"
                      id="student"
                      name="student"
					  required
                      placeholder="Student Name" oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '')"
                    />
                    <span class="err-msg">Student name is required</span>
                  </div>
                  <div class="field" id="f-parent">
                    <input
                      type="text"
                      id="parent"
                      placeholder="Parent / Guardian Name"
                      name="parent"
                      oninput="this.value = this.value.replace(/[^a-zA-Z ]/g, '')"
					  required
                    />
                    <span class="err-msg"
                      >Parent/guardian name is required</span
                    >
                  </div>
                </div>

                <div class="radio-row">
                  <span>I am</span>
                  <label class="radio-label"
                    ><input type="radio" name="IAM" value="Father" checked />
                    Father</label
                  >
                  <label class="radio-label"
                    ><input type="radio" name="IAM" value="Mother" />
                    Mother</label
                  >
                  <label class="radio-label"
                    ><input type="radio" name="IAM" value="Guardian" />
                    Guardian</label
                  >
                </div>

                <div class="row">
                  <div class="field full" id="f-email">
                    <input
                      type="email"
                      name="email"
                      id="email"
                      placeholder="Your Email*"
					  required
                    />
                    <span class="err-msg">A valid email is required</span>
                  </div>
                </div>

                <div class="phone-row">
                  <div class="field phone-code">
                    <input
                      type="text"
                      id="code"
                      value="+91"
                      placeholder="+91"
                    />
                  </div>
                  <div class="field phone-num" id="f-phone">
                    <input
                      type="tel"
                      name="phone"
                      id="phone"
                      maxlength="10"
                      placeholder="Phone Number *" oninput="this.value = this.value.replace(/[^0-9]/g, '')"
					  required
                    />
                    <span class="err-msg">Valid 10-digit number required</span>
                  </div>
                </div>

                <div class="row">
                  <div class="field full" id="f-grade">
                    <select name="grade" id="grade" required>
                      <option value="">Select Grade *</option>
                      <option>Mont I</option>
                      <option>Mont II</option>
                      <option>Mont III</option>
                      <option>Grade 1</option>
                      <option>Grade 2</option>
                      <option>Grade 3</option>
                      <option>Grade 4</option>
                      <option>Grade 5</option>
                      <option>Grade 6</option>
                      <option>Grade 7</option>
                      <option>Grade 8</option>
                      <option>Grade 9</option>
                      <option>Grade 10</option>
                      <option>Grade 11</option>
                    </select>
                    <span class="err-msg">Please select a grade</span>
                  </div>
                </div>

<input name="utm_source" type="hidden" name="utm_source" value="<?php echo $_GET['utm_source']; ?>"> 
<input name="utm_campaign" type="hidden" name="utm_campaign" value="<?php echo $_GET['utm_campaign']; ?>"> 
<input name="utm_medium" type="hidden" name="utm_medium" value="<?php echo $_GET['utm_medium']; ?>"> 
<input name="utm_term" type="hidden" name="utm_term" value="<?php echo $_GET['utm_term']; ?>">
<input name="utm_content" type="hidden" name="utm_content" value="<?php echo $_GET['utm_content']; ?>">
<input name="utm_keyword" type="hidden" name="utm_keyword" value="<?php echo $_GET['utm_keyword']; ?>">
<input name="utm_adgroup" type="hidden" name="utm_adgroup" value="<?php echo $_GET['utm_adgroup']; ?>">

               <div class="captcha-box">
                  <div class="g-recaptcha" data-sitekey="6LfD_7ksAAAAALHnUhTgWYC5s6-B5UKGWxEeWKoe"></div>
                </div>
                <button class="primary-btn cta-btn submit" type="submit">
                  Enquire Now
                </button>
                <div class="success-msg" id="success-msg">
                  Thank you! We'll get in touch with you soon.
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /hero-top -->
    </section>

    

    <section class="camford-section">
      <h2 class="sections-title">Camford Journey at a Glance</h2>
      <div class="camford-grid">
        <div class="stat-card">
          <span class="stat-number">1500+</span>
          <span class="stat-label">Students</span>
        </div>
        <div class="stat-card">
          <span class="stat-number">100+</span>
          <span class="stat-label">Faculty</span>
        </div>
        <div class="stat-card">
          <span class="stat-number">25+</span>
          <span class="stat-label">Awards</span>
        </div>
        <div class="stat-card">
          <span class="stat-number">10+</span>
          <span class="stat-label">International Programs</span>
        </div>
        <div class="stat-card">
          <span class="stat-number excellence">Excellence<br />Award</span>
          <span class="stat-label">for Best School in India</span>
        </div>
      </div>
    </section>

    <!-- achivement section start here  -->

    <section class="achievements-section">
      <p class="apply-tag">Student Achievements</p>
      <h2 class="sections-title">Our Top Performers</h2>

      <div class="owl-carousel owl-achievements">
        <!-- Card 1 -->
        <div class="student-card">
          <div class="card-img-wrap">
            <img src="images/achivment.webp" alt="Abinav G" />
          </div>
          <div class="card-body">
            <div class="card-name">Abinav G</div>
            <span class="card-tag">Racing Towards Glory</span>
            <p class="card-achievement">
              National Asian Cycling Champion, Record Holder
            </p>
          </div>
        </div>

        <!-- Card 2 -->
        <div class="student-card">
          <div class="card-img-wrap">
            <img src="images/achivment1.webp" alt="Arya Bamboli" />
          </div>
          <div class="card-body">
            <div class="card-name">Arya Bamboli</div>
            <span class="card-tag">Innovating Beyond Boundaries</span>
            <p class="card-achievement">
              Senior Software Engineer, Samsung Research India
            </p>
          </div>
        </div>

        <!-- Card 3 -->
        <div class="student-card">
          <div class="card-img-wrap">
            <img src="images/achivment3.webp" alt="Karan Chagan Rawal" />
          </div>
          <div class="card-body">
            <div class="card-name">Karan Chagan Rawal</div>
            <span class="card-tag">Soaring Towards Dreams</span>
            <p class="card-achievement">
              Aspiring Commercial Pilot, HAPS Pilipinas Aviation Academies
            </p>
          </div>
        </div>

        <!-- Card 4 (extra demo) -->
        <div class="student-card">
          <div class="card-img-wrap">
            <img src="images/achive11.webp" alt="Priya Sharma" />
          </div>
          <div class="card-body">
            <div class="card-name">Maneshika Tarani</div>
            <span class="card-tag">Aiming Towards Excellence</span>
            <p class="card-achievement">
              State Record Holder & National Medalist in Rifle Shooting
            </p>
          </div>
        </div>

        <div class="student-card">
          <div class="card-img-wrap">
            <img src="images/achive13.webp" alt="Priya Sharma" />
          </div>
          <div class="card-body">
            <div class="card-name">Mahesh Pasupathy</div>
            <span class="card-tag">Targeting Global Success</span>
            <p class="card-achievement">
              ISSF Junior World Cup Medalist & Double Silver at National
              Shooting Championship
            </p>
          </div>
        </div>
        <div class="student-card">
          <div class="card-img-wrap">
            <img src="images/achive12.webp" alt="Priya Sharma" />
          </div>
          <div class="card-body">
            <div class="card-name">Ashwathy Rajendran</div>
            <span class="card-tag">Leading Through Sports</span>
            <p class="card-achievement">
              Collaborating with IPL, ISL & Khelo India, Driving Excellence in
              Sports Science & Management
            </p>
          </div>
        </div>
      </div>
      <!-- /.owl-carousel -->
    </section>

    <!-- achivement section stop here  -->

    <!-- programs section start from here  -->
    <section class="ac-section">
      <div class="acade_pr">
        <p class="apply-tag" style="color: #ffff">Academic Programs</p>
        <h2 class="sections-title" style="color: #ffff">
          A Curriculum Built for Every Stage
        </h2>
        <p class="ac-subtitle">
          Our CBSE curriculum is designed to meet the unique developmental needs
          of each learner, providing a seamless and challenging educational
          journey from early years to high school.
        </p>
      </div>
      <div class="ac-grid">
        <div class="ac-card">
          <div class="ac-img-wrap">
            <div class="ac-img-placeholder">
              <img src="images/pro1.webp" alt="" />
            </div>
          </div>
          <p class="ac-stage">Early Learners</p>
          <p class="ac-grades">Mont I to Mont III</p>
          <p class="ac-desc">
            We blend Montessori, Waldorf, and Kindergarten methods to teach core
            subjects through hands-on activities, fostering a love for learning
            in a nurturing environment.
          </p>
        </div>

        <div class="ac-card">
          <div class="ac-img-wrap">
            <div class="ac-img-placeholder">
              <img src="images/pro2.webp" alt="" />
            </div>
          </div>
          <p class="ac-stage">Primary</p>
          <p class="ac-grades">Grade 1 to Grade 5</p>
          <p class="ac-desc">
            This stage focuses on holistic development, blending academics with
            arts and sports. A unique 'Thursday Treats' program encourages
            self-directed learning based on individual aptitudes.
          </p>
        </div>

        <div class="ac-card">
          <div class="ac-img-wrap">
            <div class="ac-img-placeholder">
              <img src="images/pro3.webp" alt="" />
            </div>
          </div>
          <p class="ac-stage">Middle School</p>
          <p class="ac-grades">Grade 6 to Grade 10</p>
          <p class="ac-desc">
            We offer a dynamic, activity-oriented environment that caters to
            eight different learning styles. The curriculum includes diverse
            hobbies and sports clubs to keep students engaged.
          </p>
        </div>

        <div class="ac-card">
          <div class="ac-img-wrap">
            <div class="ac-img-placeholder">
              <img src="images/pro4.webp" alt="" />
            </div>
          </div>
          <p class="ac-stage">Senior School</p>
          <p class="ac-grades">Grade 11 Grade 12</p>
          <p class="ac-desc">
            Our students excel in board exams and receive supplementary training
            for NEET, JEE, and SAT. They actively organize major interschool
            events and competitions.
          </p>
        </div>
      </div>
    </section>
    <!-- programs section stop from here  -->

    <!-- clasroom start from here  -->
    <section class="advantage-section">
      <!-- LEFT PANEL -->
      <div class="advantage-left">
        <div class="left-content">
          <p class="apply-tag" style="color: #bfe8f6">Beyond the Classroom</p>
          <h2 class="left-title">The Camford Advantage</h2>
          <p class="left-desc">
            An education that nurtures confident, balanced individuals ready for
            the world.
          </p>
        </div>
        <div class="left-nav">
          <button class="nav-btn" id="prevBtn" aria-label="Previous">
            <img src="images/arow.webp" alt="leftarrow" class="nav-img" />
          </button>
          <button class="nav-btn" id="nextBtn" aria-label="Next">
            <img
              src="images/arrow-rigth.webp"
              alt="rightarrow"
              class="nav-img"
            />
          </button>
        </div>
      </div>

      <!-- RIGHT: Owl Carousel -->
      <div class="advantage-right">
        <div class="owl-carousel owl-theme" id="advantageCarousel">
          <!-- Card 1 -->
          <div class="advantage-card">
            <h3 class="card-title">Holistic Student Life</h3>
            <p class="card-desc">
              Students actively lead the school by hosting major events like the
              'SYMBIOSIS' commerce meet and the 'Golden Boot' football
              tournament.
            </p>
            <div class="card-img">
              <div class="card-img-placeholder">
                <img src="images/adva1.webp" alt="" />
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="advantage-card">
            <h3 class="card-title">Activity-Oriented Learning</h3>
            <p class="card-desc">
              We move beyond textbooks. Learning is reinforced through
              experiments, educational music videos, field trips, and Learning
              Expos where students showcase their work.
            </p>
            <div class="card-img">
              <div class="card-img-placeholder">
                <img
                  src="images/advas2.webp"
                  alt="Activity-Oriented Learning"
                />
              </div>
              <!-- Replace with: <img src="activity.jpg" alt="Activity-Oriented Learning"> -->
            </div>
          </div>

          <!-- Card 3 -->
          <div class="advantage-card">
            <h3 class="card-title">World-Class Sports Facilities</h3>
            <p class="card-desc">
              Our campus features an Olympic-size swimming pool and coaching for
              diverse sports such as rifle shooting, throwball, skating, and
              taekwondo, producing state-level champions.
            </p>
            <div class="card-img">
              <div class="card-img-placeholder">
                <img
                  src="images/advas3.webp"
                  alt="Sports & Physical Wellness"
                />
              </div>
              <!-- Replace with: <img src="sports.jpg" alt="Sports & Wellness"> -->
            </div>
          </div>
          <div class="advantage-card">
            <h3 class="card-title">Global Accolades</h3>
            <p class="card-desc">
              Our excellence is recognized by the British Council's
              'International School Award' and the 'Global Excellence Award for
              Best School in India' presented in London.
            </p>
            <div class="card-img">
              <div class="card-img-placeholder">
                <img
                  src="images/advas4.webp"
                  alt="Sports & Physical Wellness"
                />
              </div>
              <!-- Replace with: <img src="sports.jpg" alt="Sports & Wellness"> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- clasroom stop from here  -->

    <!-- infrastructure section start from here  -->
    <!-- achivement section start here  -->

    <section class="infracture-section">
      <p class="apply-tag">World-Class Infrastructure</p>
      <h2 class="sections-title">Facilities Built for Excellence</h2>
      <p class="infras_des">
        Every facility at Camford is designed to support learning, health,
        sport, and student well-being.
      </p>

      <div class="owl-carousel owl-infracture">
        <!-- Card 1 -->
        <div class="infrastruc-card">
          <div class="infra-img-wrap">
            <img src="images/infra.webp" alt="Abinav G" />
          </div>
          <div class="infra-body">
            <div class="infra-name">Labs</div>
          </div>
        </div>

        <!-- infra 2 -->
        <div class="infrastruc-card">
          <div class="infra-img-wrap">
            <img src="images/infra1.webp" alt="Arya Bamboli" />
          </div>
          <div class="infra-body">
            <div class="infra-name">Library</div>
          </div>
        </div>

        <!-- infra 3 -->
        <div class="infrastruc-card">
          <div class="infra-img-wrap">
            <img src="images/infra2.webp" alt="Karan Chagan Rawal" />
          </div>
          <div class="infra-body">
            <div class="infra-name">Integrated Care</div>
          </div>
        </div>

        <!-- infra 4 (extra demo) -->
        <div class="infrastruc-card">
          <div class="infra-img-wrap">
            <img src="images/infra23.webp" alt="Sports" />
          </div>
          <div class="infra-body">
            <div class="infra-name">Sports</div>
          </div>
        </div>
       
        <div class="infrastruc-card">
          <div class="infra-img-wrap">
            <img src="images/infra233.webp" alt="Priya Sharma" />
          </div>
          <div class="infra-body">
            <div class="infra-name">Transport</div>
          </div>
        </div>
      </div>
      <!-- /.owl-carousel -->
    </section>
    <!-- infrastructure section stop from here  -->

    <!-- 4TH SECTION START FROM HERE  -->
    <section class="apply-section">
      <p class="apply-tag">HOW TO APPLY</p>
      <h2 class="sections-title">
        Simple Steps to <br />
        Join the Camford Family
      </h2>

      <div class="steps-wrapper">
        <!-- Step 1 -->
        <div class="step">
          <div class="step-icon">
            <img src="images/join1.webp" alt="" />
          </div>
          <p class="step-title">Connect</p>
          <p class="step-desc">
            Fill out our online enquiry form to receive detailed information
            about the curriculum, fee structure, and upcoming open house events.
          </p>
        </div>

        <div class="step-connector">
          <img src="images/join-link.webp" alt="" />
        </div>

        <!-- Step 2 -->
        <div class="step">
          <div class="step-icon">
            <img src="images/join2.webp" alt="" />
          </div>
          <p class="step-title">Visit</p>
          <p class="step-desc">
            Schedule a campus tour to experience our facilities firsthand and
            meet our academic coordinators for a personalized discussion.
          </p>
        </div>

        <div class="step-connector">
          <img src="images/join-link.webp" alt="" />
        </div>

        <!-- Step 3 -->
        <div class="step">
          <div class="step-icon">
            <img src="images/join3.webp" alt="" />
          </div>
          <p class="step-title">Apply</p>
          <p class="step-desc">
            Submit the online application along with the required documents to
            formally register for the admission process.
          </p>
        </div>

        <div class="step-connector">
          <img src="images/join-link.webp" alt="" />
        </div>

        <!-- Step 4 -->
        <div class="step">
          <div class="step-icon">
            <img src="images/join4.webp" alt="" />
          </div>
          <p class="step-title">Assess</p>
          <p class="step-desc">
            Attend a school-level interaction or assessment to help us
            understand your child's unique strengths and learning needs.
          </p>
        </div>

        <div class="step-connector">
          <img src="images/join-link.webp" alt="" />
        </div>

        <!-- Step 5 -->
        <div class="step">
          <div class="step-icon">
            <img src="images/join5.webp" alt="" />
          </div>
          <p class="step-title">Enroll</p>
          <p class="step-desc">
            Upon selection, complete the enrollment by paying the admission fee
            to secure your child's place for the academic year.
          </p>
        </div>
      </div>
    </section>

    <!-- 4TH SECTION END FROM HERE  -->

    <!-- testomonial section start here  -->
    <section class="testimonial-section">
      <div class="testimonial-inner">
        <h2 class="sections-title">Parent's Testimonial</h2>

        <div class="owl-carousel owl-theme" id="testimonialCarousel">
          <!-- Card 1 -->
          <div class="testimonial-card">
            <div class="testimonial-body">
              <span class="text-short"
                >One thing I truly value about the school is how accessible and
                responsive the communication is. The "passport" system makes a
                big difference it allows parents to share...</span
              >
              <span class="text-extra">
                even small concerns directlyand the prompt responses from teachers are very reassuring. It
                feels like a true two-way connection. The sports and other
                activities at school help children open up and build confidence.
                I also like that in every program—whether it is Sports Day or
                Annual Day—each child gets a chance to participate, so no one is
                left out. A little more focus on math concepts would make
                learning even better, and I hope this continues in higher grades
                as well.
              </span>
              <button class="toggle-btn">read more</button>
            </div>
            <span class="quote-mark"
              ><img src="images/quato.webp" alt=""
            /></span>
            <div class="testimonial-author">
              <div class="author-avatar">
                <img src="images/shrey.webp" alt="" />
              </div>
              <div>
                <p class="author-name">Sherry</p>
                <p class="author-sub">
                  Parent of Olivia<br />(completed Grade 3)
                </p>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="testimonial-card">
            <div class="testimonial-body">
              <span class="text-short"
                >Enrolling our son into 7th grade at Camford, transitioning from
                the US education system, came with many concerns — adapting to
                Indian learning and making friends...</span
              >
              <span class="text-extra">
                Two years later, he is a confident, well-rounded Camfordian.
                This transformation reflects the exceptional standard of an
                institution recognized by the UK Parliament. The friendships he
                has built speak to the quality of students Camford attracts.
                Beyond academics, the school has enriched him through the band,
                nature club, science club, and wonderfully planned outings
                organized by dedicated staff. Camford doesn't just educate — it
                nurtures. We wholeheartedly recommend it to every parent.
              </span>
              <button class="toggle-btn">read more</button>
            </div>
            <span class="quote-mark"
              ><img src="images/quato.webp" alt=""
            /></span>
            <div class="testimonial-author">
              <div class="author-avatar">
                <img src="images/test2.webp" alt="" />
              </div>
              <div>
                <p class="author-name">Rajeshkumar</p>
                <p class="author-sub">
                  Parent of Udith karthi<br />(completed 8th grade)
                </p>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="testimonial-card">
            <div class="testimonial-body">
              <span class="text-short"
                >My two sons have been studying at The Camford International
                School since 2019, and I'm really happy with their progress. The
                teachers and staff are very supportive...</span
              >
              <span class="text-extra">
                especially the class teachers who give personal attention to
                each child’s strengths and talents. It’s not just about
                academics—they also focus on discipline, sports, and other
                activities, which has made a big positive difference in my sons.
                The campus is safe, and the overall environment is very good for
                children to learn and grow
              </span>
              <button class="toggle-btn">read more</button>
            </div>
            <span class="quote-mark"
              ><img src="images/quato.webp" alt=""
            /></span>
            <div class="testimonial-author">
              <div class="author-avatar">
                <img src="images/test3.webp" alt="" />
              </div>
              <div>
                <p class="author-name">Teena Chandy</p>
                <p class="author-sub">
                  Parent of Parampoush, Grade 10,<br />Maghapurush, Grade 7
                </p>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="testimonial-card">
            <div class="testimonial-body">
              <span class="text-short"
                >Hi this is sheela, We are very happy with our experience at
                Camford International School. My elder son in Grade 10 has shown
                excellent academic progress with proper...</span
              >
              <span class="text-extra">
                guidance for his future My younger son in Grade 1 enjoys a caring and engaging learning
                environment. The teachers are supportive and approachable, and
                the communication between school and parents is very strong and
                clear. The school focuses on discipline, confidence, and overall
                development. We truly appreciate the dedication of the staff and
                the positive atmosphere that helps children learn and grow.
              </span>
              <button class="toggle-btn">read more</button>
            </div>
            <span class="quote-mark"
              ><img src="images/quato.webp" alt=""
            /></span>
            <div class="testimonial-author">
              <div class="author-avatar">
                <img src="images/test5.webp" alt="" />
              </div>
              <div>
                <p class="author-name">Sheela</p>
                <p class="author-sub">
                  Parent of Joash<br />Grade 10 and Jasher – Grade 1
                </p>
              </div>
            </div>
          </div>

          <!-- Card 5 -->
          <div class="testimonial-card">
            <div class="testimonial-body">
              <span class="text-short"
                >Having been associated with Camford International School for
                several years through my two children, I am pleased to share
                that our experience has been consistently positive...</span
              >
              <span class="text-extra">
                My son, who joined in Grade 3, is now in Grade 12, while my
                daughter began at the Montessori level and is currently in Grade
                8. One of the most commendable aspects of the school is the
                approachability and dedication of its faculty. The teachers are
                supportive and attentive to each student’s needs. This guidance
                played a key role in my son’s strong performance in his Grade 10
                board examinations. The school’s modern infrastructure and
                sports facilities enhance the learning environment, supporting
                both academic and extracurricular growth. I have recommended the
                school to several friends, many of whom have shared positive
                feedback. My daughter continues to enjoy her journey at the
                school and has shown good growth in confidence. Overall, Camford
                International School provides a nurturing environment that
                encourages students to strive for excellence without undue
                pressure. I extend my sincere gratitude to the management and
                the Principal Madam for their continued efforts in maintaining
                high standards of education and student development.
              </span>
              <button class="toggle-btn">read more</button>
            </div>
            <span class="quote-mark">
              <img src="images/quato.webp" alt="" />
            </span>
            <div class="testimonial-author">
              <div class="author-avatar">
                <img src="images/test6.webp" alt="" />
              </div>
              <div>
                <p class="author-name">Savitha Raghuram</p>
                <p class="author-sub">
                  Parent of Smrithi Sara Raghuram<br />Grade 8 and Darshith
                  Raghuram – Grade 12
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- testomonial section stop here  -->

    <!-- faq section start from here -->
    <section class="faq-section">
      <h2 class="sections-title">Frequently Asked Questions</h2>

      <div class="faq-list">
        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            <span class="faq-question-text"
              >Is Camford affiliated with CBSE, and how does that benefit my child?</span
            >
            <span class="faq-icon">
              <svg
                class="plus"
                viewBox="0 0 24 24"
                fill="none"
                stroke-width="2.5"
                stroke-linecap="round"
              >
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
              <svg
                class="minus"
                viewBox="0 0 24 24"
                fill="none"
                stroke-width="2.5"
                stroke-linecap="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>
              Yes, Camford is a CBSE-affiliated school. The CBSE board is the most widely accepted board across Indian universities and all major national entrance examinations, giving your child a strong academic foundation.

            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            <span class="faq-question-text"
              >What age should my child be to start at Camford, and what is the earliest grade available?
</span
            >
            <span class="faq-icon">
              <svg
                class="plus"
                viewBox="0 0 24 24"
                fill="none"
                stroke-width="2.5"
                stroke-linecap="round"
              >
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
              <svg
                class="minus"
                viewBox="0 0 24 24"
                fill="none"
                stroke-width="2.5"
                stroke-linecap="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>
              Admissions begin from Montessori I (Mont I), which is open to young learners typically around 3 years of age, right through to Grade 12 for Senior School.

            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            <span class="faq-question-text"
              >How does Camford support my child beyond academics? 
</span
            >
            <span class="faq-icon">
              <svg
                class="plus"
                viewBox="0 0 24 24"
                fill="none"
                stroke-width="2.5"
                stroke-linecap="round"
              >
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
              <svg
                class="minus"
                viewBox="0 0 24 24"
                fill="none"
                stroke-width="2.5"
                stroke-linecap="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>
              Camford offers a wide range of co-curricular programmes including sports, music, dance, theatre, and culinary arts. An Integrated Care Centre also supports the physical and emotional well-being of every student.
            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            <span class="faq-question-text"
              >What streams are available in Senior School (Grade 11 and 12)? 
</span
            >
            <span class="faq-icon">
              <svg
                class="plus"
                viewBox="0 0 24 24"
                fill="none"
                stroke-width="2.5"
                stroke-linecap="round"
              >
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
              <svg
                class="minus"
                viewBox="0 0 24 24"
                fill="none"
                stroke-width="2.5"
                stroke-linecap="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>
             Senior School students at Camford can choose from Science, Commerce, or Arts streams. Dedicated mentoring is provided to help students perform well in Board exams and prepare for competitive entrance tests.

            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            <span class="faq-question-text"
              >How safe and convenient is daily school transport? 
</span
            >
            <span class="faq-icon">
              <svg
                class="plus"
                viewBox="0 0 24 24"
                fill="none"
                stroke-width="2.5"
                stroke-linecap="round"
              >
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
              <svg
                class="minus"
                viewBox="0 0 24 24"
                fill="none"
                stroke-width="2.5"
                stroke-linecap="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>
              Camford provides reliable, safe transport services covering key areas across Coimbatore. Parents can speak with the Admissions team for specific route details and to confirm coverage for their locality.

            </p>
          </div>
        </div>

        <div class="faq-item">
          <button class="faq-question" aria-expanded="false">
            <span class="faq-question-text"
              >What is the teacher-to-student ratio?</span
            >
            <span class="faq-icon">
              <svg
                class="plus"
                viewBox="0 0 24 24"
                fill="none"
                stroke-width="2.5"
                stroke-linecap="round"
              >
                <line x1="12" y1="5" x2="12" y2="19" />
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
              <svg
                class="minus"
                viewBox="0 0 24 24"
                fill="none"
                stroke-width="2.5"
                stroke-linecap="round"
              >
                <line x1="5" y1="12" x2="19" y2="12" />
              </svg>
            </span>
          </button>
          <div class="faq-answer">
            <p>
              We maintain a low ratio to ensure personalized attention, allowing teachers to address the individual learning needs of every student.

            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- faq section start from here -->

    <!-- last section start from here -->
    <div class="cta-wrapper">
      <div></div>
      <div class="cta-content">
        <h2 class="cta-heading">
          Give Your Child the Education They Deserve. Begin Here.
        </h2>
        <a id="EnquiryNow" class="primary-btn cta-btn">Enquire Now</a>
      </div>
    </div>
    <!-- last section stop from here -->
    <footer class="footer_main">
      <p>© 2026 Camford International School. All rights reserved.</p>
    </footer>

    <div class="floating-contact" bis_skin_checked="1">
      <ul class="ulbtnn">
        <li><a href="tel:" class="call">
          <img class="call_icom" src="images/call.png" alt="callicon">Call Now</a></li>
        <li><a id="EnquiryNow" class="enquiry open-popup">Enquire Now</a></li>
      </ul>
    </div>

    <script>
      $(document).ready(function () {
        $(".owl-infracture").owlCarousel({
          loop: true,
          margin: 20,
          nav: true,
          dots: true,
          autoplay: true,
          autoplayTimeout: 3500,
          autoplayHoverPause: true,
          navText: [
            "<img src='images/arow.webp' alt='leftarrow' class='nav-img'>",
            "<img src='images/arrow-rigth.webp' alt='rightarrow' class='nav-img'>",
          ],
          responsive: {
            0: { items: 1 },
            600: { items: 2 },
            990: { items: 2 },
            1024: { items: 3 },
          },
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        $(".owl-achievements").owlCarousel({
          loop: true,
          margin: 20,
          nav: true,
          dots: true,
          autoplay: true,
          autoplayTimeout: 3500,
          autoplayHoverPause: true,
          navText: [
            "<img src='images/arow.webp' alt='leftarrow' class='nav-img'>",
            "<img src='images/arrow-rigth.webp' alt='rightarrow' class='nav-img'>",
          ],
          responsive: {
            0: { items: 1 },
            600: { items: 2 },
            992: { items: 3 },
            1024: { items: 3 },
          },
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        $("#testimonialCarousel").owlCarousel({
          loop: true,
          margin: 20,
           autoHeight: true,
          nav: true,
          dots: false,
          smartSpeed: 500,
          navText: [
            "<img src='images/arow.webp' alt='leftarrow' class='nav-img'>",
            "<img src='images/arrow-rigth.webp' alt='rightarrow' class='nav-img'>",
          ],
          responsive: {
            0: { items: 1 },
            768: { items: 2 },
            1024: { items: 3 },
          },
        });
        owl.on("initialized.owl.carousel changed.owl.carousel", function () {
          setTimeout(setEqualHeight, 100);
        });
      });

      /* ── Read more / Read less toggle ── */
      $(document).on("click", ".toggle-btn", function () {
        const card = $(this).closest(".testimonial-card");
        const isExpanded = card.hasClass("expanded");

        if (isExpanded) {
          card.removeClass("expanded");
          $(this).text(" read more");
        } else {
          card.addClass("expanded");
          $(this).text(" read less");
        }

        // Refresh Owl so it recalculates heights
        $("#testimonialCarousel").trigger("refresh.owl.carousel");
      });
    </script>
    <script>
      document.querySelectorAll(".faq-question").forEach((btn) => {
        btn.addEventListener("click", () => {
          const item = btn.closest(".faq-item");
          const isOpen = item.classList.contains("open");

          // Close all
          document.querySelectorAll(".faq-item").forEach((i) => {
            i.classList.remove("open");
            i.querySelector(".faq-question").setAttribute(
              "aria-expanded",
              "false",
            );
          });

          // Open clicked if it was closed
          if (!isOpen) {
            item.classList.add("open");
            btn.setAttribute("aria-expanded", "true");
          }
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        var owl = $("#advantageCarousel").owlCarousel({
          loop: true, // ✅ IMPORTANT (infinite loop)
          margin: 20,
          nav: false,
          dots: false,
          smartSpeed: 500,
          responsive: {
            0: { items: 1 },
            768: { items: 1 },
            1024: { items: 1 },
            1200: { items: 2 },
          },
        });

        // Next button (always works)
        $("#nextBtn").click(function () {
          owl.trigger("next.owl.carousel");
        });

        // Prev button (always works)
        $("#prevBtn").click(function () {
          owl.trigger("prev.owl.carousel");
        });
      });
    </script>
    <script>
      function showError(fieldId) {
  const field = document.getElementById(fieldId);
  field.classList.add("error");
}

function removeError(fieldId) {
  const field = document.getElementById(fieldId);
  field.classList.remove("error");
}

  function validateForm() {
  let isValid = true;

  const student = document.getElementById("student").value.trim();
  const parent = document.getElementById("parent").value.trim();
  const email = document.getElementById("email").value.trim();
  const phone = document.getElementById("phone").value.trim();
  const grade = document.getElementById("grade").value;

  // Student Name
  if (student === "") {
    showError("f-student");
    isValid = false;
  } else removeError("f-student");

  // Parent Name
  if (parent === "") {
    showError("f-parent");
    isValid = false;
  } else removeError("f-parent");

  // Email
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailPattern.test(email)) {
    showError("f-email");
    isValid = false;
  } else removeError("f-email");

  // Phone
  const phonePattern = /^[0-9]{10}$/;
  if (!phonePattern.test(phone)) {
    showError("f-phone");
    isValid = false;
  } else removeError("f-phone");

  // Grade
  if (grade === "") {
    showError("f-grade");
    isValid = false;
  } else removeError("f-grade");

 // ✅ Google reCAPTCHA check (SAFE)
if (typeof grecaptcha !== "undefined") {
  const captchaResponse = grecaptcha.getResponse();
  if (captchaResponse.length === 0) {
    alert("Please verify captcha");
    isValid = false;
  }
} else {
  alert("Captcha not loaded. Please refresh.");
  isValid = false;
}

  return isValid;
}
    </script>



<!-- 
    <script>
const forms = document.querySelectorAll("form.form");

const scriptURL =
  "https://script.google.com/macros/s/AKfycbwOVdIoQHsvIylus3meVrwW1naKJbreugjwuhmjZ_LYZFcNI_Us1FO8XB9kDCBDzZzM/exec";

forms.forEach((form) => {
  const submitButton = form.querySelector(".submit");

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    // ✅ pass current form to validation
    if (!validateForm(form)) return;

    submitButton.disabled = true;

    let requestBody = new FormData(form);

    fetch(scriptURL, {
      method: "POST",
      body: requestBody
    })
      .then((response) => {
        alert("Form submitted successfully!");

        form.reset();

        if (typeof grecaptcha !== "undefined") {
          grecaptcha.reset();
        }

        submitButton.disabled = false;

        window.location.href = "https://thecamford.org/applications-demo/thank-you.html";
      })
      .catch((error) => {
        alert("Error: " + error.message);
        submitButton.disabled = false;
      });
  });
});
</script> -->

<script>
$(document).on("click", "#EnquiryNow", function(e) {

  let targetForm;

  // Check screen width (mobile vs desktop)
  if ($(window).width() <= 768) {
    targetForm = $(".mobilefocus");
  } else {
    targetForm = $(".contactForm");
  }

  if (targetForm.length) {
    $('html, body').animate({
      scrollTop: targetForm.offset().top
    }, 600);

    setTimeout(function(){
      targetForm.find("input:first").focus();
    }, 700);
  }

});
</script>
<script>
document.querySelector(".form").addEventListener("submit", function(e) {

  var response = grecaptcha.getResponse();

  if(response.length === 0) {
    e.preventDefault(); // stop form submit
    alert("Please verify that you are not a robot.");
    return false;
  }

});
</script>


<style>
  .hero{
    background-image: url(images/new_backgroung_desktop.png);
  }
  img.call_icom{
    width: 13px;
    margin-right: 8px;
  }
  .captcha-box{
    background:unset;
      border:unset;
      border-radius:unset;
      padding:unset;
  }
  .field .err-msg {
  display: none;
  color: red;
  font-size: 12px;
}

.field.error .err-msg {
  display: block;
}
@media (max-width: 990px) {
      .hero-top {
        align-items: start;
        background-image: url(../images/lpbnr--mobile.png);
        background-repeat: no-repeat;
        display: flex;
        height: 700px;
        flex-direction: column;
        padding: 22px;
       background-size: cover;
    }
    .hero-left{
          align-items: center;
    }
    .hero-left h1{
      text-align: center;
    }
    .hero{
      margin-bottom: 85%;
    }
  
    .hero-right {
    width: 100%;
    padding: 0;
    margin-top: 47%;
    display: block;
    }
    .captcha-box{
          width: 45%;
    }
	    .hero {
        background-image: url(images/lpbnr--mobile.png) !important;
        background-position: center;
    }

}

@media (max-width: 767px) {
     .hero {
        margin-bottom: 125%;
    }
  .hero-top{
   background-size: contain;
  }
.captcha-box {
        width: 100%;
    }
    .badge {
        width: 75%;
    }
    .hero-left h1 {
        font-size: 30px;
    }
.hero-right{
  margin-top: 95%;
}
.logo-image{
  margin: auto;
}
.navigation-wrap{
      align-items: center;
      justify-content: center;
}
    .hero-left .sub {
        font-size: 15px;
    }
}


</style>
  </body>
</html>
