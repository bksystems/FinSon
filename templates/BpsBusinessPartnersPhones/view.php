<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartnersPhone $bpsBusinessPartnersPhone
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Bps Business Partners Phone'), ['action' => 'edit', $bpsBusinessPartnersPhone->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Bps Business Partners Phone'), ['action' => 'delete', $bpsBusinessPartnersPhone->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $bpsBusinessPartnersPhone->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Bps Business Partners Phones'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Bps Business Partners Phone'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($bpsBusinessPartnersPhone->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($bpsBusinessPartnersPhone->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Business Partner Uuid') ?></th>
                    <td><?= h($bpsBusinessPartnersPhone->bps_business_partner_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Types Phone Uuid') ?></th>
                    <td><?= h($bpsBusinessPartnersPhone->bps_types_phone_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Number') ?></th>
                    <td><?= h($bpsBusinessPartnersPhone->number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bpsBusinessPartnersPhone->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bpsBusinessPartnersPhone->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Is Primary') ?></th>
                    <td><?= $bpsBusinessPartnersPhone->is_primary ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
        </div>
    </div>
</div>
