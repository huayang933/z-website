<?php include 'header.php'; ?>
<?php include 'topnav.php'; ?>

    <div data-bs-spy="scroll" data-bs-target="#metrix-scrollspy" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true">
        <!-- Banner Section Start -->
        <section class="page-banner-one bg-norepeat-cover after-header">
            <div class="container">
                <div class="page-banner-content">
                    <h1>Contact Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>
    
        <!-- Contact Information Section Start -->
        <section class="contact-info-one after-banner">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="page-head-one">
                            <h2 class="page-head-one-title">Find Us There</h2>
                            <img class="page-head-one-dots" src="assets/images/icons/page-banner-one-dots.png" alt="dots" />
                            <p class="page-head-one-short">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                Dolore omnis quaerat nostrum.</p>
                        </div>
                    </div>
                </div>
    
                <div class="row">
    
                    <div class="col-12">
                        <div class="contact-one-card">
                            <div class="row">
    
                                <div class="col-md-6 col-lg-3">
                                    <div class="contact-one-img-icon">
                                        <img src="assets/images/icons/icon-office-location.svg" alt="contact-icon" />
                                    </div>
                                    <h3 class="contact-one-title">Office Location</h3>
                                    <p class="contact-one-text">12 Street Name,<br /> California, United States</p>
                                </div>
    
                                <div class="col-md-6 col-lg-3">
                                    <div class="contact-one-img-icon">
                                        <img src="assets/images/icons/icon-office-hour.svg" alt="contact-icon" />
                                    </div>
                                    <h3 class="contact-one-title">Office Hours</h3>
                                    <p class="contact-one-text">Saturday - Thursday</p>
                                    <p class="contact-one-text">09:00 A.M - 05:00 P.M</p>
                                </div>
    
                                <div class="col-md-6 col-lg-3">
                                    <div class="contact-one-img-icon">
                                        <img src="assets/images/icons/icon-phone-contact.svg" alt="contact-icon" />
                                    </div>
                                    <h3 class="contact-one-title">Phone</h3>
                                    <a class="contact-one-text" href="tel:+1234567890">+123 4567 890</a>
                                    <a class="contact-one-text" href="tel:+0987654321">+098 7654 321</a>
                                </div>
    
                                <div class="col-md-6 col-lg-3">
                                    <div class="contact-one-img-icon">
                                        <img src="assets/images/icons/icon-email-address.svg" alt="contact-icon" />
                                    </div>
                                    <h3 class="contact-one-title">Email</h3>
                                    <a class="contact-one-text" href="mailto:help.omnibubble@gmail.com">help.omnibubble@gmail.com</a>
                                    <a class="contact-one-text" href="mailto:help.omnibubble@gmail.com">help.omnibubble@gmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
    
                </div>
            </div>
        </section>
        <!-- Contact Information Section Ends -->
    
        <!-- Contact Form Section Start -->
        <section class="page-conatct-one">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-head-one">
                            <h2 class="page-head-one-title">Let's Talk About Your Idea</h2>
                            <img class="page-head-one-dots" src="assets/images/icons/page-banner-one-dots.png" alt="dots" />
                            <p class="page-head-one-short">Check these testimonials from our satisfied customers!</p>
                        </div>
    
                        <div class="page-contact-one-form-wrapper text-center">
                            <form class="d-flex flex-column gap-3" @submit.prevent="submitForm">
                                <pre>{{formData}}</pre>
                                <div class="form-group">
                                    <input v-model="formData.name" type="text" id="contactGetName" class="input-two" placeholder="Your Name" />
                                </div>
                                <div class="form-group">
                                    <input v-model="formData.email" type="email" id="contactGetMail" class="input-two" placeholder="Your Email" />
                                </div>
                                <div class="form-group">
                                    <input v-model="formData.contact" type="text" id="contactGetPhone" class="input-two" placeholder="Your Phone" />
                                </div>
                                <div class="form-group">
                                    <textarea v-model="formData.message" type="text" id="contactGetMessage" class="textarea-two"
                                        placeholder="Your Message" rows="8"></textarea>
                                </div>
                                <button v-if="status == 'onSubmit'" class="btn-common btn-submit-two mt-0"> Send Message </button>
                                <button v-else-if="status == 'submiting'" class="btn-common btn-submit-two mt-0"> Loding.. </button>
                                <button v-if="status == 'successful'" class="btn-common btn-submit-two mt-0"> Success </button>
                            </form>
                        </div>
    
                    </div>
    
                    <div class="col-lg-6">
                        <div class="map-wrapper">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3719.7287297413645!2d72.83747162601586!3d21.20293258177217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04ef82612f015%3A0xf69a23bbf800fd4c!2sRailway%20Station%20Area%2C%20Varachha%2C%20Surat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1711706973549!5m2!1sen!2sin"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Form Section Ends -->
    
    </div>

    <?php include 'footer.php'; ?>