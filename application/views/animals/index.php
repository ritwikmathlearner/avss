<h2><?= $title ?></h2>
<a href="<?php echo base_url(); ?>animals/create" class="btn btn-primary">Register New Animal</a>
<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Animal ID</th>
            <th scope="col">Animal Name</th>
            <th scope="col">Condition to be Treated</th>
            <th scope="col">Availability</th>
            <th scope="col">Weight</th>
            <th scope="col">Height</th>
            <th scope="col">Age</th>
            <th scope="col">Condition for Trainee</th>
            <th scope="col">Owner Name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($animals as $animal) : ?>
        <tr>
            <th scope="row"><?= $animal['id'] ?></th>
            <td><?= $animal['name'] ?></td>
            <td><?= $animal['conditionName'] ?></td>
            <td><?= ucfirst($animal['availability']) ?></td>
            <td><?= $animal['weight'] ?></td>
            <td><?= $animal['height'] ?></td>
            <td><?= $animal['age'] ?></td>
            <td><?= ucfirst($animal['conditionForTrainee']) ?></td>
			<td><?php echo $animal['ownerName'] === NULL ? 'Till not assigned' : $animal['ownerName'] ?>
			<a href="<?php echo base_url(); ?>animals/assign/<?= $animal['id'] ?>" class="btn btn-link">
				<?php echo $animal['ownerName'] === NULL ? 'Assign' : 'Reassign' ?>
			</a>
			</td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
