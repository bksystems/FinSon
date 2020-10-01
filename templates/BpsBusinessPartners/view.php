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
            <?= $this->Html->link(__('Edit Bps Business Partner'), ['action' => 'edit', $bpsBusinessPartner->uuid], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Bps Business Partner'), ['action' => 'delete', $bpsBusinessPartner->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $bpsBusinessPartner->uuid), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Bps Business Partners'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Bps Business Partner'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="bpsBusinessPartners view content">
            <h3><?= h($bpsBusinessPartner->uuid) ?></h3>
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
                    <th><?= __('Structures Country Uuid') ?></th>
                    <td><?= h($bpsBusinessPartner->structures_country_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Structures State Uuid') ?></th>
                    <td><?= h($bpsBusinessPartner->structures_state_uuid) ?></td>
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
