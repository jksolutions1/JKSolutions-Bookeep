<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 */
?>

<h1 class="h3 mb-2 text-gray-800">Add Document</h1>
    <div class="documents form content">
        <?= $this->Form->create($document, ['type'=>'file']) ?>
            <?php
                //echo $this->Form->control('type');
                echo $this->Form->label('Document Type');
                $options = ['1' => 'Authority for Agency', '2' => 'Client Engagement Agreement', '3' => 'Option3', '4' => 'Option4'];
                echo $this->Form->select('type', $options, ['empty' => true]);
        
                echo $this->Form->control('client_id', ['options' => $clients]);
                echo $this->Form->control('file',['type'=>'file']);
            ?>
        </fieldset>
        <?= $this->Form->button(__('Submit')) ?>
        <?= $this->Form->end() ?>
    </div>
