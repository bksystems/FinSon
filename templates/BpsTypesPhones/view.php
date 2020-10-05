<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsTypesPhone $bpsTypesPhone
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Bps Types Phone'), ['action' => 'edit', $bpsTypesPhone->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Bps Types Phone'), ['action' => 'delete', $bpsTypesPhone->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $bpsTypesPhone->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Bps Types Phones'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Bps Types Phone'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($bpsTypesPhone->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($bpsTypesPhone->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type Phone') ?></th>
                    <td><?= h($bpsTypesPhone->type_phone) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bpsTypesPhone->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bpsTypesPhone->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $bpsTypesPhone->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
        </div>
        </div>
    </div>
</div>
