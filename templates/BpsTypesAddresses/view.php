<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsTypesAddress $bpsTypesAddress
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Bps Types Address'), ['action' => 'edit', $bpsTypesAddress->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Bps Types Address'), ['action' => 'delete', $bpsTypesAddress->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $bpsTypesAddress->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Bps Types Addresses'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Bps Types Address'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($bpsTypesAddress->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($bpsTypesAddress->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type Address') ?></th>
                    <td><?= h($bpsTypesAddress->type_address) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bpsTypesAddress->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bpsTypesAddress->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $bpsTypesAddress->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
        </div>
    </div>
</div>
