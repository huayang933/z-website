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

                    <div class="blog-one-wrapper" v-for="(blog, index) in portfolio">
                        <div class="blog-one-img ratio ratio-16x9">
                            <img :src="googleImageConvertToImage(blog.googleImageLink)" alt="blog-images" />
                        </div>
                        <div class="blog-one-content">
                            <a href="singleblog.html" class="blog-one-link"></a>
                            <h2 class="blog-one-title">{{blog.title}}</h2>
                            <p class="blog-one-text">{{blog.description}}</p>
                            <div class="blog-one-time"><i class="fas fa-clock"></i> {{blog.date}}</div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </div>

    <?php include 'footer.php'; ?>