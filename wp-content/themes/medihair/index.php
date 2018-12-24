<?php get_header(); ?>
	<main role="main">
		<!-- section -->
		<section>

			<h1><?php _e( 'Latest Posts', 'ssvtheme' ); ?></h1>

			<?php get_template_part('loop'); ?>

			<!-- pagination -->
				<div class="pagination">
					<?php ssv_pagination(); ?>
				</div>
			<!-- /pagination -->

		</section>
		<!-- /section -->
	</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>