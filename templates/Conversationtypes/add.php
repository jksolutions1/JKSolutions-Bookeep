<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversationtype $conversationtype
 * @var \Cake\Collection\CollectionInterface|string[] $conversations
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Conversationtypes'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="conversationtypes form content">
            <?= $this->Form->create($conversationtype) ?>
            <fieldset>
                <legend><?= __('Add Conversationtype') ?></legend>
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
