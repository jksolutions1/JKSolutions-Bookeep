<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>
<!-- The view of view page to for one client -->
<!-- Set the title -->
<div class="column-responsive column-80">
    <div class="clients view content">
        <h2 class="h3 mb-2 text-gray-800">Client Details</h2>
            <div class = "row">

                <!-- Set the content view -->
                <!-- Set the view of text bar -->
                <div class = "col-lg-4">
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Id') ?></th>:</strong> 
                            <?= $this->Number->format($client->id) ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Contactno') ?></th>:</strong> 
                            <?= $this->Number->format($client->contactno) ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><?= __('Name') ?>:</strong> 
                            <?= h($client->firstname)?> <?= h($client->lastname)?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><?= __('Address') ?>:</strong> 
                            <?= $this->Text->autoParagraph(h($client->address)); ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><?= __('Email') ?>:</strong> 
                            <?= h($client->email)?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><?= __('Required Documents') ?>:</strong> 
                            <?= $this->Text->autoParagraph(h($client->required_documents)); ?>
                    </span>
                </div>

                <!-- Set the related table view beside the text view -->
                <div class = "col-lg-8">

                    <!-- The related appointment table view -->
                    <div class="related">
                        <h4><?= __('Related Appointments') ?></h4>
                        <?php if (!empty($client->appointments)) : ?>
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            
                            <!-- Show the column name in top of table -->
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('appointment description') ?></th>
                                    <th><?= $this->Paginator->sort('company_id') ?></th>
                                    <th><?= $this->Paginator->sort('date') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>

                            <!-- Show the data in table -->
                            <tbody>
                                <?php foreach ($client->appointments as $appointments) : ?>
                                <tr>
                                    <td><?= h($appointments->appointment_description) ?></td>
                                    <td><?= h($appointments->company_id) ?></td>
                                    <td><?= h($appointments->date->format('d/m/y')) ?></td>

                                    <!-- The action column in the last part of the table -->
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

                    <!-- The related companies table view -->
                    <div class="related">
                        <h4><?= __('Related Companies') ?></h4>
                        <?php if (!empty($client->companies)) : ?>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                <!-- Show the column name in top of table -->
                                <thead>
                                    <tr>
                                        <th><?= $this->Paginator->sort('name') ?></th>
                                        <th><?= $this->Paginator->sort('contactno') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>

                                <!-- Show the data in table -->
                                <tbody>
                                    <?php foreach ($client->companies as $companies) : ?>
                                    <tr>
                                        <td><?= h($companies->name)?></td>
                                        <td><?= $this->Number->format($companies->contactno) ?></td>

                                        <!-- The action column in the last part of the table -->
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

                    <!-- The related documents table view -->
                    <div class="related">
                            <h4><?= __('Related Documents') ?></h4>
                            <?php if (!empty($client->documents)) : ?>
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">

                                    <!-- Show the column name in top of table -->
                                    <thead>
                                        <tr>
                                            <th><?= $this->Paginator->sort('id') ?></th>
                                            <th><?= $this->Paginator->sort('doctype') ?></th>
                                            <th><?= $this->Paginator->sort('docfile') ?></th>
                                            <th class="actions"><?= __('Actions') ?></th>
                                        </tr>
                                    </thead>

                                    <!-- Show the data in table -->
                                    <tbody>
                                        <?php foreach ($client->documents as $document) : ?>
                                        <tr>
                                            <td><?= $this->Number->format($document->id) ?></td>
                                            <td><?= h($document->doctype) ?></td>
                                            <td><?= h($document->docfile) ?></td>

                                            <!-- The action column in the last part of the table -->
                                            <td class="actions">
                                                <?= $this->Html->link(__('View'), ['action' => 'view', $document->id]) ?>
                                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $document->id]) ?>
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
            </div>
        </div>