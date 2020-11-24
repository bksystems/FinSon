<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartnersPhone $bpsBusinessPartnersPhone
 */
?>


<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">bpsBusinessPartnersPhones</li>
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
                                    ['action' => 'delete', $bpsBusinessPartnersPhone->uuid],
                                    ['confirm' => __('Are you sure you want to delete # {0}?', $bpsBusinessPartnersPhone->uuid), 'class' => 'list-group-item']
                                ) ?>
                    <?= $this->Html->link(__('List Bps Business Partners Phones'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
 
                </ul>
            </div>
        </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <?= __('Edit Bps Business Partners Phone') ?>
            </div>
            <div class="card-body">
                <?= $this->Form->create($bpsBusinessPartnersPhone) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('bps_business_partner_uuid', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_types_phone_uuid', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('number', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('is_primary', [ 'class' => 'form-control form-control-sm']);
                    ?>
                </fieldset>
                <br>
                <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
