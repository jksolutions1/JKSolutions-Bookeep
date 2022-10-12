<?php
/**
 * This page is used to view the individual appointment
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 */
?>

<!-- The view of view page to for one appointment -->
<!-- Set the title -->
<div class="column-responsive column-80">
    <div class="appointments view content">
        <h2 class="h3 mb-2 text-gray-800">Appointment Details</h2>
            <div class = "row">

                <!-- Set the content view -->
                <!-- Set the view of text bar -->
                <div class = "col-lg-4">
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Client') ?></th>:</strong> 
                            <?= h($appointment->client->firstname)?> <?= h($appointment->client->lastname)?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Company') ?></th>:</strong> 
                            <?= h($appointment->company->name)?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Id') ?></th>:</strong> 
                            <?= $this->Number->format($appointment->id) ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Date') ?></th>:</strong> 
                            <?= h($appointment->date) ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Address') ?></th>:</strong> 
                            <?= $this->Text->autoParagraph(h($appointment->address)); ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Appointment Description') ?></th>:</strong> 
                            <?= $this->Text->autoParagraph(h($appointment->appointment_description)); ?>
                    </span>
                </div>
            </div>
    </div>
</div>
