<!-- The register page -->
<style>
.register {
  justify-content:center;
}
</style>

<!-- The view and style of register page -->
<br>
<div class="index register large-4 medium-4 large-offset-4 medium-offset-4 columns input-group">
	<div class="panel">
		<h2 class="text-center">Register</h2>
		<?= $this->Form->create($user); ?>
			<br>
			<?= $this->Form->control('username', ['type' => 'text']); ?>
			<br>

			<?= $this->Form->control('password', array('type' => 'password')); ?>
            <br>

            <?= $this->Form->control('firstname',  ['type' => 'text']); ?>
			<br>
            <?= $this->Form->control('lastname',  ['type' => 'text']); ?>
			<br>

            <?= $this->Form->control('role',  ['type' => 'dropdown']); ?>
            <br>

			<div class="col text-center">
			<?= $this->Form->submit('Register', array('class' => 'button')); ?>
			</div>
			<br>
		<?= $this->Form->end(); ?>
	</div>
</div>