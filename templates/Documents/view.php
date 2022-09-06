<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
?>
<div class="column-responsive column-80">
        <div class="documents view content">
            <h3><?= h($document->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Doctype') ?></th>
                    <td><?= h($document->doctype) ?></td>
                </tr>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= $document->has('client') ? $this->Html->link($document->client->fullname, ['controller' => 'Clients', 'action' => 'view', $document->client->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Docfile') ?></th>
                    <td><?= h($document->docfile) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($document->id) ?></td>
                </tr>
            </table>
        </div>
    </div>