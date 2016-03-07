<div class="page-nav grey">
    <div class="row content-area">
        <div class="col-7-m no-margin">
            <ul class="anchor-links-list no-margin no-bullet">
                <li class="menu-title inline-s">Filter by</li>
                <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#surname-filter-group">Surname <i class="icon-down-open"></i></a></li>
                <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#expertise-filter-group">Expertise <i class="icon-down-open"></i></a></li>
            </ul>
        </div>
        <div class="col-5-m no-margin hide-s">
            <input type="text" id="text-filter" placeholder="Search by name or expertise area..." />
        </div>
    </div>
</div>

<div class="filter-group-container">

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

    <!--    START: Expertise Area-->
    <div id="expertise-filter-group" class="page-nav with-padding dark-grey filter-group hide">
        <div class="row content-area">
            <div class="filter-list-container">
                <ul class="filter-list no-margin no-bullet">
                    <?php $expertise_areas = get_all_spad_expertise_areas(); ?>
                    <?php foreach($expertise_areas as $expertise_area) : ?>
                        <li><a href="#" class="filter" data-filter=".expertise-<?php echo make_class_name(str_replace(',', '', $expertise_area)); ?>" data-filtering-on-text="Expertise area: <?php echo $expertise_area; ?>"><?php echo $expertise_area; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
    </div>
    <!--    END: Expertise Area-->

</div>