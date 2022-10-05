<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Conversation $conversation
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>
<div class="column-responsive column-80">
    <div class="conversations view content">
        <h2 class="h3 mb-2 text-gray-800">Conversation Details</h2>
            <div class = "row">
                <div class = "col-lg-4">
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Conversation Id') ?></th>:</strong> 
                            <?= $this->Number->format($conversation->id) ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Client Name') ?></th>:</strong> 
                            <?= $conversation->has('client') ? $this->Html->link($conversation->client->fullname, ['controller' => 'Clients', 'action' => 'view', $conversation->client->id]) : '' ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Conversation Description') ?></th>:</strong> 
                            <?= $this->Text->autoParagraph(h($conversation->conversation_description)); ?>
                    </span>
                </div>
            </div>
    </div>
</div>
