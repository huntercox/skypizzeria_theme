<?php get_header(); ?>
  <main id="main" role="main">
    <div class="container">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" role="article" class="page">

        <h2 class="page__title"><?php the_title(); ?></h2>

        <div class="page__content">
          <?php the_content(); ?>
        </div><!-- /.page__content -->


      </article>
    <?php endwhile; ?>
    <?php else : ?>
      <p>There is nothing on this page.</p>
    <?php endif; ?>


    <div class="products">
      <?php
        $args = array(
          'post_type'      => 'products',
          'post_status'    => 'publish',
          'posts_per_page' => -1,
          'orderby'        => 'date',
          'order'          => 'ASC',
        );

        $query = new WP_Query( $args );

        if ( $query->have_posts() ) :
          echo '<ul class="product__list">';

          while ( $query->have_posts() ) :

            $query->the_post();

            echo '<li class="product product--'.$id.'">';

              $url   = get_permalink();
              $title = get_the_title();
              $id    = get_the_ID();
              $img   = '';

              $images = get_field('product_pictures');
              if ($images):
                $i = 0;

                foreach($images as $image):
                  $i++;

                  if ($i = 1) {
                    echo '<a class="product__image" href="'. esc_url($url) .'">';
                      echo '<img src="'. esc_url($image['sizes']['thumbnail']) .'" alt="'. esc_attr($image['alt']) .'" />';
                    echo '</a>';
                  }
                endforeach;
              endif;

              echo '<a class="product__title" href="'.esc_url($url).'">'.esc_html($title).'</a>';
            echo '</li>';

          endwhile;

          echo'</ul>';
        endif;

        wp_reset_postdata();
      ?>
    </div><!-- /.products -->

    </div><!-- /.container -->
  </main>
<?php get_footer(); ?>