<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<!-- The view of edit document page -->
<h1 class="h3 mb-2 text-gray-800">Add Document</h1>
<?= $this->Form->create($document, ['type'=>'file']) ?>

    <!-- The text bar for adding documents -->
    <?php
        echo $this->Form->label('Document Type');

        // options for document type
        $options = ['Authority for Agency' => 'Authority for Agency', 'Client Engagement Agreement' => 'Client Engagement Agreement', 'Option3' => 'Option3', 'Option4' => 'Option4'];
        echo $this->Form->select('doctype', $options, ['empty' => true]);
        echo $this->Form->control('client_id', ['options' => $clients]);
        echo $this->Form->control('docfile',['type'=>'file']);
    ?>

<!-- submit button -->
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
