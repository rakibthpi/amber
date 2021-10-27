<?php global $rakibthpi; ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">

    <link rel="icon" href="assets/images/favicon.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <!--
    ===================================================================
    -------------------Start Header Top Area Section------------------- 
    ===================================================================
-->
<header class="header-top-area-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-6 col-sm-6 d-none d-sm-block">
                <div class="header-top-search">
                    <form action="">
                        <input type="search" placeholder="Search">
                        <button type="submit"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
            <div class="col-md-6 col-sm-6 ">
                <div class="header-top-link">
                    <div class="responsive-search">
                        <a class="short-search-icon" href="#"><i class="fas fa-search"></i></a>
                        <input class="short-search-icon-show" type="text" name="" placeholder="Search....">
                    </div>
                    <ul class="justify-content-center justify-content-sm-end">
                        <li><a href="#"><i class="far fa-user-circle"></i>Login</a></li>
                        <li><a class="last-child" href="#"><i class="fas fa-pencil-alt"></i>Register</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<header class="header-area">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12">
                <div class="logo">
                    <p style="color:red;"><?php echo $rakibthpi['logoUploader']; ?></p>
                    <a href="index.html">
                        
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header_logo.png" alt="logo">
                    </a>
                    <a href="#"><i class="fas fa-bars"></i></a>
                </div>
            </div>
            <div class="col-lg-8 col-md-12">
                <nav class="menu">
                    <ul>
                       <li><a href="index.html">home</a></li>
                       <li><a href="bloggrid.html">typography</a></li>
                       <li><a href="blogmasonry.html">blog</a></li>
                       <li><a href="blogsingle.html">pages</a></li>
                       <li><a href="portfoliogrid.html">elements</a></li>
                       <li><a href="portfoliomasonry.html">ecommerse</a></li>
                       <li><a href="portfoliosingle.html">megamenu</a></li>
                   </ul>
               </nav>
           </div>
       </div>
   </div>
</header>
    <!--
    ===================================================================
    -------------------Start End Top Area Section------------------- 
    ===================================================================
-->

    <!--
    ===================================================================
    -------------------Start Blog Grid View Area Section------------------- 
    ===================================================================
-->
<section class="blog-grid-banner-area-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="blog-banner">
                    <div class="icon-cantact-left">
                        <div class="single-icon">
                            <a href="#"><i class="fas fa-user-alt"></i></a>
                            <a href="#"><p>by alex poushkin</p></a>
                        </div>
                        <div class="single-icon">
                            <a href="#"><i class="far fa-clock"></i></a>
                            <a href="#"><p>september 31</p></a>
                        </div>
                        <div class="single-icon">
                            <a href="#"><i class="fas fa-quote-left"></i></a>
                            <a href="#"><p>12 comments</p></a>
                        </div>
                    </div>
                    <div class="menu-right">
                        <ul>
                            <li><a href="#">Home<span></span></a></li>
                            <li><a href="#">Shortcods <span></span></a></li>
                            <li><a href="#">Typograpy<span></span></a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>