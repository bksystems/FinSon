<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartnersAddress $bpsBusinessPartnersAddress
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Bps Business Partners Address'), ['action' => 'edit', $bpsBusinessPartnersAddress->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Bps Business Partners Address'), ['action' => 'delete', $bpsBusinessPartnersAddress->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $bpsBusinessPartnersAddress->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Bps Business Partners Addresses'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Bps Business Partners Address'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($bpsBusinessPartnersAddress->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($bpsBusinessPartnersAddress->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Types Address') ?></th>
                    <td><?= h($bpsBusinessPartnersAddress->bps_types_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Business Partner Uuid') ?></th>
                    <td><?= h($bpsBusinessPartnersAddress->bps_business_partner_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Structures Colony Uuid') ?></th>
                    <td><?= h($bpsBusinessPartnersAddress->structures_colony_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address') ?></th>
                    <td><?= h($bpsBusinessPartnersAddress->address) ?></td>
                </tr>
                <tr>
                    <th><?= __('External Number') ?></th>
                    <td><?= h($bpsBusinessPartnersAddress->external_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Internal Number') ?></th>
                    <td><?= h($bpsBusinessPartnersAddress->internal_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Address Between') ?></th>
                    <td><?= h($bpsBusinessPartnersAddress->address_between) ?></td>
                </tr>
                <tr>
                    <th><?= __('Postal Code') ?></th>
                    <td><?= $this->Number->format($bpsBusinessPartnersAddress->postal_code) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bpsBusinessPartnersAddress->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bpsBusinessPartnersAddress->modified) ?></td>
                </tr>
            </table>
        </div>
        </div>
    </div>
</div>
