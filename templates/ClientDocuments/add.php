<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientdocument $clientdocument
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 * @var \Cake\Collection\CollectionInterface|string[] $documents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Clientdocuments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientdocuments form content">
            <?= $this->Form->create($clientdocument) ?>
            <fieldset>
                <legend><?= __('Add Clientdocument') ?></legend>
                <?php
                    echo $this->Form->control('document_type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
