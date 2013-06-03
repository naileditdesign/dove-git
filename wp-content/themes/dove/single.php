<?php get_header(); ?>


	
		<section>
    
	<div class="row">
	<?php include(TEMPLATEPATH . '/sidebar-right.php'); ?>
	<div class="large-8 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="post" id="post-<?php the_ID(); ?>">
    	
        <div class="post-content">
        	<div class="title">
        	 <h1><?php the_title(); ?></h1>
        	 </div>
        	
        	<div class="content">
        		
        	
			<?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>
			

			<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
			
			</div>
			
        </div>
    </div>
	
  <?php endwhile; endif; ?>

	</div>
      	
      </div>
</section>

<?php get_footer(); ?>