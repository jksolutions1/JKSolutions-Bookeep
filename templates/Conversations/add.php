<?php
/**
 * page view for adding conversation page
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversation $conversation
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>
<!-- The view of add conversation page -->
<!-- Set the title -->
<h1 class="h3 mb-2 text-gray-800">Add Conversation</h1>
    <div class = "row">
        <div class = "col-lg-4">
            <?= $this->Form->create($conversation) ?>

                <!-- The text bar for adding conversation -->
                <?php
                    echo $this->Form->control('conversation_description');
                    echo $this->Form->control('client_id', ['options' => $clients]);
                ?>

            <!-- submit button -->
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
