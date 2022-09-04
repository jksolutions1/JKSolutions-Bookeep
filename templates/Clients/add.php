<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients form content">
            <?= $this->Form->create($client) ?>
            <fieldset>
                <legend><?= __('Add Client') ?></legend>
                <?php
                    echo $this->Form->control('firstname');
                    echo $this->Form->control('lastname');
                    echo $this->Form->control('contactno');
                    echo $this->Form->control('address');
                    echo $this->Form->control('email');
                    echo $this->Form->control('appointment_list');
                    //echo $this->Form->control('required_documents');
                    echo '<label for="required_documents">Required documents</label>';
                    echo $this->Form->control('required_documents', ['type'=>'select', 'label'=>false, 'multiple'=>'checkbox', 'options'=>['1'=>'Autorithy for Agents', '2'=>'Client engagement agreements', '3'=>'Option3', '4'=>'Option4', '5'=>'Option5']]);
                    echo $this->Form->control('payment');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
