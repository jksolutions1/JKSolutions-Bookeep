<?php
/**
 * page view for editing appointment page
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $companies
 */
?>
<!-- The view of edit appointment page -->
<h1 class="h3 mb-2 text-gray-800">Edit Appointment</h1>
    <div class = "row">
        <div class = "col-lg-4">
            <?= $this->Form->create($appointment)?>

                <!-- The text bar for adding appointments -->
                <?php
                    echo $this->Form->control('client_id', ['options' => $clients]);
                    echo $this->Form->control('company_id', ['options' => $companies]);

                    // select the date time
                    echo $this->Form->label('Appointment Date');
                    echo $this->Form->control('date');

                    // select the choice of appointment place options
                    echo $this->Form->label('Appointment Place(address)');
                    $options = ['1' => 'Home (Virtual meeting)', '2' => 'At Bookeep company (Face meeting)', '3' => 'Option3', '4' => 'Option4'];
                    echo $this->Form->select('address', $options, ['empty' => true]);

                    echo $this->Form->control('appointment_description',array('type'=>'text','maxlength'=>'100','size'=>'8'));
                ?>
            
            <!-- submit button -->
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
