<div class="table04" id="post-<?php the_ID(); ?>">
  <div class="padding04" width="90%">
    <div class="text-center">
      <div class="img02">
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
      </div>
    </div>
  </div>
</div><!-- #post-<?php the_ID(); ?> -->
