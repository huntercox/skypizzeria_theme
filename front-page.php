<?php get_header(); ?>

    <main id="main" role="main">

      <section class="intro">

      </section>

      <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article id="post-<?php the_ID(); ?>" role="article">
          <div class="inner-content">
            <?php the_content(); ?>
          </div><!-- /.inner-content -->
        </article>
      <?php endwhile; endif; ?>
    </main>

<?php get_footer(); ?>