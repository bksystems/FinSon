<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartner $bpsBusinessPartner
 */
?>


<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">bpsBusinessPartners</li>
        </ol>
        </nav>
    </div>
</div>

<div class="row">
    <div class="col-md-2">
        <div class="card" style="font-size:14px;">
            <div class="card-header">Submenu</div>
                <ul class="list-group list-group-flush">
  
                    <?= $this->Form->postLink(
                                    __('Eliminar'),
                                    ['action' => 'delete', $bpsBusinessPartner->uuid],
                                    ['confirm' => __('Are you sure you want to delete # {0}?', $bpsBusinessPartner->uuid), 'class' => 'list-group-item']
                                ) ?>
                    <?= $this->Html->link(__('List Bps Business Partners'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
 
                </ul>
            </div>
        </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <?= __('Edit Bps Business Partner') ?>
            </div>
            <div class="card-body">
                <?= $this->Form->create($bpsBusinessPartner) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('bps_unique_number', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_last_name', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_second_last_name', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_first_name', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_second_name', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_birthdate', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('structures_country_uuid', ['options' => $structuresCountries,  'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('structures_state_uuid', ['options' => $structuresStates,  'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_unique_registry_key', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_elector_key', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_federal_taxpayer_registry', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_identification_number', [ 'class' => 'form-control form-control-sm']);
                    ?>
                </fieldset>
                <br>
                <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
