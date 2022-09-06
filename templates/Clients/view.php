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
</div>

<div class="column-responsive column-80">
    <div class="clients view content">
        <h3 class="h3 mb-2 text-gray-800">Client Details</h3>
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
            <strong><?= __('Address') ?></strong>
            <blockquote>
                <?= $this->Text->autoParagraph(h($client->address)); ?>
            </blockquote>
        </div>
        <div class="text">
            <strong><?= __('Email') ?></strong>
            <blockquote>
                <?= $this->Text->autoParagraph(h($client->email)); ?>
            </blockquote>
        </div>
        <div class="text">
            <strong><?= __('Required Documents') ?></strong>
            <blockquote>
                <?= $this->Text->autoParagraph(h($client->required_documents)); ?>
            </blockquote>
        </div>

        <div class="related">
            <h4><?= __('Related Appointments') ?></h4>
            <?php if (!empty($client->appointments)) : ?>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= __('appointment description') ?></th>
                        <th><?= $this->Paginator->sort('company_id') ?></th>
                        <th><?= $this->Paginator->sort('date') ?></th>
                        <th><?= $this->Paginator->sort('address') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($client->appointments as $appointments) : ?>
                    <tr>
                        <td><?= h($appointments->id) ?></td>
                        <td><?= h($appointments->appointment_description) ?></td>
                        <td><?= h($appointments->company_id) ?></td>
                        <td><?= h($appointments->date) ?></td>
                        <td><?= h($appointments->address) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Appointments', 'action' => 'view', $appointments->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Appointments', 'action' => 'edit', $appointments->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $appointments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointments->id)]) ?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <?php endif; ?>

        <div class="related">
            <h4><?= __('Related Companies') ?></h4>
            <?php if (!empty($client->companies)) : ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('name') ?></th>
                            <th><?= $this->Paginator->sort('contactno') ?></th>
                            <th><?= $this->Paginator->sort('client_id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($client->companies as $companies) : ?>
                        <tr>
                            <td><?= $this->Number->format($companies->id) ?></td>
                            <td><?= h($companies->name)?></td>
                            <td><?= $this->Number->format($companies->contactno) ?></td>
                            <td><?= h($companies->client_id) ?></td>
                            <td class="actions">
                            <?= $this->Html->link(__('View'), ['controller' => 'Companies', 'action' => 'view', $companies->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['controller' => 'Companies', 'action' => 'edit', $companies->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $companies->id], ['confirm' => __('Are you sure you want to delete # {0}?', $companies->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <?php endif; ?>
        </div>

        <div class="related">
            <h4><?= __('Related Documents') ?></h4>
            <?php if (!empty($client->documents)) : ?>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('type') ?></th>
                            <th><?= $this->Paginator->sort('file') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($client->documents as $document) : ?>
                        <tr>
                            <td><?= $this->Number->format($document->id) ?></td>
                            <td><?= h($document->type) ?></td>
                            <td><?= h($document->file) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Documents', 'action' => 'view', $document->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Documents', 'action' => 'edit', $document->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $document->id], ['confirm' => __('Are you sure you want to delete # {0}?', $document->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>