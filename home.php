<?php include 'header.php'; ?>
<?php include 'topnav.php'; ?>

<div data-bs-spy="scroll" data-bs-target="#metrix-scrollspy" data-bs-root-margin="0px 0px -40%"
    data-bs-smooth-scroll="true">
    <!-- Banner Section Start -->
    <section class="main_banner hero-one vh-100 position-relative text-center text-xl-start">
        <div class="container hero-one-container d-flex flex-column h-100">
            <div class="hero-one-wrapper my-auto d-flex flex-column justify-content-center order-xl-1 order-2">
                <div class="home-one-hero-content">
                    <h1 class="text-white ">智能应用，智慧生活！</h1>
                    <p class="text-white text-center text-xl-start">
                        我们是一家专注于商业软件开发的公司，致力于为企业提供定制化的解决方案，以满足其独特的业务需求。我们拥有一支技术精湛、经验丰富的团队，能够开发出高质量、可靠稳定的商业应用程序。无论您需要管理企业资源、优化业务流程，还是提升客户体验，我们都能够提供创新的解决方案。
                    </p>
                </div>
                <div
                    class="home-one-hero-app-link  align-items-center justify-content-center justify-content-xl-start  d-flex w-100">
                    <a href="https://play.google.com/" target="_blank" class="home-one-hero-app-link-img">
                        <img src="assets/images/eatfit-ticket-play.png" alt="playStore" />
                    </a>
                    <a href="https://www.apple.com/in/app-store/" target="_blank" class="home-one-hero-app-link-img">
                        <img src="assets/images/eatfit-ticket-apple.png" alt="appleStore" />
                    </a>
                </div>
            </div>
            <div class="hero-one-img-wrapper order-xl-2 order-1">
                <img src="assets/images/banner/etfit-index-one-hero-04.png" alt="hero-images" />
            </div>
        </div>
    </section>

    <!-- Screenshots Section Start -->
    <section id="screenshots" class="home-pb">
        <div class="container d-flex flex-column gap-5">
            <div class="text-center">
                <div class="page-head-one">
                    <h2 class="page-head-one-title">应用截图</h2>
                    <img class="page-head-one-dots" src="assets/images/icons/page-banner-one-dots.png" alt="dots" />
                    <p class="page-head-one-short">通过成本效益的举措，高效地传播灵活内容，充分利用垂直质量。将您的移动访问者转化为您最好的客户。</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="screeshort-carousel-wrap">
                        <div class="mobile-cover" style="pointer-events: none;">
                            <img src="assets/images/screenshort/iphone_cover.png" alt="iphone_cover">
                        </div>
                        <div class="screenshort-carousel owl-carousel owl-theme">
                            <div v-for="(item, index) in portfolio" class="single-screenshort-item">
                                <a :href="googleImageConvertToImage(item.googleImageLink)" data-fancybox="portfolio">
                                    <img :src="googleImageConvertToImage(item.googleImageLink)"
                                        alt="screenhshort images">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="screenshort-nav"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Price_Costs Section Start -->
    <section class="price_costs" id="pricing">
        <div class="container">
            <div class="page-head-one d-flex flex-column gap-5">
                <div>
                    <h2 class="page-head-one-title">无额外费用。按您使用的付费。</h2>
                    <img class="page-head-one-dots" src="assets/images/icons/page-banner-one-dots.png" alt="dots" />
                    <p class="page-head-one-short">我们的定价策略非常简单明了：您只需支付您实际使用的部分，没有任何额外费用。</p>
                </div>
                <!-- <div class="mx-auto">
                        <ul class="nav nav-pills price_tab" id="pills-tab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                    aria-selected="true">每月</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                    data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                    aria-selected="false">每年</button>
                            </li>
                        </ul>
                    </div> -->
            </div>
            <div class="tab-content price_inner_tab" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"
                    tabindex="0">
                    <div class="row justify-content-center price_costs_card_wrapper">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="white_bg white_box h-100">
                                <span>个人计划</span>
                                <div class="price_text">
                                    <div class="price-cost">RM<sub>22.00</sub></div>
                                    <!-- <p>月度套餐</p> -->
                                </div>
                                <div class="dec_text">
                                    <p>社区支持</p>
                                    <p>400+ 页面</p>
                                    <p>100+ 页眉变化</p>
                                    <p>20+ 主页选项</p>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-common rose">开始使用</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6 mb-0">
                            <div class="white_bg white_box h-100">
                                <span>企业计划</span>
                                <div class="price_text">
                                    <div class="price-cost blue_color">RM<sub>99.00</sub></div>
                                    <!-- <p>月度套餐</p> -->
                                </div>
                                <div class="dec_text">
                                    <p>24/7 支持</p>
                                    <p>400+ 页面</p>
                                    <p>200+ 页眉变化</p>
                                    <p>40+ 主页选项</p>
                                    <p>电子商务</p>
                                    <p>免费域名</p>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-common">开始使用</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                    tabindex="0">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-xl-4 col-lg-5 col-md-6">
                            <div class="white_bg white_box">
                                <span>个人计划</span>
                                <div class="price_text">
                                    <div class="price-cost">$<sub>199.00</sub></div>
                                    <!-- <p>年度套餐</p> -->
                                </div>
                                <div class="dec_text">
                                    <p>24/7 支持</p>
                                    <p>400+ 页面</p>
                                    <p>200+ 页眉变化</p>
                                    <p>40+ 主页选项</p>
                                    <p>电子商务</p>
                                    <p>免费域名</p>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-common rose">开始使用</a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-md-6 mb-0">
                            <div class="white_bg white_box">
                                <span>企业计划</span>
                                <div class="price_text">
                                    <div class="price-cost blue_color">$<sub>499.00</sub></div>
                                    <!-- <p>年度套餐</p> -->
                                </div>
                                <div class="dec_text">
                                    <p>24/7 支持</p>
                                    <p>400+ 页面</p>
                                    <p>200+ 页眉变化</p>
                                    <p>40+ 主页选项</p>
                                    <p>电子商务</p>
                                    <p>免费域名</p>
                                </div>
                                <a href="javascript:void(0)" class="btn btn-common">开始使用</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial Section Start -->
    <section id="reviews">
        <div class="container">
            <div class="row align-items-start justify-content-between">
                <div class="col-lg-6 col-md-12 order-lg-1 order-2">
                    <div id="testimonial" class="owl-carousel owl-theme">
                        <div v-for="chunk in Math.ceil(reviews.length / 2)" :key="'chunk-'+chunk" class="item">
                            <div v-for="(item, index) in reviews.slice((chunk - 1) * 2, chunk * 2)"
                                class="page-reviews">
                                <div class="page-review-one-card">
                                    <div class="page-reiview-user-photo">
                                        <img :src="googleImageConvertToImage(item.image)" alt="user-profile">
                                    </div>
                                    <div class="page-review-icon-quote">
                                        <img src="assets/images/icons/icon-quote.svg" alt="quote">
                                    </div>
                                    <p class="page-review-text">"{{ item.description }}"</p>
                                    <div class="page-review-user-and-profession">
                                        <div class="page-user-and-rating">
                                            <label class="page-user-name">{{ item.name }}</label>
                                            <div class="page-user-rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="far fa-star"></i>
                                                <i class="far fa-star"></i>
                                            </div>
                                        </div>
                                        <label class="page-user-profession">- {{ item.position }}</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="item">
                                <div class="page-reviews">
                                    <div class="page-review-one-card">
                                        <div class="page-reiview-user-photo">
                                            <img src="assets/images/user-profile/user-profile-image-01.jpg"
                                                alt="user-profile">
                                        </div>
                                        <div class="page-review-icon-quote">
                                            <img src="assets/images/icons/icon-quote.svg" alt="quote">
                                        </div>
                                        <p class="page-review-text">"我一直在使用他们的服务，我非常满意！他们的团队非常专业，响应迅速，解决问题非常有效。我强烈推荐他们！"</p>
                                        <div class="page-review-user-and-profession">
                                            <div class="page-user-and-rating">
                                                <label class="page-user-name">Sarah Carlos</label>
                                                <div class="page-user-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <label class="page-user-profession">- Creative Diretor</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-reviews">
                                    <div class="page-review-one-card">
                                        <div class="page-reiview-user-photo">
                                            <img src="assets/images/user-profile/user-profile-image-02.jpg"
                                                alt="user-profile">
                                        </div>
                                        <div class="page-review-icon-quote">
                                            <img src="assets/images/icons/icon-quote.svg" alt="quote">
                                        </div>
                                        <p class="page-review-text">"我对他们提供的服务感到非常满意。他们的团队专业且友好，总是乐于解答我的问题并提供帮助。他们的产品质量很高，功能强大，给我的业务带来了很大的改善。我强烈推荐他们！"</p>
                                        <div class="page-review-user-and-profession">
                                            <div class="page-user-and-rating">
                                                <label class="page-user-name">Sarah Carlos</label>
                                                <div class="page-user-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <label class="page-user-profession">- Creative Diretor</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="page-reviews">
                                    <div class="page-review-one-card">
                                        <div class="page-reiview-user-photo">
                                            <img src="assets/images/user-profile/user-profile-image-03.jpg"
                                                alt="user-profile">
                                        </div>
                                        <div class="page-review-icon-quote">
                                            <img src="assets/images/icons/icon-quote.svg" alt="quote">
                                        </div>
                                        <p class="page-review-text">"与他们合作的经历非常愉快！他们的团队始终专注于客户的需求，并提供出色的解决方案。他们的专业知识和技能使得项目的执行非常顺利。我对他们的服务感到非常满意，强烈推荐给其他人！"</p>
                                        <div class="page-review-user-and-profession">
                                            <div class="page-user-and-rating">
                                                <label class="page-user-name">Sarah Carlos</label>
                                                <div class="page-user-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <label class="page-user-profession">- Creative Diretor</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="page-reviews">
                                    <div class="page-review-one-card">
                                        <div class="page-reiview-user-photo">
                                            <img src="assets/images/user-profile/user-profile-image-06.jpg"
                                                alt="user-profile">
                                        </div>
                                        <div class="page-review-icon-quote">
                                            <img src="assets/images/icons/icon-quote.svg" alt="quote">
                                        </div>
                                        <p class="page-review-text">"我对他们的服务感到非常满意！他们的团队非常专业和敬业，始终以客户为中心，确保我们的需求得到满足。他们的响应速度非常快，解决问题的能力也很强。我真的很高兴选择了他们作为我们的合作伙伴！"</p>
                                        <div class="page-review-user-and-profession">
                                            <div class="page-user-and-rating">
                                                <label class="page-user-name">Sarah Carlos</label>
                                                <div class="page-user-rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <label class="page-user-profession">- Creative Diretor</label>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                    </div>
                </div>
                <div class="col-lg-5 col-md-12 order-lg-2 order-1 align-self-center">
                    <div class="page-head-one text-lg-start">
                        <h2 class="page-head-one-title">我们的客户说什么！</h2>
                        <img class="page-head-one-dots" src="assets/images/icons/page-banner-one-dots.png" alt="dots">
                        <p class="page-head-one-short ms-0 text-lg-start">不要仅仅相信我们的话。 </p>
                        <p class="page-head-one-short ms-0 mt-0 text-lg-start">请查看我们满意客户的推荐！</p>
                        <div class="slider-nav"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section Start -->
    <section class="page-conatct-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="page-head-one">
                        <h2 class="page-head-one-title">让我们谈谈您的想法。</h2>
                        <img class="page-head-one-dots" src="assets/images/icons/page-banner-one-dots.png" alt="dots">
                        <p class="page-head-one-short">请查看我们满意客户的推荐！</p>
                    </div>

                    <div class="page-contact-one-form-wrapper text-center">
                        <form class="d-flex flex-column gap-3" @submit.prevent="submitForm">
                            <div class="form-group">
                                <input v-model="formData.name" type="text" id="contactGetName" class="input-two"
                                    placeholder="你的名字" required>
                            </div>
                            <div class="form-group">
                                <input v-model="formData.email" type="email" id="contactGetMail" class="input-two"
                                    placeholder="你的电邮" required>
                            </div>
                            <div class="form-group">
                                <input v-model="formData.contact" type="text" id="contactGetPhone" class="input-two"
                                    placeholder="你的手机" required>
                            </div>
                            <div class="form-group">
                                <textarea v-model="formData.message" type="text" id="contactGetMessage"
                                    class="textarea-two" placeholder="你的消息" rows="8" required></textarea>
                            </div>
                            <button v-if="status == 'onSubmit'" class="btn-common btn-submit-two mt-0"> 发送消息 </button>
                            <button v-else-if="status == 'submiting'" class="btn-common btn-submit-two mt-0"> 加载...
                            </button>
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
</div>

<?php include 'footer.php'; ?>