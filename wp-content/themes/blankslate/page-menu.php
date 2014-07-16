<?php
$items = new WP_Query(
    array(
        'post_type' => 'food',
        'post_status' => 'publish',
        'posts_per_page' => -1,
        'caller_get_posts'=> 1
    )
);

wp_reset_query();

$items = $items->posts;

$categories = array();

foreach($items as $item){
    $item->meta = get_fields($item->ID);
    $item->category = get_the_category($item->ID);
    array_push($categories,$item);
    
}

?>

<?php get_header(); ?>

<section id="content" role="main">

<?php //echo $post->post_title;?>
<?php //echo $post->post_content;?>




<?php foreach($categories as $item):?>

	<?php
		 var_dump($item);
		// exit();
	 ?>
<?php
/*
	<h2 ><?php  if(empty($item->category['name']))
				{
					echo $item->category['name'];
				}
				 ?></h2>


	<article id="post-<?=$item->meta["fieldname"];?>" class="article">
	<header class="post_header">
	<p class="entry-title"><?php echo $item->post_title;?></p>
	</header>
	<section class="entry-content">
	<?php echo $item->post_content;?>
	</section>
	<p><?=$item->meta['price'];?></p>
	</article>


<?php endforeach; ?>
</section>
*/
?>


<?php get_footer(); ?>






