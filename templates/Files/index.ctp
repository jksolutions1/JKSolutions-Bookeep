<p>
    <?php echo[$this->Html->link('Upload File', ['action'=>'upload'], ['class'=>'btn btn-primary']) ?>
</p>
<div class="row">
    <div class="card">
        <img class="card-img-top" src="<?php echo $file->;path; ?> "/>
        <div class="card-body">
            <h4 class="card-title"><?php echo $file->name; ?></h4>
        </div>
    </div>

</div>