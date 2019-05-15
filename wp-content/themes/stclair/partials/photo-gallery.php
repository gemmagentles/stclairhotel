<?php
//Setup pagination variables
$photo_gallery_images = get_field('photo_gallery'); // Get our gallery
$images = array(); // Set images array for current page

$items_per_page  = 2; // How many items we should display on each page
$total_items = count($photo_gallery_images); // How many items we have in total
$total_pages = ceil($total_items / $items_per_page); // How many pages we have in total
//Get current page
if ( get_query_var( 'paged' ) ) {
	$current_page = get_query_var( 'paged' );
}elseif ( get_query_var( 'page' ) ) {
	//this is just in case some odd rewrite, but paged should work instead of page here
	$current_page = get_query_var( 'page' );
}else{
	$current_page = 1;
}

$starting_point = (($current_page-1)*$items_per_page); // Get starting point for current page

// Get elements for current page
if($photo_gallery_images){
    $images = array_slice($photo_gallery_images,$starting_point,$items_per_page);
    ?>
    <div><?php echo $images ?></div>
    <?php
}

if(!empty($images)){
    //your gallery loop here
    ?>
    <div><?php echo $total_items ?></div>
    <div class="photo-gallery__wrapper">
        <?php foreach ( $photo_gallery_images as $photo_gallery_image ): ?>
            <img class="photo-gallery__image" src="<?php echo $photo_gallery_image['url']; ?>" alt="<?php echo $photo_gallery_image['alt']; ?>" />
        <?php endforeach; ?>
    </div>
    <?php
}

// And our pagination
$big = 999999999; // need an unlikely integer
echo paginate_links(array(
	'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
	'format' => '?paged=%#%',
    'current' => $current_page,
    'show_all'           => false,
	'total' => $total_pages
));
?>
