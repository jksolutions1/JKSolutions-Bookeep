<!-- The login page -->
<style>
.login {
  justify-content:center;
}
</style>

<!-- The view and style of login page -->
<br>
<div class="index login large-4 medium-4 large-offset-4 medium-offset-4 columns input-group">
	<div class="panel">
		<img width = "300", height = "300"  src="https://i.ibb.co/WHqfpXD/310066288-500771725248014-7151549807630858839-n.pngg">
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

