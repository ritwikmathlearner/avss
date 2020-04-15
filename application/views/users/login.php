<?php echo form_open('users/login'); ?>
<fieldset>
    <div class="m-auto w-50 pt-3">
		<legend><?= $title ?></legend>
		<?php if($this->session->flashdata('login_failed')):?>
			<p class='text text-danger'> <?=$this->session->flashdata('login_failed')?> </p>
		<?php endif?>
        <?php echo validation_errors('<p class="text-danger">', '</p>'); ?>
        <div class="form-group">
            <label for="username">User Name</label>
            <input type="text" class="form-control" id="username" name="username" placeholder="admin">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="********">
        </div>
        <button type="submit" class="btn btn-primary" value="login" name="login">Submit</button>
    </div>
</fieldset>
</form>
