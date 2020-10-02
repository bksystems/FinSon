<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartner $bpsBusinessPartner
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Bps Business Partner'), ['action' => 'edit', $bpsBusinessPartner->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Bps Business Partner'), ['action' => 'delete', $bpsBusinessPartner->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $bpsBusinessPartner->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Bps Business Partners'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Bps Business Partner'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($bpsBusinessPartner->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($bpsBusinessPartner->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Unique Number') ?></th>
                    <td><?= h($bpsBusinessPartner->bps_unique_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Last Name') ?></th>
                    <td><?= h($bpsBusinessPartner->bps_last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Second Last Name') ?></th>
                    <td><?= h($bpsBusinessPartner->bps_second_last_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps First Name') ?></th>
                    <td><?= h($bpsBusinessPartner->bps_first_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Second Name') ?></th>
                    <td><?= h($bpsBusinessPartner->bps_second_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Structures Country') ?></th>
                    <td><?= $bpsBusinessPartner->has('structures_country') ? $this->Html->link($bpsBusinessPartner->structures_country->country, ['controller' => 'StructuresCountries', 'action' => 'view', $bpsBusinessPartner->structures_country->uuid]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Structures State') ?></th>
                    <td><?= $bpsBusinessPartner->has('structures_state') ? $this->Html->link($bpsBusinessPartner->structures_state->state, ['controller' => 'StructuresStates', 'action' => 'view', $bpsBusinessPartner->structures_state->uuid]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Unique Registry Key') ?></th>
                    <td><?= h($bpsBusinessPartner->bps_unique_registry_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Elector Key') ?></th>
                    <td><?= h($bpsBusinessPartner->bps_elector_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Federal Taxpayer Registry') ?></th>
                    <td><?= h($bpsBusinessPartner->bps_federal_taxpayer_registry) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Identification Number') ?></th>
                    <td><?= h($bpsBusinessPartner->bps_identification_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Birthdate') ?></th>
                    <td><?= h($bpsBusinessPartner->bps_birthdate) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bpsBusinessPartner->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bpsBusinessPartner->modified) ?></td>
                </tr>
            </table>
        </div>
        </div>
    </div>
</div>
