<style>
.login {
  justify-content:center;
}
</style>

<br>
<div class="index login large-4 medium-4 large-offset-4 medium-offset-4 columns input-group">
	<div class="panel">
		<h2 class="text-center">Login</h2>
		<?= $this->Form->create(); ?>
		<br>
		<p> Username </p>
			<?= $this->Form->controller('username'); ?>
			<br>
			<p> Password </p>
			<?= $this->Form->controller('password', array('type' => 'password')); ?>
			<br>
			<?= $this->Form->submit('Login', array('class' => 'button')); ?>
			<br>
		<?= $this->Form->end(); ?>
	</div>
</div>