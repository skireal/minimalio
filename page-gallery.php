<?php
/* Template Name: Gallery */

get_header(); ?>

<div class="wrapper">
   <div class="container">
<div class="gallery-page">
    <?php
    $args = array(
        'post_type' => 'artworks',
        'posts_per_page' => -1,
        'orderby' => 'date',
        'order' => 'DESC'
    );

    $artworks = new WP_Query($args);

    if($artworks->have_posts()):
        echo '<div class="artworks-grid">';
        while($artworks->have_posts()): $artworks->the_post(); ?>
            
            <div class="artwork-item">
                <?php if(has_post_thumbnail()): ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                    </a>
                <?php endif; ?>

                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

            </div>

        <?php endwhile;
        echo '</div>';
    endif;

    wp_reset_postdata();
    ?>
</div>
   </div>
</div>


<?php get_footer(); ?>