<?php echo form_open('conditions/create'); ?>
    <fieldset>
        <div class="m-auto w-50 pt-3">
            <legend><?= $title ?></legend>
            <p class="text-danger"><?php echo validation_errors(); ?></p>
            <div class="form-group">
                <label for="name">Condition Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter condition name">
            </div>
            <button type="submit" class="btn btn-primary" value="condition" name="condition">Submit</button>
        </div>
    </fieldset>
</form>