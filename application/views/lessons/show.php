<div style="display: grid; grid-template-columns: 1fr 1fr;">
	<p><strong>Veterinary lesson No:</strong> <?= $lesson['id'] ?></p>
	<p><strong>Veterinary lesson date:</strong> <?= $lesson['lessonDtae'] ?></p>
	<p><strong>Animal condition:</strong> <?= ucfirst($lesson['condition']) ?></p>
	<p><strong>Lesson time:</strong> <?= $lesson['lessonTime'] ?></p>
	<p><strong>Offset Cost of lesson:</strong> &pound;<?= $lesson['offsetCost'] ?></p>
</div>
<p><strong>Lesson:</strong> Animals and Trainee vets</p>
<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Animal ID</th>
            <th scope="col">Animal Name</th>
            <th scope="col">Trainee ID</th>
            <th scope="col">Trainee Name</th>
            <th scope="col">Owner ID</th>
            <th scope="col">Owner Name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($vetsanimals as $vetanimal) : ?>
        <tr>
            <th scope="row"><?= $vetanimal['animalID'] ?></th>
            <td><?= $vetanimal['animalName'] ?></td>
            <td><?= $vetanimal['trainneID'] ?></td>
            <td><?= $vetanimal['trainneName'] ?></td>
            <td><?= $vetanimal['ownerID'] ?></td>
            <td><?= $vetanimal['ownerName'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<a href="<?php echo base_url(); ?>lessons/assign/<?= $lesson['id'] ?>" class="btn btn-primary">Assign Animal and Vet</a>
