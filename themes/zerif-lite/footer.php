<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after
 */

?>

</div><!-- .site-content -->

<footer id="footer" role="contentinfo">

<div class="container">
 <div class="<?php echo $footer_class; ?> copyright">
    <div class="socialmediadiv" style="min-width: 250px !important; text-align: center; margin-top: -40px;">


<a href="<?php the_field('youtube' , '231') ?>" target="_blank"><span class="youtubeblue"></span></a><a href="<?php the_field('twitter' , '231') ?>" target="_blank"><span class="twitterblue"></span></a>
<a href="<?php the_field('linkedin' , '231') ?>" target="_blank"><span class="linkedinblue"></span></a>
<a href="<?php the_field('facebook' , '231') ?>" target="_blank"><span class="facebookblue"></span></a>
<a href="<?php the_field('instagram' , '231') ?>" target="_blank"><span class="instagramblue"></span></a><br />
<p style="font-size: 12px; color: #fff;">1400 Broadway Seattle, WA 98122-3809</p><br /></div>
<h5 style="text-align: center; color: #fff;">Sign up for our newsletter!</h5>
<span style="text-align: center;"></span>
<!-- Begin Robly Signup Form -->
<div id="robly_embed_signup">
  <form action="https://list.robly.com/subscribe/post" method="post" id="robly_embedded_subscribe_form" name="robly_embedded_subscribe_form" class="validate" target="_blank" novalidate="">
    <input type="hidden" name="a" value="44f882c66b55b22ebad84e3c2e89c926" />

                <div class="robly_field_group" style="color: #fff;"><label>Email Address:<span class="asterisk">*</span></label><input type="text" name="EMAIL" id="DATA0" class="required" autocapitalize="off" autocorrect="off" value=""></div>
                <div class="clearfix"></div>
                 <div class="robly_field_group" style="color: #fff;"><label>First Name:</label><input type="text" name="FNAME" id="DATA1" class="required" value=""></div>
                <div class="clearfix"></div>
               <div class="robly_field_group" style="color: #fff;"><label>Last Name:</label><input type="text" name="LNAME" id="DATA2" class="required" value=""></div>
                <div class="clearfix"></div>
        
        <div class="clearfix"></div>
      <div class="clear">
        <input type="submit" value="Subscribe" name="subscribe" id="robly_embedded_subscribe" class="button" style="border: 2px solid rgb(255, 255, 255);"/>
        
      </div>
  </form>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script>
  $(document).ready(function () {

      $("#robly_embedded_subscribe").click(function (e) {
          e.preventDefault();

          var email = $("#DATA0").val();
          if (!is_valid_email_address(email)) {
              alert("Please enter a valid email address.");
              return false;
          }
              if (!$("#DATA0").val()) {
                  alert("Please fill in all required fields!");
                  return false
              }
              if (!$("#DATA1").val()) {
                  alert("Please fill in all required fields!");
                  return false
              }
              if (!$("#DATA2").val()) {
                  alert("Please fill in all required fields!");
                  return false
              }


          var f = $("#robly_embedded_subscribe_form");
          f.submit();

          return false;
      });

  });

  function is_valid_email_address(emailAddress) {
      var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
      return pattern.test(emailAddress);
  }

</script>
<!-- End Robly Signup Form --></span>
</span></div>
</div>
	<?php
		$footer_sections = 0;
		$zerif_address = get_theme_mod('zerif_address',__('Company address','zerif-lite'));
		$zerif_address_icon = get_theme_mod('zerif_address_icon',get_template_directory_uri().'/images/map25-redish.png');
		
		$zerif_email = get_theme_mod('zerif_email','<a href="mailto:contact@site.com">contact@site.com</a>');
		$zerif_email_icon = get_theme_mod('zerif_email_icon',get_template_directory_uri().'/images/envelope4-green.png');
		
		$zerif_phone = get_theme_mod('zerif_phone','<a href="tel:0 332 548 954">0 332 548 954</a>');
		$zerif_phone_icon = get_theme_mod('zerif_phone_icon',get_template_directory_uri().'/images/telephone65-blue.png');

		$zerif_socials_facebook = get_theme_mod('zerif_socials_facebook','#');
		$zerif_socials_twitter = get_theme_mod('zerif_socials_twitter','#');
		$zerif_socials_linkedin = get_theme_mod('zerif_socials_linkedin','#');
		$zerif_socials_behance = get_theme_mod('zerif_socials_behance','#');
		$zerif_socials_dribbble = get_theme_mod('zerif_socials_dribbble','#');
		
		$zerif_accessibility = get_theme_mod('zerif_accessibility');
		$zerif_copyright = get_theme_mod('zerif_copyright');

		if(!empty($zerif_address) || !empty($zerif_address_icon)):
			$footer_sections++;
		endif;
		
		if(!empty($zerif_email) || !empty($zerif_email_icon)):
			$footer_sections++;
		endif;
		
		if(!empty($zerif_phone) || !empty($zerif_phone_icon)):
			$footer_sections++;
		endif;
		if(!empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble) || 
		!empty($zerif_copyright)):
			$footer_sections++;
		endif;
		
		if( $footer_sections == 1 ):
			$footer_class = 'col-md-12';
		elseif( $footer_sections == 2 ):
			$footer_class = 'col-md-6';
		elseif( $footer_sections == 3 ):
			$footer_class = 'col-md-4';
		elseif( $footer_sections == 4 ):
			$footer_class = 'col-md-3';
		else:
			$footer_class = 'col-md-3';
		endif;
		
		/* COMPANY ADDRESS */
		if( !empty($zerif_address) ):
			echo '<div class="'.$footer_class.' company-details">';
				
						dynamic_sidebar( 'zerif-sidebar-footer' );
	
				
			echo '</div>';
		endif;
		
		/* COMPANY EMAIL */
		
		
		if( !empty($zerif_email) ):
			echo '<div class="'.$footer_class.' company-details">';
				
					dynamic_sidebar( 'zerif-sidebar-footer-2' );
			
				
			echo '</div>';
		endif;
		
		/* COMPANY PHONE NUMBER */
		
		
		if( !empty($zerif_phone) ):
			echo '<div class="'.$footer_class.' company-details">';
			
						dynamic_sidebar( 'zerif-sidebar-footer-3' );
			
			echo '</div>';
		endif;
		
		// open link in a new tab when checkbox "accessibility" is not ticked
		$attribut_new_tab = (isset($zerif_accessibility) && ($zerif_accessibility != 1) ? ' target="_blank"' : '' );
		
		if( !empty($zerif_socials_facebook) || !empty($zerif_socials_twitter) || !empty($zerif_socials_linkedin) || !empty($zerif_socials_behance) || !empty($zerif_socials_dribbble) || 
		!empty($zerif_copyright)):
		
					echo '';
					
					
					echo '
';
					
					echo '';
			
		endif;
	?>

   	 <?php wp_enqueue_script( 'script', get_template_directory_uri() . '/js/2019_givecamp.js', array ( ), 1.0, true); ?>


</div> <!-- / END CONTAINER -->

</footer> <!-- / END FOOOTER  -->


	</div><!-- mobile-bg-fix-whole-site -->
</div><!-- .mobile-bg-fix-wrap -->


<?php wp_footer(); ?>

</body>

</html>
