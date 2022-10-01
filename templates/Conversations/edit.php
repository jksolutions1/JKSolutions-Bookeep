<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversation $conversation
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conversation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conversation->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conversations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conversations form content">
            <?= $this->Form->create($conversation) ?>
            <fieldset>
                <legend><?= __('Edit Conversation') ?></legend>
                <?php
                    echo $this->Form->control('con_type');
                    echo $this->Form->control('con_description');
                    echo $this->Form->control('client_id', ['options' => $clients]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
