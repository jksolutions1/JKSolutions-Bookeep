<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversation $conversation
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>
<h1 class="h3 mb-2 text-gray-800">Add Conversation</h1>
    <div class = "row">
        <div class = "col-lg-4">
            <?= $this->Form->create($conversation) ?>
                <?php
                    echo $this->Form->control('con_type',array('type'=>'text','maxlength'=>'20','size'=>'8'));
                    echo $this->Form->control('con_description');
                    echo $this->Form->control('client_id', ['options' => $clients]);
                ?>
            
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
