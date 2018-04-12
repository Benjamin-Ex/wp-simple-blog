<?php get_header(); ?>

 <article class="post">
     <?php if (have_posts()): while(have_posts()): the_post();?>
   <div class="one-post">
        <h1 class="post__title">
          <a href="<?php the_permalink();?>"><span><?php the_title();?></span></a>
        </h1>
        <div class="post__image" style="background-image: url(<?php the_post_thumbnail_url(); ?>)">
        </div>
        <div class="post__info">


          <!-- Calcul de la différence de date -->
          <?php
          $now = new DateTime();
          $postDate = new DateTime (get_the_date('Y-m-d'));

          $interval = $postDate ->diff($now);
          ?>

          <!-- Affichage de la différence -->
          <?php echo $interval -> format ('%a');?> days ago &bull; by <?php the_author();?>
        </div>

        <div class="post__content">
          <p><?php the_excerpt(); ?></p>
          <a href="<?php the_permalink() ?>">Read more</a>
        </div>
    </div>
      <?php endwhile; endif;?>
 </article>

      <aside class="sidebar">

      <?php get_search_form();?>
      <?php get_sidebar('main-sidebar');?>

      </aside>

<?php get_footer(); ?>
