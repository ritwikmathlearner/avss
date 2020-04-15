<?php echo form_open('trainees/create'); ?>
<fieldset>
    <div class="m-auto w-50 pt-3">
        <legend><?= $title ?></legend>
        <?php echo validation_errors('<p class="text-danger">', '</p>'); ?>
        <div class="form-group">
            <label for="id">Trainee ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="JL7887">
        </div>
        <div class="form-group">
            <label for="name">Trainee Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter trainee name">
        </div>
        <button type="submit" class="btn btn-primary" value="trainee" name="trainee">Submit</button>
    </div>
</fieldset>
</form>
