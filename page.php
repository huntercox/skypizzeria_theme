<?php get_header(); ?>

<div class="container">

  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

    <article id="post-<?php the_ID(); ?>" role="article" class="page">

      <h1 class="page__title"><?php the_title(); ?></h1>

      <div class="page__content">
        <?php the_content(); ?>
      </div><!-- /.page__content -->

    </article>

  <?php endwhile; ?>
  <?php else : ?>
    <p>There is nothing on this page.</p>
  <?php endif; ?>

</div><!-- /.container -->

<?php get_footer(); ?>