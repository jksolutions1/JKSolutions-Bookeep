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
            <?= $this->Html->link(__('Edit Appointment/'), ['action' => 'edit', $appointment->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Appointment/'), ['action' => 'delete', $appointment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointment->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Appointments/'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Appointment/'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
</div>

<div class="column-responsive column-80">
        <div class="appointments view content">
            <h3 class="h3 mb-2 text-gray-800">Client</h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $this->Number->format($appointment->client->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Company') ?></th>
                    <td><?= h($appointment->company->name)?></td>
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
