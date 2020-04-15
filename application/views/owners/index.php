<h2><?= $title ?></h2>
<a href="<?php echo base_url(); ?>owners/create" class="btn btn-primary">Register New Owner</a>
<table class="table mt-5">
    <thead class="thead-dark">
        <tr>
            <th scope="col">Owner ID</th>
            <th scope="col">Owner Name</th>
            <th scope="col">Phone</th>
            <th scope="col">Animals Own</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($owners as $owner) : ?>
        <tr>
            <th scope="row"><?= $owner['id'] ?></th>
            <td><?= $owner['name'] ?></td>
            <td><?= $owner['phone'] ?></td>
            <td><?php echo $owner['animalsOwn'] === NULL ? 'Till not assigned' : $owner['animalsOwn'] ?></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
