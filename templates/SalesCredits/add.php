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
  
                    <?= $this->Html->link(__('List Sales Credits'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
 
                </ul>
            </div>
        </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <?= __('Add Sales Credit') ?>
            </div>
            <div class="card-body">
                <?= $this->Form->create($salesCredit) ?>
                <fieldset>
                    <div class="row">
                        <div class="col-sm-5">
                            <?= $this->Form->control('bps_business_partner_uuid', [ 'class' => 'form-control form-control-sm', 'empty' => 'Selecciona cliente', 'options' => $bpsBusinessPartners, 'label' => 'Cliente']);?>
                        </div>
                        <div class="col-sm-1">
                            <?= $this->Form->control('bps_businees_partner_state_cycle', ['class' => 'form-control form-control-sm', 'label' => 'Ciclo', 'disabled']) ?>
                        </div>
                        <div class="col-sm-1">
                            <?= $this->Form->control('bps_businees_partner_is_block', ['class' => 'form-control form-control-sm',
                                                                                       'label' => 'Bloqueo',
                                                                                       'disabled'
                                                                                       ]) ?>
                        </div>
                        <div class="col-sm-1">
                            <?= $this->Form->control('bps_businees_partner_is_customer', ['class' => 'form-control form-control-sm',
                                                                                       'label' => 'Cliente',
                                                                                       'disabled'
                                                                                       ]) ?>
                        </div>
                        <div class="col-sm-1">
                            <?= $this->Form->control('bps_businees_partner_is_active_credit', ['class' => 'form-control form-control-sm',
                                                                                       'label' => 'Activo',
                                                                                       'disabled'
                                                                                       ]) ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-3">
                            <?= $this->Form->control('sales_product_uuid', [ 'class' => 'form-control form-control-sm', 'empty' => 'Selecciona producto', 'options' => $salesProducts, 'label' => 'Producto']); ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $this->Form->control('sales_types_payment_uuid', ['class' => 'form-control form-control-sm', 'label' => 'Tipo frecuencia', 'disabled']) ?>
                        </div>
                        <div class="col-sm-1">
                            <?= $this->Form->control('sales_types_payment_uuid_number', ['class' => 'form-control form-control-sm', 'label' => '# Frec.', 'disabled']) ?>
                        </div>
                        <div class="col-sm-1">
                            <?= $this->Form->control('sales_product_payments', ['class' => 'form-control form-control-sm', 'label' => '# Pagos', 'disabled']) ?>
                        </div>
                        <div class="col-sm-1">
                            <?= $this->Form->control('sales_product_anual_rate', ['class' => 'form-control form-control-sm', 'disabled', 'label' => '% Anual']) ?>
                        </div>
                        <div class="col-sm-1">
                            <?= $this->Form->control('sales_product_month_rate', ['class' => 'form-control form-control-sm', 'disabled', 'label' => '% Mens.']) ?>
                        </div>
                        <div class="col-sm-1">
                            <?= $this->Form->control('sales_product_day_rate', ['class' => 'form-control form-control-sm', 'disabled', 'label' => '% Diaria']) ?>
                        </div>
                        <div class="col-sm-1">
                            <?= $this->Form->control('sales_product_payment_rate', ['class' => 'form-control form-control-sm', 'disabled', 'label' => '% Pago']) ?>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-sm-2">
                            <?= $this->Form->control('requested_amount', [ 'class' => 'form-control form-control-sm']); ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $this->Form->control('amount_payable', [ 'class' => 'form-control form-control-sm', 'disabled']); ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $this->Form->control('payment', [ 'class' => 'form-control form-control-sm', 'disabled']); ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $this->Form->control('init_date_credit', [ 'class' => 'form-control form-control-sm', 'data-target' => "#init-date-credit"]); ?>
                        </div>
                        <div class="col-sm-2">
                            <?= $this->Form->control('end_date_credit', [ 'class' => 'form-control form-control-sm', 'disabled']); ?>
                        </div>
                    </div>
                </fieldset>
                <br>
                <?= $this->Form->button(__('Guardar'), ['class' => 'btn btn-success']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {

        $('#bps-business-partner-uuid').change(function(){
            $.ajax({
                type: 'GET',
                url: "<?= $this->Url->build(['controller' => 'sales-credits', 'action' => 'get-bps-data-json']); ?>" + '/' + $('#bps-business-partner-uuid').val() + '.json',
                dataType: 'json',
                success:function(json){
                    if(json.bp.rol_customer == true){
                        $('#bps-businees-partner-is-customer').val('SI');
                    }else{
                        $('#bps-businees-partner-is-customer').val('NO');  
                    }
                    if(json.bp.rol_blocked == true){
                        $('#bps-businees-partner-is-block').val('SI');
                    }else{
                        $('#bps-businees-partner-is-block').val('NO');
                    }
                    if(json.bp.active_credit > 0){
                        $('#bps-businees-partner-is-active-credit').val('SI');
                    }else{
                        $('#bps-businees-partner-is-active-credit').val('NO');
                    }
                    $('#bps-businees-partner-state-cycle').val(json.bp.active_credit + 1)
                }
            })
        });

        $('#sales-product-uuid').change(function(){
            $.ajax({
                type: 'GET',
                url: "<?= $this->Url->build(['controller' => 'sales-credits', 'action' => 'get-sales-product-data-json']); ?>" + '/' + $('#sales-product-uuid').val() + '.json',
                dataType: 'json',
                success:function(json){
                    $('#sales-product-anual-rate').val(json.product.anual_rate);
                    $('#sales-product-payments').val(json.product.number_payments);
                    $('#sales-types-payment-uuid').val(json.product.sales_types_payment.type_pyment);
                    $('#sales-types-payment-uuid-number').val(json.product.sales_types_payment.paydays);
                    $('#sales-product-month-rate').val(json.product.month_rate);
                    $('#sales-product-day-rate').val(json.product.day_rate);
                    $('#sales-product-payment-rate').val(json.product.payment_rate);
                }
            })
        });

        $('#requested-amount').keyup(function(){
      
            $.ajax({
                type: 'GET',
                url: "<?= $this->Url->build(['controller' => 'sales-credits', 'action' => 'get-calculate-credit-json']); ?>" + '/' +  $('#bps-business-partner-uuid').val() + '/' + $('#sales-product-uuid').val() + '/' + $('#requested-amount').val() + '.json',
                dataType: 'json',
                success:function(json){
                    $('#payment').val((json.calculate.payment).toFixed(2));
                    $('#amount-payable').val((json.calculate.amount_payable).toFixed(2));
                }
            })
        });

        $('#init-date-credit').change(function(){
            $.ajax({
                type: 'GET',
                url: "<?= $this->Url->build(['controller' => 'sales-credits', 'action' => 'get-calculate-credit-end-date-json']); ?>" + '/'  + $('#sales-product-uuid').val() + '/' + $('#init-date-credit').val() + '.json',
                dataType: 'json',
                success:function(json){
                    $('#end-date-credit').val(json.range.end_date);
                }
            })
        });

        $('#init-date-credit').datetimepicker({
            format: 'yyyy-mm-dd',
            minView: 2,
            autoclose: true,
            todayHighlight: true,
            language: 'es'
        });
        
    });
</script>

