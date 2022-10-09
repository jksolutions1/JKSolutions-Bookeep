<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 * @var string[]|\Cake\Collection\CollectionInterface $clients
 * @var string[]|\Cake\Collection\CollectionInterface $companies
 */
?>
<h1 class="h3 mb-2 text-gray-800">Edit Appointment</h1>
    <div class = "row">
        <div class = "col-lg-4">
            <?= $this->Form->create($appointment)?>
                <?php
                    echo $this->Form->control('client_id', ['options' => $clients]);
                    echo $this->Form->control('company_id', ['options' => $companies]);

                    echo $this->Form->label('Appointment Date');
                    echo $this->Form->control('date');
                    echo $this->Form->input('date', [
                        'type' => 'dateTime',
                        'required',
                        'default' => date('Y-m-d h:i:sa'),
                        'min' => date('Y-m-d h:i:sa')
                    ]);

                    echo $this->Form->label('Appointment Place(address)');
                    $options = ['1' => 'Home (Virtual meeting)', '2' => 'At Bookeep company (Face meeting)', '3' => 'Option3', '4' => 'Option4'];
                    echo $this->Form->select('address', $options, ['empty' => true]);

                    echo $this->Form->control('appointment_description',array('type'=>'text','maxlength'=>'100','size'=>'8'));
                ?>
            
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
