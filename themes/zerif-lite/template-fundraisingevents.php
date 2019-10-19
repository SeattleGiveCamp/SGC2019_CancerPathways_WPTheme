<?php
/**
 * Template Name: Fundraising Events Template
 */
get_header(); ?>

<div class="clear"></div>

</header> <!-- / END HOME SECTION  -->

<div id="content" class="site-content">

	<div class="container">

		<div class="content-left-wrap col-md-12">

			<div id="primary" class="content-area">
				<main id="main" class="site-main" role="main">
               <span style="text-align:left;"> <h1>Fundraising Events</h1>
<!--<a href="https://givebig.seattlefoundation.org/npo/cancer-pathways" target="_blank"><div class="givetodaybutton">GIVE TODAY - #GIVEBIG</div></a>-->
	<p>Cancer Pathways supports our mission through fundraising events like these. If you are interested in learning more please contact Trinette Baer-Kowalski at trinette@cancerpathways.org.</p></span>


					<?php wp_reset_query()?>
              <?php  
    query_posts(array( 
	'cat' => 4,
        'post_type' => 'event',
        'showposts' => 1000, 
	'meta_key' => 'event_date',
	'meta_value' => date("yymmdd"),
	'meta_compare' => '>',
	'orderby' => 'meta_value',
	'order' => 'ASC'
	
	)
);
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="eventdiv"><div class="eventdivimg">
<a href="<?php the_permalink() ?>"><img src="<?php the_field('event_pic') ?>" /></a></div>
<div class="eventdivinfo">
<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
<p><?php if(get_post_meta($post->ID, 'other_info', true)): ?><?php the_field('other_info') ?><br /><? endif; ?>
<?php if(get_post_meta($post->ID, 'tba_date', true)): ?><?php the_field('tba_date') ?><br /><? endif; ?>
<?php if(!get_post_meta($post->ID, 'tba_date', true)): ?><?php $date = DateTime::createFromFormat('Ymd', get_field('event_date'));
echo $date->format('F jS, Y'); ?><br /><? endif; ?>
<?php if(get_post_meta($post->ID, 'event_time', true)): ?><?php the_field('event_time') ?><br /><? endif; ?></div></div>
<?php endwhile; else : ?>


	<p><?php _e( 'Sorry, there are no events currently booked.' ); ?></p>
<?php endif; ?><?php wp_reset_postdata(); ?><?php wp_reset_query()?> 


<span style="text-align:left;"> <h1>Past Events</h1></span>

  <?php  
    query_posts(array( 
	'cat' => 9,
        'post_type' => 'event',
        'showposts' => 1000, 
	
	'order' => 'ASC'
	
	)
);
?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<div class="eventdiv"><div class="eventdivimg">
<a href="<?php the_permalink() ?>"><img src="<?php the_field('event_pic') ?>" /></a></div>
<div class="eventdivinfo">
<h3><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
<h4><a href="<?php the_permalink() ?>">Learn more about <?php the_title() ?> here.</a>
</div></div>

<?php endwhile; endif; ?><?php wp_reset_postdata(); ?>
<span style="text-align:left; margin-bottom: 30px;"> <h2>Sponsorship</h2>			<p>Are you a company interested in supporting our fundraising events? Please contact Trinette Baer-Kowalski at <a href="mailto:trinette@cancerpathways.org">trinette@cancerpathways.org</a> to find out how you can get involved!</p><br />
<br />
</span>
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .content-left-wrap -->

	</div><!-- .container -->

<?php get_footer(); ?>