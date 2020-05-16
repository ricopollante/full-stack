<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head();?>
    </head>
    <body <?php body_class('test');?>>
    <header class="main-header">
        <div class="navbar">
            <nav>
                <ul class="navmenu">
                <div class="hum">
                    <img src="http://127.0.0.1/wordpress/wp-content/uploads/2020/05/custom-–-1.png" alt="" class="icon">
                    </div>
                    <li class="items"><a href="#home">HOME</a></li>
                    <li class="items"><a href="#home">PRODUCTS</a></li>
                    <li class="items"><a href="#home">CONTACT</a></li>
                    <li class="items"><a href="#home">ABOUT US</a></li>
                    
                </ul>
            </nav>
        </div>
    </header>
    <section class="top-banner">
        <div class="info">
            <p>SALE 50% OFF</p>
            <a href="#shop" class="shop-btn">SHOP NOW</a>


        </div>
    </section>

<section class="features">
    <div class="item">
        <img src="http://127.0.0.1/wordpress/wp-content/uploads/2020/05/transport.png" alt="free delivery">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nulla ipsam doloremque suscipit, ex perferendis laborum.</p>
    </div>
    <div class="item">
        <img src="http://127.0.0.1/wordpress/wp-content/uploads/2020/05/restricted.png" alt="secured">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur, enim illum unde eveniet quos iste.</p>
    </div>
    <div class="item">
        <img src="http://127.0.0.1/wordpress/wp-content/uploads/2020/05/shopping.png" alt="premium">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Itaque, dicta. </p>
    </div>
</section> 
<section class="products">
<div class="products-items">
<ul>
	<?php
		$args = array(
			'post_type' => 'product',
			'posts_per_page' => 12
			);
		$loop = new WP_Query( $args );
		if ( $loop->have_posts() ) {
			while ( $loop->have_posts() ) : $loop->the_post();
				wc_get_template_part( 'content', 'product' );
			endwhile;
		} else {
			echo __( 'No products found' );
		}
		wp_reset_postdata();
    ?>
    </div>
</section>