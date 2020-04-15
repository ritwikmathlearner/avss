<h2><?= $title ?></h2>
<a href="<?php echo base_url(); ?>conditions/create" class="btn btn-primary">Create New Condition</a>
<ul class="list-group w-25 mt-3">
    <?php foreach ($conditions as $condition) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <span class="badge badge-primary badge-pill"><?= $condition['id'] ?></span>
            <?= $condition['name'] ?>
        </li>
    <?php endforeach; ?>
</ul>