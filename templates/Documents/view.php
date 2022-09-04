<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Document'), ['action' => 'edit', $document->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Document'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Documents'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Document'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="documents view content">
            <h3><?= h($document->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $document->has('client') ? $this->Html->link($document->client->id, ['controller' => 'Clients', 'action' => 'view', $document->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($document->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Document Path') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($document->document_path)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Document Type') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($document->document_type)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
