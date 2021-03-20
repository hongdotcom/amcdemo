<?php ?>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Created at</th>
            <th>Content</th>
        </tr>
    </thead>
    <?php foreach ($models as $item) { ?>
        <tr>
            <td class="col-sm-3">
                <?= $item->created_at ?>
            </td>
            <td class="col-sm-9">
                <?= $item->internal_remark ?>
            </td>
        </tr>
    <?php }
    ?>
</table>