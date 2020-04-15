<?php echo form_open('lessons/assign/'.$lesson['id']); ?>
<fieldset>
    <div class="m-auto w-50 pt-3">
        <legend><?= $lesson['id'] ?></legend>
        <?php echo validation_errors('<p class="text-danger">', '</p>'); ?>
        <div class="form-group">
            <label for="trainee">Select Vet Name</label>
            <select class="form-control" id="trainee" name="trainee">
				<option value="" selected>Select</option>
				<?php foreach($trainees as $trainee) : ?>
					<option value="<?= $trainee['id'] ?>"><?= $trainee['name'] ?></option>
				<?php endforeach; ?>
            </select>
		</div>
		<div class="form-group">
            <label for="animal">Select Animal Name</label>
            <select class="form-control" id="animal" name="animal">
				<option value="" selected>Select</option>
				<?php foreach($animals as $animal) : ?>
					<?php if($animal['conditionForTrainee'] == $lesson['condition']) : ?>
						<option value="<?= $animal['id'] ?>"><?= $animal['name'] ?></option>
					<?php endif; ?>
				<?php endforeach; ?>
            </select>
		</div>
		<input type="hidden" name="lesson" id="lesson" value="<?= $lesson['id'] ?>">
        <button type="submit" class="btn btn-primary" value="animalvet" name="animalvet">Submit</button>
    </div>
</fieldset>
</form>

