<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StructuresState $structuresState
 */
?>


<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">structuresStates</li>
        </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Submenu</div>
                <ul class="list-group list-group-flush">
  
                    <?= $this->Html->link(__('List Structures States'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
 
                </ul>
            </div>
        </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <?= __('Add Structures State') ?>
            </div>
            <div class="card-body">
                <?= $this->Form->create($structuresState) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('structures_country_uuid', ['options' => $structuresCountries,  'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('state', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('state_key', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('state_renapo', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('enable', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('description', [ 'class' => 'form-control form-control-sm']);
                    ?>
                </fieldset>
                <br>
                <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
