<?php
$items = new WP_Query(
    array(
        'post_type' => 'characters',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1
    )
);

wp_reset_query();

$items = $items->posts;

?>

<?php get_header(); ?>

<section id="content" role="main">

<?=$post->post_title;?>
<?=$post->post_content;?>




<?php foreach($items as $item):
    $item->meta = get_fields($item->ID);
?>

    

<article id="post-<?=$item->meta["fieldname"];?>" class="article">
<header class="header">
<h1 class="entry-title"><?php echo $item->post_title;?></h1>
</header>
<section class="entry-content">
<?php echo $post->post_content;?>
</section>
</article>
<?php endforeach; ?>
</section>


<?php get_footer(); ?>






