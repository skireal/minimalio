<?php
get_header();

if(have_posts()): while(have_posts()): the_post(); ?>

<div class="wrapper">
  <div class="container">

    <div class="single-artworks-container">

      <!-- Левая колонка: картинка с Lightbox -->
      <div class="artwork-image">
        <?php if(has_post_thumbnail()):
          $thumb_url = wp_get_attachment_image_url(get_post_thumbnail_id(), 'large');
        ?>
          <a target="_blank" href="<?php echo esc_url($thumb_url); ?>">
            <img class="zoooom" src="<?php echo esc_url($thumb_url); ?>" alt="<?php the_title(); ?>">
          </a>
        <?php endif; ?>
      </div>

      <!-- Правая колонка: описание и мета -->
      <div class="artwork-details">
        <h1><?php the_title(); ?></h1>
        <div class="artwork-description"><?php the_content(); ?></div>

        <div class="artwork-meta">
          <?php 
          $dimensions = get_post_meta(get_the_ID(), 'dimensions', true);
          $year = get_post_meta(get_the_ID(), 'year', true);
          $medium = get_post_meta(get_the_ID(), 'medium', true);
          ?>
          <?php if($dimensions): ?><p><strong>Dimensions:</strong> <?php echo esc_html($dimensions); ?></p><?php endif; ?>
          <?php if($year): ?><p><strong>Year:</strong> <?php echo esc_html($year); ?></p><?php endif; ?>
          <?php if($medium): ?><p><strong>Medium:</strong> <?php echo esc_html($medium); ?></p><?php endif; ?>
        </div>
      </div>

    </div>

  </div>
</div>

<?php endwhile; endif;

get_footer();