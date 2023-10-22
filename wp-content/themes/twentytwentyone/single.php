<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while (have_posts()):
	the_post();

	get_template_part('template-parts/content/content-single');

	if (is_attachment()) {
		// Parent post navigation.
		the_post_navigation(
			array(
				/* translators: %s: Parent post link. */
				'prev_text' => sprintf(__('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone'), '%title'),
			)
		);
	}

	// If comments are open or there is at least one comment, load up the comment template.
	if (comments_open() || get_comments_number()) {
		comments_template();
	}

	// Previous/next post navigation.
	$twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_left') : twenty_twenty_one_get_icon_svg('ui', 'arrow_right');
	$twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_right') : twenty_twenty_one_get_icon_svg('ui', 'arrow_left');

	$twentytwentyone_next_label = esc_html__('Next post', 'twentytwentyone');
	$twentytwentyone_previous_label = esc_html__('Previous post', 'twentytwentyone');

	/* --- Module 14: ---*/

	$post = get_post();
	$post_id = get_the_ID();

	//Previous Post
	$post_prev = get_previous_post();
	$post_prev_id = $post_prev->ID;

	$post_content_prev = get_post_field('post_content', $post_prev_id);

	// Chỉ lấy ảnh trong the_content()
	$pattern = '/<img[^>]+src=["\']([^"\']+)["\']/';
	preg_match_all($pattern, $post_content_prev, $matches);

	if (!empty($matches[1])) {
		foreach ($matches[1] as $image_url) {
			$img_list_prev = '<img class="image-nav" src="' . esc_url($image_url) . '" /><br>';
		}
	}
	//Chỉ lấy nội dung chữ trong the_content()
	$plain_text_content_prev = substr(strip_tags($post_content_prev), 0, 100);

	//Next Post
	$post_next = get_next_post();
	$post_next_id = $post_next->ID;

	$post_content_next = get_post_field('post_content', $post_next_id);

	// Chỉ lấy ảnh trong the_content()
	$pattern = '/<img[^>]+src=["\']([^"\']+)["\']/';
	preg_match_all($pattern, $post_content_next, $matches);

	if (!empty($matches[1])) {
		foreach ($matches[1] as $image_url) {
			$img_list_next = '<img class="image-nav" src="' . esc_url($image_url) . '" /><br>';
		}
	}
	//Chỉ lấy nội dung chữ trong the_content()
	$plain_text_content_next = substr(strip_tags($post_content_next), 0, 100);


	the_post_navigation(
		array(
			/* --- Next page ---*/
			'next_text' => '<p class="meta-nav">' . $twentytwentyone_next_label . $twentytwentyone_next . '</p>
			<div class="content-nav next">
			<p class="post-title-nav">%title</p>
			<hr>' .
				$img_list_next
				. '<p class="text-content">' . $plain_text_content_next . '......</p>'.'
			</div>',

			/* --- Prev page ---*/
			'prev_text' => '<p class="meta-nav">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</p>
			<div class="content-nav prev">
			<p class="post-title-nav">%title</p>
			<hr>' .
				$img_list_prev
				. '<p class="text-content">' . $plain_text_content_prev . '......</p>' . '
			</div>',
		)
	);

	/* --- /Module 14: ---*/
endwhile; // End of the loop.

get_footer();
