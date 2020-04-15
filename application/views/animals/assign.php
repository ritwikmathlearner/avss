<?php echo form_open('animals/assign/'.$animal['id']); ?>
<fieldset>
    <div class="m-auto w-50 pt-3">
        <legend><?= $animal['name'] ?></legend>
        <?php echo validation_errors('<p class="text-danger">', '</p>'); ?>
        <div class="form-group">
            <label for="owner">Select Owner</label>
            <select class="form-control" id="owner" name="owner">
				<option value="" selected>Select</option>
				<?php for($i = 0; $i < count($owners); $i++) : ?>
					<?php if($owners[$i]['id'] != $animal['ownerID']) : ?>
						<option value="<?= $owners[$i]['id'] ?>"><?= $owners[$i]['name'] ?></option>
					<?php endif; ?>
				<?php endfor; ?>
            </select>
		</div>
		<input type="hidden" name="id" id="id" value="<?= $animal['id'] ?>">
        <button type="submit" class="btn btn-primary" value="animal" name="animal">Submit</button>
    </div>
</fieldset>
</form>

