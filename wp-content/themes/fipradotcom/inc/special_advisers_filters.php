<div class="page-nav grey">
    <div class="row content-area">
        <div class="col-9-m no-margin">
            <ul class="anchor-links-list no-margin no-bullet">
                <li class="menu-title inline-s">Filter by</li>
                <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#expertise-filter-group">Expertise Area <i class="icon-down-open"></i></a></li>
                <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#surname-filter-group">Surname <i class="icon-down-open"></i></a></li>
            </ul>
        </div>
        <div class="col-3-m no-margin hide-s">
            <input type="text" id="text-filter" placeholder="Type to filter..." />
        </div>
    </div>
</div>

<div class="filter-group-container">

    <!--    START: Expertise Area filters-->
    <div id="expertise-filter-group" class="page-nav with-padding dark-grey filter-group hide">
        <div class="row content-area">
            <div class="filter-list-container">
                <ul class="filter-list no-margin no-bullet">
                    <?php $expertise_areas = get_expertise_areas(); ?>
                    <?php if( $expertise_areas->found_posts > 0) : ?>
                        <?php while ( $expertise_areas->have_posts() ) : $expertise_areas->the_post(); ?>
                            <li><a href="#" class="filter" data-filter=".<?php echo make_class_name(str_replace(',','',get_the_title())); ?>" data-filtering-on-text="<?php the_title(); ?>"><?php the_title(); ?></a></li>
                        <?php endwhile; ?>
                    <?php else : ?>
                        <li class="inline-s">No filters available</li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </div>
    <!--    END: Expertise Area filters-->

    <!--    START: Surname filters-->
    <div id="surname-filter-group" class="page-nav with-padding dark-grey filter-group hide">
        <div class="row content-area">
            <div class="filter-list-container">
                <ul class="filter-list no-margin no-bullet">
                    <?php $alphabet = range('A', 'Z'); ?>
                    <?php foreach($alphabet as $letter) : ?>
                        <li><a href="#" class="filter" data-filter=".surname-<?php echo $letter; ?>" data-filtering-on-text="Surnames beginning with <?php echo $letter; ?>"><?php echo $letter; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <!--    END: Surname filters-->

</div>