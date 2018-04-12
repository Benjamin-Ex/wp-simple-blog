<?php get_header(); ?>

 <article class="post">
     <?php if (have_posts()): while(have_posts()): the_post();?>
      <h1><?php printf('Search result for : %s', '<span>' . get_search_query() . '</span>'); ?></h1>

      <?php get_template_part('template-parts/main/content');
        endwhile;

  else: ?>

  <h1><?php printf('Search result for : %s', '<span>' . get_search_query() . '</span>'); ?></h1>
  <h2>sry, no match found.</h2>

<?php  endif;?>
 </article>

      <aside class="sidebar">

      <?php get_search_form();?>
      <?php get_sidebar('main-sidebar');?>

      </aside>

<?php get_footer(); ?>
