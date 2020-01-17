<?php if ( have_rows( 'photo_gallery' ) ) : ?>

    <!-- The tabs -->
    <div class="photo-gallery__tab">
        <button id="defaultOpen" class="photo-gallery__tablinks stclair-button" onclick="openGallery(event, 'Current')">Current</button>
        <button class="photo-gallery__tablinks stclair-button" onclick="openGallery(event, 'Historic')">Historic</button>
    </div>

	<?php while ( have_rows( 'photo_gallery' ) ) : the_row(); ?>
        <?php if ( have_rows( 'gallery_group' ) ) : ?>
            <?php while ( have_rows( 'gallery_group' ) ) : the_row(); ?>
                <div id="<?php the_sub_field( 'gallery_name' ); ?>" class="photo-gallery__tabcontent">
                    <div class="photo-gallery__wrapper">
                        <?php $gallery_images = get_sub_field( 'gallery' ); ?>
                        <?php if ( $gallery_images ) :  ?>
                            <?php foreach ( $gallery_images as $gallery_image ): ?>
                                <img class="photo-gallery__image" src="<?php echo $gallery_image['url']; ?>" alt="<?php echo $gallery_image['alt']; ?>" />
                            <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
		<?php endif; ?>
	<?php endwhile; ?>

<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>

<script>
    function openGallery(evt, galleryName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("photo-gallery__tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("photo-gallery__tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(galleryName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();

</script>
