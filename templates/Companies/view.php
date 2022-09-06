<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Company'), ['action' => 'edit', $company->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Company'), ['action' => 'delete', $company->id], ['confirm' => __('Are you sure you want to delete # {0}?', $company->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Companies'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Company'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
</div>

<div class="column-responsive column-80">
        <div class="companies view content">
            <h3 class="h3 mb-2 text-gray-800">Company Details</h3>
            <div class="text">
                <strong><?= __('Name') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($company->name)); ?>
                </blockquote>
            </div>
            <table>
                <tr>
                    <th><?= __('Client') ?></th>
                    <td><?= h($company->client->firstname)?> <?= h($company->client->lastname)?></td>          
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($company->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Contactno') ?></th>
                    <td><?= $this->Number->format($company->contactno) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Address') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($company->address)); ?>
                </blockquote>
            </div>


            <div class="related">
                <h4><?= __('Related Appointments') ?></h4>
                <?php if (!empty($company->appointments)) : ?>
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <th><?= __('Appointment Description') ?></th>
                                <th><?= __('Client Name') ?></th>
                                <th><?= __('Date') ?></th>
                                <th><?= __('Address') ?></th>
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
                                <td><?= h($appointments->address) ?></td>
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