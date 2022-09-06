<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 */
?>

<h1 class="h3 mb-2 text-gray-800">Add Company</h1>
<?= $this->Form->create($company) ?>
    <?php
        echo $this->Form->control('name');
        echo $this->Form->control('address');
        echo $this->Form->control('contactno');
        echo $this->Form->control('client_id', ['options' => $clients]);
    ?>
  
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>

