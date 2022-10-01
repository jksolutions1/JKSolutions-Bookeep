<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversationtype $conversationtype
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conversationtype'), ['action' => 'edit', $conversationtype->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conversationtype'), ['action' => 'delete', $conversationtype->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conversationtype->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conversationtypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conversationtype'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conversationtypes view content">
            <h3><?= h($conversationtype->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Conversation') ?></th>
                    <td><?= $conversationtype->has('conversation') ? $this->Html->link($conversationtype->conversation->id, ['controller' => 'Conversations', 'action' => 'view', $conversationtype->conversation->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conversationtype->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contype Type') ?></th>
                    <td><?= $this->Number->format($conversationtype->contype_type) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
