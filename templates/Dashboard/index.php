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
							Managing an existing client?
						</h2>
						<p>
                            <br>
						</p>
						<p>
							<a class="btn btn-primary btn-large" href="<?= $this->Url->build(['controller' => 'clients', 'action' => 'index']); ?>">Manage clients</a>
						</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<h3>
						Upcoming Appointments
					</h3>
				</div>
			</div>
		</div>


<div class="appointments index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Appointment List</h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New appointment </a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('client_name') ?></th>
                    <th><?= $this->Paginator->sort('company_id') ?></th>
                    <th><?= $this->Paginator->sort('date') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($appointments as $appointment): ?>
                <tr>
                    <td><?= $this->Number->format($appointment->id) ?></td>
                    <td><?= h($appointment->client->firstname)?> <?= h($appointment->client->lastname)?></td>
                    <td><?= h($appointment->companies->name)?></td>
                    <td><?= h($appointment->date) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $appointment->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $appointment->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id)]) ?>
                    </td>
                </tr>

                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</div>

	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>