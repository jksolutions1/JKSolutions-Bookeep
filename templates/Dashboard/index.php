<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment[]|\Cake\Collection\CollectionInterface $appointments
 */

echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="page-header">
				<h1>
					Dashboard
				</h1>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="jumbotron">
						<h2>
							Adding a new client?

						</h2>
						<p>
							<br>
						</p>
						<p>
							<a class="btn btn-primary btn-large" href="<?= $this->Url->build(['controller' => 'clients', 'action' => 'add']); ?>">Add Client</a>
						</p>
					</div>
				</div>
				<div class="col-md-6">
					<div class="jumbotron">
						<h2>
							Making a new appointment?
						</h2>
						<p>
                            <br>
						</p>
						<p>
							<a class="btn btn-primary btn-large" href="<?= $this->Url->build(['controller' => 'appointments', 'action' => 'add']); ?>">Make Appointment</a>
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3>
						
					</h3>
				</div>
			</div>
		</div>




	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>