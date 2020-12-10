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
  
                    <?= $this->Html->link(__('List Bps Business Partners Addresses'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
 
                </ul>
            </div>
        </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <?= __('Add Bps Business Partners Address') ?>
            </div>
            <div class="card-body">
                <?= $this->Form->create($bpsBusinessPartnersAddress) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('bps_types_address', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_business_partner_uuid', [ 'class' => 'form-control form-control-sm']);
                    //echo $this->Form->control('structures_country_uuid', [ 'class' => 'form-control form-control-sm', 'options' => $countries]);
                    echo $this->Form->control('structures_country_uuid',
                                                                    ['id' => 'structures_country_uuid', 
                                                                    'class' => 'form-control form-control-sm',
                                                                    'rel' =>  $this->Url->build(['action' => 'ajaxStateByCountry', 'ext' => 'json']),
                                                                    'options' => $countries]);
                    echo $this->Form->control('structures_state_uuid', ['id' => 'structures_state_uuid', 'class' => 'form-control form-control-sm', 'options' => $states]);
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

<script type="text/javascript">
 
    $(document).ready(function(){
        //$("#states").attr("disabled","disabled");
        $("#structures_country_uuid").change(function(){
            //$("#states").attr("disabled","disabled");
            $("#structures_state_uuid").html("<option>Please wait...</option>");
            var id = $("#structures_country_uuid option:selected").attr('value');
            $url = "<?= $this->Url->build(['controller' => 'bps_business_partners_addresses', 'action' => 'ajax-state-by-country']); ?>";
            $.get($url, {id:id}, function(data){
                $("#structures_state_uuid").removeAttr("disabled");
                $("#structures_state_uuid").html(data);
            });
        });
    }); 
   
</script>


