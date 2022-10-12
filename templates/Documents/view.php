<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document $document
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>
<!-- The view of view page to for one document -->
<!-- Set the title -->
<div class="column-responsive column-80">
    <div class="documents view content">
        <h2 class="h3 mb-2 text-gray-800">Document Details</h2>
            <div class = "row">

                <!-- Set the content view -->
                <!-- Set the view of text bar -->
                <div class = "col-lg-4">
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Doctype') ?></th>:</strong> 
                            <?= h($document->doctype) ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Client') ?></th>:</strong> 
                            <?= $document->has('client') ? $this->Html->link($document->client->fullname, ['controller' => 'Clients', 'action' => 'view', $document->client->id]) : '' ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Docfile') ?></th>:</strong> 
                            <?= h($document->docfile) ?>
                    </span>
                    <span class="d-flex mb-2">
                            <strong class="mr-1"><th><?= __('Id') ?></th>:</strong> 
                            <?= $this->Number->format($document->id) ?>
                    </span>
                </div>
            </div>
    </div>
</div>
