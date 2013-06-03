<?php get_header(); ?>


	
		<section>
    
	<div class="row">
	
	<div class="large-12 columns">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
    <div class="post" id="post-<?php the_ID(); ?>">
    	<div class="large-12 column">
    		<div class="title">
        	 <h1><?php the_title(); ?></h1>
        	 </div>
    	</div>
    	
        <div class="post-content large-7 columns">
        	
        	
        	<div class="content">
        		 <p><?php the_field('description'); ?></p>
        		 <p class="rrp-price"><span>RRP</span>
        		 	&pound;<?php the_field('rrp'); ?></p>
        		 	
        		 <div class="price <?php the_field('stock_status'); ?>"><span>Our Price</span>
        		 	&pound;<?php the_field('our_price'); ?></div>
        		 	
			</div>
			
        </div>
        <div class="large-5 columns">
        	<div id="gallery">
	<div id="panel" class="image">
    
	<img id="largeImage" src="<?php the_field('image_1'); ?>" />
		
	</div>

	<div id="thumbs">
		<ul class="small-block-grid-4">
		<li><?php if(get_post_custom_values('image_1')) : foreach(get_post_custom_values('image_1') as $image) : ?>
<img src="<?php the_field('image_1'); ?>" />
<?php endforeach; endif; ?></li>
       
<li><?php if(get_post_custom_values('image_2')) : foreach(get_post_custom_values('image_2') as $image) : ?>
<img src="<?php the_field('image_2'); ?>" />
<?php endforeach; endif; ?></li>

<li><?php if(get_post_custom_values('image_3')) : foreach(get_post_custom_values('image_3') as $image) : ?>
<img src="<?php the_field('image_3'); ?>" />
<?php endforeach; endif; ?></li>

<li><?php if(get_post_custom_values('image_4')) : foreach(get_post_custom_values('image_4') as $image) : ?>
<img src="<?php the_field('image_4'); ?>" />
<?php endforeach; endif; ?></li>



</ul>
	</div>
</div>
<script>

$('#thumbs').delegate('img','click', function(){
	$('#largeImage').attr('src',$(this).attr('src').replace('thumb','large'));
	$('#description').html($(this).attr('alt'));
});

</script>
        </div>
    </div>
	
  <?php endwhile; endif; ?>

<?php include(TEMPLATEPATH . '/contact.php'); ?>

	</div>
      	
      </div>
      
      
      
</section>

<?php get_footer(); ?>