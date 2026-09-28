<!doctype html>

<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Kidzonia Credence International School</title>

        <!-- Fonts -->

        <link
            href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />
         <script src='https://www.google.com/recaptcha/api.js'></script>

        <!-- Bootstrap -->

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Icons -->

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

        <!-- AOS -->

        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

        <!-- Swiper -->

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

        <link rel="icon" type="image/x-icon" href="<?php echo base_url(); ?>assets/admissions2026/images/favicon.png" />

        <!-- Fonts -->
        <link
            href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400;600;700&family=Poppins:wght@300;400;500;600;700&display=swap"
            rel="stylesheet"
        />

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Icons -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet" />

        <!-- AOS -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

        <link href="<?php echo base_url(); ?>assets/admissions2026/custom.css" rel="stylesheet" />
        <link rel='stylesheet' href="<?php echo base_url(); ?>assets/css/sweetalert2.min.css" type='text/css' />
    </head>
    <body>
        <!-- TOP BAR -->

        <div class="kcis-topbar d-none d-sm-block">
            <div class="container d-flex justify-content-between">
                <div>📞 +91-9100256256 | ✉ info@kidzoniainternational.in</div>
                <div>
                    <a href="https://www.facebook.com/KidzoniaCredence/"><i class="fab fa-facebook-f"></i></a>
					
                    <a href="https://www.instagram.com/kidzoniacredence_hyderabad?igshid=MzRlODBiNWFlZA%3D%3D"><i class="fab fa-instagram"></i></a>
					
                    <a href="https://www.youtube.com/@kidzoniacredence"><i class="fab fa-youtube"></i></a>
					
                    <a href="https://x.com/KidzoniaC13530"><i class="fab fa-x-twitter"></i></a>
					
                    <a href="https://www.linkedin.com/company/kidzonia-credence/"><i class="fab fa-linkedin"></i></a>
					
					
					
					
                </div>
            </div>
        </div>

        <!-- NAV -->

        <nav class="navbar navbar-expand-lg kcis-main-nav sticky-top">
            <div class="container">
                <a class="navbar-brand" href="#"
                    ><img src="https://kidzoniacredenceinternational.org/uploads/2023/04/kcis-logo.png"
                /></a>
                <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#whykcis">Why KCIS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#academics">Academics</a></li>
                        <li class="nav-item"><a class="nav-link" href="#lifeat">Life at KCIS</a></li>
                        <li class="nav-item"><a class="nav-link" href="#testimonials">Testimonials</a></li>
                        <li class="nav-item"><a class="btn btn-main ms-3" href="#admissions">Admissions</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- HERO -->

        <section class="kcis-hero hero-overley d-none d-sm-block" id="admissions">
            <div class="container">
                <div class="row align-items-center">
                    <!-- LEFT CONTENT -->
                    <div class="col-lg-6" data-aos="fade-right">
                        <span class="kcis-admission-tag"> Kidzonia Credence International School</span>

                        <h1 class="kcis-herobadge my-3" style="font-size: 35px">Admissions Open 2026–27</h1>

                        <h2 class="kcis-grade-line">Nursery to Grade VIII</h2>

                        <p class="kcis-hero-desc">
                            India’s Only <strong>Thematic School</strong> offering<br />
                            <strong>Cambridge & CBSE curriculum</strong> in Hyderabad.
                        </p>

                        <!-- TRUST BADGES -->
                        <div class="kcis-hero-badges mb-3">
                            <span class="badge safe"><i class="fa-solid fa-shield-halved"></i> Safe Campus</span>
                            <span class="badge learn"><i class="fa-solid fa-lightbulb"></i> Experiential Learning</span>
                            <span class="badge care"><i class="fa-solid fa-heart"></i> Caring Educators</span>
                        </div>
                    </div>

                    <!-- RIGHT FORM -->
                    <div class="col-lg-6" data-aos="zoom-in">
                        <div class="kcis-hero-card">
                            <div class="kcis-form-box" id="form" data-aos="fade-left">
                                <h3 class="text-dark text-center" style="color: #122051 !important">Enquiry Now</h3>

                                <form id="admissionForm" action="<?php echo base_url(); ?>check_admission_enquiry" class="add-ajax-redirect-image-form" onsubmit="return checkForm(this);" method='POST'>
                                <input type="hidden" id="web_source" name="web_source" value="admission-enquiry2026">
                                <input type="hidden" name="form_type" value="admission_enquiry">
                                    <!-- Parent Name -->
                                    <input type="text" name="parent_name" placeholder="Parent Name" required />

                                    <!-- Phone -->
                                    <div class="kcis-phone-field">
                                        <span class="kcis-country-code">+91</span>
                                        <input
                                            type="tel"
                                            name="phone"
                                            placeholder="Mobile Number"
                                            pattern="[0-9]{10}"
                                            maxlength="10"
                                            required
                                        />
                                    </div>

                                    <!-- Student Name -->
                                    <input type="text" name="child_name" placeholder="Student Name" required />

                                    <!-- Admission Class -->
                                    <select name="class_id" required>
                                        <option value="">Admission For Class</option>
                                        <?php foreach ($class_list as $class) { ?>
                                            <option value="<?php echo $class['id']; ?>"><?php echo $class['name']; ?>
                                            </option>
                                          <?php } ?>
                                    </select>

                                    <!-- Email -->
                                    <input type="email" name="email" placeholder="Email Address" required />

                                    <!-- Location -->
                                    <select name="location" required>
                                        <option value="">Select Location</option>
                                        <option value="ameenpur">Ameenpur</option>
                                        <option value="nallagandla">Nallagandla</option>
                                    </select>

                                    <!-- How did you hear about us -->
                                    <select name="know_about_us" required>
                                        <option value="">How did you hear about us?</option>
                                        <option value="Banner">Banner</option>
                                        <option value="Community Event">Community Event</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Field Data">Field Data</option>
                                        <option value="Flyers">Flyers</option>
                                        <option value="Friends">Friends</option>
                                        <option value="Google">Google</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="No parking Board">No Parking Board</option>
                                        <option value="Parent Referral">Parent Referral</option>
                                        <option value="Pole Kiosk">Pole Kiosk</option>
                                        <option value="Poster Ads">Poster Ads</option>
                                        <option value="Previous Student">Previous Student</option>
                                        <option value="Pro Eves">Pro Events</option>
                                        <option value="School Hoarding">School Hoarding</option>
                                        <option value="Sibling">Sibling</option>
                                        <option value="Staff Child">Staff Child</option>
                                        <option value="Staff Referral">Staff Referral</option>
                                        <option value="Website">Website</option>
                                        <option value="WhatsApp">WhatsApp</option>
                                    </select>
                                    
                                    <div class="col-md-12">
                                       <div class="form-group mb-2">
                                           <label class="col-theme-blue  text-black">Security Check: What is <?php echo generate_math_captcha(); ?> ?</label>
                                           <input type="number" name="captcha_answer" class="form-control mb-3 py-3" placeholder="Enter answer" required>
                                       </div>
                                   </div>

                                    <!-- Submit -->
                                    <button type="submit" class="btn_verify">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="kcis-hero hero-overley d-block d-sm-none" id="admissions">
            <div class="container">
                <div class="row align-items-center">
                    <!-- LEFT CONTENT -->

                    <div class="col-lg-6 text-center" data-aos="fade-right">
                        <span class="kcis-admission-tag"> Kidzonia Credence International School</span>

                        <h5
                            style="
                                font-family: system-ui;
                                font-size: 35px;
                                background: #fbbb06;
                                border-radius: 15px;
                                padding: 3px;
                            "
                        >
                            Admissions Open 2026–27
                        </h5>

                        <h2 style="font-size: 30px">Nursery to Grade VIII</h2>

                        <p class="kcis-hero-desc">
                            India’s Only <strong>Thematic School</strong> offering<br />
                            <strong>Cambridge & CBSE curriculum</strong> in Hyderabad.
                        </p>

                        <!-- TRUST BADGES -->
                        <div class="kcis-hero-badges mb-3">
                            <span class="badge safe"><i class="fa-solid fa-shield-halved"></i> Safe Campus</span>
                            <span class="badge learn"><i class="fa-solid fa-lightbulb"></i> Experiential Learning</span>
                            <span class="badge care"><i class="fa-solid fa-heart"></i> Caring Educators</span>
                        </div>
                    </div>

                    <!-- RIGHT FORM -->
                    <div class="col-lg-6" data-aos="zoom-in">
                        <div class="kcis-hero-card">
                            <div class="kcis-form-box" id="form" data-aos="fade-left">
                                <h3 class="text-dark text-center" style="color: #122051 !important">Enquiry Now</h3>

                                <form id="admissionForm" action="<?php echo base_url(); ?>check_admission_enquiry" class="add-ajax-redirect-image-form" onsubmit="return checkForm(this);" method='POST'>
                                <input type="hidden" id="web_source" name="web_source" value="admission-enquiry2026">
                                <input type="hidden" name="form_type" value="admission_enquiry">
                                    <!-- Parent Name -->
                                    <input type="text" name="parent_name" placeholder="Parent Name" required />

                                    <!-- Phone -->
                                    <div class="kcis-phone-field">
                                        <span class="kcis-country-code">+91</span>
                                        <input
                                            type="tel"
                                            name="phone"
                                            placeholder="Mobile Number"
                                            pattern="[0-9]{10}"
                                            maxlength="10"
                                            required
                                        />
                                    </div>

                                    <!-- Student Name -->
                                    <input type="text" name="child_name" placeholder="Student Name" required />

                                    <!-- Admission Class -->
                                    <select name="class_id" required>
                                        <option value="">Admission For Class</option>
                                        <option value="123">Daycare</option>
                                        <option value="124">Summer Camp</option>
                                        <option value="125">Play Group</option>
                                        <option value="126">Nursery</option>
                                        <option value="127">Kidzo Junior</option>
                                        <option value="128">Kidzo Senior</option>
                                        <option value="129">Grade I</option>
                                        <option value="130">Grade II</option>
                                        <option value="131">Grade III</option>
                                        <option value="132">Grade IV</option>
                                        <option value="133">Grade V</option>
                                        <option value="134">Grade VI</option>
                                        <option value="135">Grade VII</option>
                                    </select>

                                    <!-- Email -->
                                    <input type="email" name="email" placeholder="Email Address" required />

                                    <!-- Location -->
                                    <select name="location" required>
                                        <option value="">Select Location</option>
                                        <option value="ameenpur">Ameenpur</option>
                                        <option value="nallagandla">Nallagandla</option>
                                    </select>

                                    <!-- How did you hear about us -->
                                    <select name="know_about_us" required>
                                        <option value="">How did you hear about us?</option>
                                        <option value="Banner">Banner</option>
                                        <option value="Community Event">Community Event</option>
                                        <option value="Facebook">Facebook</option>
                                        <option value="Field Data">Field Data</option>
                                        <option value="Flyers">Flyers</option>
                                        <option value="Friends">Friends</option>
                                        <option value="Google">Google</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="No parking Board">No Parking Board</option>
                                        <option value="Parent Referral">Parent Referral</option>
                                        <option value="Pole Kiosk">Pole Kiosk</option>
                                        <option value="Poster Ads">Poster Ads</option>
                                        <option value="Previous Student">Previous Student</option>
                                        <option value="Pro Eves">Pro Events</option>
                                        <option value="School Hoarding">School Hoarding</option>
                                        <option value="Sibling">Sibling</option>
                                        <option value="Staff Child">Staff Child</option>
                                        <option value="Staff Referral">Staff Referral</option>
                                        <option value="Website">Website</option>
                                        <option value="WhatsApp">WhatsApp</option>
                                    </select>
                                    
                                    <div class="col-md-12">
                                       <div class="form-group mb-2">
                                           <label class="col-theme-blue  text-black">Security Check: What is <?php echo generate_math_captcha(); ?> ?</label>
                                           <input type="number" name="captcha_answer" class="form-control mb-3 py-3" placeholder="Enter answer" required>
                                       </div>
                                   </div>

                                    <!-- Submit -->
                                    <button type="submit" class="btn_verify">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FEATURES -->
        <section id="whykcis">
            <div class="container">
                <div class="kcis-section-title">
                    <span>WHY KIDZONIA CREDENCE</span>
                    <h2>What Makes Us Different</h2>
                </div>

                <div class="row g-4">
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-graduation-cap"></i>
                            <h5>Cambridge & CBSE Curriculum</h5>
                            <p>Global exposure rooted in strong Indian academics.</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-lightbulb"></i>
                            <h5>Thematic Learning</h5>
                            <p>Experiential & project-based learning for deep understanding.</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-heart"></i>
                            <h5>Values & Confidence</h5>
                            <p>Focus on discipline, values and leadership skills.</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-chalkboard-teacher"></i>
                            <h5>Caring Teachers</h5>
                            <p>Highly qualified and child-friendly educators.</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-shield-heart"></i>
                            <h5>Safe Campus</h5>
                            <p>Secure, hygienic and child-friendly environment.</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-brain"></i>
                            <h5>Holistic Development</h5>
                            <p>Balanced focus on academics, sports, creativity and life skills.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="kcis-bg-light">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6" data-aos="fade-right">
                        <div class="sec-title">
                            <span>STUDENT OUTCOMES</span>
                            <h2>What Your Child Gains</h2>
                        </div>
                        <p>
                            Children at Kidzonia Credence grow in an environment where learning is joyful, meaningful
                            and balanced. Our thematic and experiential approach helps every child understand concepts
                            deeply, build confidence and develop essential life skills from an early age.
                        </p>
                        <ul class="list-unstyled fs-5">
                            <li class="mb-3">✔ Enjoys learning through hands-on activities</li>
                            <li class="mb-3">✔ Builds strong academic foundation</li>
                            <li class="mb-3">✔ Develops communication & thinking skills</li>
                            <li class="mb-3">✔ Grows with confidence & curiosity</li>
                            <li class="mb-3">✔ Learns in a nurturing environment</li>
                        </ul>
                    </div>

                    <div class="col-md-6" data-aos="fade-left">
                        <img src="<?php echo base_url(); ?>assets/admissions2026/images/About-us.png" class="img-fluid rounded-4" />
                    </div>
                </div>
            </div>
        </section>
        <section id="academics">
            <div class="container">
                <div class="kcis-section-title">
                    <span>PROGRAMS</span>
                    <h2>Programs Offered</h2>
                </div>

                <div class="row g-4 text-center">
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="kcis-fun-card">
                            <div class="kcis-fun-icon">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/pp.png" alt="Early Years" />
                            </div>
                            <h5>Early Years</h5>
                            <p>Nursery • LKG • UKG</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="kcis-fun-card">
                            <div class="kcis-fun-icon">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/m.png" alt="Early Years" />
                            </div>
                            <h5>Primary School</h5>
                            <p>Grades I to V</p>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="kcis-fun-card">
                            <div class="kcis-fun-icon">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/web.png" alt="Early Years" />
                            </div>
                            <h5>Middle School</h5>
                            <p>Grades VI to VIII</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="kcis-bg-light">
            <div class="container">
                <div class="kcis-section-title">
                    <span>OUR APPROACH</span>
                    <h2>How Children Learn</h2>
                    <p>Learning through themes, projects & real-world experiences</p>
                </div>

                <div class="row g-4">
                    <div class="col-md-3" data-aos="flip-up">
                        <div class="kcis-fun-card">
                            <div class="kcis-fun-icon">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/Hands-on-Projects.png" alt="Hands-on Projects" />
                            </div>
                            <h6>Hands-on Projects</h6>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="flip-up" data-aos-delay="100">
                        <div class="kcis-fun-card">
                            <div class="kcis-fun-icon">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/Research-Learning.png" alt="Research Learning" />
                            </div>
                            <h6>Research Learning</h6>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="flip-up" data-aos-delay="200">
                        <div class="kcis-fun-card">
                            <div class="kcis-fun-icon">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/Field-Trips.png" alt="Field Trips" />
                            </div>
                            <h6>Field Trips</h6>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="flip-up" data-aos-delay="300">
                        <div class="kcis-fun-card">
                            <div class="kcis-fun-icon">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/Real-Life-Applications.png" alt="Real-Life Applications" />
                            </div>
                            <h6>Real-Life Applications</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container">
                <div class="kcis-section-title">
                    <span>CAMPUS & SAFETY</span>
                    <h2>Safe, Secure & Child-Friendly</h2>
                </div>

                <div class="row g-4">
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-video"></i>
                            <h6>CCTV-monitored campus</h6>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-hospital"></i>
                            <h6>Secure and hygienic environment</h6>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-book"></i>
                            <h6>Well-equipped labs and library</h6>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-mobile-screen"></i>
                            <h6>Parent mobile app for regular updates</h6>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-user-group"></i>
                            <h6>Appropriate teacher-student ratio</h6>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-chalkboard-user"></i>
                            <h6>Trained Support Staff</h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="kcis-section-title">
                    <h2>Learning That Sparks Joy</h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-4" data-aos="flip-left">
                        <div class="kcis-fun-card">
                            <div class="kcis-fun-icon">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/paint.png" alt="Real-Life Applications" />
                            </div>
                            <h5>Creative Arts</h5>
                            <p>Art,music,dance woven into academics.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="flip-left">
                        <div class="kcis-fun-card">
                            <div class="kcis-fun-icon">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/learn.png" alt="Real-Life Applications" />
                            </div>
                            <h5>STEM Learning</h5>
                            <p>Robotics, coding & innovation labs.</p>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="flip-left">
                        <div class="kcis-fun-card">
                            <div class="kcis-fun-icon">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/sport.png" alt="Real-Life Applications" />
                            </div>
                            <h5>Sports & Play</h5>
                            <p>Fitness, teamwork & confidence.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- GALLERY -->

        <section class="life-lightbox" id="lifeat">
            <div class="container">
                <div class="kcis-section-title text-center">
                    <span>MOMENTS OF JOY, LEARNING AND CREATIVITY</span>
                    <h2>Life at Kidzonia Credence International School</h2>
                </div>

                <div class="kcis-gallery-grid">
                    <a href="<?php echo base_url(); ?>assets/admissions2026/images/l1.png" class="kcis-lightbox-item">
                        <img src="<?php echo base_url(); ?>assets/admissions2026/images/l1.png" alt="Classroom Activities" />
                        <span class="overlay">Classroom Activities</span>
                    </a>

                    <a href="<?php echo base_url(); ?>assets/admissions2026/images/l2.png" class="kcis-lightbox-item">
                        <img src="<?php echo base_url(); ?>assets/admissions2026/images/l2.png" alt="Sports & Fitness" />
                        <span class="overlay">Sports & Fitness</span>
                    </a>

                    <a href="<?php echo base_url(); ?>assets/admissions2026/images/l3.png" class="kcis-lightbox-item">
                        <img src="<?php echo base_url(); ?>assets/admissions2026/images/l3.png" alt="Cultural Events" />
                        <span class="overlay">Cultural Events</span>
                    </a>

                    <a href="<?php echo base_url(); ?>assets/admissions2026/images/l4.png" class="kcis-lightbox-item">
                        <img src="<?php echo base_url(); ?>assets/admissions2026/images/l4.png" alt="Outdoor Learning" />
                        <span class="overlay">Outdoor Learning</span>
                    </a>
                </div>
            </div>

            <!-- Lightbox Modal -->
            <div class="kcis-lightbox-modal" id="lightboxModal">
                <span class="lightbox-close">&times;</span>

                <span class="lightbox-prev">&#10094;</span>
                <img class="kcis-lightbox-img" id="lightboxImg" />
                <span class="lightbox-next">&#10095;</span>
            </div>
        </section>

        <!-- SPORTS -->

        <section class="kcis-bg-light">
            <div class="container">
                <div class="kcis-section-title">
                    <span>SPORTS FOR ALL</span>
                    <h2>Play. Compete. Grow.</h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-swimmer"></i>
                            <h5>Swimming</h5>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-futbol"></i>
                            <h5>Football</h5>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="kcis-fun-card">
                            <i class="fa-solid fa-basketball"></i>
                            <h5>Basketball</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="kcis-bg-light" id="testimonials">
            <div class="container">
                <div class="kcis-section-title">
                    <span>PARENT FEEDBACK</span>
                    <h2>Words From Parents</h2>
                </div>
                <div class="row g-4">
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="kcis-video-card">
                            <div class="kcis-video-thumb" onclick="playVideo(this)">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/test1.png" alt="Video Testimonial" />
                                <div class="kcis-play-btn"></div>
                            </div>

                            <video class="testimonial-video" controls>
                                <source src="<?php echo base_url(); ?>assets/admissions2026/images/testimonils1.mp4" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="kcis-video-card">
                            <div class="kcis-video-thumb" onclick="playVideo(this)">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/test2.png" alt="Video Testimonial" />
                                <div class="kcis-play-btn"></div>
                            </div>

                            <video class="testimonial-video" controls>
                                <source src="<?php echo base_url(); ?>assets/admissions2026/images/testimonils2.mp4" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="kcis-video-card">
                            <div class="kcis-video-thumb" onclick="playVideo(this)">
                                <img src="<?php echo base_url(); ?>assets/admissions2026/images/test3.png" alt="Video Testimonial" />
                                <div class="kcis-play-btn"></div>
                            </div>

                            <video class="testimonial-video" controls>
                                <source src="<?php echo base_url(); ?>assets/admissions2026/images/testimonils3.mp4" type="video/mp4" />
                            </video>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FLOATING BUTTONS -->
        <div class="kcis-floating-actions">
            <a href="tel:+919150226226" class="float-btn call"><i class="fa fa-phone"></i></a>
            <a href="https://wa.me/919150226226" class="float-btn whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>

        <!-- Scroll Arrow -->
        <button id="scrollArrow" onclick="scrollPage()">⬇</button>

        <footer class="school-footer">
            <div class="footer-wrapper">
                <!-- Column 1 : About -->
                <div class="kcis-footer-col">
                    <h3>Kidzonia Credence International School</h3>
                    <p>
                        A joyful, child-centric school offering a blend of Cambridge & CBSE curriculum. Our campuses are
                        designed to nurture curiosity, confidence, values and academic excellence in a safe and
                        inspiring environment.
                    </p>
                </div>

                <!-- Column 2 : Branch 1 -->
                <div class="kcis-footer-col">
                    <h4>Ameenpur Campus</h4>
                    <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> Kidzonia Credence International School<br />
                        Plot No 31 & 32, Survey Nos: 552 & 553, ODF Colony Phase-1, Ameenpur Mandal, Sangareddy,
                        Hyderabad, Telangana – 502032
                    </p>
                    <p><i class="fa fa-phone-square" aria-hidden="true"></i> +916309811800</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> info.kcis@credenceinternational.org</p>
                </div>

                <!-- Column 3 : Branch 2 -->
                <div class="kcis-footer-col">
                    <h4>Nallagandla Campus</h4>
                    <p>
                        <i class="fa fa-map-marker" aria-hidden="true"></i> Kidzonia Credence International School<br />
                        Plot No 12, 13, 14, Navodaya Housing Society, Survey Nos: 10, 11, 12, Kancha Gachibowli,
                        Nallagandla Rd, Gopanpally, Hyderabad, Telangana – 500019
                    </p>
                    <p><i class="fa fa-phone-square" aria-hidden="true"></i> +919100222967</p>
                    <p><i class="fa fa-envelope" aria-hidden="true"></i> info.kcis@credenceinternational.org</p>
                </div>
            </div>

            <!-- Bottom Copyright -->
            <div class="kcis-footer-bottom">
                © <span id="year"></span> Kidzonia Credence International School. All Rights Reserved.
            </div>
        </footer>

        <script>
            document.getElementById("year").textContent = new Date().getFullYear();
        </script>

        <a href="https://wa.me/919150226226" class="whatsapp"><i class="fab fa-whatsapp"></i></a>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script src="<?php echo base_url(); ?>assets/admissions2026/custom.js"></script>

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/sweetalert2.all.min.js"></script>

        <script>
            const arrow = document.getElementById("scrollArrow");

            window.addEventListener("scroll", () => {
                if (window.scrollY > 200) {
                    arrow.style.display = "block";
                    arrow.innerHTML = "⬆";
                } else {
                    arrow.style.display = "none";
                }
            });

            function scrollPage() {
                if (window.scrollY > 200) {
                    window.scrollTo({ top: 0, behavior: "smooth" });
                } else {
                    window.scrollTo({ top: document.body.scrollHeight, behavior: "smooth" });
                }
            }
        </script>

<script>
        jQuery(document).ready(function($) {
            console.log('jQuery ready - attaching form handler...');
            
            // Phone number validation - only digits
            $('input[name="phone"]').on('input', function() {
                this.value = this.value.replace(/[^\d]/g, '');
            });

            // AJAX Form Submission Handler - Exact copy from include_bottom.php
            $('.add-ajax-redirect-image-form').submit(function(e) {
                e.preventDefault();
                console.log('Form submit intercepted by AJAX handler!');
                
                // $(".loader").show(); // 🔹 commented preloader
                $('.btn_verify').attr("disabled", true);
                $('.btn_verify').html('Loading...');
                var url = $(this).attr('action');
        
                // Get form - use the form that triggered the submit
                var form = this;
                
                // Add country code +91 (since intlTelInput is not used in new form)
                var existingField = form.querySelector('input[name="phone_country_code"]');
                if (existingField) {
                    existingField.remove();
                }
                var hiddenInput = document.createElement('input');
                hiddenInput.type = 'hidden';
                hiddenInput.name = 'phone_country_code';
                hiddenInput.value = '+91';
                form.appendChild(hiddenInput);
                
                var data = new FormData(form);
        
                // Debug: Log FormData contents
                console.log('FormData entries:');
                for (var pair of data.entries()) {
                    console.log(pair[0] + ': ' + pair[1]);
                }
        
                $.ajax({
                  type: 'POST',
                  url: url,
                  async: true,
                  dataType: 'json',
                  data: data,
                  processData: false,
                  contentType: false,
                  success: function(res) {
                     console.log('AJAX Success Response:', res);
                     // IMPORTANT: Always reset captcha after response
                    // if (typeof grecaptcha !== "undefined") {
                    //     grecaptcha.reset();
                    // }

                    if (res.status == '200' || res.status == 200) {
                      // $(".loader").fadeOut("slow"); // 🔹 commented preloader
                      window.location.href = res.url; 
                    } else {
                      Swal.fire({
                        title: "Error!",
                        text: res.message,
                        icon: "error",
                        customClass: {
                          confirmButton: "btn btn-primary"
                        },
                        buttonsStyling: !1
                      });
                      $('.btn_verify').html('Submit Now');
                      $('.btn_verify').attr("disabled", false);
                      // $(".loader").fadeOut("slow"); // 🔹 commented preloader
                    }
                  },
                  error: function(xhr, status, error) {
                      console.error('AJAX Error:', xhr, status, error);
                      console.error('Response Text:', xhr.responseText);
                      
                      // Reset reCAPTCHA
                    //   if (typeof grecaptcha !== "undefined") {
                    //       grecaptcha.reset();
                    //   }
                      
                      // Try to parse error response
                      var errorMessage = "An error occurred. Please try again.";
                      try {
                          if (xhr.responseText) {
                              var errorRes = JSON.parse(xhr.responseText);
                              if (errorRes.message) {
                                  errorMessage = errorRes.message;
                              }
                          }
                      } catch(e) {
                          console.error('Error parsing response:', e);
                      }
                      
                      Swal.fire({
                        title: "Error!",
                        text: errorMessage,
                        icon: "error",
                        customClass: {
                          confirmButton: "btn btn-primary"
                        },
                        buttonsStyling: !1
                      });
                      $('.btn_verify').html('Submit Now');
                      $('.btn_verify').attr("disabled", false);
                  }
                });
                return false;
            });
            
            console.log('Form handler attached successfully!');
        });

        </script>
    </body>
</html>
