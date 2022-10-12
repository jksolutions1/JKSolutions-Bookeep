<?php
/**
 * page view for adding client page
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Client $client
 */
?>

<!-- The view of add client page -->
<!-- Set the title -->
<h1 class="h3 mb-2 text-gray-800">Add Client</h1>
    <div class = "row">
        <div class = "col-lg-4">
            <?= $this->Form->create($client) ?>
                
                <!-- The text bar for adding clients -->
                <?php
                    echo $this->Form->control('firstname',array('type'=>'text','maxlength'=>'20','size'=>'8'));
                    echo $this->Form->control('lastname',array('type'=>'text','maxlength'=>'20','size'=>'8'));
                    echo $this->Form->control('contactno',array('type'=>'text','maxlength'=>'12','size'=>'8'));
                    echo $this->Form->control('address',array('type'=>'text','size'=>'8'));
                    echo $this->Form->control('email',array('type'=>'text','maxlength'=>'40','size'=>'8'));
                    echo $this->Form->control('required_documents',array('type'=>'text','size'=>'8'));
                ?>

            <!-- submit button -->
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>

