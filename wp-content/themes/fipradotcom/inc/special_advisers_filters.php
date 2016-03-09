<div class="sticky-filters">

    <div class="page-nav grey">
        <div class="row content-area">
            <div class="col-7-m no-margin">
                <ul class="anchor-links-list no-margin no-bullet">
                    <!--                <li class="menu-title inline-s">Filter by</li>-->
                    <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#surname-filter-group">Surname <i class="icon-down-open"></i></a></li>
                    <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#expertise-filter-group">Expertise <i class="icon-down-open"></i></a></li>
                </ul>
            </div>
            <div class="col-5-m no-margin hide-s">
                <input type="text" id="text-filter" class="text-filter-autocomplete" placeholder="Search by name or expertise area..." />
            </div>
        </div>
    </div>

    <div class="filter-group-container">

        <!--    START: Surname jump-->
        <div id="surname-filter-group" class="page-nav with-padding dark-grey filter-group hide">
            <div class="row content-area">
                <div class="filter-list-container">
                    <ul class="filter-list no-margin no-bullet">
                        <?php $alphabet = range('A', 'Z'); ?>
                        <?php foreach($alphabet as $letter) : ?>
                            <li><a href="#surname-<?php echo $letter; ?>" class="filter jump-to-surname" data-surname-letter="<?php echo $letter; ?>"><?php echo $letter; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
        <!--    END: Surname jump-->

        <!--    START: Expertise Area-->
        <div id="expertise-filter-group" class="page-nav with-padding dark-grey filter-group hide">
            <div class="row content-area">
                <div class="filter-list-container">
                    <?php $expertise_areas_policy = get_all_spad_expertise_areas(true, false); ?>
                    <?php $expertise_areas_location = get_all_spad_expertise_areas(false, true); ?>

                    <?php if($expertise_areas_policy) : ?>
                        <ul class="filter-list no-margin no-bullet">
                        <li class="menu-title full-width shallow">Policy Areas</li>
                        <?php foreach($expertise_areas_policy as $expertise_area) : ?>
                            <li class="filterable"><a href="#" class="filter" data-filter=".expertise-<?php echo make_class_name(str_replace(',', '', $expertise_area)); ?>" data-filtering-on-text="Expertise area: <?php echo $expertise_area; ?>"><?php echo $expertise_area; ?></a></li>
                        <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                    <?php if($expertise_areas_location) : ?>
                        <ul class="filter-list no-margin no-bullet">
                            <li class="menu-title full-width shallow">Geographic Locations</li>
                            <?php foreach($expertise_areas_location as $expertise_area) : ?>
                                <li class="filterable"><a href="#" class="filter" data-filter=".expertise-<?php echo make_class_name(str_replace(',', '', $expertise_area)); ?>" data-filtering-on-text="Expertise area: <?php echo $expertise_area; ?>"><?php echo $expertise_area; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!--    END: Expertise Area-->

    </div>
</div>