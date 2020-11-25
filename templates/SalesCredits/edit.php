<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalesCredit $salesCredit
 */
?>


<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">salesCredits</li>
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
                                    ['action' => 'delete', $salesCredit->uuid],
                                    ['confirm' => __('Are you sure you want to delete # {0}?', $salesCredit->uuid), 'class' => 'list-group-item']
                                ) ?>
                    <?= $this->Html->link(__('List Sales Credits'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
 
                </ul>
            </div>
        </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <?= __('Edit Sales Credit') ?>
            </div>
            <div class="card-body">
                <?= $this->Form->create($salesCredit) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('bps_business_partner_uuid', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('sales_product_uuid', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('init_date_credit', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('end_date_credit', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('sales_products_types_state_uuid', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('requested_amount', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('amount_payable', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('payment', [ 'class' => 'form-control form-control-sm']);
                    ?>
                </fieldset>
                <br>
                <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>
