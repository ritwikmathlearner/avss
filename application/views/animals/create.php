<?php echo form_open('animals/create'); ?>
<fieldset>
    <div class="m-auto w-50 pt-3">
        <legend><?= $title ?></legend>
        <?php echo validation_errors('<p class="text-danger">', '</p>'); ?>
        <div class="form-group">
            <label for="id">Animal ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="03340">
        </div>
        <div class="form-group">
            <label for="name">Animal Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter animal name">
        </div>
        <div class="form-group">
            <label for="existingCondition">Select Condition to be Treated</label>
            <select class="form-control" id="existingCondition" name="existingCondition">
                <?php foreach ($conditions as $condition) : ?>
                    <option value="<?= $condition['id'] ?>"><?= $condition['name'] ?></option>
                <?php endforeach; ?>
            </select>
        </div>
        <div class="form-group">
            <label for="availability">Select Availability</label>
            <select class="form-control" id="availability" name="availability">
                <option value="weekdays">Weekdays</option>
                <option value="weekends">Weekends</option>
                <option value="both">Both</option>
            </select>
        </div>
        <div class="form-group">
            <label for="weight">Animal Weight(In pound)</label>
            <input type="number" step="0.01" class="form-control" id="weight" name="weight" placeholder="10.50">
        </div>
        <div class="form-group">
            <label for="height">Animal Height(In meter)</label>
            <input type="number" step="0.01" class="form-control" id="height" name="height" placeholder="3.50">
        </div>
        <div class="form-group">
            <label for="age">Animal Age</label>
            <input type="number" step="0.01" class="form-control" id="age" name="age" placeholder="2">
        </div>
        <div class="form-group">
            <label for="conditionForTrainee">Select Condition for Trainee</label>
            <select class="form-control" id="conditionForTrainee" name="conditionForTrainee">
                <option value="beginners">Beginners</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" value="animal" name="animal">Submit</button>
    </div>
</fieldset>
</form>
