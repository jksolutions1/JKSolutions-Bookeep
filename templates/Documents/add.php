<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 */
?>

<h1 class="h3 mb-2 text-gray-800">Add Document</h1>
<?= $this->Form->create($document)?>
    <?php
        echo $this->Form->control('type');
        echo $this->Form->control('client_id', ['options' => $clients]);
        echo $this->Form->control('file');
    ?>
  
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>