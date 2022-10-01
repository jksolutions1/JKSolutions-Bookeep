<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Staff $staff
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Staff'), ['action' => 'edit', $staff->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Staff'), ['action' => 'delete', $staff->id], ['confirm' => __('Are you sure you want to delete # {0}?', $staff->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Staffs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Staff'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="staffs view content">
            <h3><?= h($staff->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($staff->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Firstname') ?></th>
                    <td><?= $this->Number->format($staff->staff_firstname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Lastname') ?></th>
                    <td><?= $this->Number->format($staff->staff_lastname) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Contactno') ?></th>
                    <td><?= $this->Number->format($staff->staff_contactno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Address') ?></th>
                    <td><?= $this->Number->format($staff->staff_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Staff Email') ?></th>
                    <td><?= $this->Number->format($staff->staff_email) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
