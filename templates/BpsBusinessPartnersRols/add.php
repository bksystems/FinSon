<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartnersRol $bpsBusinessPartnersRol
 */
?>


<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">bpsBusinessPartnersRols</li>
        </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Submenu</div>
                <ul class="list-group list-group-flush">
  
                    <?= $this->Html->link(__('List Bps Business Partners Rols'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
 
                </ul>
            </div>
        </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <?= __('Add Bps Business Partners Rol') ?>
            </div>
            <div class="card-body">
                <?= $this->Form->create($bpsBusinessPartnersRol) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('bps_business_partner_uuid', [ 'class' => 'form-control form-control-sm', 'options' => $bpsBusinessPartners]);
                    echo $this->Form->control('bps_types_rol_uuid', [ 'class' => 'form-control form-control-sm', 'options' => $bpsTypesRols]);
                    ?>
                </fieldset>
                <br>
                <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
