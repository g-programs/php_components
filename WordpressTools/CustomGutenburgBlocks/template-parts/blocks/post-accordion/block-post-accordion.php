<?php

$accTitle = get_field( 'accordion_title' );

?>

<div class="accordion-block">
    <button onclick="accDrop()" class="dropbtn"><?= $accTitle ?></button>

    <?php if( have_rows('accordion_content') ) : ?>

    <div id="dropMe" class="acc-drop-content">

    <?php while( have_rows('accordion_content') ) : the_row();

    $accItemTitle = get_sub_field( 'accordion_item_title' );
    $accAnchor = get_sub_field( 'accordion_anchor_link' );

    ?>

        <a href="#<?= $accAnchor ?>"><?= $accItemTitle ?></a>

    <?php endwhile; ?>

    </div>

    <?php endif; ?>
</div>