<?php $wysiwyg = get_field( 'wysiwyg_editor_2' ); ?>
<?php if ( $wysiwyg ) { ?>
    <div class="wysiwyg-editor__wrapper">
        <?php the_field( 'wysiwyg_editor_2' ); ?>
    </div>
<?php } ?>