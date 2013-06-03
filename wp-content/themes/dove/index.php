<?php get_header(); ?>

<section>

 <div class="row">
    <div class="large-12 columns">
      <ul data-orbit>
      	<li><img src="http://placehold.it/1200x250&text=Slide_1" alt="slide image"></li>
      	<li><img src="http://placehold.it/1200x250&text=Slide_2" alt="slide image"></li>
      	<li><img src="http://placehold.it/1200x250&text=Slide_3" alt="slide image"></li>
      </ul>
    </div>
  </div>
 <div class="row">
 	<?php include(TEMPLATEPATH . '/sidebar-left.php'); ?>
<div class="large-9 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
<div class="post" id="post-<?php the_ID(); ?>">
    	
<h3><a href="<?php the_permalink() ?>" title="Click Image to read <?php the_title(); ?>"><?php the_title(); ?></a></h3>
<p><?php the_content(); ?>.</p>

</div>

	
<?php endwhile; endif; ?>

	
</div>
</div>
	 
</section>

<?php get_footer(); ?>