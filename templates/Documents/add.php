<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 */
?>

<h1 class="h3 mb-2 text-gray-800">Add Document</h1>
<?= $this->Form->create($document, ['type'=>'file']) ?>
    <?php
        //echo $this->Form->control('type');
        echo $this->Form->label('Document Type');
        $options = ['Authority for Agency' => 'Authority for Agency', 'Client Engagement Agreement' => 'Client Engagement Agreement', 'Option3' => 'Option3', 'Option4' => 'Option4'];
        echo $this->Form->select('doctype', $options, ['empty' => true]);
        
        echo $this->Form->control('client_id', ['options' => $clients]);
        echo $this->Form->control('docfile',['type'=>'file']);
    ?>
  
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
