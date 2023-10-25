<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" class="list_new_view">

<div class=row>
<div class="col-md-3 col-xs-3 topnewstime default-max-width text-center">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
</div><!-- .entry-footer -->
<div class="col-md-9 col-xs-9 shortdesc">
	<?php get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>
	<div class="entry-content">
		<?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
	</div><!-- .entry-content -->
</div>
</div>
</article><!-- #post-${ID} -->
