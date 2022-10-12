<?php
/**
 * The index page for client page with tables
 * Sending compulsory document notification email when users refresh or open the client index page
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client[]|\Cake\Collection\CollectionInterface $clients
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
foreach ($relativeClients as $rclient):
    if ($rclient->required_documents != "null"){
            $to = $rclient->email;//$this->$clients->email;//destination email
            $subject ="Documentation Notification";//mail title
            $message ="Please don't forget to update compulsory documents.";//mail content
            $from = "bookeep@u22s2105.monash-ie.me";
            $headers = "From: $from";
            $result = mail($to,$subject,$message,$headers);
    }
endforeach;
?>
<!-- The view of index page to view the tables-->
<!-- The view of the top screen, with title-->
<div class="clients index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Client</h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New Client </a>
    </div>

    <!-- The view of the tables-->
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

            <!-- Show the column name in top of table -->
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('contactno') ?></th>
                    
                    <!-- Iteration 1 -->
                    <th><?= $this->Paginator->sort('address') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>

            <!-- Show the data in table -->
            <tbody>
                <?php foreach ($clients as $client): ?>
                <tr>
                    <td><?= h($client->firstname)?> <?= h($client->lastname)?></td>
                    <td><?= h($client->contactno) ?></td>
                    <td><?= h($client->address)?></td>
                    <td><?= h($client->email)?></td>
                    
                    <!-- The action column in the last part of the table -->
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $client->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $client->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?>
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



