<!DOCTYPE html>
<html>

<head>
    <?php wp_head(); ?>
</head>

<body>
<section class="section-header">
    <header class="animated header-menu-containt fadeInDown">
        <div class="container">
            <!-- Nav bar menu -->

            <nav class="navbar navbar-expand-lg navbar-light">
                <a class="navbar-brand" href="#">
                    <img src="<?php echo get_template_directory_uri()?>/asset/images/Logo.png" class="logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse header-containt mb-0 mt-auto" id="navbarNav">
                    <!--Internalization-->
                    <ul class="navbar-nav ml-auto internalization">
                        <li class="nav-item active">
                            <a class="nav-link" href="#"><img src="<?php echo get_template_directory_uri()?>/asset/images/vn-flat.png"> <a class="language-text">Tiếng Việt</a> </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><img src="<?php echo get_template_directory_uri()?>/asset/images/en-flat.png"> <a class="language-text">English </a></a>
                        </li>
                    </ul>
                    <!--Menu-->

                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'primary',
                            'menu_class' => 'navbar-nav ml-auto manu-list',
                        )
                    );
                    ?>
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'social',
                            'menu_class'  => 'navbar-nav ml-auto manu-list',
                        )
                    );
                    ?>
                    <ul class="navbar-nav ml-auto menu-list">
                        <li class="nav-item active" id="home">
                            <a class="nav-link" href="index.php">TRANG CHỦ </a>
                        </li>
                        <li class="nav-item" id="products">
                            <a class="nav-link" href="<?php echo get_template_directory_uri()?>productsdetails.php">SẢN PHẨM</a>
                        </li>
                        <li class="nav-item" id="news">
                            <a class="nav-link" href="#">TIN TỨC</a>
                        </li>
                        <li class="nav-item" id="recruitment">
                            <a class="nav-link" href="#">TUYỂN DỤNG</a>
                        </li>
                        <li class="nav-item" id="contact">
                            <a class="nav-link" href="#">LIÊN HỆ</a>
                        </li>
                        <li class="nav-item" id="introduce">
                            <a class="nav-link" href="<?php echo get_template_directory_uri()?>about.php">GIỚI THIỆU</a>
                        </li>
                        <li class="nav-item" id="searching">
                            <form id="app" action="#">
                                <label :data-state="state" for="search">
                                    <input type="text" name="s" placeholder="Search" @click="state = 'opan'" @blur="state='close'" />
                                    <i class="fa fa-search" @click="" aria-hidden="true"></i>
                                </label>
                            </form>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
</section>



</body>

</html>