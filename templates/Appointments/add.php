<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Appointment $appointment
 * @var \Cake\Collection\CollectionInterface|string[] $clients
 * @var \Cake\Collection\CollectionInterface|string[] $companies
 */
$formTemplate = [
    'button' => '<button{{attrs}}>{{text}}</button>',
    'input' => '<input type="{{type}}" name="{{name}}"class="form-control"{{attrs}}/>',
    'inputContainer' => '<div class="input {{type}}{{required}}">{{content}}</div>',
    'label' => '<label{{attrs}} class="form-label">{{text}}</label>',
    'nestingLabel' => '{{hidden}}<label class="form-check-label"{{attrs}}>{{input}}{{text}}</label>',
    'select' => '<select name="{{name}}"class="form-select"{{attrs}}>{{content}}</select>',
    'textarea' => '<textarea name="{{name}}"class="form-control"{{attrs}}>{{value}}</textarea>',
    'submitContainer' => '<div class="submit">{{content}}</div>',
];
$this->Form->setTemplates($formTemplate);
?>

<h1 class="h3 mb-2 text-gray-800">Add apointment</h1>
<?= $this->Form->create($appointment)?>
    <?php
        echo $this->Form->control('appointment_description');
        echo $this->Form->control('client_id', ['options' => $clients]);
        echo $this->Form->control('company_id', ['options' => $companies]);
        echo $this->Form->control('date');
        echo $this->Form->control('address');
    ?>
  
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>

