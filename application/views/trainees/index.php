<h2><?= $title ?></h2>
<a href="<?php echo base_url(); ?>trainees/create" class="btn btn-primary">Register New Trainee</a>
<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Trainee ID</th>
            <th scope="col">Trainee Name</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($trainees as $trainee) : ?>
        <tr>
            <th scope="row"><?= $trainee['id'] ?></th>
            <td><?= $trainee['name'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
