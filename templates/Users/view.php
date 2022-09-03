<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $user->has('client') ? $this->Html->link($user->client->id, ['controller' => 'Clients', 'action' => 'view', $user->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Firstname') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->firstname)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Lastname') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->lastname)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Role') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->role)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Username') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($user->username)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
