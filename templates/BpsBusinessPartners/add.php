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
  
                    <?= $this->Html->link(__('List Bps Business Partners'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
 
                </ul>
            </div>
        </div>
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <?= __('Add Bps Business Partner') ?>
            </div>
            <div class="card-body">
                <?= $this->Form->create($bpsBusinessPartner) ?>
                <fieldset>
                    <div class="row">
                    <div class="col-md-6">
                    <?php
                    echo $this->Form->control('bps_unique_number', [ 'class' => 'form-control form-control-sm', 'value' => $number_prev_bps, 'disabled']);
                    echo $this->Form->control('bps_last_name', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_second_last_name', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_first_name', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_second_name', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_birthdate', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_gender_uuid', [ 'class' => 'form-control form-control-sm', 'options' => $bpsGenders]);
                    ?>
                    </div>
                    <div class="col-md-6">
                    <?php
                    echo $this->Form->control('structures_country_uuid', ['options' => $structuresCountries,  'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('structures_state_uuid', ['options' => $structuresStates,  'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_unique_registry_key', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_elector_key', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_federal_taxpayer_registry', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_identification_number', [ 'class' => 'form-control form-control-sm']);
                    echo $this->Form->control('bps_age', [ 'class' => 'form-control form-control-sm', 'disabled']);
                    ?>
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

    function calculate_data(){
        $url_initial_path = "<?= $this->Url->build(['controller' => 'bps-business-partners', 'action' => 'calculate-personal-data']); ?>";
        $f_lname = $('#bps-last-name').val();
        $s_lname = $('#bps-second-last-name').val();
        $f_name = $('#bps-first-name').val();
        $s_name = $('#bps-second-name').val();
        $birthdate = $('#bps-birthdate').val();
        $gender = $('#bps-gender-uuid').val();
        $state = $('#structures-state-uuid').val();
        if(!$f_lname){
            $f_lname = 'XX';
        }
        if(!$s_lname){
            $s_lname = 'XX';
        }
        if(!$f_name){
            $f_name = 'XX';
        }
        if(!$s_name){
            $s_name = 'XX';
        }
        if(!$birthdate){
            $birthdate = '1900-01-01';
        }
        if(!$gender){
            $gender = 'X';
        }
        if(!$state){
            $state = 'XX';
        }
        $parameters = '/' + $f_lname + '/' + $s_lname + '/' + $f_name + '/' +  $s_name + '/' +  $birthdate + '/' + $gender + '/' + $state;
        $.ajax({
            type: 'GET',
            url: $url_initial_path + $parameters + '.json',
            dataType: 'json',
            success:function(json){
                $('#bps-age').val(json.age);
                $('#bps-unique-registry-key').val(json.data_curp);
                $('#bps-federal-taxpayer-registry').val(json.data_rfc);
            }
        });
    }

    $(document).ready(function() {
        $('#bps-last-name').keyup(function(){
            calculate_data();
        });
        $('#bps-second-last-name').keyup(function(){
            calculate_data();
        });
        $('#bps-first-name').keyup(function(){
            calculate_data();
        });
        $('#bps-second-name').keyup(function(){
            calculate_data();
        });
        $('#bps-birthdate').change(function() {
            calculate_data();
        });
        $('#bps-gender-uuid').on('change', function() {
            calculate_data();
        });
        $('#structures-state-uuid').on('change', function() {
            calculate_data();
        });
    });
</script>