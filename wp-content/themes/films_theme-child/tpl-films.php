<?php
/* Template Name: Films Page*/
get_header(); 
?>

<section class="films_section">
    <div class="container">
        
            <div id="ajax_films" class="row">
                
                <?php load_films_ajax(); ?>
                <?php wp_reset_postdata(); ?>
            </div>
        
    </div>
</section>


 <?php get_footer(); ?>