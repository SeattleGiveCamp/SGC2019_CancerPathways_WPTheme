<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<style>.content-area .entry-header {
    overflow: hidden;
    display: block !important;
}</style>
	<header class="entry-header" style="display: block !important;">

		<h1 class="entry-title" style="display: block !important;"><?php the_title(); ?></h1>
<?php the_post_thumbnail('large'); ?>
		<div class="entry-meta">

			<?php zerif_posted_on(); ?>
		</div><!-- .entry-meta -->


	</header><!-- .entry-header -->

	<div class="entry-content">

		<?php 
			the_content();
			
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'zerif-lite' ),
				'after'  => '</div>',
			) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php

			/* translators: used between list items, there is a space after the comma */

			$category_list = get_the_category_list( __( ', ', 'zerif-lite' ) );

			/* translators: used between list items, there is a space after the comma */

			$tag_list = get_the_tag_list( '', __( ', ', 'zerif-lite' ) );

			if ( ! zerif_categorized_blog() ) {

				// This blog only has 1 category so we just need to worry about tags in the meta text

				if ( '' != $tag_list ) {

					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'zerif-lite' );

				} else {

					$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'zerif-lite' );

				}

			} else {

				// But this blog has loads of categories so we should probably display them here

				if ( '' != $tag_list ) {

					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'zerif-lite' );

				} else {

					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'zerif-lite' );

				}

			} // end check for categories on this blog

			printf(

				$meta_text,

				$category_list,

				$tag_list,

				get_permalink()

			);

		?>

		<?php edit_post_link( __( 'Edit', 'zerif-lite' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->