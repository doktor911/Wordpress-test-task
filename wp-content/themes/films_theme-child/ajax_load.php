<?php function load_films_ajax($paged = 1) {

    global $post;
	
	extract($_POST);
	
    $loop = array(
        'post_type' => 'films',  // указываем, что выводить нужно именно товары
        'posts_per_page'  => 2,
        'orderby' => 'date', // тип сортировки (в данном случае по дате)
        'paged'=>$paged,
        'post_status'=>'publish'
    );

    $posts = new WP_Query( $loop );
	$num_pages = $posts->max_num_pages;
    
    if( $posts->have_posts() ) : while ( $posts->have_posts() ) : $posts->the_post(); 
 ?>
        <div class="col-md-6 col-sm-12">
            <div class="film_block">
                <a href="<?php the_permalink(); ?>">
                    <div class="film_img" style="background-image:url(<?php echo the_post_thumbnail_url(); ?>)">
                    </div>
                    <span class="product_title" ><?php the_title(); ?></span>                             
                </a>
            </div>
        </div>
    <?php
    endwhile;
     

        if ($num_pages != $paged) :
            echo '	<div class="load_more_holder">
                    	<a id="load_films_ajax_more" class="load_more button" data-href="'. ($paged + 1) .'" data-cat="'.$category.'">Загрузить еще</a>
                    	
                	</div> '
                	?>
                		<script> 
                    	let ajaxurl = '<?php echo site_url() ?>/wp-admin/admin-ajax.php';
                    	</script>
         <?php endif;
        if ($num_pages == $paged) :
						

						
		        endif;


    else :
				
        echo '<div class="custom_coming_soon"><p>Sorry, no posts found.</p></div>';

    endif;

    if (wp_doing_ajax()) :
        exit();
    endif;
    wp_reset_postdata();

}
add_action( 'wp_ajax_load_films_ajax', 'load_films_ajax');
add_action( 'wp_ajax_nopriv_load_films_ajax', 'load_films_ajax');