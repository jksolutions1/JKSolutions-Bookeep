<?php

/**
 * The index page for dashboard page with tables
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment[]|\Cake\Collection\CollectionInterface $appointments
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>
<!DOCTYPE html>
<html lang="en">

<!-- Set the style of this page -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Set the title of the page -->
	<title>Dashboard</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>


<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div class="page-header">
					<h1>
					<?php if ($isAdmin) {						
						echo "Admin Dashboard";
					}

					 else {				
						echo "Welcome back ".  $this->request->getSession()->read('Auth.User.firstname') . "!" ;
					 }
					 ?>
					 </h1>
				</div>
				<div class="row">
					<div class="col-md-6">

						<div class="jumbotron">
							<h2>
							<?php if ($isAdmin) {						
						echo "Adding a new client?";
							}
					 else {				
						echo "Adding a new document?" ;
					 }
					 ?>

							</h2>
							<p>
								<br>
							</p>
							<p>
								<?php if ($isAdmin) : ?>
									<a class="btn btn-primary btn-large" href="<?= $this->Url->build(['controller' => 'clients', 'action' => 'add']); ?>">Add Client</a>
								<?php else : ?>
									<a class="btn btn-primary btn-large" href="<?= $this->Url->build(['controller' => 'documents', 'action' => 'add']); ?>">Add Document</a>
								<?php endif ?>
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
	
	<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
				<div class="col-md-12">
					<?php if ($isAdmin) : ?>
					<h3>
						Recently Added Clients
					</h3>
					<div class="row">
					<div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('contactno') ?></th>
                    
                    <!-- Iteration 1 -->
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recentclients as $client): ?>
                <tr>
                    <td><?= h($client->firstname)?> <?= h($client->lastname)?></td>
                    <td><?= h($client->contactno) ?></td>
                    
                    <!-- Iteration 1 -->
                    <td><?= h($client->address)?></td>
                    <td><?= h($client->email)?></td>
                
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
					</div>
					<br>
					<h3>
						Upcoming appointments
					</h3>
					<div class="row">
					<div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('client_name') ?></th>
                    <th><?= $this->Paginator->sort('company_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($recentAppointments as $appointment): ?>
                <tr>
                    <td><?= h($appointment->client->firstname)?> <?= h($appointment->client->lastname)?></td>
                    <td><?= h($appointment->company->name)?></td>
                    <td><?= h($appointment->date->format('d/m/y'))?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
		<?php endif ?>

    </div>
					</div>

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