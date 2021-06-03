<?php
    /*
    Template Name: Blog Page
    */
    ?>

<?php include (TEMPLATEPATH . '/small_header.php');  /* Tells WordPress to include the smaller header header.php */ ?> 

    
            
        
<?php
global $more;//define a global variable
$more = 0;// the global varibale is now equal to 0
query_posts('cat=2');//look for posts that have the category of 2
if(have_posts()) ://if we have posts to display
while(have_posts()) :the_post();//LOOP through all the posts and find the one that has a category of 2 get thet title and content
?>
<h2><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h2> 
            <div><p class="about-text"><?php the_content() ?></p></div>
<?php
endwhile;
endif;
wp_reset_query();?>   
            
<div class="blocker"></div>
        
     
        

  
      
      <section class="container-fluid articlebg">
      <div class="container">
          <div class="row"> <!--a row that gives us access to the BS columns-->
          <div>
              <h3 class="text-center article-title">LATEST ARTICLES</h3>
              </div>
              
                 <div class="col-md-4 article-cent"><?php $post_id = 178;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>                       

          </div>
              
                   <div class="col-md-4 article-cent"><?php $post_id = 181;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?>  
          </div>
              
                   <div class="col-md-4 article-cent"><?php $post_id = 171;
$queried_post = get_post($post_id);?>
<?php echo get_the_post_thumbnail($queried_post, 'full', array('class' => 'img-responsive')); ?>
<h4><?php echo $queried_post->post_title; ?></h4>
<?php echo $queried_post->post_excerpt; ?>
<?php echo '<a class="readmore" href="'.get_permalink($queried_post).'"><br>CONTINUE READING</a>';?> 
          </div>
              
                
          </div> <!--row-->
              
          </div> <!--container-->
      
      
      </section><?php get_footer(); /* Tells WordPress to include footer.php */ ?>
    