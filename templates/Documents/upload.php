<?php

?>
<div class="row">
    <div class="col-md-6 offset-md-3">
        <div class = "card">
            <div class="card-body">
                <?php echo $this->Form->create(null, ['enctype'=>'multipart/form-data']); ?>
                <?php
                echo $this->Form->button('Upload', ['class'=>'btn btn-primary']);
                echo $this->Html->link('Back',['action'=>'index'],['class'=>'btn btn-success']);
                echo $this->Form->end();
                ?>
            </div>
        </div>
    </div>
</div>
