<?php $photo_gallery_images = get_field( 'photo_gallery' ); ?>
<?php if ( $photo_gallery_images ) :  ?>
    <div class="photo-gallery__wrapper">
        <?php foreach ( $photo_gallery_images as $photo_gallery_image ): ?>
            <img class="photo-gallery__image" src="<?php echo $photo_gallery_image['url']; ?>" alt="<?php echo $photo_gallery_image['alt']; ?>" />
        <?php endforeach; ?>
    </div>
<?php endif; ?>
