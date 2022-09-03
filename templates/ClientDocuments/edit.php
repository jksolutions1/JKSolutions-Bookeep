<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientdocument $clientdocument
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $documents
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $clientdocument->client_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $clientdocument->client_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Clientdocuments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientdocuments form content">
            <?= $this->Form->create($clientdocument) ?>
            <fieldset>
                <legend><?= __('Edit Clientdocument') ?></legend>
                <?php
                    echo $this->Form->control('document_type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
