<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 * @var \Cake\Collection\CollectionInterface|string[] $companies
 */
?>

<h1 class="h3 mb-2 text-gray-800">Add Appointment</h1>
<?= $this->Form->create($appointment)?>
    <?php
        echo $this->Form->control('appointment_description');
        echo $this->Form->control('client_id', ['options' => $clients]);
        echo $this->Form->control('company_id', ['options' => $companies]);
        echo $this->Form->control('date');
        echo $this->Form->control('address');
    ?>
  
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
