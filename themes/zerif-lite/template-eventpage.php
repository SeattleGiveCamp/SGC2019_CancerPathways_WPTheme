<?php
/**
 * Template Name: Event Page
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<div id="content" class="site-content">

	<div class="container">

		<div class="content-left-wrap col-md-12">

			<div id="primary" class="content-area">

				<main id="main" class="site-main" role="main">

				<div class="eventdiv"><div class="eventdivimg">
<img src="<?php the_field('event_pic') ?>" /></div>
<div class="eventdivinfo">
<h1><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h1>
<p><?php if(get_post_meta($post->ID, 'other_info', true)): ?><?php the_field('other_info') ?><br /><? endif; ?>
<?php if(get_post_meta($post->ID, 'tba_date', true)): ?><?php the_field('tba_date') ?><br /><? endif; ?>
<?php if(!get_post_meta($post->ID, 'tba_date', true)): ?><?php $date = DateTime::createFromFormat('Ymd', get_field('event_date'));
echo $date->format('F jS, Y'); ?><br /><? endif; ?>
<?php if(get_post_meta($post->ID, 'event_time', true)): ?><?php the_field('event_time') ?><br /><? endif; ?>
<?php if(get_post_meta($post->ID, 'google_map_shortcode', true)): ?><?php echo do_shortcode('[google-map-fb-popup id='.get_post_meta($post->ID, 'google_map_shortcode', true).''); ?><? endif; ?></p></div></div>

				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .content-left-wrap -->

	</div><!-- .container -->

<?php get_footer(); ?>