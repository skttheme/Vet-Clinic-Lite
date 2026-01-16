<?php
//about theme info
add_action( 'admin_menu', 'vet_clinic_lite_abouttheme' );
function vet_clinic_lite_abouttheme() {    	
	add_theme_page( esc_html__('About Theme', 'vet-clinic-lite'), esc_html__('About Theme', 'vet-clinic-lite'), 'edit_theme_options', 'vet_clinic_lite_guide', 'vet_clinic_lite_mostrar_guide');   
} 
//guidline for about theme
function vet_clinic_lite_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
?>
<div class="wrapper-info">
	<div class="col-left">
   		   <div class="col-left-area">
			  <?php esc_html_e('Theme Information', 'vet-clinic-lite'); ?>
		   </div>
          <p><?php esc_html_e('Vet Clinic Lite is easy to use flexible scalable and Elementor based template. It can be used for animal hospital, pet clinic, animal clinic, veterinary hospital, veterinary practice, animal care center, vet center, veterinary office, pet hospital, animal care clinic, pet shops, dog shop, bird cage, fishery, cat shelter, pet salon, cat cushions, fish pods, veterinary doctors and hospitals, animal breeders, pet training centres, pet services, pet grooming centres, pet selling store, pet hotel & resort, pet boarding, dog & puppy daycare or pet sitting, animal food supplier, cat adoption centers, animal rescue centers, pet caretakers, cats, charity, dogs, donation, Green Peace, nature, non-profit, pet care, pets, shelter dog walkers, dog shop, zoo, animal rescue centers and pet health consultant. Responsive, compatible with WooCommerce, online booking systems, contact forms and SEO plugins.','vet-clinic-lite'); ?></p>
          <a href="<?php echo esc_url(VET_CLINIC_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/free-vs-pro.png" alt="" /></a>
	</div><!-- .col-left -->
	<div class="col-right">			
			<div class="centerbold">
				<hr />
				<a href="<?php echo esc_url(VET_CLINIC_LITE_SKTTHEMES_LIVE_DEMO); ?>" target="_blank"><?php esc_html_e('Live Demo', 'vet-clinic-lite'); ?></a> | 
				<a href="<?php echo esc_url(VET_CLINIC_LITE_SKTTHEMES_PRO_THEME_URL); ?>"><?php esc_html_e('Buy Pro', 'vet-clinic-lite'); ?></a> | 
				<a href="<?php echo esc_url(VET_CLINIC_LITE_SKTTHEMES_THEME_DOC); ?>" target="_blank"><?php esc_html_e('Documentation', 'vet-clinic-lite'); ?></a>
                <div class="space5"></div>
				<hr />                
                <a href="<?php echo esc_url(VET_CLINIC_LITE_SKTTHEMES_THEMES); ?>" target="_blank"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/sktskill.jpg" alt="" /></a>
			</div>		
	</div><!-- .col-right -->
</div><!-- .wrapper-info -->
<?php } ?>