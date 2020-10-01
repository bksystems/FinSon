<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartner $bpsBusinessPartner
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Bps Business Partners'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bpsBusinessPartners form content">
            <?= $this->Form->create($bpsBusinessPartner) ?>
            <fieldset>
                <legend><?= __('Add Bps Business Partner') ?></legend>
                <?php
                    echo $this->Form->control('bps_unique_number', ['value' => $number_prev_bps, 'disabled']);
                    echo $this->Form->control('bps_last_name');
                    echo $this->Form->control('bps_second_last_name');
                    echo $this->Form->control('bps_first_name');
                    echo $this->Form->control('bps_second_name');
                    echo $this->Form->control('bps_birthdate');
                    echo $this->Form->control('structures_country_uuid', ['options' => $options_countries]);
                    echo $this->Form->control('structures_state_uuid', ['options' => $options_states]);
                    echo $this->Form->control('bps_unique_registry_key');
                    echo $this->Form->control('bps_elector_key');
                    echo $this->Form->control('bps_federal_taxpayer_registry');
                    echo $this->Form->control('bps_identification_number');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
