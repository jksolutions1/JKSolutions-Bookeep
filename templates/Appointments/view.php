<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Appointment'), ['action' => 'edit', $appointment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Appointment'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Appointments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Appointment'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="appointments view content">
            <h3><?= h($appointment->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $appointment->has('client') ? $this->Html->link($appointment->client->id, ['controller' => 'Clients', 'action' => 'view', $appointment->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= $appointment->has('company') ? $this->Html->link($appointment->company->name, ['controller' => 'Companies', 'action' => 'view', $appointment->company->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($appointment->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date') ?></th>
                    <td><?= h($appointment->date) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Appointment Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($appointment->appointment_description)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($appointment->address)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
