<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\StructuresState $structuresState
 */
?>




<div class="row">
    <div class="col-md-2">
        <div class="card">
            <div class="card-header"><?= __('Actions') ?></div>
            <ul class="list-group list-group-flush">
                <?= $this->Html->link(__('Edit Structures State'), ['action' => 'edit', $structuresState->uuid], ['class' => 'list-group-item']) ?>
                <?= $this->Form->postLink(__('Delete Structures State'), ['action' => 'delete', $structuresState->uuid], ['confirm' => __('Are you sure you want to delete # {0}?', $structuresState->uuid), 'class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('List Structures States'), ['action' => 'index'], ['class' => 'list-group-item']) ?>
                <?= $this->Html->link(__('New Structures State'), ['action' => 'add'], ['class' => 'list-group-item']) ?>
            </ul>
        </div>
    </div>
    <div class="col-md-10">
        <div class="card">
        <div class="card-header"><?= h($structuresState->state) ?></div>
        <div class="card-body">
            <table>
                <tr>
                    <th><?= __('Uuid') ?></th>
                    <td><?= h($structuresState->uuid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Structures Country') ?></th>
                    <td><?= $structuresState->has('structures_country') ? $this->Html->link($structuresState->structures_country->country, ['controller' => 'StructuresCountries', 'action' => 'view', $structuresState->structures_country->uuid]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('State') ?></th>
                    <td><?= h($structuresState->state) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Key') ?></th>
                    <td><?= h($structuresState->state_key) ?></td>
                </tr>
                <tr>
                    <th><?= __('State Renapo') ?></th>
                    <td><?= h($structuresState->state_renapo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($structuresState->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($structuresState->modified) ?></td>
                </tr>
                <tr>
                    <th><?= __('Enable') ?></th>
                    <td><?= $structuresState->enable ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Description') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($structuresState->description)); ?>
                </blockquote>
            </div>
        </div>
        </div>
    </div>
</div>
