<?php get_header(); ?>
	<main role="main" class="main-content">
		<!-- section -->
		<section class="container">
			<div class="search__wrap">
				<h1><?php echo sprintf( __( '%s Search Results for ', 'sentiustheme' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>
				<div class="search-wrap">
					<?php get_template_part('searchform'); ?>
				</div>
				<?php get_template_part('templates/loop'); ?>
				<?php get_template_part('templates/pagination'); ?>
			</div>
		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
