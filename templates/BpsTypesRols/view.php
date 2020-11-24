<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BpsTypesRol $bpsTypesRol
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Bps Types Rol'), ['action' => 'edit', $bpsTypesRol->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Bps Types Rol'), ['action' => 'delete', $bpsTypesRol->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $bpsTypesRol->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Bps Types Rols'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Bps Types Rol'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($bpsTypesRol->uuid) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($bpsTypesRol->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type Rol') ?></th>
                    <td><?= h($bpsTypesRol->type_rol) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($bpsTypesRol->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($bpsTypesRol->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $bpsTypesRol->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($bpsTypesRol->description)); ?>
                </blockquote>
            </div>
        </div>
        </div>
    </div>
</div>
