<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Conversation> $conversations
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>

<div class="conversations index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Conversation</h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New conversation </a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('con_type') ?></th>
                    <th><?= $this->Paginator->sort('con_description') ?></th>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conversations as $conversation): ?>
                <tr>
                <td><?= $this->Number->format($conversation->id) ?></td>
                    <td><?= h($conversation->con_type) ?></td>
                    <td><?= h($conversation->con_description) ?></td>
                    <td><?= $conversation->has('client') ? $this->Html->link($conversation->client->fullname, ['controller' => 'Clients', 'action' => 'view', $conversation->client->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conversation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conversation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conversation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conversation->id)]) ?>
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
