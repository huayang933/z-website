<?php include 'header.php'; ?>
<?php include 'topnav.php'; ?>

    <div data-bs-spy="scroll" data-bs-target="#metrix-scrollspy" data-bs-root-margin="0px 0px -40%" data-bs-smooth-scroll="true">
        <!-- Banner Section Start -->
        <section class="page-banner-one bg-norepeat-cover after-header">
            <div class="container">
                <div class="page-banner-content">
                    <h1>联系我们</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="home.html">主页</a></li>
                            <li class="breadcrumb-item active" aria-current="page">联系我们</li>
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
                            <h2 class="page-head-one-title">在那里找到我们</h2>
                            <img class="page-head-one-dots" src="assets/images/icons/page-banner-one-dots.png" alt="dots" />
                            <p class="page-head-one-short">您可以通过以下的方式联系我们</p>
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
                                    <h3 class="contact-one-title">办公地点</h3>
                                    <p class="contact-one-text">24 & 26, Jalan Kempas Utama 2/5,<br />
                                        Taman Kempas Utama, <br />
                                        81300 Johor Bahru,<br />
                                        Johor
                                    </p>
                                </div>
    
                                <div class="col-md-6 col-lg-3">
                                    <div class="contact-one-img-icon">
                                        <img src="assets/images/icons/icon-office-hour.svg" alt="contact-icon" />
                                    </div>
                                    <h3 class="contact-one-title">办公时间</h3>
                                    <p class="contact-one-text">星期一 至 星期五</p>
                                    <p class="contact-one-text">09:00 A.M - 06:00 P.M</p>
                                </div>
    
                                <div class="col-md-6 col-lg-3">
                                    <div class="contact-one-img-icon">
                                        <img src="assets/images/icons/icon-phone-contact.svg" alt="contact-icon" />
                                    </div>
                                    <h3 class="contact-one-title">电话号码</h3>
                                    <a class="contact-one-text" href="tel:+60167392828">+60167392828</a>
                                </div>
    
                                <div class="col-md-6 col-lg-3">
                                    <div class="contact-one-img-icon">
                                        <img src="assets/images/icons/icon-email-address.svg" alt="contact-icon" />
                                    </div>
                                    <h3 class="contact-one-title">电子邮件</h3>
                                    <a class="contact-one-text" href="mailto:general@zetaweb.com.my">general@zetaweb.com.my</a>
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
                            <h2 class="page-head-one-title">让我们谈谈您的想法。</h2>
                            <img class="page-head-one-dots" src="assets/images/icons/page-banner-one-dots.png" alt="dots" />
                            <p class="page-head-one-short">请查看我们满意客户的推荐！</p>
                        </div>
    
                        <div class="page-contact-one-form-wrapper text-center">
                            <form class="d-flex flex-column gap-3" @submit.prevent="submitForm">
                                <!-- <pre>{{formData}}</pre> -->
                                <div class="form-group">
                                    <input v-model="formData.name" type="text" id="contactGetName" class="input-two" placeholder="你的名字" required />
                                </div>
                                <div class="form-group">
                                    <input v-model="formData.email" type="email" id="contactGetMail" class="input-two" placeholder="你的电邮" required />
                                </div>
                                <div class="form-group">
                                    <input v-model="formData.contact" type="text" id="contactGetPhone" class="input-two" placeholder="你的手机" required />
                                </div>
                                <div class="form-group">
                                    <textarea v-model="formData.message" type="text" id="contactGetMessage" class="textarea-two"
                                        placeholder="你的消息" rows="8" required></textarea>
                                </div>
                                <button v-if="status == 'onSubmit'" class="btn-common btn-submit-two mt-0"> 发送消息 </button>
                                <button v-else-if="status == 'submiting'" class="btn-common btn-submit-two mt-0"> 加载.. </button>
                                <button v-if="status == 'successful'" class="btn-common btn-submit-two mt-0"> 成功 </button>
                            </form>
                        </div>
    
                    </div>
    
                    <div class="col-lg-6">
                        <div class="map-wrapper">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3626685936747!2d103.70263497581601!3d1.5477578609059932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31da722205aab061%3A0xead53d61c8f2d7db!2sZeta%20Technology%20Sdn.%20Bhd!5e0!3m2!1sen!2smy!4v1716358439899!5m2!1sen!2smy"
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