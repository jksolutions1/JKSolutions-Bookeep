<style>
.register {
  justify-content:center;
}
</style>

<br>
<div class="index register large-4 medium-4 large-offset-4 medium-offset-4 columns input-group">
	<div class="panel">
		<h2 class="text-center">Register</h2>
		<?= $this->Form->create($user); ?>
			<br>
			<?= $this->Form->control('username'); ?>
			<br>

			<?= $this->Form->control('password', array('type' => 'password')); ?>
            <br>

            <?= $this->Form->control('firstname'); ?>
			<br>
            <?= $this->Form->control('lastname'); ?>
			<br>

            <?= $this->Form->control('role'); ?>
            <br>

			<?= $this->Form->submit('Register', array('class' => 'button')); ?>
            
		<?= $this->Form->end(); ?>
	</div>
</div>