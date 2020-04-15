<?php echo form_open('owners/create'); ?>
<fieldset>
    <div class="m-auto w-50 pt-3">
        <legend><?= $title ?></legend>
        <?php echo validation_errors('<p class="text-danger">', '</p>'); ?>
        <div class="form-group">
            <label for="id">Owner ID</label>
            <input type="text" class="form-control" id="id" name="id" placeholder="W0010">
        </div>
        <div class="form-group">
            <label for="name">Owner Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Owner name">
        </div>
        <div class="form-group">
            <label for="phone">Owner Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter owner name">
        </div>
        <button type="submit" class="btn btn-primary" value="owner" name="owner">Submit</button>
    </div>
</fieldset>
</form>
