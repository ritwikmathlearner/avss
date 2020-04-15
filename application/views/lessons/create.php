<?php echo form_open('lessons/create'); ?>
<fieldset>
    <div class="m-auto w-50 pt-3">
        <legend><?= $title ?></legend>
        <?php echo validation_errors('<p class="text-danger">', '</p>'); ?>
        <div class="form-group">
            <label for="id">Lesson ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="100196-01">
        </div>
        <div class="form-group">
            <label for="lessonDtae">Lesson Date</label>
            <input type="date" class="form-control" id="lessonDtae" name="lessonDtae">
        </div>
        <div class="form-group">
            <label for="condition">Select Condition for Trainee</label>
            <select class="form-control" id="condition" name="condition">
                <option value="beginners">Beginners</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
            </select>
		</div>
		<div class="form-group">
            <label for="lessonTime">Lesson Time</label>
            <input type="time" class="form-control" id="lessonTime" name="lessonTime">
		</div>
		<div class="form-group">
            <label for="offsetCost">Offset Cost of Lesson</label>
            <input type="number" class="form-control" id="offsetCost" name="offsetCost">
        </div>
        <button type="submit" class="btn btn-primary" value="owner" name="owner">Submit</button>
    </div>
</fieldset>
</form>
