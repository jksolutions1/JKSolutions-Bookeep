<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>

<div class="column-responsive column-80">
    <div class="companies view content">
        <h2 class="h3 mb-2 text-gray-800">Company Details</h2>
            <div class = "row">
                <div class = "col-lg-4">
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Id') ?></th>:</strong> 
                            <?= $this->Number->format($company->id) ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Name') ?></th>:</strong> 
                            <?= h($company->name)?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Client') ?></th>:</strong> 
                            <?= h($company->client->firstname)?> <?= h($company->client->lastname)?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Contactno') ?></th>:</strong> 
                            <?= $this->Number->format($company->contactno) ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Address') ?></th>:</strong> 
                            <?= $this->Text->autoParagraph(h($company->address)); ?>
                    </span>
                </div>

                <div class = "col-lg-8">
                    <div class="related">
                        <h4><?= __('Related Appointments') ?></h4>
                        <?php if (!empty($company->appointments)) : ?>
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th><?= $this->Paginator->sort('id') ?></th>
                                        <th><?= $this->Paginator->sort('appointment description') ?></th>
                                        <th><?= $this->Paginator->sort('client name') ?></th>
                                        <th><?= $this->Paginator->sort('date') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php foreach ($company->appointments as $appointments) : ?>
                                    <tr>
                                        <td><?= h($appointments->id) ?></td>
                                        <td><?= h($appointments->appointment_description) ?></td>
                                        <td><?= h($company->client->firstname)?> <?= h($company->client->lastname)?></td>
                                        <td><?= h($appointments->date) ?></td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Appointments', 'action' => 'view', $appointments->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Appointments', 'action' => 'edit', $appointments->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Appointments', 'action' => 'delete', $appointments->id], ['confirm' => __('Are you sure you want to delete # {0}?', $appointments->id)]) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>