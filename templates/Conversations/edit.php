<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversation $conversation
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 */
?>
<h1 class="h3 mb-2 text-gray-800">Add Conversation</h1>
    <div class = "row">
        <div class = "col-lg-4">
            <?= $this->Form->create($conversation) ?>
                <?php
                    echo $this->Form->control('con_description');
                    echo $this->Form->control('client_id', ['options' => $clients]);
                ?>
            
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
