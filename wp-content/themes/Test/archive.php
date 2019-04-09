<?php get_header()?>
<?php echo get_the_title().'<br/>';?>
<div class="container">
    <div class="row" style="margin-top: 20px">
        <div class="col"></div>
        <div class="productslist-containt card-deck">
            <?php while( have_posts() ): the_post(); ?>
                <div class="card">
                    <div class="card-title row">
                        <div class="col-6 name-product"><?php the_title(); ?></div>
                        <div class="col-6 subinfo-product"></div>
                    </div>
                    <img class="card-img-top productslist-product-img" src="<?php echo get_template_directory_uri() ?>/asset/images/OLIGO-EXTRA.png" alt="Card image cap">
                    <div class="card-body">
                        <p class="card-text info-product">Injection Solution</p>
                        <a href="<?php the_permalink() ?>" type="button" class="btn btn-info btn-viewmore">VIEW MORE</a>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>
