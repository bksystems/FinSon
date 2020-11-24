<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsBusinessPartnersRol $bpsBusinessPartnersRol
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Bps Business Partners Rol'), ['action' => 'edit', $bpsBusinessPartnersRol->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Bps Business Partners Rol'), ['action' => 'delete', $bpsBusinessPartnersRol->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $bpsBusinessPartnersRol->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Bps Business Partners Rols'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Bps Business Partners Rol'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($bpsBusinessPartnersRol->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($bpsBusinessPartnersRol->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Business Partner Uuid') ?></th>
                    <td><?= h($bpsBusinessPartnersRol->bps_business_partner_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Bps Types Rol Uuid') ?></th>
                    <td><?= h($bpsBusinessPartnersRol->bps_types_rol_uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bpsBusinessPartnersRol->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bpsBusinessPartnersRol->modified) ?></td>
                </tr>
            </table>
        </div>
        </div>
    </div>
</div>
