<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>

<div class="clear"></div>


</header> <!-- / END HOME SECTION  -->
<style>.content-area .entry-header {
    overflow: hidden;
    display: none !important;
}</style>
<div id="content" class="site-content" style="margin-top: 90px;"><h1 style="font-size: 40px;">Click <span class="clickherelink"><a href="http://cancerpathways.org/LETTER.PDF" target="_blank">here</a> </span>to learn more about the name change</h1><div style="width: 100%; height: auto; display: block; overflow: hidden; margin-top: 37px; vertical-align: bottom; background: #3b70a1;"><!-- / OLD SLIDER --> <video id="sampleMovie" src="http://cancerpathways.org/video.mp4" style="width: 100%; height: auto; max-height: 500px;" controls></video></div>
	<div class="container">

		<div class="content-left-wrap col-md-12">

			<div id="primary" class="content-area">

				<main id="main" class="site-main" role="main">

					<?php 
						while ( have_posts() ) : the_post(); 
						
							get_template_part( 'content', 'home' );
							
							// If comments are open or we have at least one comment, load up the comment template
							if ( comments_open() || '0' != get_comments_number() ) :
								comments_template();
							endif;
							
						endwhile;
					?>
				</main><!-- #main --><span class="homecalendarlink">

<h1 style="text-align: left;"><a href="<?php the_field('calendar_file') ?>" target="_blank"><?php the_field('calendar_text') ?></a></h1>
<p style="text-align: left;">&nbsp;</p>

			</div><!-- #primary -->

		</div><!-- .content-left-wrap -->

	</div><!-- .container -->

<?php get_footer(); ?>