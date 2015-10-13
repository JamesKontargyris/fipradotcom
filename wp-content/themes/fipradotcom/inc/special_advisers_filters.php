<div class="page-nav grey">
    <div class="row content-area">
        <div class="col-9-m no-margin">
            <ul class="anchor-links-list no-margin no-bullet">
                <li class="menu-title inline-s">Filter by</li>
                <li class="inline-s"><a href="#" class="filter-group-trigger" data-filter-group="#surname-filter-group">Surname <i class="icon-down-open"></i></a></li>
            </ul>
        </div>
        <div class="col-3-m no-margin hide-s">
            <input type="text" id="text-filter" placeholder="Type to filter..." />
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

</div>