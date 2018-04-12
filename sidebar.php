<?php
// dynamic_sidebar('main-sidebar');
?>

<ul>
<?php

$arguments_query_posts_sidebar = [
    'post_per_page' => 3,
    'post-type' => 'post'
];

$query_post_sidebar = new Wp_Query($arguments_query_posts_sidebar);

if ($query_post_sidebar->have_posts()) {

    while ($query_post_sidebar->have_posts()) {

        $query_post_sidebar->the_post();

        ?>
        <li>
            <a href="<?php the_permalink(); ?>">
            <h3><?php the_title(); ?></h3>
            <p><?php echo excerpt(10);?></p>
            </a>
        </li>
        <?php
    }
}

?>
</ul>

<p><?php wp_list_categories(); ?> </p>
