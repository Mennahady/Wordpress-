<?php

if (! defined('WP_DEBUG')) {
	die( 'Direct access forbidden.' );
}

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
});
function short_code($atts){

   

    ob_start();

 //$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 

      extract(shortcode_atts(array(

      'posts' => 1,

		'cat'=>'',

		  'show_cat'=>false,

		 'order'=>'DESC',

		  'post_id'=>''

		  

   ), $atts));

	

 $args = array(

    'post_type' => 'post',

    'post_status' => 'publish',

    'category_name' => '',

    'posts_per_page' => $posts,

    'orderby'=>$order

);			

	if( empty($post_id)) 

	{

		$post = get_post($post_id); //assuming $id has been initialized

        setup_postdata($post);

	}

	

$arr_posts = new WP_Query( $args );

 

if ( $arr_posts->have_posts() ) :

 

    while ( $arr_posts->have_posts() ) :

        $arr_posts->the_post();

        ?>

        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

          <div class="image_cusm">  <?php

            if ( has_post_thumbnail() ) :

                the_post_thumbnail();

            endif;

            ?>

			</div>

            <header class="entry-header">

				<h1 class="entry-title" ><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

            </header>

            <div class="entry-content">

				<span class='cat_cus'><?php the_category(', '); ?> </span>

				<p class="author_clas"><i class="fas fa-user-edit"></i> <?php the_author();  ?></p>

				<p class="meta_date"> <?php the_time( 'd M' ); ?> </p>

				 <?php the_excerpt(); ?>

                <a href="<?php the_permalink(); ?>">Read More</a> 

            </div>

        </article>

        <?php

    endwhile;

endif;

 



  

   return ob_get_clean();

  } 





    add_shortcode("show_posts","short_code");

