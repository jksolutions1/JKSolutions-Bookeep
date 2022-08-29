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
            <?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Clients'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Client'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="clients view content">
            <h3><?= h($client->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($client->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contactno') ?></th>
                    <td><?= $this->Number->format($client->contactno) ?></td>
                </tr>
                <tr>
                    <th><?= __('Payment') ?></th>
                    <td><?= $this->Number->format($client->payment) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Firstname') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->firstname)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Lastname') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->lastname)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Adress') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->adress)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Email') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->email)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Appointment List') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->appointment_list)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Required Documents') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($client->required_documents)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Client Documents') ?></h4>
                <?php if (!empty($client->client_documents)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Client Id') ?></th>
                            <th><?= __('Document No') ?></th>
                            <th><?= __('Document Type') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($client->client_documents as $clientDocuments) : ?>
                        <tr>
                            <td><?= h($clientDocuments->client_id) ?></td>
                            <td><?= h($clientDocuments->document_no) ?></td>
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
