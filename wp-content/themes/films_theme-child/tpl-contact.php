<?php
/* Template Name: Contact Page*/
get_header(); 
?>
<section class="contact_section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1><?php echo the_title(); ?></h1>
			</div>
		</div>
		<div class="row">
			<?php if( have_rows('contact_block') ) {
			    while( have_rows('contact_block') ) { the_row();
			        $contact_image = get_sub_field('contact_image');
			        $first_name= get_sub_field('contact_name');
			        $contact_position= get_sub_field('contact_position');
			        $contact_number= get_sub_field('tel_number');
			        $tel_number= get_sub_field('tel_number');
			        $email= get_sub_field('email'); ?>

			        	<div class="col-sm-12 col-md-4">
							<div class="contact_block">								
								<div class="img_block block" style="background-image: url(<?php echo $contact_image ?>);">
									
								</div>
								<div class="contact_inf block">
									<h3><?php echo $first_name ?></h3>
									<h4><?php echo $contact_position ?></h4>
									<a href="tel:<?php echo $tel_number ?>"><?php echo $tel_number ?></a>
									<a href="mailto:<?php echo $email ?>"><?php echo $email ?></a>
								</div>
							</div>
							

						</div>


			      <?php  
			    }
			}
			?>
		</div>
	</div>
</section>



 <?php get_footer(); ?>