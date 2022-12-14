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
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($document->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Client Engagement Agreement Doc') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($document->client_engagement_agreement_doc)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Authority For Agent Doc') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($document->authority_for_agent_doc)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Client Documents') ?></h4>
                <?php if (!empty($document->client_documents)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Document Id') ?></th>
                            <th><?= __('Document Type') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($document->client_documents as $clientDocuments) : ?>
                        <tr>
                            <td><?= h($clientDocuments->client_id) ?></td>
                            <td><?= h($clientDocuments->document_id) ?></td>
                            <td><?= h($clientDocuments->document_type) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'ClientDocuments', 'action' => 'view', $clientDocuments->]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'ClientDocuments', 'action' => 'edit', $clientDocuments->]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'ClientDocuments', 'action' => 'delete', $clientDocuments->], ['confirm' => __('Are you sure you want to delete # {0}?', $clientDocuments->)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
