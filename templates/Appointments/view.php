<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 */
?>

<div class="column-responsive column-80">
        <div class="appointments view content">
            <h3 class="h3 mb-2 text-gray-800">Appointment Details</h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= h($appointment->client->firstname)?> <?= h($appointment->client->lastname)?></td>
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
