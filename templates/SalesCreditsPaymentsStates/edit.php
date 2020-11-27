<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\SalesCreditsPaymentsState $salesCreditsPaymentsState
 */
?>


<div class="row">
    <div class="col-md-12">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">salesCreditsPaymentsStates</li>
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
                                    ['action' => 'delete', $salesCreditsPaymentsState->uuid],
                                    ['confirm' => __('Are you sure you want to delete # {0}?', $salesCreditsPaymentsState->uuid), 'class' => 'list-group-item']
                                ) ?>
                    <?= $this->Html->link(__('List Sales Credits Payments States'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
 
                </ul>
            </div>
        </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <?= __('Edit Sales Credits Payments State') ?>
            </div>
            <div class="card-body">
                <?= $this->Form->create($salesCreditsPaymentsState) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('pyment_state', [ 'class' => 'form-control form-control-sm']);
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
