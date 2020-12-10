<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartnersAddress $bpsBusinessPartnersAddress
 */
?>


<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">bpsBusinessPartnersAddresses</li>
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
                                    ['action' => 'delete', $bpsBusinessPartnersAddress->uuid],
                                    ['confirm' => __('Are you sure you want to delete # {0}?', $bpsBusinessPartnersAddress->uuid), 'class' => 'list-group-item']
                                ) ?>
                    <?= $this->Html->link(__('List Bps Business Partners Addresses'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
 
                </ul>
            </div>
        </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <?= __('Edit Bps Business Partners Address') ?>
            </div>
            <div class="card-body">
                <?= $this->Form->create($bpsBusinessPartnersAddress) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('bps_types_address', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_business_partner_uuid', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('structures_colony_uuid', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('postal_code', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('address', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('external_number', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('internal_number', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('address_between', [ 'class' => 'form-control form-control-sm']);
                    ?>
                </fieldset>
                <br>
                <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
