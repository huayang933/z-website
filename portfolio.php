<?php include 'header.php'; ?>
<?php include 'topnav.php'; ?>

    <div data-bs-spy="scroll" data-bs-target="#metrix-scrollspy" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true">
        <!-- Banner Section Start -->
        <section class="page-banner-one bg-norepeat-cover after-header">
            <div class="container">
                <div class="page-banner-content">
                    <h1>Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
    
        <!-- Blog Section Start -->
        <section class="blog-one after-banner">
            <div class="container">
                <div class="d-grid blog-wrapper">

                    <div class="blog-one-wrapper" v-for="image">
                        <div class="blog-one-img ratio ratio-16x9">
                            <img src="assets/images/blog/blog-01.jpg" alt="blog-images" />
                        </div>
                        <div class="blog-one-content">
                            <a href="singleblog.html" class="blog-one-link"></a>
                            <h2 class="blog-one-title">Lorem Ipsum is simply</h2>
                            <p class="blog-one-text">Lorem Ipsum is dummy text of the printing and type setting
                                industry.</p>
                            <div class="blog-one-time"><i class="fas fa-clock"></i> November 21, 2019</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    
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
                                    <li>
                                        <a href="home.html" class="footer-one-link">Home</a>
                                    </li>
                                    <li>
                                        <a href="about.html" class="footer-one-link">About</a>
                                    </li>
                                    <li>
                                        <a href="contact.html" class="footer-one-link">Contact us</a>
                                    </li>
                                    <li>
                                        <a href="review.html" class="footer-one-link">Reviews</a>
                                    </li>
                                    <li>
                                        <a href="faq.html" class="footer-one-link">Faqs</a>
                                    </li>
                                    <li>
                                        <a href="blog.html" class="footer-one-link">News</a>
                                    </li>
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
    
                            </div>
                        </div>
    
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
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="row">
                    <!-- Copyright Text -->
                    <div class="footer-one-copyright">
                        <label class="m-0">Copyright <strong>&COPY;</strong> 2024. All Rights Reserved.</label>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <?php include 'footer.php'; ?>