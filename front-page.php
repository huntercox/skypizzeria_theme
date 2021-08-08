<?php get_header(); ?>

<?php
  if ( have_rows('home_image_slider') ) :
    echo '<div class="slick-slider">';
      $slide_count = 0;

      while( have_rows('home_image_slider') ) : the_row();

        $image_id = get_sub_field('image');
        $name     = get_sub_field('name');
        $size = 'homepage-slider';

        if( $image_id ) {
          $slide_count++;
          $image_url = wp_get_attachment_image_src( $image_id, $size );
          $image = wp_get_attachment_image( $image_id, $size );
            $css   = 'background-image: url('.$image_url[0].');';
          echo '<div class="slide">';
            echo '<div style="'.$css.'">';
              echo '<h2>'.$name.'</h2>';
            echo '</div>';
          echo '</div>';
        }

      endwhile;
    echo '</div><!-- /.slick-slider -->';
  endif;
?>


<div class="container">

  <?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" role="article">
      <div class="inner-content">
        <?php the_content(); ?>

        <div class="cta">
          <h3>View our menu!</h3>
          <?php
            $menu_pics = get_field('menu_pics', 'option');
            if ( $menu_pics ) :
              echo '<div class="cta__menu">';

              foreach ( $menu_pics as $img ) :

                $image_id  = $img['image'];
                $image_url = wp_get_attachment_image_src($image_id, 'full');
                $image_url = $image_url[0];

                //echo '<div style="background-image:url('.$image_url.');"></div>';\
                echo '<a href="#" data-featherlight="'. esc_url($image_url).'">';
                  echo wp_get_attachment_image($image_id, 'medium');
                echo '</a>';

              endforeach;

              echo '</div><!-- /.cta__menu -->';
            endif;
          ?>

          <h3>Signup for deals!</h3>
          <div class="cta__newsletter">
            <?php echo do_shortcode('[contact-form-7 id="125" title="Newsletter Signup"]'); ?>
          </div><!-- /.cta__newsletter -->
        </div><!-- /.cta -->

      </div><!-- /.inner-content -->
    </article>

  <?php endwhile; endif; ?>

</div><!-- /.container -->

<?php get_footer(); ?>