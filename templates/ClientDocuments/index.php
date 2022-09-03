<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientdocument[]|\Cake\Collection\CollectionInterface $clientdocuments
 */
?>
<div class="clientdocuments index content">
    <?= $this->Html->link(__('New Clientdocument'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Clientdocuments') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('document_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($clientdocuments as $clientdocument): ?>
                <tr>
                    <td><?= $clientdocument->has('client') ? $this->Html->link($clientdocument->client->id, ['controller' => 'Clients', 'action' => 'view', $clientdocument->client->id]) : '' ?></td>
                    <td><?= $clientdocument->has('document') ? $this->Html->link($clientdocument->document->id, ['controller' => 'Documents', 'action' => 'view', $clientdocument->document->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $clientdocument->client_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $clientdocument->client_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $clientdocument->client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientdocument->client_id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
