<h2><?= $title ?></h2>
<ul class="list-group w-25 mt-3">
    <?php foreach ($counts as $count) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
			<?= $count['conditionForTrainee'] ?>
            <span class="badge badge-primary badge-pill"><?= $count['Count_of_Animals'] ?></span>
        </li>
    <?php endforeach; ?>
</ul>
