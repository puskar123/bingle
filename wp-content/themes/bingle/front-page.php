<?php get_header(); ?>
<div class="hero-section">
    <div class="container">
        <div class="hero-text-wrap">
            <span class ="small-text block">FREE ONLINE COURSES TO ADVANCED DEGREES</span>
            <span class="big-text block">Learning for a Lifetime<br> Courses and Education</span>
            <?php  dynamic_sidebar( 'button' ); ?>
        </div>
    </div>
</div>
<div class="study-wrap">
    <div class="container">
        <h2 class= "text-center">Where do you want to study?</h2>
        <p class= "text-center">It is not only about earning an international degree and laying the foundation to a promising career. The experience of studying abroad is about following your passion to transcend horizons</p>
        <div class="row">
            <?php $loop = new WP_Query( array( 'post_type' => 'study', 'posts_per_page' => 4, 'category' => 'current' ) ); ?>
            <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
            <div class="study">
                <div class="img-wrap">
                <?php the_post_thumbnail(); ?>
                </div>
                <div class="flag">
                    <?php 
                    $image = get_field('flag');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <?php endif; ?>
                </div>
                <div class="content-wrap">
                    <div class="title">
                        <a href=""> <?php the_title();  ?></a>
                    </div>
                    <div class="content">
                        <?php the_content(); ?>
                    </div>
                    <div class="btn">
                        <a href=""><?php the_field('button_text'); ?></a>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_query(); ?>
        </div>
    </div>
</div>
<div class="content-section">
    <div class="container">
        <h2 class="text-center">Looking for the right advice on<br>how to study, work and live in Europe?</h2>
        <p class="text-center">Speak with the experienced team at Predict Consultancy to get guidance on your education<br> pathway and plans to work and live abroad today.</p>
        <?php  dynamic_sidebar( 'button' ); ?>
    </div>
</div>
<div class="news-wrap">
    <div class="container">
        <div class="news-title">
        <?php
        // The Query
        query_posts( array ( 'category_name' => 'latest-news-event', 'posts_per_page' => -1 ) ); ?>
            <h2 class="text-center"><?php single_cat_title(); ?></h2>
            <?php echo category_description(); ?>
        </div>
        <div class="row">
            <?php
            // The Loop
            while ( have_posts() ) : the_post(); ?>
            <div class="news">
               <div class="img-wrap">
                <?php the_post_thumbnail(); ?>
               </div>
               <div class="text-wrap">
                   <div class="title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                   </div>
                   <div class="read-more">
                       <a href="<?php the_permalink(); ?>">Read More</a>
                   </div>
               </div>
            </div>
            <?php endwhile;
            // Reset Query
            wp_reset_query();
            ?>
        </div>
    </div>
</div>
<div class="client-testimonials">
    <div class="container">
        <div class="row">
            <div class="form">
                <div class="form-content">
                    <p><?php the_content(); ?></p>
                </div>
            </div>
            <div class="testimonials">
                <h3>Clients Testimonial</h3>
                <?php $loop = new WP_Query( array( 'post_type' => 'testimonial', 'posts_per_page' => -1, 'category' => 'current' ) ); ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); ?> 
                <div class="text-wrapp"><?php the_content(); ?></div>
                <div class="client-info">
                    <div class="img-holder">
                        <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="name-holder">
                        <div class="name">
                        <?php the_title();  ?>
                        </div>
                        <div class="location">
                        <?php the_field('location');  ?>
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>
<div class="logo-wrapper">
    <div class="container">
        <?php
        // The Query
        query_posts( array ( 'category_name' => 'our-professional-affiliation', 'posts_per_page' => -1 ) ); ?>
    <h2><?php single_cat_title(); ?></h2>
    <section class="customer-logos slider">
    <?php
        // The Loop
        while ( have_posts() ) : the_post(); ?>
        <div class="slide"><?php the_post_thumbnail(); ?></div>
        <?php endwhile;
        // Reset Query
        wp_reset_query();
        ?>
    </section>
    </div>
</div>
<?php get_footer(); ?>





