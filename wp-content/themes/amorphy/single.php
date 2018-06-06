<?php
get_header();
?>
	<main class="main-content">
  <div class="bg-box1">
  </div>
  <div class="text-center">
    <div class="padding03 bg-back-04">
      <div align="center">
        <h2 class="text06">
          NEWS AND INFORMATION
        </h2>
        <p class="text09">
          新着情報
        </p>
        <img class="img05" src="/wp-content/themes/amorphy/template/images/arrow02.svg" alt="" border="0"/>
		<?php
		if ( have_posts() ) :
			while ( have_posts() ) :
				the_post();
				get_template_part( 'template-parts/content', get_post_type() );
			endwhile;
		else :
			get_template_part( 'template-parts/content', 'none' );
		endif;
		?>
	</div>
    </div>
  </div>
</main>
<?php
get_footer();
