</main><!-- /.#main -->

<footer>
  <div class="container">

    <div class="left">

      <p class="site-name"><?php bloginfo('name'); ?></p>

      <?php
        $address   = get_field('address', 'option');
        $phone     = get_field('phone_number', 'option');
        $phone2    = get_field('secondary_phone_number', 'option');
        $hours     = get_field('hours', 'option');
        $hourslist = get_field('hours_list', 'option');
        $facebook  = get_field('facebook', 'option');
        $email     = get_field('email_address', 'option');
      ?>

      <div class="contact-info">
        <p class="address">
          <?php echo $address; ?>
        </p>
        <a class="facebook" href="<?php echo esc_url($facebook); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
        <a class="email" href="mailto:<?php echo esc_html($email); ?>"><i class="fas fa-paper-plane"></i></a>

        <?php if ( $phone && $phone2 ): ?>
          <a class="phone" href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a>
          <a class="phone" href="tel:<?php echo $phone2; ?>"><?php echo $phone2; ?></a>
        <?php endif; ?>
      </div><!-- /.contact-info -->

      <div class="hours">
        <button class="title" onClick="toggleHours()"><?php echo $hours; ?></button>
        <div class="list">
          <p><?php echo $hourslist; ?></p>
        </div>
      </div><!-- /.hours -->
    </div><!-- /.left -->

    <div class="right">
      <?php
        $fb_feed = get_field('facebook_feed', 'option');

        if ( $fb_feed ) {
          echo '<div class="fb-feed">';
            echo $fb_feed;
          echo '</div>';
        }
      ?>
    </div><!-- /.right -->
  </div><!-- /.container -->

  <div class="bottom-bar">
    <a href="<?php home_url(); ?>"><?php bloginfo('name'); ?></a>
  </div><!-- /.bottom-bar -->
</footer>

</div><!-- /.grid-container -->
<!-- END: Grid-Layout -->

<?php wp_footer(); ?>
</body>
</html>