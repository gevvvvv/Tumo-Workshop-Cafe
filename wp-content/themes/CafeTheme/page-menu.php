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

    foreach($item->category as $value){
    	if($categories[$value->slug] === null)
    	{
    		$categories[$value->slug] = [];
    	}
		array_push($categories[$value->slug],$item);
	} 
}


?>
<?php get_header(); ?>

<section id="content" role="main">

<?php foreach($categories as $key => $items):?>
	<h2 id="<?=$key?>"><?=strtoupper($key);?></h2>
	<hr/>
	<?php foreach($items as $item): ?>
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
<?php endforeach; ?>

</section>
<?php get_footer(); ?>