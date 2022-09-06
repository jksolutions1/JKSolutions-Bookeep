<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>

<h1 class="h3 mb-2 text-gray-800">Edit Client</h1>
<?= $this->Form->create($client) ?>
    <?php
        echo $this->Form->control('firstname');
        echo $this->Form->control('lastname');
        echo $this->Form->control('contactno');
        echo $this->Form->control('address');
        echo $this->Form->control('email');
        echo $this->Form->control('required_documents');
        echo $this->Form->control('payment');
    ?>
  
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
