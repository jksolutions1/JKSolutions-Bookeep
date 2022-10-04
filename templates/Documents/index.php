<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Document[]|\Cake\Collection\CollectionInterface $documents
 */
echo $this->Html->css('/vendor/datatables/dataTables.bootstrap4.min.css', ['block' => true]);
echo $this->Html->script('/vendor/datatables/jquery.dataTables.min.js', ['block' => true]);
echo $this->Html->script('/vendor/datatables/dataTables.bootstrap4.min.js', ['block' => true]);
?>

<div class="documents index content">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Documents</h1>
        <a href="<?= $this->Url->build(['action' => 'add']) ?>" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                class="fas fa-plus fa-sm text-white-50"></i> New Document </a>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('client_id') ?></th>
                    <th><?= $this->Paginator->sort('Document Type') ?></th>
                    <th><?= $this->Paginator->sort('Document Name') ?></th>
                    
                    <!-- Document Downloadable link -->
                    <th><?= $this->Paginator->sort('Attachment') ?></th>
                    
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>

            <?php if (!$isAdmin ) {
                
                $myDocuments = $usersDocuments;

            }
            
            else {
                $myDocuments = $documents;
            } ?>

                <?php foreach ($myDocuments as $document): ?>
                <tr>
                    <td><?= $document->has('client') ? $this->Html->link($document->client->fullname, ['controller' => 'Clients', 'action' => 'view', $document->client->id]) : '' ?></td>
                    <td><?= h($document->doctype) ?></td>
                    <td><?= h($document->docfile) ?></td>
                    
                    <!-- Document Downloadable link -->
                    <td><?= $this->Html->link('Download', '../files/Documents/docfile/Uploaded_file_location.txt',['download'=>$document->docfile]) ?></td>
                    
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
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
</div>