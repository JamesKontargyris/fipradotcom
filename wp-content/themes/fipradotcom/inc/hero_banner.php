<?php if( ! get_field('hide_header_banner')) : ?>
    <div id="hero" class="full-width-block-container<?= has_post_thumbnail() ? ' with-content-bar' : ''; ?>">
    <!--            Set the content block height using the header_text_block_height field. If a featured image is set, override this height with the content-bar class-->
    <div class="full-width-block-content-container <?= get_field('header_text_block_height') ? get_field('header_text_block_height') : 'short'; ?> <?= has_post_thumbnail() ? 'content-bar bg-image' : ''; ?>  grey">
        <div class="full-width-block-content <?= get_field('header_text_location') ? get_field('header_text_location') : 'center';  ?> narrow">

            <?php if(get_post_type() == 'unit') : ?>
                <?php if ( get_field('flag') ) : ?>
                    <img src="<?= get_field('flag')['url']; ?>" alt="<?= get_the_title(); ?>" title="<?= get_the_title(); ?>" class="hero-flag"/>
                <?php endif; ?>
            <?php endif; ?>

            <h1 class="upper no-margin">
                <?php if (get_post_type() == 'expertise') : ?><?= file_get_contents(get_field('icon')); ?><br class="hide-s"/> <?php endif; ?>
                <?php if(get_post_type() == 'unit') : echo 'Fipra ' . str_replace('Fipra', '', get_the_title()); ?>
                <?php else : the_title(); ?>
                <?php endif; ?>
            </h1>
            <?php if(get_field('header_introduction')) : ?>
                <p class="lead no-margin"><?= get_field('header_introduction'); ?></p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php endif; ?>