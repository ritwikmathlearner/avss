<h2><?= $title ?></h2>
<ul class="list-group w-25 mt-3">
    <?php foreach ($counts as $count) : ?>
        <li class="list-group-item d-flex justify-content-between align-items-center">
			<?= $count['name'] ?>
            <span class="badge badge-primary badge-pill">
				<?= empty($count['Count_of_Lessons']) ? '0' : $count['Count_of_Lessons']; ?>
			</span>
        </li>
    <?php endforeach; ?>
</ul>
