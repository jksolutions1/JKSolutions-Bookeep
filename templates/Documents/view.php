<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<div class="column-responsive column-80">
        <div class="documents view content">
            <h3 class="h3 mb-2 text-gray-800">Document Details</h3>
            <table>
                <tr>
                    <th><?= __('Type') ?></th>
                    <td><?= h($document->type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= h($document->client->firstname)?> <?= h($document->client->lastname)?></td>
                </tr>
                <tr>
                    <th><?= __('File') ?></th>
                    <td><?= h($document->file) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($document->id) ?></td>
                </tr>
            </table>
        </div>
    </div>