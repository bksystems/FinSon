<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsGender $bpsGender
 */
?>


<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">bpsGenders</li>
        </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Submenu</div>
                <ul class="list-group list-group-flush">
  
                    <?= $this->Html->link(__('List Bps Genders'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
 
                </ul>
            </div>
        </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <?= __('Add Bps Gender') ?>
            </div>
            <div class="card-body">
                <?= $this->Form->create($bpsGender) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('gender', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('sex', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('gender_full', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('enable', [ 'class' => 'form-control form-control-sm']);
                    ?>
                </fieldset>
                <br>
                <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
