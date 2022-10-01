<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversationtype $conversationtype
 * @var string[]|\Cake\Collection\CollectionInterface $conversations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $conversationtype->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $conversationtype->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Conversationtypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conversationtypes form content">
            <?= $this->Form->create($conversationtype) ?>
            <fieldset>
                <legend><?= __('Edit Conversationtype') ?></legend>
                <?php
                    echo $this->Form->control('con_id', ['options' => $conversations]);
                    echo $this->Form->control('contype_type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
