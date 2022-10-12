<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Company $company
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 */
?>
<!-- The view of add company page -->
<!-- Set the title -->
<h1 class="h3 mb-2 text-gray-800">Add Company</h1>
    <div class = "row">
        <div class = "col-lg-4">
            <?= $this->Form->create($company) ?>

                <!-- The text bar for adding companies -->
                <?php
                    echo $this->Form->control('name',array('type'=>'text','maxlength'=>'20','size'=>'8'));
                    echo $this->Form->control('address',array('type'=>'text','size'=>'8'));
                    echo $this->Form->control('contactno',array('type'=>'text','maxlength'=>'12','size'=>'8'));
                    echo $this->Form->control('client_id', ['options' => $clients]);
                ?>
            
            <!-- submit button -->
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>

