<?php
/*
Template Name: HomeCMS
*/
?>

<?php get_header(); ?>


<section>
	<div class="featured columns">
	
      <ul data-orbit>
      	<li><img src="http://placehold.it/1280x400&text=Slide_1" alt="slide image"></li>
      	<li><img src="http://placehold.it/1280x400&text=Slide_2" alt="slide image"></li>
      	<li><img src="http://placehold.it/1280x400&text=Slide_3" alt="slide image"></li>
      </ul>
    
    </div>
	<div class="row">
	
	<?php include(TEMPLATEPATH . '/global_contact.php'); ?>
		<div class="content large-12 columns">
<ul class="large-block-grid-4 our-block">
	<?php 
    query_posts(array( 
        'post_type' => 'work',
		 'showposts' => 4
    ) );  
?>
<?php while (have_posts()) : the_post(); ?>

	 
	   <li>
	   	<div style="background: url(<?php the_field('icon'); ?>)no-repeat 5%;" class="title">
	   		<span>Our Services</span>
	   			   		<h3><a href="<?php the_permalink() ?>"><?php $category = get_the_category(); echo $category[0]->cat_name;
?></a></h3>
	   		</div>
	   		<div class="description">
	   			<a href="<?php the_permalink() ?>" class="inner">
	   			<?php global $post;
$trim_length = 80;  //desired length of text to display
$summary_excerpt = 'description';
$value = get_post_meta($post->ID, $summary_excerpt, true);
if ($value != '') {
  if(strlen($value) <= $trim_length){
    echo apply_filters('the_content', $value);
  } else {
    echo apply_filters('the_content', rtrim(substr($value,0,$trim_length)).'.');
  }
} ?>

<p>Click for more Information</p>

	   		</a>
	   	<div class="image">
	   		<img src="<?php the_field('image'); ?>" />
	   	</div>
	   	</div>
	   </li>
	   
	 

<?php endwhile; ?>

</ul>
</div>
<?php include(TEMPLATEPATH . '/global_services.php'); ?>
</div>
<!--<?php include(TEMPLATEPATH . '/sidebar-right.php'); ?>-->

</section>
    
<?php get_footer(); ?>
  