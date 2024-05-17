<?php include 'header.php'; ?>

    <!-- Header Start -->
    <header class="transparent d-flex align-items-center justify-content-between w-100" id="metrix-scrollspy">
        <!-- Navbar Start -->
        <nav class="navbar navbar-expand-lg w-100" id="mainNav">
            <div class="container">
                <a class="brand" href="home.html">
                    <img src="assets/images/logo/logo.svg" alt="logo" />
                </a>
                <button class="navbar-toggler toggler ms-auto" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="before-menu"><i class="far fa-bars"></i></span>
                    <span class="after-menu"><i class="fal fa-times"></i></span>
                </button>
                <div class="collapse navbar-collapse position-lg-relative justify-content-end" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownHome" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Home
                                <i data-icon="arrowDown"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownHome">
                                <a class="dropdown-item drop-link" href="home.html">Home Demo 01</a>
                                <a class="dropdown-item drop-link" href="home2.html">Home Demo 02</a>
                                <a class="dropdown-item drop-link" href="home3.html">Home Demo 03</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownPages" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                                <i data-icon="arrowDown"></i>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdownPages">
                                <a class="dropdown-item drop-link" href="about.html">Abouts Us</a>
                                <a class="dropdown-item drop-link" href="blog.html">Blog</a>
                                <a class="dropdown-item drop-link" href="contact.html">Contact Us</a>
                                <a class="dropdown-item drop-link active" href="faq.html">FAQ</a>
                                <a class="dropdown-item drop-link" href="review.html">Reviews</a>
                                <a class="dropdown-item drop-link" href="login.html">Login</a>
                                <a class="dropdown-item drop-link" href="signup.html">Signup</a>
                                <a class="dropdown-item drop-link" href="forget-password.html">Forget Password</a>
                                <a class="dropdown-item drop-link" href="countdown.html">Coming Soon</a>
                                <a class="dropdown-item drop-link" href="404.html">Error 404</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="home.html#features">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="home.html#works">How it works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="home.html#screenshots">Screenshots</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="home.html#pricing">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="home.html#reviews">Reviews</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="home.html#faqs">Faqs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger" href="home.html#contacts">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </header>
    
    <div data-bs-spy="scroll" data-bs-target="#metrix-scrollspy" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true">
        <!-- Banner Section Start -->
        <section class="page-banner-one bg-norepeat-cover after-header with-faq-bar">
            <div class="container">
                <div class="page-banner-content">
                    <h1>Frequently Asked Questions</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Faqs</li>
                        </ol>
                    </nav>
                    <div class="page-ask-faq">
                        <i data-icon="search"></i>
                        <input type="text" id="askFaq" placeholder="Ask a question">
                    </div>
                </div>
            </div>
        </section>
        <!-- Short Contact Information Section Start -->
        <section class="faq-contact-one after-banner">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="page-head-one">
                            <h2 class="page-head-one-title">Still no Luck? We can Help!</h2>
                            <img class="page-head-one-dots" src="assets/images/icons/page-banner-one-dots.png" alt="dots" />
                            <p class="page-head-one-short ms-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Sed quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="row faq-contact-one-wrapper-right">
                            <div class="col-md-6">
                                <div class="feature-one-card">
                                    <div class="feature-one-img-icon">
                                        <img src="assets/images/icons/icon-email-address.svg" alt="feature-icon">
                                    </div>
                                    <h3 class="feature-one-title">Can't find your answers?</h3>
                                    <p class="feature-one-text">We want to answer all of your queries. Get in touch and
                                        we'll get back to you as soon as we can.</p>
                                    <a class="btn-common feature-one-btn" href="mailto:help.omnibubble@gmail.com">Email Us</a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="feature-one-card">
                                    <div class="feature-one-img-icon">
                                        <img src="assets/images/icons/icon-phone-contact.svg" alt="feature-icon">
                                    </div>
                                    <h3 class="feature-one-title">Technical Question</h3>
                                    <p class="feature-one-text">Have some technical questions? Hit us on community page
                                        or just say hello or contact our support .</p>
                                    <a class="btn-common feature-one-btn" href="JavaScript:void(0)">Contact Us</a>
                                </div>
                            </div>
    
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Short Contact Information Section Ends -->
    
        <!-- Faq Section Start -->
        <section class="faq-one bg-norepeat-cover">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-head-one">
                            <h2 class="page-head-one-title">Frequently Asked Questions</h2>
                            <img class="page-head-one-dots" src="assets/images/icons/page-banner-one-dots.png" alt="dots" />
                            <p class="page-head-one-short">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed
                                quis accumsan nisi Ut ut felis congue nisl hendrerit commodo.</p>
                        </div>
                    </div>
                </div>
    
                <div class="row">
                    <div class="offset-md-1 col-md-10 offset-lg-2 col-lg-8">
                        <div class="faq-data-wrapper home2_faq_inner">
                            <div class="accordion" id="accordionExample">
    
                                <div class="card faq-one-card accordion-item">
                                    <h3 class="mb-0">
                                        <button class="btn faq-one-btn-que border-0 collapsed accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                            aria-expanded="true" aria-controls="collapseOne">
                                            What is the best features and services we
                                            deiver?
                                        </button>
                                    </h3>
                                    <div id="collapseOne" class="collapse" aria-labelledby="FaqOne"
                                        data-parent="#accordionExample" style="">
                                        <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus
                                            est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum
                                            voluptatum esse error?
                                        </div>
                                    </div>
                                </div>
    
                                <div class="card faq-one-card accordion-item">
                                    <h3 class="mb-0">
                                        <button class="btn faq-one-btn-que border-0 collapsed accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo"
                                            aria-expanded="false" aria-controls="flush-collapseTwo">
                                            Why this app important to me?
    
                                        </button>
                                    </h3>
                                    <div id="flush-collapseTwo" class="accordion-collapse collapse"
                                        data-bs-parent="#accordionFlushExample">
                                        <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim necessitatibus
                                            est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum, dolorum
                                            voluptatum esse error?
                                        </div>
                                    </div>
                                </div>
    
                                <div class="card faq-one-card accordion-item">
                                    <h3 class="mb-0">
                                        <button class="btn faq-one-btn-que border-0 collapsed accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            How may I take part in and purchase this
                                            Software?
                                        </button>
                                    </h3>
                                    <div id="collapseThree" class="collapse" aria-labelledby="FaqThree"
                                        data-parent="#accordionExample" style="">
                                        <div class="card-body">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.
                                            Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim
                                            necessitatibus
                                            est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum,
                                            dolorum
                                            voluptatum esse error?
                                        </div>
                                    </div>
                                </div>
    
                                <div class="card faq-one-card accordion-item">
                                    <h3 class="mb-0">
                                        <button class="btn faq-one-btn-que border-0 collapsed accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                            aria-expanded="false" aria-controls="collapseFour">
                                            What are the objectives of this
                                            Software?
                                        </button>
                                    </h3>
                                    <div id="collapseFour" class="collapse" aria-labelledby="FaqFour"
                                        data-parent="#accordionExample" style="">
                                        <div class="card-body">Lorem ipsum dolor sit amet, consectetur
                                            adipisicing elit.
                                            Dolore omnis quaerat nostrum, pariatur ipsam sunt accusamus enim
                                            necessitatibus
                                            est fugiat, assumenda dolorem, deleniti corrupti cupiditate ipsum,
                                            dolorum
                                            voluptatum esse error?
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Faq Section Ends -->
    
        <!-- Footer Start -->
        <footer class="footer-one">
            <div class="container">
                <div class="footer-style-one">
                    <div class="row">
                        <!-- Footer Logo & Text -->
                        <div class="col-6 offset-md-3 col-md-3 offset-lg-0 col-lg-2 order-2 order-lg-1">
                            <div class="footer-one-link-group text-lg-start">
                                <ul class="footer-one-link-list">
                                    <li class="footer-one-link-head">Useful Links</li>
                                    <li><a href="home.html" class="footer-one-link">Home</a></li>
                                    <li><a href="about.html" class="footer-one-link">About</a></li>
                                    <li><a href="contact.html" class="footer-one-link">Contact us</a></li>
                                    <li><a href="review.html" class="footer-one-link">Reviews</a></li>
                                    <li><a href="faq.html" class="footer-one-link">Faqs</a></li>
                                    <li><a href="blog.html" class="footer-one-link">News</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Footer Logo & Text -->
                        <!-- Footer App Download Link -->
                        <div class="col-lg-8 order-1 order-lg-2">
                            <div class="footer-one-content-wrapper">
                                <a class="footer-one-brand" href="home.html">
                                    <img src="assets/images/logo/logo-white.svg" alt="logo" />
                                </a>
                                <p class="footer-one-text">Intrinsicly matrix high standards in niches whereas
                                    intermandated niche markets. Objectively harness competitive resources.</p>
    
                                <!-- Social Links -->
                                <div class="footer-one-social-links-group">
                                    <a href="https://www.facebook.com/" target="_blank" class="footer-one-social-link">
                                        <i data-icon="facebook"></i>
                                    </a>
                                    <a href="https://www.instagram.com/" target="_blank" class="footer-one-social-link">
                                        <i data-icon="instagram"></i>
                                    </a>
                                    <a href="https://www.pinterest.com/" target="_blank" class="footer-one-social-link">
                                        <i data-icon="pinterest"></i>
                                    </a>
                                    <a href="https://twitter.com/" target="_blank" class="footer-one-social-link">
                                        <i data-icon="x"></i>
                                    </a>
                                </div>
                                <!-- Subscribe Links -->
                                <div class="footer-one-subscribe-mail">
                                    <input type="text" id="subMailOne" placeholder="Enter your email" />
                                    <button type="submit" class="btn-common footer-one-btn-mail">Subscribe</button>
                                </div>
                                <!-- Subscribe Links -->
    
                            </div>
                        </div>
                        <!-- Footer App Download Link -->
                        <!-- Social Media Links -->
                        <div class="col-6 col-md-3 col-lg-2 order-3 order-lg-3">
                            <div class="footer-one-link-group text-lg-end">
                                <ul class="footer-one-link-list">
                                    <li class="footer-one-link-head">User Account</li>
                                    <li><a href="login.html" class="footer-one-link">Sign in</a></li>
                                    <li><a href="signup.html" class="footer-one-link">Sign up</a></li>
                                    <li><a href="forget-password.html" class="footer-one-link">Reset Password</a></li>
                                    <li><a href="countdown.html" class="footer-one-link">Recover Account</a></li>
                                    <li><a href="404.html" class="footer-one-link">404 Not Found</a></li>
                                    <li><a href="countdown.html" class="footer-one-link">Coming Soon</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- Social Media Links -->
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <!-- Copyright Text -->
                    <div class="footer-one-copyright">
                        <label class="m-0">Copyright <strong>&COPY;</strong> 2024. All Rights Reserved.</label>
                    </div>
                    <!-- Copyright Text -->
                </div>
            </div>
        </footer>
        <!-- Footer Ends -->
    </div>

    <!-- Footer Ends -->
    <!-- Scroll to Top Start -->
    <a href="JavaScript:void(0)" class="toTop" onclick="toTopClick()">
        <i data-icon="arrowUp"></i>
    </a>
    <!-- Scroll to Top Ends -->

    <?php include 'footer.php'; ?>