<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Conversationtype> $conversationtypes
 */
?>
<div class="conversationtypes index content">
    <?= $this->Html->link(__('New Conversationtype'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Conversationtypes') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('con_id') ?></th>
                    <th><?= $this->Paginator->sort('contype_type') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($conversationtypes as $conversationtype): ?>
                <tr>
                    <td><?= $this->Number->format($conversationtype->id) ?></td>
                    <td><?= $conversationtype->has('conversation') ? $this->Html->link($conversationtype->conversation->id, ['controller' => 'Conversations', 'action' => 'view', $conversationtype->conversation->id]) : '' ?></td>
                    <td><?= $this->Number->format($conversationtype->contype_type) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $conversationtype->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $conversationtype->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $conversationtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conversationtype->id)]) ?>
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
