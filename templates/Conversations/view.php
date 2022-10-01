<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversation $conversation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Conversation'), ['action' => 'edit', $conversation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Conversation'), ['action' => 'delete', $conversation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $conversation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Conversations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Conversation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conversations view content">
            <h3><?= h($conversation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Con Type') ?></th>
                    <td><?= h($conversation->con_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Con Description') ?></th>
                    <td><?= h($conversation->con_description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $conversation->has('client') ? $this->Html->link($conversation->client->fullname, ['controller' => 'Clients', 'action' => 'view', $conversation->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($conversation->id) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
