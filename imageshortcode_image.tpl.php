<figure class="<?php echo $align; ?>">
    <?php
        
        echo theme(
            'image_style',
            array(
                'style_name' => $imagestyle,
                'path' => $image->uri,
                'alt' => $alt,
                'title' => $title
            )
        );
        
        if ($title != '') {
            ?>
    <figcaption><?php echo $title; ?></figcaption>
            <?php
        }
    ?>
</figure>