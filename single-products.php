<?php acf_form_head(); ?>
<?php get_header(); ?>

  <main id="main" role="main">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <article id="post-<?php the_ID(); ?>" role="article" class="page">

        <h2 class="page__title"><?php the_title(); ?></h2>

        <div class="page__content">
          <?php the_content(); ?>
        </div><!-- /.page__content -->

        <div class="product__options">
          <?php
            // $product = $post->post_name;
            // if ($product === 'pizza') {

            //   acf_form(array(
            //     'field_groups' => array('group_60318759f423e'),
            //     'submit_value' => __("Add to Order", 'acf'),
            //   ));
            // }
          ?>
        </div><!-- /.product__options -->

      </article>
    <?php endwhile; ?>
    <?php else : ?>
      <p>There is nothing on this page.</p>
    <?php endif; ?>
  </main>

<?php get_footer(); ?>