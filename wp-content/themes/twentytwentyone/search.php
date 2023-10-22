<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

	?>

	<style>
body {
    background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_pattern.png) repeat 	;
    font-family: 'Open Sans', sans-serif;
}

	</style>

	<div class="row">
		<div class="col-md-3">
			<h5>Module 13</h5>
			<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nemo dolorem, eaque natus at quasi delectus velit
				laudantium deleniti libero necessitatibus?</p>
		</div>
		<div class="col-md-6">
			<div class="container">
				<?php if (have_posts()) {?>
				<header class="page-header alignwide">
					<h1 class="page-title">
						<?php
						printf(
							/* translators: %s: Search term. */
							esc_html__('Results for "%s"', 'twentytwentyone'),
							'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
						);
						?>
					</h1>
				</header><!-- .page-header -->

				<div class="search-result-count default-max-width">
					<?php
					printf(
						esc_html(
							/* translators: %d: The number of search results. */
							_n(
								'We found %d result for your search.',
								'We found %d results for your search.',
								(int) $wp_query->found_posts,
								'twentytwentyone'
							)
						),
						(int) $wp_query->found_posts
					);
					?>
				</div><!-- .search-result-count -->
				<?php
						// Start the Loop.
						while (have_posts()) {
							the_post();

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part('template-parts/content/content-excerpt-search', get_post_format());
							
						} // End the loop.

						// Previous/next page navigation.
						twenty_twenty_one_the_posts_navigation();

						// If no content, include the "No posts found" template.
					} else {
						get_template_part('template-parts/content/content-none');
					}


					?>
			</div>
		</div>
		<div class="col-md-3">
			<div class="container">
				<div class="row">
					<div class="media comment-box">
						<ol class="comment-list">
							<?php
							wp_list_comments(
								array(
									'avatar_size' => 60,
									'style' => 'ol',
									'short_ping' => true,
								)
							);
							?>
						</ol>
						<!-- .comment-list -->
					</div>
				</div>
			</div>
		</div>
	</div>
	
<?php get_footer(); ?>