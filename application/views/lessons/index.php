<h2><?= $title ?></h2>
<a href="<?php echo base_url(); ?>lessons/create" class="btn btn-primary">Create New Veterinary Lesson</a>
<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Lesson ID</th>
            <th scope="col">Lesson Date</th>
            <th scope="col">Lesson Condition</th>
            <th scope="col">Lesson Time</th>
            <th scope="col">Offset Cost of Lesson</th>
            <th scope="col">Status</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($lessons as $lesson) : ?>
        <tr> 
            <th scope="row"><a href="<?php echo base_url(); ?>lessons/show/<?= $lesson['id'] ?>" class="link"><?= $lesson['id'] ?></a></th>
            <td><?= $lesson['lessonDtae'] ?></td>
            <td><?= $lesson['condition'] ?></td>
            <td><?= $lesson['lessonTime'] ?></td>
            <td>£<?= $lesson['offsetCost'] ?></td>
            <td><?= $lesson['lessonDtae'] >= date("Y-m-d") ? 'Pending' : 'Done' ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
