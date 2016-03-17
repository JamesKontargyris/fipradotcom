<div class="sticky-filters">

    <div class="page-nav grey">
        <div class="row content-area">
            <div class="col-7-m no-margin">
                <ul class="anchor-links-list no-margin no-bullet">
                    <!--                <li class="menu-title inline-s">Filter by</li>-->
                    <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#surname-filter-group">Surname <i class="icon-down-open"></i></a></li>
                    <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#expertise-tags-filter-group">Expertise<i class="icon-down-open"></i></a></li>
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

        <!--    START: Expertise Tags-->
        <div id="expertise-tags-filter-group" class="page-nav with-padding dark-grey filter-group hide">
            <div class="row content-area">
                <div class="filter-list-container">
                    <?php $expertise_tags = get_tax_terms('spad_expertise'); ?>

                    <?php if($expertise_tags) : ?>
                        <ul class="filter-list no-margin no-bullet">
                            <?php foreach($expertise_tags as $tag) : ?>
                                <li class="filterable"><a href="#" class="filter" data-filter=".expertise-<?php echo make_class_name(str_replace(',', '', $tag->name)); ?>" data-filtering-on-text="Expertise area: <?php echo $tag->name; ?>"><?php echo $tag->name; ?></a></li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <!--    END: Expertise Tags-->

    </div>
</div>