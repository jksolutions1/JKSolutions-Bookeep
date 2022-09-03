<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Clientdocument $clientdocument
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Clientdocument'), ['action' => 'edit', $clientdocument->client_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Clientdocument'), ['action' => 'delete', $clientdocument->client_id], ['confirm' => __('Are you sure you want to delete # {0}?', $clientdocument->client_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clientdocuments'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Clientdocument'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clientdocuments view content">
            <h3><?= h($clientdocument->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $clientdocument->has('client') ? $this->Html->link($clientdocument->client->id, ['controller' => 'Clients', 'action' => 'view', $clientdocument->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Document') ?></th>
                    <td><?= $clientdocument->has('document') ? $this->Html->link($clientdocument->document->id, ['controller' => 'Documents', 'action' => 'view', $clientdocument->document->id]) : '' ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Document Type') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($clientdocument->document_type)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
