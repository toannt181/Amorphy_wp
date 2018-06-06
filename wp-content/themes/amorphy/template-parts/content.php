<div class="table04" id="post-<?php the_ID(); ?>">
  <div class="padding04" width="90%">
    <div class="text-center">
      <div class="img02">
        <?php if ( !is_single() ): ?>
          <a href="<?php echo esc_url( get_permalink() ) ?>" rel="bookmark">
        <?php endif; ?>
          <div>
            <p class="text11">
              <?php echo get_the_date('Y-m-d'); ?>
            </p>
            <p class="text12">
              <?php echo esc_html( get_the_title() ); ?>
            </p>
            <div class="text13">
              <?php
              $content = get_the_content('Read more');
              print $content;
              ?>
            </div>
          </div>
        <?php if ( !is_single() ): ?>
        </a>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div><!-- #post-<?php the_ID(); ?> -->
