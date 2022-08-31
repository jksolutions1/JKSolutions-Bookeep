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
                <tr>
                    <th><?= __('Firstname') ?></th>
                    <td><?= $this->Number->format($user->firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Lastname') ?></th>
                    <td><?= $this->Number->format($user->lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $this->Number->format($user->role) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Admins') ?></h4>
                <?php if (!empty($user->admins)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->admins as $admins) : ?>
                        <tr>
                            <td><?= h($admins->id) ?></td>
                            <td><?= h($admins->user_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Admins', 'action' => 'view', $admins->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Admins', 'action' => 'edit', $admins->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Admins', 'action' => 'delete', $admins->id], ['confirm' => __('Are you sure you want to delete # {0}?', $admins->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
