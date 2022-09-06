<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Documents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="documents form content">
            <?= $this->Form->create($document, ['type'=>'file']) ?>
            <fieldset>
                <legend><?= __('Add Document') ?></legend>
                <?php
                    //echo $this->Form->control('doctype');
                    echo $this->Form->label('Document Type');
                    $options = ['Authority for Agency' => 'Authority for Agency', 'Client Engagement Agreement' => 'Client Engagement Agreement', 'Option3' => 'Option3', 'Option4' => 'Option4'];
                    echo $this->Form->select('doctype', $options, ['empty' => true]);
                    
                    echo $this->Form->control('client_id', ['options' => $clients]);
                    echo $this->Form->control('docfile',['type'=>'file']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
