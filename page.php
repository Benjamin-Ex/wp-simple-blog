<?php get_header(); ?>

 <section class="post">
      <?php if (have_posts()): while(have_posts()): the_post();?>
        <h1 class="post__title">
          <span><?php the_title();?></span>
        </h1>



        <div class="contact">
            <?php the_content(); ?>
          <?php echo do_shortcode('[contact-form-7 id="22" title="Contact form 1"]') ?>
        </div>
    <?php endwhile; endif;?>
 </section>

<?php get_footer(); ?>
